<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP 配列ソート</title>
</head>
<body>
    <p>
        <?php
        function sort_2way($array, $order) {
            if ($order === TRUE) {
                // 昇順に並び替える
                sort($array);
                echo '昇順にソートします。<br>';
            } elseif ($order === FALSE) {
                // 降順に並び替える
                rsort($array);
                echo '降順にソートします。<br>';
            }

            foreach ($array as $num) {
                echo $num . '<br>';
            }
        }

        $array = [15, 4, 18, 23, 10];
        
        // 昇順を出力
        sort_2way($array, TRUE);

        echo '<br>';

        // 降順を出力
        sort_2way($array, FALSE);
        ?>
    </p>
</body>
</html>
