<?php
include ('../backend/config.php');
include('../template/header.php');

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE blood_recipient set reci_name='" . $_POST['name'] . "', reci_age='" . $_POST['age'] . "', reci_bgrp='" . $_POST['bgrp'] . "', reci_bqnty='" . $_POST['bqnty'] . "' ,reci_sex='" . $_POST['sex'] . "',reci_reg_date='" . $_POST['date'] . "',reci_phno='" . $_POST['phone'] . "' WHERE reci_id='" . $_GET['reci_id'] . "'");
Header('location: http://localhost/CSE485_K61_KTGK_1951060884/');
}else {
}

?>
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                       <a href="http://localhost/CSE485_K61_KTGK_1951060884" style="color:#fff"><i class="fas fa-arrow-left"></i> Back to home</a> <h2>Update your choose</h2>
                </div>
            </div>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<?php $result = mysqli_query($conn,"SELECT * FROM blood_recipient WHERE reci_id='" . $_GET['reci_id'] . "'");
while($row = mysqli_fetch_array($result)) {

?>
            <div class="mb-3">
            <label for="rName" class="form-label">Name</label>
            <input type="text" class="form-control" id="rName" name='name' value="<?php echo $row['reci_name'] ?>">
            </div>
            <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="<?php echo $row['reci_age'] ?>">
            </div>
            <div class="mb-3">
            <label for="bgrp" class="form-label">Bgrp</label>
            <input type="text" class="form-control" id="bgrp" name='bgrp' value="<?php echo $row['reci_bgrp'] ?>">
            </div>
            <div class="mb-3">
            <label for="bqnty" class="form-label">Bqnty</label>
            <input type="text" class="form-control" id="bqnty" name="bqnty" value="<?php echo $row['reci_bqnty'] ?>" >
            </div>
            <div class="mb-3">
            <label for="sex" class="form-label">Sex</label>
            <input type="text" class="form-control" id="sex" name="sex" value="<?php echo $row['reci_sex'] ?>">
            </div>
            <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="text" class="form-control" id="date" name="date" value="<?php echo $row['reci_reg_date'] ?>" >
            </div>
            <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $row['reci_phno'] ?>" >
            </div>
            <?php
				};
				?>
            <input type="submit" class="btn btn-primary" name='save' value="Submit">
        </form>	
    </div>
<?php 
include('../template/header.php')

?>