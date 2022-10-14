<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

</body>

</html>
<?php
$conn = mysqli_connect("localhost","root","","vision_Pj");
$sql2 = "SELECT * FROM login_tbl";

$res2 = mysqli_query($conn,$sql2);

$sql1 = "SHOW COLUMNS FROM login_tbl;";
$res1 = mysqli_query($conn,$sql1);

echo'
<table class="table table-hover table-light table-striped table-bordered">
<thead>
  <tr>

';
while ($row = mysqli_fetch_assoc($res1)) {

        echo '<th scope="col">'.$row['Field'].'</th>';

}


echo '
<th scope="col">Status</th>
<th scope="col">Update</th>
<th scope="col">Delete</th>

</tr>
</thead>
  <tbody>  
';


while ($row = mysqli_fetch_assoc($res2)){
    $designation = "";
    if($row["ROLE"] == 2)
            {
               $designation = "Admin";
            }
           else if($row["ROLE"] == 4)
            {
               $designation = "Teacher";
            }
            else if($row["ROLE"] == 3)
            {
                $designation = "Bus Driver";
            }
            else
            {
               $designation = "Student";
            } 
    echo '<tr>
    <th scope="row">'.$row["ID"].'</th>
    <td>'.$row["GIVEN_ID"].'</td>
    <td>'.$row["NAME"].'</td>
    <td>'.$row["CLASS"].'</td>
    <td>'.$row["EMAIL"].'</td>
    <td>'.$row["PASSWORD"].'</td>
    <td>'.$row["ROLE"].'</td>
   

    ';

   
    

  $designation = "";
  if($row["ROLE"] == 2)
          {
             $designation = "Admin";
             echo '<td>'.$designation.'</td>';
          }
         else if($row["ROLE"] == 1)
          {
             $designation = "Teacher";
             echo '<td>'.$designation.'</td>';

          }
          else if($row["ROLE"] == 3)
          {
             $designation = "Bus Driver";
             echo '<td>'.$designation.'</td>';

          }
          else
          {
             $designation = "Student";
             echo '<td>'.$designation.'</td>';

          } 
          echo'
          <td><a href = "adminupdated.php?Id='.$row["ID"].'" class = "btn btn-info">Edit</a></td>
          <td><a href = "admindeleted.php?Id2='.$row["ID"].'" class = "btn btn-danger">Delete</a></td>
          ';
          echo' </tr>';
}

echo '</tbody>
</table> ';


?>
