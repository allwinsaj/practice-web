<?php

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if($connection->connect_errno)
{
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}

$query = "SELECT policy_no, Renewal_date, Premium, Policy_Amt,policy_status  FROM  polic ORDER BY policy_no";
$resultObj = $connection->query($query);
#$query1 = "UPDATE polic SET policy_status='renewed' WHERE policy_no=123";
#$resultObj1 = $connection->query($query1);
#$query2 = "UPDATE polic SET policy_status='not_renewed' WHERE policy_no=123";
#$resultObj2 = $connection->query($query2);
?>