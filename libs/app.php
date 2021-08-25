<?php

    class app{
        function __construct(){
            $url = $issett($_GET['url']) ? $_GET['url'] : null;
            $url = rtrim($url , '/');
            $url = explode('/', $url);
        }
    }

?>