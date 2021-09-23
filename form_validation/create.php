<?php
    include_once('autoload.php');
?>
<?php
    $connection=new mysqli('localhost','root','','school_system');
    if($connection->connect_error){
        echo $connection->connect_error;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
    <?php
        if(isset($_POST['add'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $cell=$_POST['cell'];
            $location=$_POST['location'];
            if (empty($name)||empty($email)||empty($cell)||empty($location)){
                $msg=msgShow("All Fields are Required",'danger');
            } else{
                $sql="INSERT INTO students (name,email,cell,location) values ('$name','$email','$cell','$location')";
                $connection->query($sql);
                $msg=msgShow("Data Inserted Successfully",'success');
            }
        }
    ?>
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Sign Up</h3>
                        <?php
                        if(isset($msg)){
                            echo $msg;
                        }
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">E-mail</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Cell</label>
                                <input type="text" name="cell" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Location</label>
                                <input type="text" name="location" class="form-control">
                            </div>
                            <div class="form-group">
                               
                                <input type="submit" name="add" class="btn btn-primary" value="Sign Up">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <a href="index.php">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<script src="assets/js/jquery-3.2.1.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>