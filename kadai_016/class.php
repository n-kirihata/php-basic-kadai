<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP_kadai_016</title>
</head>

<body>
<p>
    <?php
    // 「Food」クラスを作成
    //  「name」「price」プロパティを定義
    class Food {
        private $name;
        private $price;

        // 「price」プロパティの値を出力する「show_price」メソッドを作成
        public function show_price(int $price) {
            echo $this->price . '<br>';
        }

        // プロパティに値を代入するコンストラクタを作成
        public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
        }
    }

    // 「Animal」クラスを作成
    // 「name」「height」「weight」プロパティを定義
    class Animal {
        private $name;
        private $weight;
        private $height;

        public function show_height(int $height) {
            echo $this->height . '<br>';
        }

        public function __construct(string $name, int $weight, int $height) {
            $this->name = $name;
            $this->weight = $weight;
            $this->height = $height;
        }
    }

    // それぞれのクラスを元に任意の引数を渡してインスタンスを作成
    $food = new Food('potato', 250);
    $animal = new Animal('dog', 60, 5000);
    
    // print_r関数を使いそれぞれのインスタンスを出力
    print_r($food);
    echo '<br>';
    print_r($animal);
    echo '<br>';

    // それぞれのクラスに作成したメソッドにアクセスしメソッドを実行
    $food->show_price(250);
    $animal->show_height(5000);
    ?>
</p>   
</body>
</html>