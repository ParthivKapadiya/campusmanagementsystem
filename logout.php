<?php
session_start();

// Clear session data
$_SESSION = [];

// If cookies are used, expire the session cookie
if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params['path'] ?? '/',
        $params['domain'] ?? '',
        $params['secure'] ?? false,
        $params['httponly'] ?? false
    );
}

session_destroy();

header('Location: index.php');
exit();

