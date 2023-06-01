<?php
 $rep=filter_input(INPUT_GET, "rep");
header("location: view.php");
include "ubdate.php";
include "view.php";
include "index.php";
 ?>