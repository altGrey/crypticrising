<?php
/*	CrypticRising 3D Management System is Copyright 2014 CrypticRising Contributors
	For a listing of the CrypticRising Contributors, see the CONTRIBUTORS Document,
	or visit http://crypticrising.com/CrypticRising_Contributors
	
	CrypticRising 3D Management System is released under Open Source License with
	the Terms of the MIT License. To view the MIT license, see the LICENSE Document,
	or visit http://crypticrising.com/MIT
*/
crypCheck() or die();
////////////////// Database Settings
define("dbhost","localhost");
define("dbname","crypticone");
define("dbpass","Ksb.1701ncCvc");
define("dbuser","crypticoneuser");
define("dbprfx","cvx-");
////////////////// Path Settings
define("pathPRV","/home/whiterabbitvax/client_outer/ps/");
define("pathPUB","/home/whiterabbitvax/client_outer/public_html/");
////////////////// Language Settings
if((isset($_GET['lang'])) and preg_match("/(\w|_)+/",$_GET['lang']) and file_exists(pathPRV."cnf/localization/".$_GET['lang']."/langCONF.php")) {
define("LANG",$_GET['lang']);
}
else {
define("LANG","english_US");
}
////////////////// Secrets and Salts
define("secretPUB","cypealkdeo34098,,.slkdFoeiu7");
define("secretPRV","skldfjoiweurcrypas;lkdfjKLJ90872354kldfk..");
///////////////// User MID and Data
define("ip",$_SERVER['REMOTE_ADDR']);
///////////////// $_GET Params
$itx['get'] = safeGet($_GET);
//////////////////////////////// ################## Param defaults for _GET
define("defcom","front");
define("defaction","view");
define("defitemid",0);
define("defid",0);
define("defuuid","not");
define("defswitch","not");
define("defskip",0);
define("defob1id",0);
define("defob2id",0);
define("defob3id",0);
define("defob4id",0);
define("defob1","not");
define("defob2","not");
define("defob3","not");
define("defob4","not");
///////////////// TIME
define("unixtime",time());
define("prettytime",getPrettyTime(unixtime));