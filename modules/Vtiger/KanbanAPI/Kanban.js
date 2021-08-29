function kanbanRefresh(kanbanID) {
	let kbinfo = window[kanbanID+'Info'];
	for (const lane in kbinfo.lanes){
		kanbanGetBoardItems(kanbanID, lane, kbinfo);
	}
}

function kanbanGetBoardItems(kanbanID, lane, kbinfo) {
	kbinfo.lanename = lane;
	let boardid = kbinfo.lanes[lane].id;
	let kbinfostr = '&boardinfo=' + encodeURIComponent(JSON.stringify(kbinfo));
	fetch(
		'index.php?module=Utilities&action=UtilitiesAjax&file=KanbanAPI&method=getBoardItemsFormatted',
		{
			method: 'post',
			headers: {
				'Content-type': 'application/x-www-form-urlencoded; charset=UTF-8'
			},
			credentials: 'same-origin',
			body: '&'+csrfMagicName+'='+csrfMagicToken+kbinfostr+'&kbmodule='+kbinfo.module
		}
	).then(response => response.json()).then(response => {
		if (response) {
			response.forEach(tile => {
				window[kanbanID].addElement(boardid, {
					title: tile
				});
			});
			kanbanApplyCustomCSS(kanbanID);
		}
	});
}

// Custom CSS
function kanbanApplyCustomCSS(kanbanID) {
	document.getElementById(kanbanID).querySelectorAll('.tooltip').forEach(element => element.style.position='absolute');
	document.querySelectorAll('.slds-tile .slds-grid ul').forEach(element => element.classList.add('small'));
}

function kanbanSetupInfiniteScroll(kanbanID) {
	const options = {};

	const callback = entries => {
		if (entries[0].isIntersecting) {
			kanbanRefresh(kanbanID);
			window[kanbanID+'Info'].currentPage++;
		}
	}

	var observer = new IntersectionObserver(callback, options);
	observer.observe(document.getElementById(kanbanID+'Scroll'));
}