<?php
require_once('../config.php');
?>
<?php      
    include('../loginCon.php');
	session_start();
	if (isset($_SESSION['email'])){ 
	$orderId=isset($_POST['orderId']);
    $productId =$_POST['productId'];
	$email = $_SESSION["email"];
	$timestamp = date("Y/m/d");
		
		$sql2 = "select userId from eshop.users where email = '$email'";
        $result2 = mysqli_query($con, $sql2);  		
		$row1 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
		$userId=$row1['userId'];
		 
        $sql = "INSERT INTO eshop.orders (orderId,productId, userId, date) VALUES (?,?,?,?)";  
        $stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([NULL,$productId, $userId,$timestamp]);
          
        if($result){  
            echo 'order made !';	
			$sql3=" UPDATE eshop.mobilephones SET quantity = quantity - 1
              WHERE productId = '$productId'";
			  $result3 = mysqli_query($con, $sql3);
            header("Location: MyOrders.php");
			
            exit();
        }  
        else{  
            echo "Order Failed";  
        }     
    }
    else{
        header("Location: ../LogInPage.php");
    }
?>