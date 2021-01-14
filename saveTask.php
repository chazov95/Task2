<?php
/*var_dump($_POST['time']);*/
if (isset($_POST)) {
/*

    $tasks = [];

    $cookieTasks = unserialize($_COOKIE['task']);

    if (is_array($cookieTasks)) {
        $tasks = $cookieTasks;
    }
    if (preg_match("/^[0-9]{2}:[0-9]{2}$/", $_POST['time'])) {

        $newTask = [
            'Body' => $_POST['task']['text'],
            'Time' => $_POST['task']['time']
        ];

        array_push($tasks, $newTask);

        $serTasks = serialize($tasks);
        setcookie('task', $serTasks);
    }*/
if (!empty($_POST['task'])){

    $tasks = $_POST['task'];

    $times = $_POST['time'];

    $cookieTasks = [];

    $cookieTimes = [];

    foreach ($tasks as $task){
        $newTask = [$task];
        array_push($cookieTasks, $newTask);
    }

    foreach ($times as $time) {
        if (preg_match("/^[0-9]{2}:[0-9]{2}$/", $time)){

            $newTime = $times;
        }
        else {
            $newTime = '0';
        }

        array_push($cookieTimes, $newTime);
    }
    $serTimes = serialize($cookieTimes);
    setcookie('time', $serTimes);

    $serTasks = serialize($cookieTasks);
    setcookie('task', $serTasks);

}

    $taskName = $_POST['taskName'];

    setcookie('taskName', $taskName);
    header('Location: /');
}
