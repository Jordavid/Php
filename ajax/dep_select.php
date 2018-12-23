<?php

$cat = $_GET['cat'];

switch($cat){
    case "prog":
        echo "<select class=\"form-control\"><option>Java</option><option>PHP</option></select>";
        break;
    case "graph":
        echo "<select class=\"form-control\"><option>3D Max</option><option>UI/UX</option></select>";
        break;
    case "net":
        echo "<select class=\"form-control\"><option>CCNA</option><option>CCNP</option></select>";
        break;
}