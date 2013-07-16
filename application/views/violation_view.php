

	<section class="tiles">
		

		<section class="two">
			<h3>Report Violation</h3>
			<div class="well">
				<form action="<?php echo base_url().'c_front/agr_register'?>" method="post">
				<table>
					<tr>
						<td><label>Farmer : </label></td>
						<td><input type="text" name="farmer" /></td>
						
					</tr>
					<tr>
						<td><label>Certification Officer : </label></td>
						<td><input type="date" name="cofficer" /></td>
						
					</tr>
					<tr>
						<td><label>Violation : </label></td>
						<td><input type="text" name="violation" /></td>
						
					</tr>
					<tr>
						<td><label>Violation Explaination : </label></td>
						<td><textarea></textarea></td>
						
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
						<td><input type="text" name="fos" /></td>
						
					</tr>
					<tr>
						<td><label>Supervision Date : </label></td>
						<td><input type="text" name="sd" /></td>
						
					</tr>
					<tr>
						<td><label>Comments : </label></td>
						<td><textarea></textarea></td>
						
					</tr>
					
					<tr>
						<td></td>
						<td><input type="submit" value="Violation Report" /></td>
					</tr>
				</table>
				</form>
			</div>
		</section>
	</section>


