<?php
if (isset($_POST)){
    $taskName = $_POST['taskName'];

setcookie('taskName',$taskName);

    $tasks = [];

    $cookieTasks = unserialize($_COOKIE['task']);

    if (is_array($cookieTasks)) {
        $tasks = $cookieTasks;
    }
    $newTask =
         $_POST['task'];

    array_push($tasks, $newTask);
    var_dump($tasks);

    $serTasks = serialize($tasks);
    setcookie('task', $serTasks);
    print_r(unserialize($_COOKIE['task']));
    header('Location: /');
}
