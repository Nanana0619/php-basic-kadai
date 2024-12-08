<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>課題16章</title>
 </head>
 
 <body>
     <p>
         <?php
         // クラスを定義する
         class Food {
             // プロパティを定義する
             private $name;
             private $price;

             // メソッドを定義する
             public function show_price(int $price) {
                 $this->price = $price;
             }

             // コンストラクタを定義する
             public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
             }
         }

         // クラスを定義する
         class Animal {
             // プロパティを定義する                        
             private $name;
             private $height;
             private $weight;

             public function show_height(int $height) {
                $this->height = $height;
             }
 
             // コンストラクタを定義する
             public function __construct(string $name, int $height, int $weight) {
                 $this->name = $name;
                 $this->height = $height;
                 $this->weight = $weight;
             }
         }

         // インスタンス化する
         $potato = new Food('potato', 250);
         print_r($potato);
         echo '<br>';

         $dog = new Animal('dog', 60, 5000);
         print_r($dog);
         echo '<br>';

         $potato->show_price(250);
         $dog->show_height(60);
         
         ?>
     </p>
 </body>
 
 </html>