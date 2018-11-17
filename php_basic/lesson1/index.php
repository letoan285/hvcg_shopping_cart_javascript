
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<?php 

// const NAME = 'Toan';

// define('AGE', 33);

// echo AGE;
// $xxx = 'gawegaweg';

//$num1 = $_GET['a'] ?? null;

//$num2 = $_GET['x'] ?? null;

//echo $num1+$num2;
//$str = "    this is my country    ";
// echo strlen($str);
// echo str_word_count($str);
//echo str_replace('my', 'your', $str);
//$str = trim($str);
//$str = explode(' ', $str);
//var_dump($str);die;
//$name = 'ghaewoghaoieg';
//die($name);
//echo "last line";
//$n  = password_hash(123456, PASSWORD_DEFAULT);
//$m = password_hash(123456, PASSWORD_DEFAULT);
//echo $m;
//echo "<br>";

//echo password_verify(123456, $m);

//$name = "LE van ToAn";

// $name = strtolower($name);

// echo ucfirst($name);
// echo ucwords($name);
// htmlentities()

//$arr = ['name'=>'hgaoewhg', 'age' => 20, 4, 'vietnam', 'title' =>'vo dich', 8];
// $arr = [1,2,3,4,5,6,7,8,9];
// $c = [];
// $l = [];

// $x = count($arr);

// for($i = 0; $i < $x; $i++){
//     if($arr[$i] %2 == 0){
//         $c[] = $arr[$i];
//     }else {
//         $l[] = $arr[$i];
//     }
// }

// print_r( $c );
// echo "<br>";

// print_r(  $l );

$products = [
    ['id'=> 1,'name'=>'product 1', 'price'=> 2000, 'image'=>'product1.png'],
    ['id'=> 2,'name'=>'product 2', 'price'=> 3000, 'image'=>'product3.png'],
    ['id'=> 3,'name'=>'product 3', 'price'=> 4000, 'image'=>'product2.png'],
    ['id'=> 4,'name'=>'product 4', 'price'=> 5000, 'image'=>'product4.png'],
    ['id'=> 5,'name'=>'product 5', 'price'=> 6000, 'image'=>'product5.png']
];
?>


	
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $key => $value): ?>
        <tr>
            <td><?= $value['id']?></td>
            <td><?= $value['name']?></td>
            <td><?= $value['price']?></td>
            <td><?= $value['image']?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

