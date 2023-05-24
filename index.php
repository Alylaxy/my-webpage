<?php

//removed router.php to test database

require 'functions.php';
// require 'router.php';
require 'Database.php';

$db = new Database;

$posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_OBJ);

dd($posts);