# php-weekday-table

This is a PHP script that generates an empty HTML table with weekdays and periods, like a school timetable.

## How it Works
The script first defines several variables that can be easily configured by the user:

`$startdate` The starting date of the table, which must be a Monday.

`$enddate` The ending date, which must be a Friday.

`$Registration` A boolean (true or false) to include an extra "R" period for registration before the first period of each day or not.

`$Periods` The number of periods you want in a day.

The script then uses these variables to construct the HTML table. It calculates the total number of days in the specified range and iterates through each day. For each day that is not a Saturday or Sunday, it creates a new table row with the date and adds blank cells for each period.

The script handles the display of the periods and a potential registration slot by first calculating how many columns each day should span. It then loops through to create the headers for each day of the week, followed by a row for the period numbers (including an "R" if enabled).

***You need to make sure the start date is a Monday and the end date is a Friday otherwise the table breaks.***

Here's a preview image of the output:

![Alt text](./screenshots/sample-table.gif?raw=true "Sample Output")
