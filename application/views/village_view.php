

	<section class="tiles">
		

		<section class="two">
			<h3>Village Registration</h3>
			<div class="well">
				<form action="<?php echo base_url().'c_front/reg_Villages'?>" method="post">
				<table class="table table-striped">
					<tr>
						<td><label>Village Name : </label></td>
						<td><input type="text" name="vname" /></td>
						
					</tr>
					<tr>
						<td><label>Village Code : </label></td>
						<td><input type="date" name="vcode" /></td>
						
					</tr>
					<tr>
						<td><label>Sub County : </label></td>
						<td><select name="scounty">
							<option selected="selected"> -- Select SubCounty -- </option>
							<?php
								foreach ($county as $county) {
							?>
							<option value="<?php echo $county['subcountyid'];?>"><?php echo $county['subcountyname']; ?></option>
							<?php } ?>
						</select></td>
						
					</tr>
					<tr>
						<td><label>Parish : </label></td>
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
						<td></td>
						<td><input type="submit" class="btn btn-primary" value="Village Registration" /></td>
					</tr>
				</table>
				</form>
			</div>
		</section>
	</section>


