<?php
include 'include.php';
include 'dbInfo.php';
$postedData1 = $_SESSION['formPostData'];
$new=$postedData1['policy_no'];
$query = "SELECT policy_no, Renewal_date, Premium, Policy_Amt,policy_status  FROM  polic WHERE policy_no=$new";
$resultObj3 = $connection->query($query);
$row1 = $resultObj3->fetch_assoc();

#$postedData1 = $_SESSION['formchngData'];
#print_r($postedData1)


?>
<!DOCTYPE html>
<html>
<head>
<title>THIRD PAGE</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<div id="form3">
<div>
<label>policy_no:</label> 
<span><?=$postedData1['policy_no']?></span>
</div>		
<div>
<label>Renewal_date:</label>
<span><?=$postedData1['Renewal_date']?></span>
</div>
<div>
<label>Premium</label>
<span><?=$postedData1['Premium']?></span>
</div>
<div>
<label>Policy_Amt</label>
<span><?=$postedData1['Policy_Amt']?></span>
</div>
<div>
<label>Policy_status</label>
<span><?=$row1['policy_status']?></span>
</div>
</body>
</html>
