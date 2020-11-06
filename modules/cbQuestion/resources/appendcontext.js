/*************************************************************************************************
 * Copyright 2020 JPL TSolucio, S.L. -- This file is a part of TSOLUCIO coreBOS Customizations.
 * Licensed under the vtiger CRM Public License Version 1.1 (the "License"); you may not use this
 * file except in compliance with the License. You can redistribute it and/or modify it
 * under the terms of the License. JPL TSolucio, S.L. reserves all rights not expressly
 * granted by the License. coreBOS distributed by JPL TSolucio S.L. is distributed in
 * the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. Unless required by
 * applicable law or agreed to in writing, software distributed under the License is
 * distributed on an "AS IS" BASIS, WITHOUT ANY WARRANTIES OR CONDITIONS OF ANY KIND,
 * either express or implied. See the License for the specific language governing
 * permissions and limitations under the License. You may obtain a copy of the License
 * at <http://corebos.org/documentation/doku.php?id=en:devel:vpl11>
 *************************************************************************************************/

function addRowToContextTable() {
	const op = {
		'is': alert_arr.LBL_IS,
		'is not': alert_arr.LBL_IS_NOT,
		'contains': alert_arr.LBL_CONTAINS,
		'does not contain': alert_arr.LBL_DOES_NOT_CONTAIN,
		'equal to': alert_arr.LBL_EQUAL_TO,
		'does not equal': alert_arr.LBL_DOEST_NOT_EQUAL,
		'less than': alert_arr.LBL_LESS_THAN,
		'greater than': alert_arr.LBL_GREATER_THAN,
		'between': alert_arr.LBL_BETWEEN,
		'before': alert_arr.LBL_BEFORE,
		'after': alert_arr.LBL_AFTER,
	};
 	const numrow = document.getElementById('context_rows').rows.length;
 	const tr = document.createElement('tr');
 	tr.id = `row-${numrow}`;
 	const td0 = tr.insertCell(0);
 	td0.innerHTML = `
	<div class="slds-truncate">
		<input type="text" class="slds-input" name="context_variable">
	</div>`;
	const td1 = tr.insertCell(1);
	let operators = '<select name="context_operator" class="slds-select">';
	for (let o in op) {
		operators += `<option value="${o}">${op[o]}</option>`;
	}
	operators += '</select>';
 	td1.innerHTML = `
	<div class="slds-truncate">
		${operators}
	</div>`;
 	const td2 = tr.insertCell(2);
 	td2.innerHTML = `
	<div class="slds-truncate">
		<input type="text" class="slds-input" name="context_value">
	</div>`;
 	const td3 = tr.insertCell(3);
 	td3.innerHTML = `
 	<a onclick="deleteContextRow(${numrow})" id="delete-${numrow}">
 	<svg class="slds-button__icon" aria-hidden="true">
		<use xlink:href="include/LD/assets/icons/utility-sprite/svg/symbols.svg#delete"></use>
	</svg>
	</a>`;
 	document.getElementById('context_rows').appendChild(tr);
}

function deleteContextRow(rowid) {
	const row = document.getElementById(`row-${rowid}`);
	row.parentNode.removeChild(row);
	resetRowId();
}

function resetRowId() {
	const numrow = document.getElementById('context_rows').rows.length;
	let j = 0;
	for (let i = 0; i < numrow + 1; i++) {
		const row = document.getElementById(`row-${i}`);
		const delete_row = document.getElementById(`delete-${i}`);
		if (row) {
			row.id = `row-${j}`;
			delete_row.id = `delete-${j}`;
			delete_row.removeAttribute('onclick');
			delete_row.setAttribute('onclick', `deleteContextRow(${j})`);
			j++;
		}
	}
}

function export_results() {
	const qtype = document.getElementById('qtype').value;
	const qsqlqry = (document.getElementById('sqlquery').checked ? '1' : '0');
	const context_var = document.getElementsByName('context_variable');
	const context_val = document.getElementsByName('context_value');
	const context_operator = document.getElementsByName('context_operator');
	let context_data = Array();
	for (var i = 0; i < context_var.length; i++) {
		const variable = context_var[i].value;
		const value = context_val[i].value;
		const operator = context_operator[i].value;
		context_data.push({
			variable: variable,
			value: value,
			operator: operator,
		});
	}
	const context_variable = {
		condition: document.getElementById('all').checked ? 'and' : 'or',
		context: context_data,
	};
	const bqname = document.getElementById('bqname').value;
	let cbq = JSON.stringify({
		'qname': bqname,
		'qtype': qtype,
		'qmodule': document.getElementById('bqmodule').value,
		'qpagesize': document.getElementById('qpagesize').value,
		'qcolumns': (qsqlqry=='1' ? document.getElementById('bqsql').value : (qtype=='Mermaid' ? document.getElementById('bqwsq').value : getSQLSelect())),
		'qcondition': (qtype=='Mermaid' ? '' : getSQLConditions()),
		'orderby': getSQLOrderBy().substr(9),
		'groupby': getSQLGroupBy().substr(9),
		'typeprops': document.getElementById('qprops').value,
		'sqlquery': qsqlqry,
		'condfilterformat': '0',
		'context_variable': context_variable
	});
	console.log(cbq);
	const evaluatewith = document.getElementById('evaluatewith').value;
	let cbqctx = '';
	if (evaluatewith!=0 && evaluatewith!='') {
		cbqctx = JSON.stringify({
			'RECORDID': evaluatewith,
			'MODULE': document.getElementById('evaluatewith_type').value
		});
	}
	document.getElementById('export_text').innerHTML = mod_alert_arr.Exporting;
	fetch(
		'index.php?module=cbQuestion&action=cbQuestionAjax&actionname=qactions&method=exportBuilderData',
		{
			method: 'post',
			headers: {
				'Content-type': 'application/x-www-form-urlencoded; charset=UTF-8'
			},
			credentials: 'same-origin',
			body: '&'+csrfMagicName+'='+csrfMagicToken+'&cbQuestionRecord='+encodeURIComponent(cbq)+'&cbQuestionContext='+encodeURIComponent(cbqctx)+'&bqname='+bqname
		}
	).then(response => response.json()).then(response => {
		document.getElementById('export_text').innerHTML = mod_alert_arr.export_results;
		window.open(
		  `cache/${response}.csv`,
		  '_blank'
		);
	});
}