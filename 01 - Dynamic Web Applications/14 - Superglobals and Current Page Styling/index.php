<?php

require 'functions/functions.php';

$heading = 'Home';

// dd($_SERVER);

echo $_SERVER['REQUEST_URI'];

require 'views/index-view.php';
