<?php 
require_once("includes/config.php");
// code 

if(isset($_POST["requestcancel"])) {
    $requestmessage = $_POST['newmessage'];
    $bookingid = $_POST['bookingID'];

    $sql ="UPDATE tblbooking SET message=:requestmessage WHERE id=:bookingid";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':requestmessage', $requestmessage, PDO::PARAM_STR);
    $query-> bindParam(':bookingid', $bookingid, PDO::PARAM_STR);
    $query-> execute();

    echo "<script> 
        alert('REQUEST CANCELLATION HAS BEEN SENT')
        window.location.replace('http://localhost/Online%20Car%20Rental/my-booking.php');
        </script>";
    
    

}
		



?>

