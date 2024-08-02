<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP クラスとオブジェクト</title>
</head>
<body>
    <p>
        <?php
        class Food {
            private $name;
            private $price;

            public function __construct($name, $price) {
                $this->name = $name;
                $this->price = $price;
            }

            //--------------------------「show_price」メソッド---------------------
            public function show_price() {
                echo $this->price;
            }
            //--------------------------「show_price」メソッド---------------------

            public function __toString() {
                return "Food Object ( [name:Food:private] => {$this->name} [price:Food:private] => {$this->price} )";
            }
        }

        class Animal {
            private $name;
            private $height;
            private $weight;

            public function __construct($name, $height, $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            //--------------------------「show_height」メソッド---------------------
            public function show_height() {
                echo $this->height;
            }
            //--------------------------「show_height」メソッド---------------------

            public function __toString() {
                return "Animal Object ( [name:Animal:private] => {$this->name} [height:Animal:private] => {$this->height} [weight:Animal:private] => {$this->weight} )";
            }
        }

        $food = new Food("potato", 250);
        $animal = new Animal("dog", 60, 5000);

        echo $food . "<br>";
        echo $animal . "<br>";

        // show_priceメソッドで価格を出力
        $food->show_price();
        echo "<br>";

        // show_heightメソッドで高さを出力
        $animal->show_height();
        ?>
    </p>
</body>
</html>
