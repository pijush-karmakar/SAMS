
<?php 

include_once('inc/header.php');
include_once('lib/student.php');

?>

   <script type="text/javascript">
        
    $(document).ready(function(){
        $('form').submit(function(){
           var roll = true;
           $(':radio').each(function(){
              name = $(this).attr('name');
              if(roll && !$(':radio[name="'+ name + '"]:checked').length){
                 //alert(name + " Roll Missing ! ");
                 $('.alert').show();
                 roll = false;
              }
           });
           return roll;
        });
    });
        
    </script>


<?php 

error_reporting(0);
$student = new student();
$dt = $_GET['dt']; 

if($_SERVER['REQUEST_METHOD']=='POST' ){
   $attend = $_POST['attend'];
   $update_attend = $student->updateAttend($dt,$attend);

}

 
?>

<?php 

if(isset($update_attend) ){
    echo $update_attend;
}

 ?>

 <div class='alert alert-danger' style="display: none;"><strong>Error ! </strong>Student Roll Missing ! </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>
                    <a href="add.php" class="btn btn-success">Add Student</a>
                    <a href="date_view.php" class="btn btn-info pull-right">Back</a>
                </h2>
            </div>

            <div class="panel-body text-center">
              <div class="well text-center" style="font-size: 18px;">
                 <strong> Date: </strong> <?php echo $dt; ?>  
               </div>

                <form action="" method="post">
                    <table class="table table-striped">
                        <tr>
                            <th class="text-center">Serial</th>
                            <th class="text-center">Student Name</th>
                            <th class="text-center">Student Roll</th>
                            <th class="text-center">Attendance</th>
                        </tr>

             <?php 
                    $student = new student();
                    $get_student = $student->getAllStudent($dt);
                    if($get_student){
                        $i = 0;
                        while($value = $get_student->fetch_assoc() ){
                            $i++;
                    
             ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $value['name'] ;?></td>
                            <td><?php echo $value['roll']; ?></td>
                            <td>
                                <input type="radio" name="attend[<?php echo $value['roll']; ?>]" value="present" <?php if($value['attend'] == "present") echo "checked"; ?>>P
                                <input type="radio" name="attend[<?php echo $value['roll']; ?>]" value="absent" <?php if($value['attend'] == "absent") echo "checked"; ?>>A
                            </td> 
                        </tr>
            
             <?php } }  ?>  
                        <tr>
                            <td colspan="4">
                                <input type="submit" class="btn btn-primary" name="submit" value="Update" style="text-align:left;">
                            </td>
                        </tr>

                    </table>
                </form>
            </div>

        </div>

<?php include_once('inc/footer.php'); ?>