<?php
$datalist = trim(file_get_contents("clientlist.cryp"));
$datalast = trim(file_get_contents("clientlast.cryp"));
$datalistarray = explode(";;",$datalist);
$x = 0;
while(isset($datalistarray[$x]) {
if ($datalistarray[$x] == $datalast) {
	if(isset($datalistarray[$x+1])) {
		header("location: http://".$datalistarray[$x+1]); die(); exit();
	}
	else {
		header("location: http://".$datalistarray[0]); die(); exit();
	}
}
$x++;
}
