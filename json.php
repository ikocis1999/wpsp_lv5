<?php
ini_set('memory_limit', '2048M');
header('Content-type: text/json');
header('Content-type: application/json; charset=utf-8');
include "connection.php";

$sJsonID="";
$employee_id="";
$department_id="";

if(isset($_GET['json_id']))
{
	$sJsonID=$_GET['json_id'];
}
if(isset($_GET['employee_id']))
{
	$employee_id=$_GET['employee_id'];
}
if(isset($_GET['department_id']))
{
	$department_id=$_GET['department_id'];
}

$oJson=array();
switch($sJsonID)
{
	case 'get_all_employees':
		$sQuery="SELECT * FROM employees order by emp_no desc LIMIT 50 ";
		$oRecord=$oConnection->query($sQuery);
		
		while($oRow=$oRecord->fetch(PDO::FETCH_BOTH))
		{
			$oEmployee=new Employee(
					$oRow['emp_no'],
					$oRow['birth_date'],
					$oRow['first_name'],
					$oRow['last_name'],
					$oRow['gender'],
					$oRow['hire_date']
				);
			array_push($oJson,$oEmployee);
		}
		break;
	case 'get_all_departments':
		$sQuery="SELECT * FROM departments";
		$oRecord=$oConnection->query($sQuery);
		
		while($oRow=$oRecord->fetch(PDO::FETCH_BOTH))
		{
			$oDepartment=new Department(
					$oRow['dept_no'],
					$oRow['dept_name']
				);
			array_push($oJson,$oDepartment);
		}
		break;
	case 'get_employee_by_id':
		$sQuery="SELECT * FROM employees WHERE emp_no=".$employee_id;
		$oRecord=$oConnection->query($sQuery);
		
		while($oRow=$oRecord->fetch(PDO::FETCH_BOTH))
		{
			$oEmployee=new Employee(
					$oRow['emp_no'],
					$oRow['birth_date'],
					$oRow['first_name'],
					$oRow['last_name'],
					$oRow['gender'],
					$oRow['hire_date']
				);
			array_push($oJson,$oEmployee);
		}
		break;
	case 'get_department_by_id':
		$sQuery="SELECT * FROM departments WHERE dept_no=".$department_id;
		$oRecord=$oConnection->query($sQuery);
		
		while($oRow=$oRecord->fetch(PDO::FETCH_BOTH))
		{
			$oEmployee=new Employee(
					$oRow['dept_no'],
					$oRow['dept_name']
				);
			array_push($oJson,$oDepartment);
		}
		break;
}
echo json_encode($oJson);

?>