<?php
include "connection.php";


$sActionID="";
if(isset($_POST['action_id']))
{
	$sActionID=$_POST['action_id'];
}

switch ($sActionID) 
{
	case 'add_new_employee':
		$sQuery = "INSERT INTO employees (birth_date, first_name, last_name, gender,
hire_date) VALUES (:birth_date, :first_name, :last_name, :gender, :hire_date)";
		$oStatement = $oConnection->prepare($sQuery);
		$oData = array(
		 'birth_date' => $_POST['birth_date'],
		 'first_name' => $_POST['first_name'],
		 'last_name' => $_POST['last_name'],
		 'gender' => $_POST['gender'],
		 'hire_date' => $_POST['hire_date']
		);
		try
		{
			$oStatement=$oConnection->prepare($sQuery);
			$oStatement->execute($oData);
			echo 1;
		}
		catch(PDOException $error)
		{
			echo $error;
			echo 0;
		}		
		break;
	case 'edit_employee':
		$sQuery = "UPDATE employees SET birth_date=:birth_date, first_name=:first_name, last_name=:last_name, gender=:gender,
hire_date=:hire_date WHERE emp_no=:emp_no";
		$oStatement = $oConnection->prepare($sQuery);
		$oData = array(
		 'emp_no'=>$_POST['emp_no'],
		 'birth_date' => $_POST['birth_date'],
		 'first_name' => $_POST['first_name'],
		 'last_name' => $_POST['last_name'],
		 'gender' => $_POST['gender'],
		 'hire_date' => $_POST['hire_date']
		);
		$oStatement->execute($oData);
		break;
	case 'delete_employee':
		$sQuery = "DELETE FROM employees WHERE emp_no=:emp_no";
		$oStatement = $oConnection->prepare($sQuery);
		$oData = array(
		 'emp_no'=>$_POST['emp_no']
		);	
		$oStatement->execute($oData);
		break;

	case 'add_new_department':
		$sQuery = "INSERT INTO departments (dept_name) VALUES (:dept_name)";
		$oStatement = $oConnection->prepare($sQuery);
		$oData = array(
		 'dept_name' => $_POST['dept_name']
		);
		try
		{
			$oStatement=$oConnection->prepare($sQuery);
			$oStatement->execute($oData);
			echo 1;
		}
		catch(PDOException $error)
		{
			echo $error;
			echo 0;
		}		
		break;

	case 'edit_department':
		$sQuery = "UPDATE departments SET dept_name=:dept_name WHERE dept_no=:dept_no";
		$oStatement = $oConnection->prepare($sQuery);
		$oData = array(
		 'dept_no'=>$_POST['dept_no'],
		 'dept_name' => $_POST['dept_name']
		);
		$oStatement->execute($oData);
		break;
		
	case 'delete_department':
		$sQuery = "DELETE FROM departments WHERE dept_no=:dept_no";
		$oStatement = $oConnection->prepare($sQuery);
		$oData = array(
		 'dept_no'=>$_POST['dept_no']
		);	
		$oStatement->execute($oData);
		break;
}
?>