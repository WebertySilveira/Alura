<?php

require_once __DIR__ . "/src/Model/Product.php";

(new Product())->deleteProduct($_POST['id']);
header("Location: admin.php");