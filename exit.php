<?php
session_start();
require "router.php";
session_unset();
session_destroy();
go("index.php");


?>