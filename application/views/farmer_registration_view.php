

	<section class="tiles">
		

		<section class="two">
			<h3>Farmer Registration</h3>
			<div class="well">
				<form action="<?php echo base_url().'c_front/reg_farmer'?>" method="post">
				<table class="table table-striped">
					<tr>
						<td><label>Village : </label></td>
						<td><select name="village">
							<option selected="selected"> -- Select Officer -- </option>
							<?php
								foreach ($village as $village) {
							?>
							<option value="<?php echo $village['villagecode'];?>"><?php echo $village['villagename']; ?></option>
							<?php } ?>
						</select></td>
						
					</tr>
					<tr>
						<td><label>Farmer Code : </label></td>
						<td><input type="text" name="fcode" /></td>
						
					</tr>
					<tr>
						<td><label>National Id : </label></td>
						<td><input type="text" name="id" /></td>
						
					</tr>
					<tr>
						<td><label>Phone Number: </label></td>
						<td><input type="text" name="pno" /></td>
						
					</tr>
					
					
					
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-primary" value="Register Farmer" /></td>
					</tr>
				</table>
				</form>
			</div>
		</section>
	</section>


