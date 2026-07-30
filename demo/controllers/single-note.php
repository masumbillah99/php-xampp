<?php

$config = require "config.php";
$db = new Database($config['database']);

$pageHeading = "Note Details";

$note = $db->query("select * from notes where id = :id", [':id' => $_GET['id']])->fetch();

require "views/single-note.view.php";