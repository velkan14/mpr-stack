<?php

echo "Hello";

exit;

include_once("Route.php");

$request = $_SERVER['REQUEST_URI'];

$route = new Route("", "");

echo paths_match("/", "/") ? 'true' : 'false';
echo paths_match("/bundles", "/abc") ? 'true' : 'false';
echo paths_match("/bundles/1234", "/bundles") ? 'true' : 'false';
echo paths_match("/bundles/1234", "/bundles/:id") ? 'true' : 'false';
echo paths_match("/bundles", "/users/bundles") ? 'true' : 'false';
echo paths_match("/bundles:", "/bundles") ? 'true' : 'false';

echo (print_r(parse_url($request)));
