<?php

// Let's set the variables first
// Set your start date YYYY-MM-DD (Make sure it's a Monday)
$startdate = strtotime('2017-06-05');
	
// Set your end date YYYY-MM-DD (Make sure it's a Friday)
$enddate = strtotime('2017-07-21');

// Set to 'true' if you want a registration before P1 or 'false' otherwise
$Registration = true;

// How many periods do you want in a day?
$Periods = 6;

// Don't need to change anything below this line

// If there is a registration period on the table, increase the number of periods in a day by 1
if ($Registration == true) {
$Periods = $Periods + 1;
}

// Work out how many columns the 'DAY' cell needs to span
$cspan = $Periods + 1;

?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>php-weekday-table</title>
		<style> 
			<!-- Very basic styling for the table so you can see more easily see if the output is correct -->
			table { border:1px solid grey;} 
			tr td { width:10px;border:1px solid grey; }
		</style> 
	</head> 
<body>
<?php
	// Calculate the difference between the dates in seconds
	$difference = $enddate - $startdate;
	
	// Convert seconds to whole days
	$total_days = floor($difference/(60*60*24) + 1);
	
	// Create the rows for days of the week using $cspan for how many columns the day cell spans
	echo "<table><tr><tr> <td colspan=\"".$cspan."\">MONDAY</td> <td colspan=\"".$cspan."\">TUESDAY</td> <td colspan=\"".$cspan."\">WEDNESDAY</td> <td colspan=\"".$cspan."\">THURSDAY</td> <td colspan=\"".$cspan."\">FRIDAY</td></tr>";
	
	// Create the row containing the periods and insert numbers and registration if needed
	echo "<tr class=\"info\">";
		for ($lp = 1; $lp <= 5; $lp++;) {
			for ($p = 0; $p < $cspan; $p++;) {
				if ($Registration == true) {
					$td = $p - 1;
					if ($p == 1) {
						$td = "R";
					}
				}
					else {
						$td = $p;
					}
					if ($p == 0) {
						$td ="";
					}
				echo ("<td>".$td."</td>");
			}
		}
	echo "</tr>";
	
	// Repeat until we've gone through all the days in our range
	for ($count = 0; $i < $total_days; $count++) { 
		$date = strtotime(date("Y-m-d", $startdate) . " +$count day");
			
		// Find out what day of the week each date is (with a capital letter)
		$day_of_week = date("l", $date);
			
		// If its a Saturday, no output
		if ($day_of_week == "Saturday")	{
		} 
		// If it's a Sunday, close the table row, start a new one and insert a line break so the HTML is readable
		else if ($day_of_week == "Sunday") { 
			echo "</tr><tr>\n"; 
		} 
		// If it's not Saturday or Sunday then create a table cell and put the date in it
		// Then close the cell and add, in this case, 7 more
		else { 
			// Create a table cell
			echo "<td>";
			// Put the date in it
			echo date('d/m', $date);
			// Close the cell and add some more blank ones for the periods
			echo "</td>\n<td></td>\n<td></td>\n<td></td>\n<td></td>\n<td></td>\n<td></td>\n<td></td>\n";
		} 
	// Once all the days in the range have been written to the table, close the last row and the table	
	} echo "</tr>\n</table>\n"; 
?>
</body>
</html>
