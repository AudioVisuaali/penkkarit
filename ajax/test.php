<?php
// Require core
require_once("../core/library.php");

// echo result
echo json_encode($account->createNewAccount($_POST));
echo json_encode($database->isUniqueUserInfo("username","asasd"));
 ?>
