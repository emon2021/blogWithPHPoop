<?php
session_start();
session_destroy();
header("location: login.php?at_first_login");