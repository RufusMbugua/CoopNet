<section class="tiles">

	<section class="two">
		<h3>Agronomist Registration</h3>
		<div class="well">
			<form action="<?php echo base_url().'c_front/agr_register'?>" method="post">
				<table>
					<tr>
						<td><label>Agronomist : </label></td>
						<td>
						<select name="agronomist">
							<option selected="selected"> -- Select Agronomist -- </option>
							<?php
								foreach ($incident_types as $incident_type) {
							?>
							<option value="<?php echo $incident_type['officerid'];?>"><?php echo $incident_type['officerfirstname'].' '.$incident_type['officerlastname']; ?></option>
							<?php } ?>
						</select></td>

					</tr>
					<tr>
						<td><label>Date of Assigned : </label></td>
						<td>
						<input type="date" name="dater" />
						</td>

					</tr>
					<tr>
						<td></td>
						<td>
						<input type="submit" class="btn btn-primary" value="Register Agronomist" />
						</td>
					</tr>
				</table>
			</form>
		</div>
	</section>
</section>

