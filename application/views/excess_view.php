

	<section class="tiles">
		

		<section class="two">
			<h3>Excess Delivery </h3>
			<div class="well">
				<form action="<?php echo base_url().'c_front/excess'?>" method="post">
				<table>
					<tr>
						<td><label>Farmer : </label></td>
						<td><input type="text" name="farmer" /></td>
						
					</tr>
					<tr>
						<td><label>Crop : </label></td>
						<td><input type="text" name="crop" /></td>
						
					</tr>
					<tr>
						<td><label>Reporting Date : </label></td>
						<td><input type="text" name="reporting" /></td>
						
					</tr>
					<tr>
						<td><label>Inspection Date: </label></td>
						<td><input type="text" name="inspection" /></td>
						
					</tr>
					<tr>
						<td><label>Reasons for Excess Delivery: </label></td>
						<td><input type="text" name="excess" /></td>
						
					</tr>
					<tr>
						<td><label>Reason for Excess Delivery Valid: </label></td>
						<td><select>
							<option>-- Options --</option>
							<option> Yes </option>
							<option> No</option>
						</select></td>
						
					</tr>
					<tr>
						<td><label>Risks: </label></td>
						<td><select>
							<option>-- Options --</option>
							<option> Yes </option>
							<option> No</option>
						</select></td>
						
					</tr>
					<tr>
						<td><label>Action Taken : </label></td>
						<td><textarea name="reason"></textarea></td>
						
					</tr>
					<tr>
						<td><label>Excess production Acceptable: </label></td>
						<td><select>
							<option>-- Options --</option>
							<option> Yes </option>
							<option> No</option>
						</select></td>
						
					</tr>
					
					<tr>
						<td></td>
						<td><input type="submit" value="Register inspection" /></td>
					</tr>
				</table>
				</form>
			</div>
		</section>
	</section>


