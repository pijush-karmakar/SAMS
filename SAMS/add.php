
<?php 
include_once('inc/header.php'); 
include_once('lib/student.php');
?>

<?php 
$student = new student();
if($_SERVER['REQUEST_METHOD']=='POST' ){
    $name = $_POST['name'];
    $roll = $_POST['roll'];

$insert_data = $student->insertStudent($name,$roll);

}

?>

<?php 

if(isset($insert_data) ){
    echo $insert_data;
}

 ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>
                    <a href="add.php" class="btn btn-success">Add Student</a>
                    <a href="index.php" class="btn btn-info pull-right">Back</a>
                </h2>
            </div>

            <div class="panel-body">
               
                <form action="" method="post">

                    <div class="form-group">
                        <label for="name">Student Name</label>
                        <input type="text" class="form-control" name="name" id="name" >
                    </div>

                    <div class="form-group">
                        <label for="roll">Student Roll</label>
                        <input type="text" class="form-control" name="roll" id="roll" >
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add student">
                    </div>

                </form>
            </div>

        </div>

<?php include_once('inc/footer.php'); ?>