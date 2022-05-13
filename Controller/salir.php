<?php
session_start();
session_destroy();
echo"<script>location.href='../View/login.php';</script>";
?>