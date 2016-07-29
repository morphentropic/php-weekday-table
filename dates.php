<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
		<style> 
			table { border:1px solid grey;} 
			tr td { width:10px;border:1px solid grey; }
		</style> 
	</head> 
	<body>
<?php 
$startdate = strtotime('2017-06-05');
$enddate = strtotime('2017-07-21');
$difference = $enddate - $startdate;
$number_of_days = floor($difference/(60*60*24) + 1);
echo "<table class=\"table table-bordered table-hover table-condensed\"><tr><tr class=\"success text-center\"> <td colspan=\"8\">MONDAY</td> <td colspan=\"8\">TUESDAY</td> <td colspan=\"8\">WEDNESDAY</td> <td colspan=\"8\">THURSDAY</td> <td colspan=\"8\">FRIDAY</td> </tr><tr class=\"info\"> <td></td> <td>R</td> <td>1</td> <td>2</td> <td>3</td> <td>4</td> <td>5</td> <td>6</td> <td></td> <td>R</td> <td>1</td> <td>2</td> <td>3</td> <td>4</td> <td>5</td> <td>6</td> <td></td> <td>R</td> <td>1</td> <td>2</td> <td>3</td> <td>4</td> <td>5</td> <td>6</td> <td></td> <td>R</td> <td>1</td> <td>2</td> <td>3</td> <td>4</td> <td>5</td> <td>6</td> <td></td> <td>R</td> <td>1</td> <td>2</td> <td>3</td> <td>4</td> <td>5</td> <td>6</td> </tr>";
		
		for ($i = 0; $i < $number_of_days; $i++) { 
			$date = strtotime(date("Y-m-d", $startdate) . " +$i day");
			$day_of_week = date("l", $date); 
			if ($day_of_week == "Saturday")	{
			} 
			else if ($day_of_week == "Sunday") { 
				echo "</tr><tr>\n"; 
			} 
			else { 
				echo "<td>";
				echo date('d/m', $date); 
				echo "</td>\n<td></td>\n<td></td>\n<td></td>\n<td></td>\n<td></td>\n<td></td>\n<td></td>\n";
			} 
		} echo "</tr>\n</table>\n"; ?>
	</body>
</html>