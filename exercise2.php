<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	class ExerciseString {
		public  $check1;
		public  $check2;
		// read file
		public function readFile($file_name){
			$openFile = fopen($file_name, 'r');
			$read = fread($openFile,500);
			fclose($openFile);
			return $read;
		}
		// check invalid character
		public function checkValidString($s){
			if(strpos($s,"restaurant")!==false && strpos($s,"book")== false)
			{return true;}
			else if (strpos($s,"book")!==false && strpos($s,"restaurant")== false)
			{return true;}
			else return false;
		}
		// write file
		public function writeFile($file){
			 $write = fwrite("result_file.txt",$file);
		}
	}
	//handle string
	class HandleString extends ExerciseString {
		public  $object1;

		function setObject($object){
			$this->object1 = $object;
		} 

		function getObject(){
			return $this->object1;
		}

			
	}

		$pointer = new HandleString;
		$pointer->object1 = $pointer->readFile("file1.txt");
		$pointer -> checkValidString($pointer->object1);
		if($pointer -> checkValidString($pointer->object1) == true )
			{$pointer-> check1 = "hop le";}
		else {$pointer -> check1 = "khong hop le";}
		$pointer->object1 = $pointer->readFile("file2.txt");
		$pointer -> checkValidString($pointer->object1);
		if($pointer -> checkValidString($pointer->object1) == true )
			{$pointer-> check2 = "hop le";}
		else {$pointer -> check2 = "khong hop le";}

		$result = fopen("result_file.txt", "w") or die("Unable to open file!");
		fwrite($result, "check1 la chuoi ".$pointer ->check1."  ");
		fwrite($result, "check2 la chuoi ".$pointer ->check2."<br>");

		echo $pointer->object1;

		
	?>
</body>
</html>