<?php
$db = "goneill1988";
$pw= "T3cFGBYDXH6xC11y";
$host="goneill1988.lampt.eeecs.qub.ac.uk";
$user= "goneill1988";
$conn=new mysqli($host,$user,$pw,$db);

if($conn->connect_error){
    echo "Connection failed: ".$conn->connect_error;
}

$table_festival_artists="festival_artists";
$table_festival_users="festival_users";
$table_pendingApplications="festivalPendingApplications";
$table_name2="festival_Date_and_Times";
?>


























