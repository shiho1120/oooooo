<?php
// 引入数据库配置文件
require("dbconfig.php");

// 检查是否传递了有效的待办事项 ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // 执行删除操作
    $sql = "DELETE FROM todo WHERE id = ?";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
        // 删除成功，重定向回待办事项列表页面
        header("Location: 1.fetch.html");
        exit;
    } else {
        // 删除失败，显示错误消息
        echo "删除失败：" . mysqli_error($db);
    }
} else {
    echo "无效的待办事项 ID";
}
?>



