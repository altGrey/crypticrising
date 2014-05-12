<?php
/*	CrypticRising 3D Management System is Copyright 2014 CrypticRising Contributors
	For a listing of the CrypticRising Contributors, see the CONTRIBUTORS Document,
	or visit http://crypticrising.com/CrypticRising_Contributors
	
	CrypticRising 3D Management System is released under Open Source License with
	the Terms of the MIT License. To view the MIT license, see the LICENSE Document,
	or visit http://crypticrising.com/MIT
*/
crypCheck() or die();
//////////////// MIME Type
if(!function_exists('mime_content_type')) {

    function mime_content_type($filename) {

        $mime_types = array(

            'txt' => 'text/plain',
            'htm' => 'text/html',
            'html' => 'text/html',
            'php' => 'text/html',
            'css' => 'text/css',
            'js' => 'application/javascript',
            'json' => 'application/json',
            'xml' => 'application/xml',
            'swf' => 'application/x-shockwave-flash',
            'flv' => 'video/x-flv',

            // images
            'png' => 'image/png',
            'jpe' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'jpg' => 'image/jpeg',
            'gif' => 'image/gif',
            'bmp' => 'image/bmp',
            'ico' => 'image/vnd.microsoft.icon',
            'tiff' => 'image/tiff',
            'tif' => 'image/tiff',
            'svg' => 'image/svg+xml',
            'svgz' => 'image/svg+xml',

            // archives
            'zip' => 'application/zip',
            'rar' => 'application/x-rar-compressed',
            'exe' => 'application/x-msdownload',
            'msi' => 'application/x-msdownload',
            'cab' => 'application/vnd.ms-cab-compressed',

            // audio/video
            'mp3' => 'audio/mpeg',
            'qt' => 'video/quicktime',
            'mov' => 'video/quicktime',

            // adobe
            'pdf' => 'application/pdf',
            'psd' => 'image/vnd.adobe.photoshop',
            'ai' => 'application/postscript',
            'eps' => 'application/postscript',
            'ps' => 'application/postscript',

            // ms office
            'doc' => 'application/msword',
            'rtf' => 'application/rtf',
            'xls' => 'application/vnd.ms-excel',
            'ppt' => 'application/vnd.ms-powerpoint',

            // open office
            'odt' => 'application/vnd.oasis.opendocument.text',
            'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
        );

        $ext = strtolower(array_pop(explode('.',$filename)));
        if (array_key_exists($ext, $mime_types)) {
            return $mime_types[$ext];
        }
        elseif (function_exists('finfo_open')) {
            $finfo = finfo_open(FILEINFO_MIME);
            $mimetype = finfo_file($finfo, $filename);
            finfo_close($finfo);
            return $mimetype;
        }
        else {
            return 'application/octet-stream';
        }
    }
}
///////////////// SESSION Security
//Initilize Session
function initSession($session) {
	if (!isset($session['initiated'])) {
		session_regenerate_id();
		$session['initiated'] = true;
	}
	return $session;
}
//Agent Session
function agentSession($session,$agent) {
	$fingerprint = md5($agent . secretPUB);
	if (isset($session['HTTP_USER_AGENT'])) {
		if ($session['HTTP_USER_AGENT'] != $fingerprint) {
			die();
			exit;
		}
	} else {
		$session['HTTP_USER_AGENT'] = $fingerprint;
	}
	return $session;
}
//////////////// TOKENS
function genTOKEN($sesssion) {
if (!isset($session['token'])) {
	$token = md5(uniqid(rand(), true));
	return $token;
}
}
//////////////// $_GET Parameters
function safeGet($get) {
	if (isset($get['com']) AND preg_match("/(\w|\-)+/",$get['com'])) {
		$get['com'] = $get['com'];
	}
	else { $get['com'] = defcom }
	if (isset($get['action']) AND preg_match("/(\w|\-)+/",$get['action'])) {
		$get['action'] = $get['action'];
	}
	if (isset($get['uuid']) AND preg_match("/(\w|\-)+/",$get['uuid'])) {
		$get['uuid'] = $get['uuid'];
	}
	else { $get['action'] = defuuid; }
	if (isset($get['itemid']) AND preg_match("/\d/",$get['itemid']) AND $get['itemid'] < 18446744073709551615) {
		$get['itemid'] = $get['itemid'];
	}
	else { $get['itemid'] = defitemid; }
	if (isset($get['id']) AND preg_match("/\d/",$get['id']) AND $get['id'] < 18446744073709551515) {
		$get['id'] = $get['id'];
	}
	else { $get['id'] = defid; }
	if (isset($get['switch']) AND preg_match("/\w/",$get['switch'])) {
		$get['switch'] = $get['switch'];
	}
	else { $get['switch'] = defswitch; }
	if (isset($get['skip']) AND preg_match("/\d/",$get['skip']) AND $get['skip'] < 18446744073709551515) {
		$get['skip'] = $get['skip'];
	}
	else { $get['skip'] = defskip; }
	if (isset($get['refid']) AND preg_match("/\d/",$get['refid']) AND $get['refid'] < 18446744073709551615) {
		$get['refid'] = $get['refid'];
	}
	else { $get['refid'] = defrefid; }
if (isset($get['ob1id']) AND preg_match("/\d/",$get['ob1id']) AND $get['ob1id'] < 18446744073709551615) {
		$get['ob1id'] = $get['ob1id'];
	}
	else { $get['ob1id'] = defob1id; }
if (isset($get['ob2id']) AND preg_match("/\d/",$get['ob2id']) AND $get['ob2id'] < 18446744073709551615) {
		$get['ob2id'] = $get['ob2id'];
	}
	else { $get['ob2id'] = defob2id; }
	if (isset($get['ob3id']) AND preg_match("/\d/",$get['ob3id']) AND $get['ob3id'] < 18446744073709551615) {
		$get['ob3id'] = $get['ob3id'];
	}
	else { $get['ob3id'] = defob3id; }
if (isset($get['ob4id']) AND preg_match("/\d/",$get['ob4id']) AND $get['ob4id'] < 18446744073709551615) {
		$get['ob4id'] = $get['ob4id'];
	}
	else { $get['ob4id'] = defob4id; }
if (isset($get['ob1']) AND preg_match("/\w/",$get['ob1'])) {
		$get['ob1'] = $get['ob1'];
	}
	else { $get['ob1'] = defob1; }
if (isset($get['ob2']) AND preg_match("/\w/",$get['ob2'])) {
		$get['ob2'] = $get['ob2'];
	}
	else { $get['ob2'] = defob2; }
	if (isset($get['ob3']) AND preg_match("/\w/",$get['ob3'])) {
		$get['ob3'] = $get['ob3'];
	}
	else { $get['ob3'] = defob3; }
if (isset($get['ob4']) AND preg_match("/\w/",$get['ob4'])) {
		$get['ob4'] = $get['ob4'];
	}
	else { $get['ob4'] = defob4; }
	return $get;
}

function runPlugins($itx,$session) {
	
}
