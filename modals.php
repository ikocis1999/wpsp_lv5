<?php

$sModalID = $_GET['modal_id'];

switch($sModalID)
{
	case 'add_new_employee':
		echo
			'<div class="modal-header" style="background-color:#00acac">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" style="color:white"> Title</h4>
			</div>			
			<div class="modal-body">
				<form class="form-horizontal">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3">Prezime</label>
						<div class="col-md-8">
							<input 	id="inptFirstName" data-parsley-required="true" type="text" placeholder="Unesite prezime" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3">Ime</label>
						<div class="col-md-8">
							<input 	id="inptLastName" data-parsley-required="true" type="text" placeholder="Unesite ime" class="form-control" >
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3">Ime</label>
						<div class="col-md-8">
							<input 	id="inptBirthDate" data-parsley-required="true" type="text" placeholder="Unesite datum rodenja" class="form-control" >
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3">Ime</label>
						<div class="col-md-8">
							<input 	id="inptGender" data-parsley-required="true" type="text" placeholder="Unesite spol" class="form-control" >
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3">Ime</label>
						<div class="col-md-8">
							<input 	id="inptHireDate" data-parsley-required="true" type="text" placeholder="Unesite datum zaposljavanja" class="form-control" >
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success btn-s" onclick="SaveNewEmployee()">Spremi</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
			</div>';
	break;

	case 'add_new_department':
		echo
			'<div class="modal-header" style="background-color:#00acac">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" style="color:white"> Title</h4>
			</div>			
			<div class="modal-body">
				<form class="form-horizontal">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3">Ime</label>
						<div class="col-md-8">
							<input 	id="inptDeptName" data-parsley-required="true" type="text" placeholder="Unesite ime odjela" class="form-control">
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success btn-s" onclick="SaveNewDepartment()">Spremi</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
			</div>';
	break;

	case 'edit_employee':
		echo
			'<div class="modal-header" style="background-color:#00acac">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" style="color:white"> Title</h4>
			</div>			
			<div class="modal-body">
				<form class="form-horizontal">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3">Ime</label>
						<div class="col-md-8">
							<input 	id="inptFirstName" data-parsley-required="true" type="text" placeholder="Unesite ime" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3">Prezime</label>
						<div class="col-md-8">
							<input 	id="inptLastName" data-parsley-required="true" type="text" placeholder="Unesite prezime" class="form-control" >
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3">Datum zaposljavanja</label>
						<div class="col-md-8">
							<input 	id="inptHireDate" data-parsley-required="true" type="text" placeholder="Unesite datum zaposljavanja" class="form-control" >
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success btn-s" onclick="SaveNewEmployee()">Spremi</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
			</div>';
	break;

	case 'edit_department':
		echo
			'<div class="modal-header" style="background-color:#00acac">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" style="color:white"> Title</h4>
			</div>			
			<div class="modal-body">
				<form class="form-horizontal">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3">Ime</label>
						<div class="col-md-8">
							<input 	id="inptDeptName" data-parsley-required="true" type="text" placeholder="Unesite ime odjela" class="form-control">
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success btn-s" onclick="SaveNewDepartment()">Spremi</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
			</div>';
	break;
}
?>