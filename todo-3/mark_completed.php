<?php
// 引入數據庫配置文件
require("dbconfig.php");

// 獲取要標示為已完成的ID
$taskId = $_GET['id'];

// 更新數據庫中相應待辦事項的 status 列的值為 "已完成"
$sql = "UPDATE todo SET status = '已完成' WHERE id = ?";
$stmt = mysqli_prepare($db, $sql);
mysqli_stmt_bind_param($stmt, "i", $taskId);
if (mysqli_stmt_execute($stmt)) {
    // 标记成功
    echo "待辦事項已標記為完成。";
} else {
    // 标记失败
    echo "標記失敗。";
}

// 可以添加返回链接
?>


