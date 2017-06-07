<?php
session_start();
/**
 * Created by PhpStorm.
 * User: MSaqib
 * Date: 05-03-2017
 * Time: 12:06
 */

//session_unset();
session_destroy();
header('Location: index.php');
exit;