<?php
/*
 * @brief Get a list of states from the database
 */
$PRIVATE_ROOT=$_SERVER['DOCUMENT_ROOT']."/tist_web_private/";
include $PRIVATE_ROOT."credentials.php";
include_once $PRIVATE_ROOT."institution.php";

get_list_of_states($db);

$db->close();
?>

