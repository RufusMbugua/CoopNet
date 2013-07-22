

	<section class="tiles">
		

		<section class="two">
			<h3>Report Violation</h3>
			<div class="well">
				<form action="<?php echo base_url().'c_front/reg_violation'?>" method="post">
				<table class="table table-striped">
					<tr>
						<td><label>Farmer : </label></td>
						<td><input type="text" name="farmer" /></td>
						
					</tr>
					<tr>
						<td><label>Certification Officer : </label></td>
						<td><select name="cofficer">
							<option selected="selected"> -- Select Certification Officer -- </option>
							<?php
								foreach ($cofficer as $cofficer) {
							?>
							<option value="<?php echo $cofficer['officerid'];?>"><?php echo $cofficer['officerfirstname'].' '.$cofficer['officerlastname']; ?></option>
							<?php } ?>
						</select></td>
						
					</tr>
					<tr>
						<td><label>Violation : </label></td>
						<td><input type="text" name="violation" /></td>
						
					</tr>
					<tr>
						<td><label>Violation Explaination : </label></td>
						<td><textarea name="explain"> </textarea></td>
						
					</tr>
					<tr>
						<td><label>Independence Verification : </label></td>
						<td><input type="text" name="independence" /></td>
						
					</tr>
					<tr>
						<td><label>Place of Violation : </label></td>
						<td><input type="text" name="pov" /></td>
						
					</tr>
					<tr>
						<td><label>Date of Violation : </label></td>
						<td><input type="text" name="dov" /></td>
						
					</tr>
					<tr>
						<td><label>Field Suppervisor : </label></td>
						<td><select name="fos">
							<option selected="selected"> -- Select Supervisor -- </option>
							<?php
								foreach ($sup as $sup) {
							?>
							<option value="<?php echo $sup['officerid'];?>"><?php echo $sup['officerfirstname'].' '.$sup['officerlastname']; ?></option>
							<?php } ?>
						</select></td>
						
					</tr>
					<tr>
						<td><label>Supervision Date : </label></td>
						<td><input type="text" name="sd" /></td>
						
					</tr>
					<tr>
						<td><label>Comments : </label></td>
						<td><textarea name="comments"></textarea></td>
						
					</tr>
					
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-primary" value="Violation Report" /></td>
					</tr>
				</table>
				</form>
			</div>
		</section>
	</section>


