

	<section class="tiles">
		

		<section class="two">
			<h3>Farmer Transfer </h3>
			<div class="well">
				<form action="<?php echo base_url().'c_front/reg_transfer'?>" method="post">
				<table class="table table-striped">
					<tr>
						<td><label>Transfered From : </label></td>
						<td><input type="text" name="from" /></td>
						
					</tr>
					<tr>
						<td><label>Crop  : </label></td>
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
						<td><label>Transfer by : </label></td>
						<td><input type="text" name="tby" /></td>
						
					</tr>
					<tr>
						<td><label>Witnessed By: </label></td>
						<td><input type="text" name="wby" /></td>
						
					</tr>
					<tr>
						<td><label>Date Filled: </label></td>
						<td><input type="date" name="dfilled" /></td>
						
					</tr>
					<tr>
						<td><label>Crop Weight: </label></td>
						<td><input type="text" name="cweight" /></td>
						
					</tr>
					<tr>
						<td><label>Moisture Content: </label></td>
						<td><input type="text" name="mcontent" /></td>
						
					</tr>
					<tr>
						<td><label>Witness Date: </label></td>
						<td><input type="text" name="wdate" /></td>
						
					</tr>
					
					
					
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-primary" value="Farmer Transfer" /></td>
					</tr>
				</table>
				</form>
			</div>
		</section>
	</section>


