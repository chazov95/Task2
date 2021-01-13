<?php
if (isset($_POST)){
    $taskName = $_POST['taskName'];

setcookie('taskName',$taskName);

    $tasks = [];

    $cookieTasks = unserialize($_COOKIE['task']);

    if (is_array($cookieTasks)) {
        $tasks = $cookieTasks;
    }
    if (preg_match("/^[0-9]{2}:[0-9]{2}$/", $_POST['time'])) {
        $newTask = [
            'Body' => $_POST['task'],
            'Time' => $_POST['time']
        ];

        array_push($tasks, $newTask);
        var_dump($tasks);

        $serTasks = serialize($tasks);
        setcookie('task', $serTasks);
    }

    header('Location: /');
}
