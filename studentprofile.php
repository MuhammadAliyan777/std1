<?php
$conn = mysqli_connect("localhost","root","","vision_pj");
$sql = "SELECT * FROM profile_tbl";
$res = mysqli_query($conn,$sql);

if(isset($_POST["btn"]))
{
    $a = $_POST["name"];
    $b = $_POST["class"];
    $c = $_POST["gender"];
    $d = $_POST["rollno"];

    $sql2 = "INSERT INTO `profile_tbl`(`ID`, `NAME`, `CLASS`, `GENDER`, `ROLLNO`) VALUES (NOT NULL,'$a',$b,'$c',$d)";
    $res2 = mysqli_query($conn,$sql2);
    header("location: student.php");
}




?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
footer copy.php    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Edustage Education</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
   <?php
include "nav.php";

?>

    <h1 style="text-align: center; text-decoration: underline;" class="m-5">Please Setup Your Profile</h1>
    <div class="m-5">
    <form method="POST">
  <div class="mb-3">
    <input name = "name" type="text" placeholder="Enter Your Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <input type="number" name = "class" min="1" max="10" placeholder="Enter Your Grade/Class" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <input type="text" name = "gender"  placeholder="Enter Your Gender" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <input type="number" min="1" max="50" name = "rollno"  placeholder="Enter Your Roll No" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 ml-2 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remeber Me</label>
  </div>
  <button name = "btn" type="submit" class="btn btn-dark w-100">Submit</button>
</form>
    </div>
<?php include "footer.php"; ?>

</body>


</html>