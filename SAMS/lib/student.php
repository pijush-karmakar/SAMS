<?php 

$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/Database.php');

?>


<?php 

class student{
    private $db;

	public function __construct(){
       $this->db = new Database();
	}
 
   public function getstudent(){
        $query = "SELECT * FROM students";
        $result = $this->db->select($query);
        return $result;
   }

  public function insertStudent($name,$roll){
      $name = mysqli_real_escape_string($this->db->link, $name);
  	  $roll = mysqli_real_escape_string($this->db->link, $roll);
      if(empty($name) || empty($roll) ){
          $msg = "<div class='alert alert-danger'><strong>Error ! </strong> Field Must Not Be Empty !</div>";
          return $msg;
      }
      else{
         $stu_query   = "INSERT INTO students(name,roll) VALUES('$name','$roll')" ; 
         $stu_insert  = $this->db->insert($stu_query) ;

         $attd_query   = "INSERT INTO attendance(roll) VALUES('$roll')" ; 
         $stu_insert  = $this->db->insert($attd_query) ;

         if($stu_insert){
            $msg = "<div class='alert alert-success'><strong> Success ! </strong> Data Inserted Successfully </div>";
            return $msg;
         }
         else{
            $msg = "<div class='alert alert-danger'><strong>Error ! </strong>Data Not Inserted </div>";
            return $msg;
         }

      }

  }

 public function insertAttend($cur_date,$attend = array()){
    $query = "SELECT DISTINCT att_time FROM attendance";
    $getData = $this->db->select($query);
    while ($result = $getData->fetch_assoc()) { 
        $date = $result['att_time'];
        if($cur_date == $date){
           $msg = "<div class='alert alert-danger'><strong>Error ! </strong>Attendance Already Taken Today.</div>";
            return $msg; 
        }
    }

foreach ($attend as $atn_key => $atn_value) {
   if($atn_value == "present"){
       $query = "INSERT INTO attendance (roll,attend,att_time) VALUES('$atn_key','present',now())";

      $data_insert  = $this->db->insert($query) ;
   }
   elseif ($atn_value == "absent") {
       $query = "INSERT INTO attendance (roll,attend,att_time) VALUES('$atn_key','absent',now())";

      $data_insert  = $this->db->insert($query) ;
   }

}

if($data_insert){
            $msg = "<div class='alert alert-success'><strong> Success ! </strong> Attendance Inserted Successfully </div>";
            return $msg;
         }
         else{
            $msg = "<div class='alert alert-danger'><strong>Error ! </strong>Attendance Not Inserted </div>";
            return $msg;
         }

 }


  public function getDateList(){
     $query = "SELECT DISTINCT att_time FROM attendance";
     $result = $this->db->select($query); 
      return $result;
  }

 public function getAllStudent($dt){
    $query = "SELECT students.name, attendance.* FROM students INNER JOIN attendance ON students.roll = attendance.roll WHERE att_time = '$dt' ";
     $result = $this->db->select($query); 
      return $result;
 }

public function updateAttend($dt,$attend){
     foreach ($attend as $atn_key => $atn_value) {
   if($atn_value == "present"){
       $query = "UPDATE attendance SET attend='present'
       WHERE roll = '".$atn_key."' AND att_time = '".$dt."' ";
       $data_update = $this->db->update($query);
   }
   elseif ($atn_value == "absent") {
       $query =  "UPDATE attendance SET attend='absent'
       WHERE roll = '".$atn_key."' AND att_time = '".$dt."' ";
       $data_update = $this->db->update($query);
   }

}

if($data_update){
            $msg = "<div class='alert alert-success'><strong> Success ! </strong> Attendance Updated Successfully </div>";
            return $msg;
         }
         else{
            $msg = "<div class='alert alert-danger'><strong>Error ! </strong>Attendance Not Updated </div>";
            return $msg;
         }



} 






}

 ?>