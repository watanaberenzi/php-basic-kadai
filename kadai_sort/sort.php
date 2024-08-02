<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP 配列ソート</title>
</head>
<body>
    <p>
        <?php
        function sort_2way($nums, $sort_type) {
            if ($sort_type == 'asc') {
                sort($nums);
                echo '昇順にソートします。<br>';
            } elseif ($sort_type == 'desc') {
                rsort($nums);
                echo '降順にソートします。<br>';
            }

            foreach ($nums as $num) {
                echo $num . '<br>';
            }
        }

        $nums = [15, 4, 18, 23, 10];
        
        // 昇順を出力
        sort_2way($nums, 'asc');

        echo '<br>';

        // 降順を出力
        sort_2way($nums, 'desc');
        ?>
    </p>
</body>
</html>
