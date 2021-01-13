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

<input  type="text" name="taskName" placeholder="Введите название задачи" value="<?php echo "$taskName"?>"> <br>


    <?php
    $tasks = unserialize($_COOKIE['task']);
    foreach ($tasks as $key => $task) {

        echo $key+1,'.  ', $tasks[$key]['Body'], '   ', $tasks[$key]['Time'] ?>
        <button type="button" onclick="document.location='delTask.php?taskId=<?= $key ?>'">Удалить</button>
        <br>
    <?php
    }
    ?>
    <br>
    <input  type="text" name="task" placeholder="Введите подпункт задачи" value="">
    <input  type="text" name="time" placeholder="00:00" value=""> <br>
    <button type="submit">Сохранить</button>

<button type="button" onclick="document.location = 'taskClear.php'">Отчистить</button>
<button type="button" onclick="document.location = 'saveToFile.php'">Сохранить в файл </button>
</form>
</body>
</html>
