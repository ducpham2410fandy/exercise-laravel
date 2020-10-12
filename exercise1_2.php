<?php
	// create a function that check file
	function checkValidString($s){
	if(strpos($s,"restaurant")==true && strpos($s,"book")== false)
	return true;
	else if (strpos($s,"book")==true && strpos($s,"restaurant")== false)
	return true;
	else return false;
	}
	$check1 = fopen("file1.txt","r") or die("no file is available to check");
	$check2 = fopen("file2.txt","r") or die("no file is available to check");
	$mycheck1 = fread($check1,filesize("file1.txt"));
	$mycheck2 = fread($check2,filesize("file2.txt"));
	$count1 = "0" ;
	$count2 = "0" ;
	$char =".";
	// function account the length of strings
	for ($i="0"; $i<strlen($mycheck1);$i++){
	if(substr($mycheck1,$i,1) == $char){ 
		$count1=$count1+1;
		}
	}
	for ($a="0"; $a<strlen($mycheck1);$a++){
	if(substr($mycheck2,$a,1) == $char){ 
		$count2=$count2+1;
		}
	}
	if (checkValidString($mycheck1)) 
		{echo "chuoi hop le. chuoi bao gom ".$count1." cau<br> ";
		}
	else{echo "chuoi khong hop le <br>";};
	if (checkValidString($mycheck2)) {
		echo "chuoi hop le. chuoi bao gom ".$count2." cau ";
	}
	else{echo "chuoi khong hop le";}
	fclose($check1);
	fclose($check2);

?>