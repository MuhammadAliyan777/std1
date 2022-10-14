<?php
/* if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
} */
include_once('../controller/config.php');
if(isset($_POST['btn_update']))
{
$gradeid = $_POST['grade_id'];
$subjectid = $_POST['subject_id'];
$teacherid = $_POST['teacher_id'];
$fee = $_POST['fee'];
$sr_id = $_GET['update_main'];
$check_result = "UPDATE `subject_routing` SET `grade_id`= $gradeid,`subject_id`= $subjectid,`teacher_id`= $teacherid,`fee`= $fee WHERE id = $sr_id";
$result = mysqli_query($conn,$check_result);
header('location: subject_routing.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

.modal-content1 {
   position: absolute;
   left: 125px; 
}
@media only screen and (max-width: 500px) {

	.modal-content1 {
   		
		position:static;
   
	}
}

.form-control-feedback {
  
   pointer-events: auto;
  
}

.set-width-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
}
.set-color-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
	 background-color:red;
}

.msk-fade{  
      
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s

}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

</style>
</head>


<?php include_once('head.php'); ?>
<?php include_once('header_admin.php'); ?>
<?php include_once('alert.php'); ?>
<body>


    	<!-- Modal content-->
    
        				
          					
            			 <form method="post" class="w-50" style="    background-color: white;
    color: black;">
            				<div class=""> <!-- Start of modal body--> 
				
               					<div class="form-group">
                					<label for="" >Grade</label>
        							<select class="form-control"  name="grade_id">			
     									<option >Select Grade</option>
<?php
//MSK-00096
include_once('../controller/config.php');
$sql="SELECT * FROM `grade`";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
?> 
                    				
     									<option value="<?php echo $row["id"]; ?>"><?php echo $row['name']; ?></option>
<?php }} ?>	           
									</select>
        						</div>
                                
                                <div class="form-group" id="divSubject">
                					<label for="" >Subject</label>
        							<select class="form-control"  id="subject" name="subject_id">			
     									<option>Select Subject</option>
<?php
//MSK-00097
include_once('../controller/config.php');
$sql="SELECT * FROM `subject`";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
?> 
                    				
     									<option value="<?php echo $row["id"]; ?>"><?php echo $row['name']; ?></option>
<?php }} ?> 	           
									</select>
        						</div> 
                                
                                <div class="form-group" id="divTeacher">
                					<label for="" >Teacher</label>
        							<select class="form-control"  id="teacher" name="teacher_id">			
     									<option>Select Teacher</option>
<?php
//MSK-00098
include_once('../controller/config.php');
$sql="SELECT * FROM `teacher`";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
?> 
                    				
     									<option value="<?php echo $row["id"]; ?>"><?php echo $row['i_name']; ?></option>
<?php }} ?>	          
									</select>
        						</div> 
                                
                                <div class="form-group" id="divFee">
                					<label for="" >Fee($)</label>
									<?php
//MSK-00098
include_once('../controller/config.php');
$sr_id = $_GET['update_main'];
$sql="SELECT fee FROM `subject_routing` WHERE id = $sr_id";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
?> 
                    				
									<input type="text" class="form-control" id="fee" name="fee" value = <?php echo $row['fee']; ?> placeholder="Enter subject fee" autocomplete="off"/>

<?php }} ?>	  
        						</div>  
               
            				</div><!--/.modal body-->
            
            				<div class="">
            					<input type="hidden" name="do" value="add_subject_routing"  />
                    			<button type="submit" name="btn_update" class="btn btn-info "  style="width:100%;">Submit</button>
             				</div>
             			</form>       
    		 

</body>
</html>