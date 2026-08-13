<?php


// connect db

$config = require "config.php";
$db = new Database($config['database']);

// page heading
$pageHeading = "My Notes";


$notes = $db->query("select * from notes where user_id=1")->findAll();


require "views/notes.view.php";