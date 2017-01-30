<?php
$con = mysqli_connect("localhost","root","","markscalculation");
extract($_POST);
echo "<pre>";
print_r($_POST);
$subjetstr = implode(',',$subject);
$marksstr = implode(',',$marks);
$percentagestr = implode(',',$percentage);
$query = "INSERT INTO savemarks (id, name, roll, subject, marks, percentage, totalmarks, totalpercentage)";
$query.= "VALUES (NULL, '$name', '$roll', '$subjetstr', '$marksstr', '$percentagestr', '$totalmarks', '$totalpercentage')";
echo $query;
mysqli_query($con,$query);

header('location:index.php');

?>