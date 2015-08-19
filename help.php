<?php
/**
 * Chronolabs REST Internet Strata & Fallout API
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
 * @package         strata
 * @since           1.0.3
 * @author          Simon Roberts <wishcraft@users.sourceforge.net>
 * @version         $Id: functions.php 1000 2013-06-07 01:20:22Z wishcraft $
 * @subpackage		api
 * @description		Internet Strata & Fallout API Service
 * @link			Chronolabs API's http://sourceforge.net/projects/chronolabsapis
 * @link			Chronolabs Cooperative http://sourceforge.net/projects/chronolabs
 */

	$pu = parse_url($_SERVER['REQUEST_URI']);
	$source = (isset($_SERVER['HTTPS'])?'https://':'http://').strtolower($_SERVER['HTTP_HOST']).$pu['path'];
	$length = mt_rand(3,7);
	$start = chr(ord("a") + mt_rand(2,23));
	$typal = array("raw" => "RAW Document Output", "html" => "HTML Document Output", "serial" => "Serialisation Document Output", "json" => "JSON Document Output", "xml" => "eXtendable Markup Output");
	$domain = strpos($_SERVER["HTTP_HOST"], "ringwould.com.au")>0?"ringwould.com.au":"labs.coop";
	$business = strpos($_SERVER["HTTP_HOST"], "ringwould.com.au")>0?"Ringwould Farm (Australia)":"Chronolabs Cooperative";	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php 	$servicename = "Internet Strata & Fallout"; 
		$servicecode = "ISF"; ?>
	<meta property="og:url" content="<?php echo (isset($_SERVER["HTTPS"])?"https://":"http://").$_SERVER["HTTP_HOST"]; ?>" />
	<meta property="og:site_name" content="<?php echo $servicename; ?> Open Services API's (With Source-code)"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="rating" content="general" />
	<meta http-equiv="author" content="wishcraft@users.sourceforge.net" />
	<meta http-equiv="copyright" content="Chronolabs Cooperative &copy; <?php echo date("Y")-1; ?>-<?php echo date("Y")+1; ?>" />
	<meta http-equiv="generator" content="wishcraft@users.sourceforge.net" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="//labs.partnerconsole.net/execute2/external/reseller-logo">
	<link rel="icon" href="//labs.partnerconsole.net/execute2/external/reseller-logo">
	<link rel="apple-touch-icon" href="//labs.partnerconsole.net/execute2/external/reseller-logo">
	<meta property="og:image" content="//labs.partnerconsole.net/execute2/external/reseller-logo"/>
	<link rel="stylesheet" href="/style.css" type="text/css" />
	<link rel="stylesheet" href="//css.ringwould.com.au/3/gradientee/stylesheet.css" type="text/css" />
	<link rel="stylesheet" href="//css.ringwould.com.au/3/shadowing/styleheet.css" type="text/css" />
	<title><?php echo $servicename; ?> (<?php echo $servicecode; ?>) Open API || Chronolabs Cooperative (Sydney, Australia)</title>
	<meta property="og:title" content="<?php echo $servicename; ?> API"/>
	<meta property="og:type" content="<?php echo strtolower($servicecode); ?>-api"/>
	<!-- AddThis Smart Layers BEGIN -->
	<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50f9a1c208996c1d"></script>
	<script type="text/javascript">
	  addthis.layers({
		'theme' : 'transparent',
		'share' : {
		  'position' : 'right',
		  'numPreferredServices' : 6
		}, 
		'follow' : {
		  'services' : [
			{'service': 'twitter', 'id': 'ChronolabsCoop'},
			{'service': 'twitter', 'id': 'Cipherhouse'},
			{'service': 'twitter', 'id': 'OpenRend'},
			{'service': 'facebook', 'id': 'Chronolabs'},
			{'service': 'linkedin', 'id': 'founderandprinciple'},
			{'service': 'google_follow', 'id': '105256588269767640343'},
			{'service': 'google_follow', 'id': '116789643858806436996'}
		  ]
		},  
		'whatsnext' : {},  
		'recommended' : {
		  'title': 'Recommended for you:'
		} 
	  });
	</script>
	<!-- AddThis Smart Layers END -->
</head>
<body>
<div class="main">
    <h1><?php echo $servicename; ?> (<?php echo $servicecode; ?>) Open API || Chronolabs Cooperative (Sydney, Australia)</h1>
    <p>This is an API Service for retieving the Internet Strata & Fallout via the sub-layering systems in physics, even though you may not see the physical code running it is meta code that will adapt to the libraries that require it by simply pasting the director in and connecting the variable *.class or *.functions to your existing libraries -- the API inclusing JSON, XML, Serialisation, HTML and RAW outputs.</p>
	<h2>Code API Documentation</h2>
    <p>You can find the phpDocumentor code API documentation at the following path :: <a href="<?php echo $source; ?>docs/" target="_blank"><?php echo $source; ?>docs/</a>. These should outline the source code core functions and classes for the API to function!</p>
    <?php 
    foreach($typal as $mode => $title) {
    ?>
    <h2><?php echo $title; ?></h2>
    <p>This is done with the <em><?php echo $mode; ?>.api</em> extension at the end of the url, you replace the example address with either a domain, an IPv4 or IPv6 address the following example is of calls to the api</p>
    <blockquote>
        <font color="#009900">This is for a complete list of </em>networking strata topologies!</em></font><br/>
        <em><strong><a href="<?php echo $source; ?>v1/strata/<?php echo $mode; ?>.api" target="_blank"><?php echo $source; ?>v1/strata/<?php echo $mode; ?>.api</a></strong></em><br /><br />
        <font color="#009900">This is for a list of </em>networking strata topologies;</em> that have a length of <strong>'<?php echo $length; ?>'</strong></font><br/>
        <em><strong><a href="<?php echo $source; ?>v1/strata/<?php echo $length; ?>/<?php echo $mode; ?>.api" target="_blank"><?php echo $source; ?>v1/strata/<?php echo $length; ?>/<?php echo $mode; ?>.api</a></strong></em><br /><br />
        <font color="#009900">This is for a list of </em>networking strata topologies;</em> that start with the letter <strong>'<?php echo $start; ?>'</strong> - you can have more than one character!</font><br/>
        <em><strong><a href="<?php echo $source; ?>v1/strata/<?php echo $start; ?>/<?php echo $mode; ?>.api" target="_blank"><?php echo $source; ?>v1/strata/<?php echo $start; ?>/<?php echo $mode; ?>.api</a></strong></em><br /><br />
        <font color="#009900">This is for a list of </em>networking strata topologies;</em> that are <strong>'<?php echo $length; ?>'</strong> in length, starting with the letter <strong>'<?php echo $start; ?>'</strong></font><br/>
        <em><strong><a href="<?php echo $source; ?>v1/strata/<?php echo $length; ?>/<?php echo $start; ?>/<?php echo $mode; ?>.api" target="_blank"><?php echo $source; ?>v1/strata/<?php echo $length; ?>/<?php echo $start; ?>/<?php echo $mode; ?>.api</a></strong></em><br /><br />
        <font color="#009900">This is for a a complete list of </em>the regional network topologies that base and key in the networking strata!</em></font><br/>
        <em><strong><a href="<?php echo $source; ?>v1/fallout/<?php echo $mode; ?>.api" target="_blank"><?php echo $source; ?>v1/fallout/<?php echo $mode; ?>.api</a></strong></em><br /><br />
    </blockquote>
    <?php } ?>
    <?php if (file_exists($fionf = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'apis-labs.coop.html')) {
    	readfile($fionf);
    }?>	
    <h2>The Author</h2>
    <p>This was developed by Simon Roberts in 2013 and is part of the Chronolabs System and api's.<br/><br/>This is open source which you can download from <a href="https://sourceforge.net/projects/chronolabsapis/">https://sourceforge.net/projects/chronolabsapis/</a> contact the scribe  <a href="mailto:wishcraft@users.sourceforge.net">wishcraft@users.sourceforge.net</a></p></body>
</div>
</html>
<?php 
