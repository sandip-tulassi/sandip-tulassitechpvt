<?php
$con = mysqli_connect("localhost","root","","markscalculation");
$query1 = "select * from students";
$query2 = "select * from subjects";
$result1 = mysqli_query($con,$query1);
$result2 = mysqli_query($con,$query2);
while($row1 = mysqli_fetch_assoc($result1))
{
	$arrname[] = $row1['name'];
	$arrroll[] = $row1['roll'];
}

while($row2 = mysqli_fetch_assoc($result2))
{
	$arrsubject[] = $row2['subject'];
}
/* 
echo "<pre>";
print_r($arrname);
echo "<pre>";
print_r($arrroll);
echo "<pre>";
print_r($arrsubject);
 */

?>

<html>
<head>
	<script src="jquery-3.1.1.js"></script>
	<script>
	var marksarr = [];
	var totalmarks =0;
		function getsubjects()
		{
			rollchange();
			var name = document.getElementById('name').value;
			var roll = document.getElementById('roll').value;
			$.post("get_marks.php",
			{
				param1:name,
				param2:roll
			},
			function(data,status)
			{
				//alert(data);
				/* var arr = data.split(',');
				var length = arr.length;
				var i = 0;
				var tab = document.getElementById("studenttab");
				
				for(i;i<=length;i++)
				{
					var str = "<tr>";
					str+="<td></td>"
					str+="</tr>"; 
					
				}
				*/
				$("#studenttab").html("");
				var str = "<tr><td style='text-align:center;'>Subjects</td><td style='text-align:center;' >Marks</td><td style='text-align:center;'>Percentage</td></tr>";
				$("#studenttab").append(str);
				$("#studenttab").append(data);
			}
			);
		}
		
		function namechange()
		{
			var nameindex = document.getElementById("name").selectedIndex
			document.getElementById("roll").selectedIndex = nameindex;
			getsubjects();
			
			
		}
		
		function rollchange()
		{
			var rollindex = document.getElementById("roll").selectedIndex
			document.getElementById("name").selectedIndex = rollindex;
			
		}
		
		function checkmarks(thisid)
		{
			var marks = parseInt(document.getElementById(thisid).value);
			
			var arr = thisid.split('_');
			
			var index = arr[1];
			
			if(marks>100)
			{
				alert("Marks can be greater than 100");
			}
			else
			{
				if (typeof marksarr[index] !== 'undefined' && marksarr[index] !== null) 
				{
					marksarr[index] = marks;
				}
				else
				{
				marksarr.push(marks);
				}
				
				setpercentage(thisid);
				settotalmarks(thisid);
				settotalpercentage(thisid);
				
			}
			
			
		}
		
		function setpercentage(thisid)
		{
			var marks = parseInt(document.getElementById(thisid).value);
			var arr = thisid.split('_');
			document.getElementById('percentage_'+arr[1]).value = marks+"%";
			//alert("HEllo");
		}
		
		function settotalmarks(thisid)
		{
			var marks = parseInt(document.getElementById(thisid).value);
			var totalmark = 0;
			for(i in marksarr)
			{
				totalmark+=marksarr[i];
			}
			//totalmarks += marks;
			//var arr = thisid.split('_');
			document.getElementById('totalmarks').value = totalmark;
		}
		
		function settotalpercentage()
		{
			var totalmark = 0;
			for(i in marksarr)
			{
				totalmark+=marksarr[i];
			}
			var totalpercentage = totalmark/6;
			document.getElementById('totalpercentage').value = totalpercentage+"%";
		}
		
		function cleardata()
		{
			var len = marksarr.length;
			for (var i=0; i < len ;i++) 
			{
				marksarr.pop();
			}
		}
		
		
	</script>
</head>
<body>
	<center>
	<h4>Marks Calculation of college Students</h4>
	<form method="post" action="savemarks.php">
	<table>
	<tr><th>StuentName</th><th>Roll No</th></tr>
	<tr>
	<td>
	<select name="name" id="name" onchange="namechange()">
	<option disabled="disabled" selected="selected">--Select Name--</option>
	
	<?php
		$namelength = count($arrname);
		for($i=0;$i<$namelength;$i++)
		{
			?>
			<option value="<?php echo $arrname[$i];?>"><?php echo $arrname[$i];?></option>
			<?php
			
		}
	?>
	
	</select>
	</td>
	<td>
	<select name="roll" id="roll" onchange="getsubjects()">
	<option disabled="disabled" selected="selected">--Select Roll--</option>
	<?php
		$rolllength = count($arrroll);
		for($i=0;$i<$rolllength;$i++)
		{
			?>
			<option value="<?php echo $arrroll[$i];?>"><?php echo $arrroll[$i];?></option>
			<?php
			
		}
	?>
	
	</select>
	</td>
	</tr>
	</table>
	<table border="1" id="studenttab">
	
	</table>
	</form>
	</center>
</body>
</html<th>