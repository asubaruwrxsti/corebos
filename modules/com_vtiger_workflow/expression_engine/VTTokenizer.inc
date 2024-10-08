<?php
/*+*******************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ******************************************************************************/
class VTExpressionToken {

	public function __construct($label) {
		$this->label = $label;
	}
}

function _vt_processtoken_id($token) {
	return $token;
}

function _vt_processtoken_symbol($token) {
	return new VTEXpressionSymbol($token);
}

class VTExpressionTokenizer {

	public function __construct($expr, $entity = null) {
		global $default_charset;

		if ($entity) {
			$expr = $this->recursiveExpressionHandler($expr, $entity);
		}

		$tokenTypes = array(
			"SPACE" => array('\s+', '_vt_processtoken_id'),
			"SYMBOL" => array('[a-zA-Z][\w]*', '_vt_processtoken_symbol'),
			"ESCAPED_SYMBOL" => array('?:`([^`]+)`', '_vt_processtoken_symbol'),
			//"STRING" => array('?:(?:"((?:\\\\"|[^"])+)"|'."'((?:\\\\'|[^'])+)')", 'stripcslashes'),
			//"STRING" => array('?:"((?:\\\\"|[^"])+)"', 'stripcslashes'),
			"STRING" => array("?:'((?:\\\\'|[^'])+)*'", 'stripcslashes'),
			"FLOAT" => array('\d*[.]\d+', 'floatval'),
			"INTEGER" => array('\d+', 'intval'),
			'OPERATOR' => array('[+]|[-]|[*]|>=|<=|[<]|[>]|==|!=|\/', '_vt_processtoken_symbol'),
			// NOTE: Any new Operator added should be updated in VTParser.inc::$precedence and operation at VTExpressionEvaluater
			'OPEN_BRACKET' => array('[(]', '_vt_processtoken_symbol'),
			'CLOSE_BRACKET' => array('[)]', '_vt_processtoken_symbol'),
			'COMMA' => array('[,]', '_vt_processtoken_symbol'),
			"REFERENCE" => array('\$\((\w+) : \(([_\w]+)\) (\w+)\)', '_vt_processtoken_symbol'),
		);
		$tokenReArr = array();
		$tokenNames = array();
		$this->tokenTypes = $tokenTypes;
		foreach ($tokenTypes as $tokenName => $code) {
			list($re, $processtoken) = $code;
			$tokenReArr[] = '('.$re.')';
			$tokenNames[] = $tokenName;
		}
		$this->tokenNames = $tokenNames;
		$tokenRe = '/'.implode('|', $tokenReArr).'/';
		$this->EOF = new VTExpressionToken("EOF");
		$matches = array();
		$expr = html_entity_decode($expr, ENT_QUOTES, $default_charset);
		preg_match_all($tokenRe, $expr, $matches, PREG_SET_ORDER);
		if (strpos($expr, "''")) {
			foreach ($matches as &$match) {
				foreach ($match as $value) {
					if (count($match) == 1 && $value == "''") {
						$match[] = '';
						$match[] = '';
						$match[] = '';
						$match[] = '';
					}
				}
			}
		}
		$this->matches = $matches;
		$this->idx = 0;
	}

	public function nextToken() {
		$matches = $this->matches;
		$idx = $this->idx;
		if ($idx == count($matches)) {
			return $this->EOF;
		} else {
			$match = $matches[$idx];
			$this->idx = $idx + 1;
			$i=1;
			$nummatch = count($match);
			while ($match[$i] == null && $i < $nummatch-1) {
				$i+=1;
			}
			$tokenName = $this->tokenNames[$i-1];
			$token = new VTExpressionToken($tokenName);
			$token->value = $this->tokenTypes[$tokenName][1]($match[$i]);
			return $token;
		}
	}

	public function recursiveExpressionHandler($expr, $entity) {
		$from = 0;
		$to = 0;
		$level = 0;
		for ($i=0; $i < strlen($expr); $i++) {
			if ($expr[$i] == "{" && $expr[$i + 1] == "{") {
				$level++;
				if ($level == 1) {
					$from = $i;
				}
			} elseif ($expr[$i] == "}" && $expr[$i + 1] == "}") {
				if ($level == 1) {
					$to = $i;
					$internalExpression = substr($expr, $from + 1, $to - $from - 1);
					$parser = new VTExpressionParser(new VTExpressionSpaceFilter(new VTExpressionTokenizer($internalExpression, $entity)));
					$expression = $parser->expression();
					$exprEvaluater = new VTFieldExpressionEvaluater($expression);
					$value = $exprEvaluater->evaluate($entity);
					$expr = substr_replace($expr, $value, $from, ($to - $from) + 2);
					$i = $from;
				}
				$level--;
			}
		}
		return $expr;
	}
}

class VTExpressionSpaceFilter {

	public function __construct($tokens) {
		$this->tokens = $tokens;
	}

	public function nextToken() {
		do {
			$token = $this->tokens->nextToken();
		} while ($token->label == "SPACE");
		return $token;
	}
}
?>