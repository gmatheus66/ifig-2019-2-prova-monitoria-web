<?php

require 'config.php';

unset($_SESSION['user']);

header('location: index.php');

?>