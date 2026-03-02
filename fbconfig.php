<?php
require_once __DIR__ . '/vendor/autoload.php';

session_start();


$fb = new \Facebook\Facebook([
    'app_id' => '2130054191064618',
    'app_secret' => '8238de817ed404415ef7c5f2e1ecc97f',
    'default_graph_version' => 'v19.0',
    
]);

$helper = $fb->getRedirectLoginHelper();




