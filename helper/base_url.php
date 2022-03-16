<?php

function baseURL($uri = null)
{
    $url = 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
    $url = parse_url($url, PHP_URL_SCHEME) . '://' . parse_url($url, PHP_URL_HOST);
    $base_url = trim($url, "/");
    $path =  $base_url . "/php-oop-database/$uri";
    return $path;
}

function explodePath($uri = null)
{
    $url = 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
    $url = parse_url($url, PHP_URL_SCHEME) . '://' . parse_url($url, PHP_URL_HOST);
    $base_url = trim($url, "/");
    $path =  $base_url . "/php-oop-database/$uri";
    $path =  explode("/", $path);
    return $path;
}
