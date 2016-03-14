<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form/Admin Page</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>
    <?php
include 'db.php';
session_set_cookie_params(0);
session_start();
if(isset($_SESSION['email']))
{
  $select_all_query = "SELECT * FROM registration;";
  $students = $conn->query($select_all_query);
  echo '<table class="responsestable">';
  echo "<tr>
    <th>ID </th>
    <th>Name</th>
    <th>Surname</th>
    <th>E-mail</th>
    <th>Sign-up date</th>
    <th>Last sign-in date</th>
    <th>Password</th>
  </tr>";

  while($student = $students->fetch_object())
  {
    echo "<tr>";
    foreach ($student as $value) {
      echo "<td>".$value."</td>";
    }
    $user_id = $student->id;
    echo "<td><a href= 'delete_student.php?id=$user_id'>DELETE</a></td>";
    echo "</tr>";
  }
  echo "</table>";
}
else 
echo "You have no access to this page";
?>

</body>


