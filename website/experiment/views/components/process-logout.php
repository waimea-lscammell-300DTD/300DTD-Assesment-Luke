<?php

require_once '_session.php';

session_destroy();

header('location: index.php');