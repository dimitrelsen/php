<?php

require "config.php";

session_start();

if (SECURE_SESSION) {
    $_SESSION[SECURE_SESSION_NAME] = true;
}

header('Location: ' . ROOT_FOLDER . '?t');