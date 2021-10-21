<?php include('backend/config.php'); 
include('template/header.php')
?>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                       <a href="http://localhost/CSE485_K61_KTGK_1951060884" style="color:#fff"><i class="fas fa-arrow-left"></i> Back to home</a> <h2>Add Recipient</h2>
                </div>
            </div>
        <form method="post" action="process/add.php">
            <div class="mb-3">
            <label for="rName" class="form-label">Name</label>
            <input type="text" class="form-control" id="rName" name='name'>
            </div>
            <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age">
            </div>
            <div class="mb-3">
            <label for="bgrp" class="form-label">Bgrp</label>
            <input type="text" class="form-control" id="bgrp" name='bgrp'>
            </div>
            <div class="mb-3">
            <label for="bqnty" class="form-label">Bqnty</label>
            <input type="text" class="form-control" id="bqnty" name="bqnty" >
            </div>
            <div class="mb-3">
            <label for="sex" class="form-label">Sex</label>
            <input type="text" class="form-control" id="sex" name="sex" >
            </div>
            <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="text" class="form-control" id="date" name="date" >
            </div>
            <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" >
            </div>
            <input type="submit" class="btn btn-primary" name='save' value="Submit">
        </form>
    </div>
</div>
<?php 
include('template/footer.php')
?>
