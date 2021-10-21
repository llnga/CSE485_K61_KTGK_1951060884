<?php
include('../backend/config.php');
$sql = "DELETE FROM blood_recipient WHERE reci_id='" . $_GET["reci_id"] . "'";
if (mysqli_query($conn, $sql)) {
    Header('location: http://localhost/CSE485_K61_KTGK_1951060884/');
} else {
    Header('location: http://localhost/CSE485_K61_KTGK_1951060884/error.php');
}
mysqli_close($conn);

?>