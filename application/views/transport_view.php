

	<section class="tiles">
		

		<section class="two">
			<h3>Transport Declaration</h3>
			<div class="well">
				<form action="<?php echo base_url().'c_front/reg_Transport'?>" method="post">
				<table class="table table-striped">
					<tr>
						<td><label>Date : </label></td>
						<td><input type="text" name="dater" /></td>
						
					</tr>
					<tr>
						<td><label>Vehicle Registration : </label></td>
						<td><input type="date" name="vregistration" /></td>
						
					</tr>
					<tr>
						<td><label>Loading Site: </label></td>
						<td><input type="text" name="lsite" /></td>
						
					</tr>
					<tr>
						<td><label>Destination : </label></td>
						<td><input type="date" name="destination" /></td>
						
					</tr>
					<tr>
						<td><label>Commodity : </label></td>
						<td><input type="date" name="commodity" /></td>
						
					</tr>
					<tr>
						<td><label>Tonnage : </label></td>
						<td><input type="date" name="tonnage" /></td>
						
					</tr>
					<tr>
						<td><label>Supervisor : </label></td>
						<td><select name="supervisor">
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
						<td><input type="date" name="sdate" /></td>
						
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


