
<?php 

include_once('inc/header.php');
include_once('lib/student.php');

?>

<?php 

error_reporting(0);
$student = new student();
$cur_date = date('Y-m-d'); 

if($_SERVER['REQUEST_METHOD']=='POST' ){
    $attend = $_POST['attend'];

$insert_attend = $student->insertAttend($cur_date,$attend);

}

 
?>

<?php 

if(isset($insert_attend) ){
    echo $insert_attend;
}

 ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>
                    <a href="add.php" class="btn btn-success">Add Student</a>
                    <a href="index.php" class="btn btn-info pull-right">Insert Attendance</a>
                </h2>
            </div>

            <div class="panel-body text-center">
               
                <form action="" method="post">
                    <table class="table table-striped">
                        <tr>
                            <th class="text-center">Serial</th>
                            <th class="text-center">Attendance Date</th>
                            <th class="text-center">Action</th>
                        </tr>

             <?php 
                    $student = new student();
                    $get_date = $student->getDateList();
                    if($get_date){
                        $i = 0;
                        while($value = $get_date->fetch_assoc() ){
                            $i++;
                    
             ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $value['att_time']; ?></td>
                            <td>
                                <a class="btn btn-primary" href="studentView.php?dt=<?php echo $value['att_time']; ?>"> View </a>
                            </td>
                        </tr>
            
             <?php } }  ?>  

                    </table>
                </form>
            </div>

        </div>

<?php include_once('inc/footer.php'); ?>