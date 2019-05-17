<?php
/**
 * Created by PhpStorm.
 * User: Kavi
 * Date: 5/16/2019
 * Time: 11:44 AM
 */

	$session_id = $_POST['session_id'];

	$current_token = sha1($session_id);

	echo json_encode(array("id" => $current_token));
?>