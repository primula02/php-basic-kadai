<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai_016</title>
 </head>
 
<body> 
<p>

<?php
ini_set('display_errors', "On");
?>

<?php
  class Food {

    private $name;  // プロパティをクラス内で宣言
    private $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price() {
        return $this->price;
    }
}

class Animal {

  private $name;    // nameプロパティをクラス内で宣言
  private $height;
  private $weight;

  public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
    
    public function show_height() {
        return $this->height;
    }
}


// インスタンス化する
$Food = new Food('potato', 250);
echo '<br>';
$Animal = new Animal('dog', 60, 5000);


// インスタンス$userの各プロパティの値を出力する
print_r($Food);
echo '<br>';
print_r($Animal);


$potato = new Food('potato', 250);
echo '<br>';
$dog = new Animal('dog', 60, 5000);

echo $potato->show_price(); // priceを表示
echo '<br>';
echo $dog->show_height(); // heightを表示
?>
    </p>

</body>

</html>


