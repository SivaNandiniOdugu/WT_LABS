<?php
require_once 'fbconfig.php';

$permissions = ['email']; 

$redirectURL = "http://localhost/WTFolder/callbackFB.php";

$loginURL = $helper->getLoginUrl($redirectURL, $permissions);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Facebook Login</title>
</head>
<body>

<h2>Login Using Facebook</h2>

<a href="<?php echo htmlspecialchars($loginURL); ?>">
    <button>Login with Facebook</button>
</a>

</body>
</html>