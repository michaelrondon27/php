<?php

require '../vendor/autoload.php';
require '../config/database.php';

$products = App\Entities\Product::gat();
include "../resources/views/lists.php";