

	<section class="tiles">
		

		<section class="two">
			<h3>Purchment Inspection </h3>
			<div class="well">
				<form action="<?php echo base_url().'c_front/reg_purchment'?>" method="post">
				<table class="table table-striped">
					<tr>
						<td><label>Date of Delivery : </label></td>
						<td><input type="date" name="dater" /></td>
						
					</tr>
					<tr>
						<td><label>Parish Code : </label></td>
						<td><select name="parish">
							<option selected="selected"> -- Select Parish -- </option>
							<?php
								foreach ($parish as $parish) {
							?>
							<option value="<?php echo $parish['parishid'];?>"><?php echo $parish['parishname']; ?></option>
							<?php } ?>
						</select></td>
						
					</tr>
					<tr>
						<td><label>Crop : </label></td>
						<td><select name="crop">
							<option selected="selected"> -- Select Crop -- </option>
							<?php
								foreach ($crops as $crops) {
							?>
							<option value="<?php echo $crops['cropid'];?>"><?php echo $crops['cropname']; ?></option>
							<?php } ?>
						</select></td>
						
					</tr>
					<tr>
						<td><label>Moisture Content : </label></td>
						<td><input type="text" name="moisture" /></td>
						
					</tr>
					<tr>
						<td><label>Defect percentage : </label></td>
						<td><input type="text" name="defect" /></td>
						
					</tr>
					<tr>
						<td><label>Status: </label></td>
						<td><select name="status">
							<option>-- Options --</option>
							<option value="1"> Approved</option>
							<option value="0"> Rejected</option>
						</select></td>
						
					</tr>
					<tr>
						<td><label>Reason for Decision : </label></td>
						<td><textarea name="reason"></textarea></td>
						
					</tr>
					<tr>
						<td><label>Graded By : </label></td>
						<td><select name="by">
							<option selected="selected"> -- Select Officer -- </option>
							<?php
								foreach ($officer as $officer) {
							?>
							<option value="<?php echo $officer['officerid'];?>"><?php echo $officer['officerfirstname'].' '.$officer['officerlastname']; ?></option>
							<?php } ?>
						</select></td>
						
					</tr>
					<tr>
						<td><label>Certification Officer : </label></td>
						<td><select name="certification">
							<option selected="selected"> -- Select Certification Officer -- </option>
							<?php
								foreach ($cofficer as $cofficer) {
							?>
							<option value="<?php echo $cofficer['officerid'];?>"><?php echo $cofficer['officerfirstname'].' '.$cofficer['officerlastname']; ?></option>
							<?php } ?>
						</select></td>
						
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-primary" value="Register inspection" /></td>
					</tr>
				</table>
				</form>
			</div>
		</section>
	</section>


