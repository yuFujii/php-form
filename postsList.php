<?php
require_once './module/database.php';
$db = getSqlDatabase();
$result = $db->query('SELECT * FROM post');

?>
<h1>投稿一覧</h1>
<ul>
    <?php
    foreach ($result as $key => $row) {
        ?>
        <li class="post">
            <p>名前 : <?php echo $row["name"] ?></p>
            <p>メールアドレス : <?php echo $row["email"] ?></p>
            <p>ウェブアドレス : <?php echo $row["website"] ?></p>
            <p>性別 : <?php echo $row["gender"] ?></p>
            <p>コメント</p>
            <p><?php echo $row["comment"] ?></p>
        </li>
        <?php
    }
    ?>
</ul>
