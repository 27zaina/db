<?php

echo "<!DOCTYPE html>";
echo "<html lang='en'>";

echo "<head>";
echo "<link rel='stylesheet' href='styles.css'>";
echo "<title> RZL Add Ticket</title>";
echo "</head>";

echo "<body>";

echo "<form method='post' action='valid_ticket.php'>";  //this starts a form to collect ticket information
echo "<input type='text' name='type' placeholder='Type' required><br>";
echo "<input type='text' name='price' placeholder='Price' required><br>";
echo "<input type='text' name='no_of_tickets' placeholder='number of tickets per day' required><br>";
echo "<input type='submit' name='submit' value='Submit'>"; // this sends the form to valid_ticket
echo "</form>";
echo "</body>";
echo "</html>";
