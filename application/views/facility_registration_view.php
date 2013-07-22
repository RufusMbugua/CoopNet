

	<section class="tiles">
		

		<section class="two">
			<h3>Facility Registration</h3>
			<div class="well">
				<form action="<?php echo base_url().'c_front/reg_facility'?>" method="post">
				<table class="table table-striped">
					<tr>
						<td><label>Facility Name : </label></td>
						<td><input type="text" name="facility" /></td>
						
					</tr>
					<tr>
						<td><label>Facility Code : </label></td>
						<td><input type="text" name="fcode" /></td>
						
					</tr>
					<tr>
						<td><label>Sub-Facility Name : </label></td>
						<td><input type="text" name="subfname" /></td>
						
					</tr>
					<tr>
						<td><label>Sub-Facility Code: </label></td>
						<td><input type="text" name="subfcode" /></td>
						
					</tr>
					<tr>
						<td><label>Facility purpose: </label></td>
						<td><input type="text" name="purpose" /></td>
						
					</tr>
					<tr>
						<td><label>Owner: </label></td>
						<td><input type="text" name="owner" /></td>
						
					</tr>
					<tr>
						<td><label>Size of Building: </label></td>
						<td><input type="text" name="size" /></td>
						
					</tr>
					<tr>
						<td><label>Building Material: </label></td>
						<td><input type="text" name="materials" /></td>
						
					</tr>
					
					<tr>
						<td><label>Person Responsible : </label></td>
						<td><input type="text"  name="responsible"/></td>
						
					</tr>
					<tr>
						<td><label>Info collected by: </label></td>
						<td><select name="collected">
							<option selected="selected"> -- Select Officer -- </option>
							<?php
								foreach ($officer as $officer) {
							?>
							<option value="<?php echo $officer['officerid'];?>"><?php echo $officer['officerfirstname'].' '.$officer['officerlastname']; ?></option>
							<?php } ?>
						</select></td>
						
					</tr>
					<tr>
						<td><label>Date of Collection: </label></td>
						<td><input type="date" name="doc" /></td>
						
					</tr>
					<tr>
						<td><label>verified by: </label></td>
						<td><input type="text" name="verifies" /></td>
						
					</tr>
					<tr>
						<td><label>Date of Verification: </label></td>
						<td><input type="text" name="dov" /></td>
						
					</tr>
					
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-primary" value="Register Facility" /></td>
					</tr>
				</table>
				</form>
			</div>
		</section>
	</section>


