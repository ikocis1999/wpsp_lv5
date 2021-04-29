$(document).ready(function ()
{
	LoadEmployees();
	//GetModal('http://localhost/wpsp/modals.php?modal_id=add_new_employee');
});

function LoadEmployees()
{
	$.ajax(
	{
		url:'json.php?json_id=get_all_employees',
		type:'GET',
		success:function (oData)
		{
			$('.table tbody').empty();
			for(var i=0; i<oData.length; i++)
			{
				var sTr = 	'<tr>'+
								'<td>'+oData[i].emp_no+'</td>'+
								'<td>'+oData[i].birth_date+'</td>'+
								'<td>'+oData[i].first_name+'</td>'+
								'<td>'+oData[i].last_name+'</td>'+
								'<td>'+oData[i].gender+'</td>'+
								'<td>'+oData[i].hire_date+'</td>'+
								'<td><span class="glyphicon glyphicon-pencil" onclick="GetModal(\'modals.php?modal_id=edit_employee&employee_id='+oData[i].emp_no+'\')" aria-hidden="true"></span></td>'+
								'<td><span class="glyphicon glyphicon-trash" onclick="GetModal(\'modals.php?modal_id=delete_employee&employee_id='+oData[i].emp_no+'\')"aria-hidden="true"></span></td>'+
							'</tr>';
				$('.table tbody').append(sTr);

				console.log(oData[i].first_name)
			}
		}
	})
};


function SaveNewEmployee()
{
	$.ajax({
	    url: 'action.php',
	    type: 'POST',
	    dataType: "html",
	    data:
	    {
			action_id:'add_new_employee',
			first_name: $('#inptFirstName').val(),
			last_name: $('#inptLastName').val(),
			birth_date: $('#inptBirthDate').val(),
			gender: $('#inptGender').val(),
			hire_date: $('#inptHireDate').val()
	    },
	    success: function (oData)
	    {
			$("#modals").modal('hide');
			LoadEmployees();
	    },
	    error: function (XMLHttpRequest, textStatus, exception) {
	        console.log("Ajax failure\n");
	    },
	    async: true
	});
}

function UpdateEmployee()
{
	$.ajax({
	    url: 'action.php',
	    type: 'POST',
	    dataType: "html",
	    data:
	    {
			action_id:'edit_employee',
			first_name: $('#inptFirstName').val(),
			last_name: $('#inptLastName').val(),
			birth_date: '',
			gender: '',
			hire_date: $('#inptDZ').val()
	    },
	    success: function (oData)
	    {
			$("#modals").modal('hide');
			LoadEmployees();
	    },
	    error: function (XMLHttpRequest, textStatus, exception) {
	        console.log("Ajax failure\n");
	    },
	    async: true
	});
}