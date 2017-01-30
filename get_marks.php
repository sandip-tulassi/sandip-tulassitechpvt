<?php
$con = mysqli_connect("localhost","root","","markscalculation");
extract($_POST);
//$param1 = "Samar Chatterjee";
//$param2 = "11";
$checkquery = "select * from savemarks where name = '$param1' and roll = '$param2'";
echo $checkquery;
$chkresult = mysqli_query($con,$checkquery);
if(mysqli_num_rows($chkresult))
{
	echo "<tr><td colspan='3' style='text-align:center;'>Record already saved</td></tr>";
}
else
{
$query = "select * from subjects";

$result = mysqli_query($con,$query);

if(mysqli_num_rows($result)>0)
{
	//echo "rows selected";
}
while($row = mysqli_fetch_assoc($result))
{
	
	$subjects[] = $row["subject"];
	
	
}
//$str = implode(',',$subjects);
//echo $str;
$len = count($subjects);
for($i=0;$i<$len;$i++)
{
echo "<tr>";
echo "<td>";
echo "<select name='subject[]'>";
foreach($subjects as $subject)
{
	echo "<option value='$subject'>$subject</option>";
}
echo "</select>"; 
echo "</td>";
echo "<td><input type=\"text\" name=\"marks[]\" id=\"marks_$i\" onblur=\"checkmarks(this.id)\"></td>";
echo "<td><input type=\"text\" name=\"percentage[]\" id=\"percentage_$i\"></td>";
echo "</tr>";
}
echo "<tr>";
echo "<td style='text-align:center;'>Total</td>";
echo "<td><input type=\"text\" name=\"totalmarks\" id=\"totalmarks\"></td>";
echo "<td><input type=\"text\" name=\"totalpercentage\" id=\"totalpercentage\"></td>";
echo "</tr>";
echo "<tr>";
echo "<td></td>";
echo "<td><input type=\"reset\" value=\"Reset\" onclick=\"cleardata()\" style='display: block;margin: auto; padding-left: 30px;padding-right: 30px;'></td>";
echo "<td><input type=\"submit\" name=\"save\" value=\"Save\" style='display: block;margin: auto; padding-left: 30px;padding-right: 30px;'></td>";
echo "</tr>";
}
?>