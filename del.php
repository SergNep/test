<?php

    echo $_SERVER['DOCUMENT_ROOT'].'/index.php';
    unlink($_SERVER['DOCUMENT_ROOT'].'/index.php');
	
?>