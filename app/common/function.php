<?php
    function url($can){
        $can=explode("/",$can);
        echo "index.php?c=".$can[0]."&a=".$can[1];
    }
