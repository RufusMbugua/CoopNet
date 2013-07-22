

	<section class="tiles">
		

		<section class="two">
			<h3>Excess Delivery </h3>
			<div class="well">
				<form action="<?php echo base_url().'c_front/reg_excess'?>" method="post">
				<table class="table table-striped">
					<tr>
						<td><label>Farmer : </label></td>
						<td><select name="farmer">
							<option selected="selected"> -- Select Farmer -- </option>
							<?php
								foreach ($farmer as $farmer) {
							?>
							<option value="<?php echo $farmer['farmerid'];?>"><?php echo $farmer['farmercode']; ?></option>
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
						<td><label>Reporting Date : </label></td>
						<td><input type="date" name="reporting" /></td>
						
					</tr>
					<tr>
						<td><label>Inspection Date: </label></td>
						<td><input type="date" name="inspection" /></td>
						
					</tr>
					<tr>
						<td><label>Facilitator: </label></td>
						<td><select name="facilitator">
							<option selected="selected"> -- Select Facilitator -- </option>
							<?php
								foreach ($facilitator as $facilitator) {
							?>
							<option value="<?php echo $facilitator['officerid'];?>"><?php echo $facilitator['officerfirstname'].' '.$facilitator['officerlastname']; ?></option>
							<?php } ?>
						</select></td>
						
					</tr>
					<tr>
						<td><label>Reasons for Excess Delivery: </label></td>
						<td><input type="text" name="excess" /></td>
						
					</tr>
					<tr>
						<td><label>Reason for Excess Delivery Valid: </label></td>
						<td><select name="valid">
							<option>-- Options --</option>
							<option value="1"> Yes </option>
							<option value="0"> No</option>
						</select></td>
						
					</tr>
					<tr>
						<td><label>Risks: </label></td>
						<td><select name="risks">
							<option>-- Options --</option>
							<option value="1"> Yes </option>
							<option value="0"> No</option>
						</select></td>
						
					</tr>
					<tr>
						<td><label>Action Taken : </label></td>
						<td><textarea name="action"></textarea></td>
						
					</tr>
					<tr>
						<td><label>Excess production Acceptable: </label></td>
						<td><select name="accept">
							<option>-- Options --</option>
							<option value="1"> Yes </option>
							<option value="0"> No</option>
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


