

	<section class="tiles">
		

		<section class="two">
			<h3>Officer Registration</h3>
			<div class="well">
				<form action="<?php echo base_url().'c_front/reg_officer'?>" method="post">
				<table class="table table-striped">
					<tr>
						<td><label>First Name : </label></td>
						<td><input type="text" name="fname" /></td>
						
					</tr>
					<tr>
						<td><label>Last Name : </label></td>
						<td><input type="text" name="lname" /></td>
						
					</tr>
					<tr>
						<td><label>Designation : </label></td>
						<td><select name="designation">
							<option selected="selected"> -- Select Designation -- </option>
							<option value="Supervisor">Supervisor</option>
							<option value="Certification Officer">Certification Officer</option>
							<option value="Agronomist">Agronomist</option>
							<option value="Failitator">Facilitator</option>
						</select></td>
						
					</tr>
					
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-primary" value="Register Officer" /></td>
					</tr>
				</table>
				</form>
			</div>
		</section>
	</section>


