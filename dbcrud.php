<?php
include('inc/classcrud.php');

//calling class from clascrud.php as object
$crud = new db_class();

if(isset($_POST['save']))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$city = $_POST['city'];
	
	// insert
    $crud->create($fname,$lname,$city);
	// insert
	header("Location: index.php");

	
}


if(isset($_GET['del_id']))
{
	$id = $_GET['del_id'];
	$crud->delete($id);
	header("Location: index.php");
}

if(isset($_POST['update']))
{
	$id = $_POST['userid'];
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$city = $_POST['city'];
	
	$crud->update($fname,$lname,$city,$id);
	header("Location: index.php");
}
?>