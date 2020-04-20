<?php

function insert_data(){
	include 'dbcon.php';
if(isset($_POST['submit'])){
	$symptoms = $_POST['coronasym'];
	extract($_POST);
	//print_r($_POST);
	$chk = "";
	foreach ($symptoms as $chk1) {
		$chk .= $chk1.",";
	}
	$sql = "INSERT INTO `suspected_user`(`name`, `email`, `mobile`, `symptoms`, `msg`) VALUES ('$name','$email','$mobile','$chk','$msg')";
   					$query = mysqli_query($conn,$sql);
   					if($query){
					?>
					<script>alert("data inserted successfully");</script>
					<?php
					} else{
					?>
					<script>alert("data insertion failed");</script>
					<?php
					}
	return $query;
}
}
?>