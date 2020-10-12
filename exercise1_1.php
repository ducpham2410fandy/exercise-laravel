
<?php
	function checkValidString($s){
	if(strpos($s,"restaurant")==true && strpos($s,"book")== false)
	return true;
	else if (strpos($s,"book")==true && strpos($s,"restaurant")== false)
	return true;
	else return false;
	}
	$s="";
	$mycheck1 = fopen("file1.txt","r") or die("no file is available to check");
	$mycheck2 = fopen("file2.txt","r") or die("no file is available to check");
	$count1 = 0 ;
	$count2 = 0 ;
	$char =".";
	
	for ($i=0; $i<strlen($mycheck1);$i++){
	if(substr($mycheck1,$i,1) == $char){ 
		$count1=$count1+1;
		}
	for ($i=0; $i<strlen($mycheck1);$i++){
	if(substr($mycheck2,$i,1) == $char){ 
		$count2=$count2+1;
		}
	if (checkValidString($mycheck1)) 
		{echo "chuoi hop le. chuoi bao gom ".$count1."cau";
		}
	else{echo "chuoi khong hop le";};
	if (checkValidString($mycheck2)) {
		echo "chuoi hop le. chuoi bao gom ".$count2."cau";
	}
	else{echo "chuoi khong hop le";}
	fclose($mycheck1);
	fclose($mycheck2);
?>