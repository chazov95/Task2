<?php
$cookieTasks = unserialize($_COOKIE['task']);

unset($cookieTasks[$_GET['taskId']]);
setcookie('task', serialize($cookieTasks));
header('Location: /');