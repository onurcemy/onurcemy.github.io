<?php
/*
 * @brief Get a list of institutions that a given user is a member of
 */
$PRIVATE_ROOT=$_SERVER['DOCUMENT_ROOT']."/tist_web_private/";
include $PRIVATE_ROOT."credentials.php";
include_once $PRIVATE_ROOT."institution.php";

$user_id=$_SESSION["user_id"];

get_list_of_user_institutions($user_id, $db);

$db->close();
?>

