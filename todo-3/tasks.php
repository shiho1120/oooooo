<!DOCTYPE html>
<html>
<head>
    <title>已完成和未完成的待辦事項</title>
</head>
<body>
    <h1>未完成的待辦事項</h1>
    <ul>
        <?php
        require("dbconfig.php");

        // 查询未完成的待办事项
        $sqlIncomplete = "SELECT * FROM todo WHERE status != '已完成'";
        $resultIncomplete = mysqli_query($db, $sqlIncomplete);

        while ($row = mysqli_fetch_assoc($resultIncomplete)) {
             echo "<li>{$row['jobName']} - 緊急程度: {$row['jobUrgent']} - 工作說明: {$row['jobContent']}</li>";
        }
        ?>
    </ul>

    <h1>已完成的待辦事項</h1>
    <ul>
        <?php
        // 查询已完成的待办事项
        $sqlComplete = "SELECT * FROM todo WHERE status = '已完成'";
        $resultComplete = mysqli_query($db, $sqlComplete);

        while ($row = mysqli_fetch_assoc($resultComplete)) {
            echo "<li>{$row['jobName']} - 緊急程度: {$row['jobUrgent']} - 工作說明: {$row['jobContent']}</li>";
        }
        ?>
    </ul>
</body>
</html>



