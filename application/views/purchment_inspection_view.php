

	<section class="tiles">
		

		<section class="two">
			<h3>Purchment Inspection </h3>
			<div class="well">
				<form action="<?php echo base_url().'c_front/agr_register'?>" method="post">
				<table>
					<tr>
						<td><label>Date of Delivery : </label></td>
						<td><input type="date" name="dater" /></td>
						
					</tr>
					<tr>
						<td><label>Parish Coder : </label></td>
						<td><input type="text" name="parish" /></td>
						
					</tr>
					<tr>
						<td><label>Crop : </label></td>
						<td><input type="text" name="crop" /></td>
						
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
						<td><select>
							<option>-- Options --</option>
							<option> Approved</option>
							<option> Rejected</option>
						</select></td>
						
					</tr>
					<tr>
						<td><label>Reason for Decision : </label></td>
						<td><textarea name="reason"></textarea></td>
						
					</tr>
					<tr>
						<td><label>Parish Coder : </label></td>
						<td><input type="text" name="parish" /></td>
						
					</tr><tr>
						<td><label>Graded By : </label></td>
						<td><input type="text" name="by" /></td>
						
					</tr>
					<tr>
						<td><label>Certification Officer : </label></td>
						<td><input type="text" name="certification" /></td>
						
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


