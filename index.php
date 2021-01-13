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
$key = 0;
?>
<form action="saveTask.php" method="post">

<input  type="text" name="taskName" placeholder="Название задачи" value="<?php echo "$taskName"?>"> <br>


Добавить подзадачу
<button type="submit"> +</button> <br>
    <?php
    $tasks = unserialize($_COOKIE['task']);
    foreach ($tasks as $task) {

        echo ++$key,'.  ', $task; ?>
        <br>
        <button onclick="document.location='del.php?taskId=<?= $key ?>'">Удалить</button>
    <?php
    }
    ?>
    <input  type="text" name="task" placeholder="Новая задача" value=""> <br>
    <button type="submit">Сохранить задачу</button>
<button type="button" onclick="document.location = 'taskClear.php'">Новая задача</button>
<button type="button">Сохранить в файл</button>
</form>
</body>
</html>
