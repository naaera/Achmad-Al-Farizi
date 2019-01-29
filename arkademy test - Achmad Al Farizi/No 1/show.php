<?php

class show {
	public function show1($data){
		$name = $data['name'];
		$address = $data['address'];
		$hobby = $data['hobby'];
		$ismarried = $data['ismarried'];
		$level = $data['level'];
		$schools = new schools();
		if ($level == "highschool"){
			$schools->highschool = $data['school'];
		} else {
			$schools->university = $data['school'];
		}
		$skillss = new skillss();
		$skillss->skl = $data['skills'];
		
		$json['name'] = $name;
		$json['address'] = $address;
		$json['hobby'] = $hobby;
		$json['ismarried'] = $ismarried;
		$json['school'] = $schools;
		$json['skills'] = $skillss;
		
		echo json_encode($json);
	}
}

$ctrl = new show();
if(isset($_GET['act'])){
    if($_GET['act'] == "add"){
		$ctrl->show1($_POST);
    }
}

class schools {
	var $highschool, $university;
}

class skillss {
	var $skl;
}
?>