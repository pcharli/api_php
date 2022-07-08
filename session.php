<?php
include 'headers.php';
session_start();
echo json_encode($_SESSION);