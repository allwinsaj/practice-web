<?php

include 'include.php';
include 'dbInfo.php';

if(count($_POST) > 0)
{
    $row=[];
for ($x = 0; $x<2; $x++) {

  $row[$x] = $resultObj->fetch_assoc();
  if($_POST['pol_no']==$row[$x]["policy_no"]){
    $_SESSION['formPostData'] =$row[$x] ;
    header('Location: final.php');
  }
 
}
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Renew Policy</title>
		
    </head>
    <body>
		
            <form method="post" action="index.php" >
         
                    <label>policy number</label>
                    <input type="text" name="pol_no">
                       <br>
               	
              <input type="submit" name="submit" value="Search">
               
            </form>
        
        
	</body>
</html>

<?php

$resultObj->close();
$connection->close();

?>