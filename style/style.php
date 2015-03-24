<?php
// This file checks to see if a user has a sitestyle cookie set in their browser 
// If so, access its value and assign it to $Style variable
// If not then set $Style variable to defualt css 'flatly'

$Style = "";
if (!isset($_COOKIE['sitestyle'])) {
    $Style = "flatly";
} else {
	$Style = $_COOKIE['sitestyle'];
}
?>