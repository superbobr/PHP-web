<?php

$login = !empty($_GET['login']) ? $_GET['login'] : '';
$password = !empty($_GET['password']) ? $_GET['password'] : '';

if ($login === 'admin' && $password === 'Pa$$w0rd') {
    $authorized = 'Вы успешно авторизировались!';
} elseif ($login !== 'admin') {
    $authorized = 'Пользователь не найден';
} else {
    $authorized = 'Пароль неверный!';
}
?>
<html lang="ru">
<head>
    <title>Результат авторизации</title>
</head>
<body>
<p>
    <?php echo $authorized ?>
</p>
</body>
</html>
