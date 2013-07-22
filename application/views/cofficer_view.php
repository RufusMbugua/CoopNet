

	<section class="tiles">
		

		<section class="two">
			<h3>Certification Officer Registration</h3>
			<div class="well">
				<form action="<?php echo base_url().'c_front/reg_cert'?>" method="post">
				<table class="table table-striped">
					<tr>
						<td><label>Agronomist : </label></td>
						<td>
						<select name="certification">
							<option selected="selected"> -- Select Certification Officer -- </option>
							<?php
								foreach ($cofficer as $cofficer) {
							?>
							<option value="<?php echo $cofficer['officerid'];?>"><?php echo $cofficer['officerfirstname'].' '.$cofficer['officerlastname']; ?></option>
							<?php } ?>
						</select></td>

					</tr>
					<tr>
						<td><label>Date of Assigned : </label></td>
						<td><input type="date" name="dater" /></td>
						
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-primary" value="Register Agronomist" /></td>
					</tr>
				</table>
				</form>
			</div>
		</section>
	</section>


