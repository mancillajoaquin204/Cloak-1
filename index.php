<?php
// Define the destination URL
$destination_url = "https://www.mychart.org/";

// Send the Location header for redirection
header("Location: " . $destination_url);

// It's crucial to stop script execution after sending the header
// to prevent any further output or unintended actions.
exit(); 
?>