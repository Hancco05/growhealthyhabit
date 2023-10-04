<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">

<!-- DataTales Examples -->
<div class="card shodow mb-4">
 <div class="card-header py-3">
   <h6 class="m-0 font-weight-bold text-primary">EDIT Admin Profile  </h6>
 </div>
 <div class="card-body">
    <?php 

    $connection = mysqli_connect("localhost","root","","adminpanel");
    if(isset($_POST['edit_btn']))
    {
        $id = $_POST['edit_id'];
        $query = "SELECT * FROM register WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        foreach($query_run as $row)
        {
            ?>
            
            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" value="<?php echo $row['username']?>" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $row['email']?>" class="form-control checking_email" placeholder="Enter Email">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $row['password']?>" class="form-control" placeholder="Enter Password">
            </div>
            <a href="register.php" class="btn btn-danger"> CANCEL </a>
            <button class="btn btn-primary"> Update </button>

            <?php
        }
    }
    ?>

    </div>

  </div>

</div>

</div>
<!-- /.container-fluid -->


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
