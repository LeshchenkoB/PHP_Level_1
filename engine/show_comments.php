<?php
$sql = "SELECT * FROM comments ORDER BY id DESC";
$commentsIn_bd = mysqli_query($connect, $sql);