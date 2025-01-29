<?php
    ini_set('display_errore', 1);
    error_reporting(E_ALL);

    try {
        $file = fopen("non_existence_file.txt", "r");
        if (!$file) {
            throw new Exception("File not found!");
        }
    } catch (Exception $e) {
        error_log($e->getMessage(), 3, "error_log.txt");
        echo "Something went wrong. Please try again later.";
    }
    ?>