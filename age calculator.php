//age calculator//<?php 
// PHP program to calculate age in years
// Define the date of birth
$dateOfBirth = '15-03-1997';
 
// Create a datetime object using date of birth
$dob = new DateTime($dateOfBirth);
 
// Get current date
$now = new DateTime();
 
// Calculate the time difference between the two dates
$diff = $now->diff($dob);
 
// Get the age in years, months and days
echo "Your current age is ".$diff->y." years.
 ";
 
// Get the age in years, months and days
echo "Your current age is ".$diff->y." years ".$diff->m." months ".$diff->d." days.";
?>
