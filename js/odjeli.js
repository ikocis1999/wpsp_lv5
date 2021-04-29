/*function LoadDepartments()
{
	//alert("heloo");
};*/
$(document).ready(function ()
{
	LoadDepartments();
	//GetModal('http://localhost/wpsp/modals.php?modal_id=add_new_department');
});

function LoadDepartments()
{
	$.ajax(
	{
		url:'json.php?json_id=get_all_departments',
		type:'GET',
		success:function (oData)
		{
			$('.table tbody').empty();
			for(var i=0; i<oData.length; i++)
			{
				var sTr = 	'<tr>'+
								'<td>'+oData[i].dept_no+'</td>'+
								'<td>'+oData[i].dept_name+'</td>'+
								'<td><span class="glyphicon glyphicon-pencil" onclick="GetModal(\'modals.php?modal_id=edit_department&department_id='+oData[i].dept_no+'\')" aria-hidden="true"></span></td>'+
								'<td><span class="glyphicon glyphicon-trash" onclick="GetModal(\'modals.php?modal_id=delete_department&department_id='+oData[i].dept_no+'\')" aria-hidden="true"></span></td>'+
							'</tr>';
				$('.table tbody').append(sTr);

				console.log(oData[i].dept_name)
			}
		}
	})
};

function SaveNewDepartment()
{
	$.ajax({
	    url: 'action.php',
	    type: 'POST',
	    dataType: "html",
	    data:
	    {
			action_id:'add_new_department',
			dept_name: $('#inptDeptName').val(),
	    },
	    success: function (oData)
	    {
			$("#modals").modal('hide');
			LoadDepartments();
	    },
	    error: function (XMLHttpRequest, textStatus, exception) {
	        console.log("Ajax failure\n");
	    },
	    async: true
	});
}

function UpdateDepartment()
{
	$.ajax({
	    url: 'action.php',
	    type: 'POST',
	    dataType: "html",
	    data:
	    {
			action_id:'edit_department',
			dept_name: $('#inptDeptName').val(),
	    },
	    success: function (oData)
	    {
			$("#modals").modal('hide');
			LoadDepartments();
	    },
	    error: function (XMLHttpRequest, textStatus, exception) {
	        console.log("Ajax failure\n");
	    },
	    async: true
	});
}

	