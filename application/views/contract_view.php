

	<section class="tiles">
		

		<section class="two">
			<h3>Farmer Contract Signing</h3>
			<div class="well">
				<form action="<?php echo base_url().'c_front/reg_contract'?>" method="post">
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
						<td><label>Signing Date : </label></td>
						<td><input type="date" name="dater" /></td>
						
					</tr>
					<tr>
						<td><label>Facilitator Name : </label></td>
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
						<td><label>Facilitator date of Signing : </label></td>
						<td><input type="date" name="fdate" /></td>
						
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-primary" value="Sign Contract" /></td>
					</tr>
				</table>
				</form>
			</div>
		</section>
	</section>


