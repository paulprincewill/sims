<?php

	require "../../../initialize.php";
	require '../_lib/db.php';

	$x = [];
	$picture = '';//$_POST['picture'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$matric_number = $_POST['matric_number'];
	$department = $_POST['department'];
	$gender = $_POST['gender'];
	$date_of_birth = $_POST['date_of_birth'];

	$db->sql("INSERT INTO students (picture,first_name,last_name, matric_number, department, gender, date_of_birth) VALUES('$picture','$first_name','$last_name' ,'$matric_number' ,'$department' ,'$gender' ,'$date_of_birth')");

	if ($db->isSuccessful) {
		$x['first_name'] = $first_name;
		$x['last_name'] = $last_name;
		$x['matric_number'] = $matric_number;
	} else {

		$x['success'] = false;
		$x['feedback'] = "We encountered an error, please contact admin"; // $db->feedback;

	}

	echo json_encode($x);
