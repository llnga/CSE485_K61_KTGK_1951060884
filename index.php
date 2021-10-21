<?php include('backend/config.php'); 
include('template/header.php')
?>
    <div class="container">
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Blood Recipient</h2>
					</div>
					<div class="col-sm-6">
						<a href="reci_add.php" class="btn btn-success">Add new recipient</a>
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>No</th>
                        <th>Name</th>
                        <th>Age</th>
						<th>Bgrp</th>
						<th>Bqnty</th>
						<th>Sex</th>	
                        <th>Reg date</th>
                        <th>Phone</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($conn,"SELECT * FROM blood_recipient");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["reci_id"]; ?>">
					<td><?php echo $i; ?></td>
					<td><?php echo $row["reci_name"]; ?></td>
					<td><?php echo $row["reci_age"]; ?></td>
					<td><?php echo $row["reci_bgrp"]; ?></td>
					<td><?php echo $row["reci_bqnty"]; ?></td>
					<td><?php echo $row["reci_sex"]; ?></td>
					<td><?php echo $row["reci_reg_date"]; ?></td>
					<td><?php echo $row["reci_phno"]; ?></td>
					<td><a href="process/update.php?reci_id=<?php echo $row["reci_id"]; ?>">Update</a></td>
					<td><a href="process/delete.php?reci_id=<?php echo $row["reci_id"]; ?>">Delete</a></td>

				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			
        </div>
        <div class="copyrights">@LeNga</div>
    </div>
<?php 
include('template/footer.php')
?>
                          		                            