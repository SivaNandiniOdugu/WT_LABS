<?php
require_once 'fbconfig.php';

try {
    $accessToken = $helper->getAccessToken();
} catch (Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

if (!isset($accessToken)) {
    echo "Access Denied!";
    exit;
}

try {
    $response = $fb->get('/me?fields=id,name,email', $accessToken);
} catch (Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
}

$user = $response->getGraphUser();

$_SESSION['fb_id'] = $user['id'];
$_SESSION['fb_name'] = $user['name'];
$_SESSION['fb_email'] = $user['email'];

echo "<h3>Login Successful</h3>";
echo "Name: " . $user['name'] . "<br>";
echo "Email: " . $user['email'] . "<br>";