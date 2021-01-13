<?php
unset($_COOKIE);
setcookie('taskName', null);
setcookie('task', null);
header('Location: http://localhost:8090');