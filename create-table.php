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
	// Set your start date YYYY-MM-DD
	$startdate = strtotime('2017-06-05');
	
	// Set your end date YYYY-MM-DD
	$enddate = strtotime('2017-07-21');
	
	// Calculate the difference between the dates in seconds
	$difference = $enddate - $startdate;
	
	// Convert seconds to whole days
	$total_days = floor($difference/(60*60*24) + 1);
	
	// Create the unchanging table header stuff
	echo "<table><tr><tr> <td colspan=\"8\">MONDAY</td> <td colspan=\"8\">TUESDAY</td> <td colspan=\"8\">WEDNESDAY</td> <td colspan=\"8\">THURSDAY</td> <td colspan=\"8\">FRIDAY</td> </tr><tr> <td></td> <td>R</td> <td>1</td> <td>2</td> <td>3</td> <td>4</td> <td>5</td> <td>6</td> <td></td> <td>R</td> <td>1</td> <td>2</td> <td>3</td> <td>4</td> <td>5</td> <td>6</td> <td></td> <td>R</td> <td>1</td> <td>2</td> <td>3</td> <td>4</td> <td>5</td> <td>6</td> <td></td> <td>R</td> <td>1</td> <td>2</td> <td>3</td> <td>4</td> <td>5</td> <td>6</td> <td></td> <td>R</td> <td>1</td> <td>2</td> <td>3</td> <td>4</td> <td>5</td> <td>6</td> </tr>";
		
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
		} echo "</tr>\n</table>\n"; ?>
</body>
</html>
