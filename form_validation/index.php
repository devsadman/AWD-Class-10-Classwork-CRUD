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
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <a href="create.php" class="btn btn-success mb-2">Add Student</a>
                
            <div class="card">
        <div class="card-body">
            <h3>All Students Data</h3>
            <table class="table table-bordered ">
                <thead class="table-dark">

                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Cell</th>
                        <th>Location</th>
                        <th>Action</th>
                    </tr>
                    

                </thead>
                <tbody>
                    <?php
                    $i=1;
                        $sql="SELECT * FROM students ORDER BY id DESC";
                       $data= $connection->query($sql);
                    //    $d=$data->fetch_object();
                    while($d=$data->fetch_object()):
                    ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $d->name; ?></td>
                        <td><?php echo $d->email; ?></td>
                        <td><?php echo $d->cell; ?></td>
                        <td><?php echo $d->location; ?></td>
                        <td style="text-align: center;">
                            <a href="" class="btn btn-info">View</a>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile  ?>
                </tbody>
            </table>
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