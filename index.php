<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QD_Task2</title>
</head>
<body>
<?php
$taskName = $_COOKIE['taskName'];

?>
<form action="saveTask.php" method="post">

   Название задачи: <input type="text" name="taskName" placeholder="Введите название задачи" value="<?= "$taskName" ?>"> <br><br>


    <?php

    if (isset($_COOKIE['task'])) {
        $tasks = unserialize($_COOKIE['task']);
        $times = unserialize($_COOKIE['time']);
        $lastTaskArray = end($tasks);
if (empty($lastTaskArray[0])){
    array_pop($tasks);
}
        if (is_array($tasks)) {
            foreach ($tasks as $key => $task) {

                $taskText = $task[0];
                $taskTime = $times[$key][$key];

                ?>
                <input name ="task[]" type="text" value="<?= "$taskText" ?>">
                <input name="time[]" type="text" value="<?= "$taskTime" ?>">
                <button type="button" onclick="document.location='delTask.php?taskId=<?= $key ?>'">Удалить</button>
                <br>
                <?php
            }
        }
    }
    ?>
    <br>
    <input type="text" name="task[]" placeholder="Введите подпункт задачи" value="">
    <input type="text" name="time[]" placeholder="00:00" value=""> <br>
    <button type="submit">Сохранить</button>

    <button type="button" onclick="document.location = 'taskClear.php'">Отчистить</button>
    <button type="button" onclick="document.location = 'saveToFile.php'">Сохранить в файл</button>
</form>
</body>
</html>
