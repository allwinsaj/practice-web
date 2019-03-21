<?php
include 'include.php';
include 'dbInfo.php';


#print "<pre>";
#print_r($_SESSION);
#print "</pre>";


$postedData = $_SESSION['formPostData'];
#print_r($postedData);

if($postedData['policy_status']=="renewed"){
    $num=$postedData['policy_no'];
    $query1 = "UPDATE polic SET policy_status='not_renewed' WHERE policy_no=$num";
    $resultObj1 = $connection->query($query1);
    #$query2 = "UPDATE polic SET policy_status='not_renewed' WHERE policy_no=$num";
    #$resultObj2 = $connection->query($query2);
    #$_SESSION['formchngData'] =$resultObj1 ;
    echo $resultObj1;
    #echo "HIIIIIIIIIIII";
    #$query = "UPDATE polic SET policy_status='renewed' WHERE policy_no=$postedData['policy_no']";
    #$resultObj1 = $connection->query($query);
    #header('Location: last.php');
}
else
{
    $_SESSION['formchngData'] = $resultObj2 ;
}


?>


<!DOCTYPE html>
<html>
    <head>
        <title>recieved details</title>
        <link rel="stylesheet" type="text/css" href="style.css">
		
    </head>
    <body>
    
    <form method="post" action="last.php" id="form2">
               <div>
                <label>policy_no:</label> 
                <span><?=$postedData['policy_no']?></span>
            </div>		
            <div>
                <label>Renewal_date:</label>
                <span><?=$postedData['Renewal_date']?></span>
            </div>
            <div>
                <label>Premium</label>
                <span><?=$postedData['Premium']?></span>
            </div>
            <div>
                <label>Policy_Amt</label>
                <span><?=$postedData['Policy_Amt']?></span>
            </div>
            <div>
                <label>Policy_status</label>
                <span><?=$postedData['policy_status']?></span>
            </div>
            <input type="submit" name="submit" value="Renew">
            </form>
	</body>
</html>
