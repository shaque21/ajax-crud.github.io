<?php 


  $hostname = "localhost";
  $username = "root";
  $password = "shrosh@n";
  $databaseName = "ajax";

  // connect to mysql database using mysqli
  $connect = mysqli_connect($hostname, $username, $password, $databaseName) or die("Connection failed." . mysqli_connect_error());

 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $email = $_POST['email'];
 $mobile = $_POST['mobile'];


  $query = "INSERT INTO `registration_form`(`first_name`, `last_name`, `email`, `mobile`) VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$mobile}')";

  if(mysqli_query($connect, $query)){
  	echo 1;
  }else {
  	echo 0;
  }
