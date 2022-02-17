
<?php
header("Content-type: text/html;charset=Shift-JIS");
    date_default_timezone_set('Asia/Manila');
 $server_date_time = date('y-M-d H.i.s.u.A');
$username = "IRCS_OTOSHI";
$password = "IRCS_OTOSHI";
$database = "172.25.119.1/fsib";
$conn = oci_connect($username, $password, $database);
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}else{
    // echo 's';
}