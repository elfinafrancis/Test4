<?php
include "conn.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Students</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="col-lg-4">
  <h2>Student Information</h2>
  <form action="" name="form1" method="post">
    <div class="form-group">
      
    <div class="form-group">
       <label for="pwd">Student ID:</label>
      <input type="text" class="form-control" id="sid" placeholder="Student ID" name="sid">
    </div>
    <div class="form-group">
      <label for="pwd">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Age:</label>
      <input type="text" class="form-control" id="age" placeholder="Age" name="age">
    </div>
     <div class="form-group">
      <label for="pwd">Gender:</label>
      <input type="text" class="form-control" id="gender" placeholder="Gender" name="gender">
    </div>
    <div class="form-group">
      <label for="pwd">Course:</label>
      <input type="text" class="form-control" id="cname" placeholder="Enter Course Name" name="cname">
    </div>
    <div class="form-group">
      <label for="pwd">Address:</label>
      <input type="text" class="form-control" id="add" placeholder="Address" name="address">
    </div>
     <button type="submit" name="insert" class="btn btn-default">Insert</button>
    <button type="submit" name="update" class="btn btn-default">Update</button>
    <button type="submit" name="delete" class="btn btn-default">Delete</button>
  </form>
  </div>
</div>
    <div class="col-lg-12">
      <table class="table table-bordered">

  <thead>
      <tr>
        
        <th>Student ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Course</th>
        <th>Address</th>

      </tr>
    </thead>
    <tbody>
      <?php
      $res=mysqli_query($link,"select *from stuinfo");
      while($row=mysqli_fetch_array($res))
      {
        echo "<tr>";
      
        echo "<td>"; echo $row["sid"];echo "</td>";
        echo "<td>"; echo $row["name"];echo "</td>";
        echo "<td>"; echo $row["age"];echo "</td>";
        echo "<td>"; echo $row["gender"];echo "</td>";
        echo "<td>"; echo $row["cname"];echo "</td>";
        echo "<td>"; echo $row["address"];echo "</td>";
        echo "</tr>";
      }

      ?>
    </tbody>
  </table>

</div>

</body>
<?php
if(isset($_POST["insert"]))
{
mysqli_query($link,"insert into stuinfo values('$_POST[sid]','$_POST[name]','$_POST[age]','$_POST[gender]','$_POST[cname]','$_POST[address]')");
?>
<script type="text/javascript">
  window.location.href= window.location.href;
</script>
<?php
}
if(isset($_POST["delete"]))
{
mysqli_query($link,"delete from stuinfo where sid='$_POST[sid]'");
?>
<script type="text/javascript">
  window.location.href= window.location.href;
</script>
<?php
}
if(isset($_POST["update"]))
{
mysqli_query($link,"update stuinfo set age='$_POST[age]' where sid='$_POST[sid]'");
?>
<script type="text/javascript">
  window.location.href= window.location.href;
</script>

<?php
}
if(isset($_POST["update"]))
{
mysqli_query($link,"update stuinfo set address='$_POST[address]' where sid='$_POST[sid]'");
?>
<script type="text/javascript">
  window.location.href= window.location.href;
</script>

<?php
}
?>

</html>