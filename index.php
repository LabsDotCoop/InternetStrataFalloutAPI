<?php
/**
 * Chronolabs REST API File
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Chronolabs Cooperative http://labs.coop
 * @license         General Public License version 3 (http://labs.coop/briefs/legal/general-public-licence/13,3.html)
 * @package         whois
 * @since           1.1.2
 * @author          Simon Roberts <wishcraft@users.sourceforge.net>
 * @version         $Id: help.php 1000 2013-06-07 01:20:22Z mynamesnot $
 * @subpackage		api
 * @description		Whois API Service REST
 */

	error_reporting(E_ALL);
	ini_set('display_errors', true);
	ini_set('log_errors', true);
	ini_set('memory_limit', '256M');
	include dirname(__FILE__).'/functions.php';

	$help=false;
	if (!isset($_GET['mode']) || empty($_GET['mode'])) {
		$help=true;
	} elseif (isset($_GET['output']) || !empty($_GET['output']) && in_array(trim($_GET['mode']), array('strata', 'fallout'))) {
		$mode = trim($_GET['mode']);
		$output = trim($_GET['output']);
		$length = (isset($_GET['length'])?trim($_GET['length']):0);
		$start = (isset($_GET['start'])?trim($_GET['start']):'');
	} else {
		$help=true;
	}
	
	if ($help==true) {
		if (function_exists("http_response_code"))
			http_response_code(400);
		include dirname(__FILE__).'/help.php';
		exit;
	}
	
	if (function_exists("http_response_code"))
		http_response_code(200);
	
	switch ($mode)
	{
		case "strata":
			$data = newakeGetStrata($length, $start);
			break;
		case "fallout":
			$data = newakeGetFallout();
			break;
	}
	
	switch ($output) {
		default:
			echo '<pre style="font-family: \'Courier New\', Courier, Terminal; font-size: 0.77em;">';
			echo implode(" ", $data);
			echo '</pre>';
			break;
		case 'raw':
			echo implode(" } { ", $data);
			break;
		case 'json':
			header('Content-type: application/json');
			echo json_encode($data);
			break;
		case 'serial':
			header('Content-type: text/html');
			echo serialize($data);
			break;
		case 'xml':
			header('Content-type: application/xml');
			$dom = new XmlDomConstruct('1.0', 'utf-8');
			$dom->fromMixed(array($mode=>$data));
 			echo $dom->saveXML();
			break;
	}
	exit(0);
?>