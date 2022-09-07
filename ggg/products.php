
<?php
$connect2=mysqli_connect('localhost','root','','product');
$sql2='SELECT * FROM `phones`';
$res2=mysqli_query($connect2,$sql2);
$products=[];
while ($row2=$res2->fetch_assoc()){
    $products[$row2['id']]=$row2;
 }
 return $products;
?>


<?php
// $products=[
//     [
//         'id'=>'1',
//         'title'=>'',
//         'img'=>'https://tgrad.kz/upload/iblock/e8d/e8d4d24cac3be5021dda61d859d22fa5.webp',
//         'price'=>'13000',
//         'button'=>'Купить',
//         'text'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam beatae cumque, <br> dolorem doloribus eaque error illo, iure molestiae non nulla officiis perferendis repellat reprehenderit sed temporibus totam velit vero!'
//     ],
//     [
//         'id'=>'2',
//         'title'=>'',
//         'img'=>'https://tgrad.kz/upload/iblock/e8d/e8d4d24cac3be5021dda61d859d22fa5.webp',
//         'price'=>'13000',
//         'button'=>'Купить',
//         'text'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam beatae cumque, <br> dolorem doloribus eaque error illo, iure molestiae non nulla officiis perferendis repellat reprehenderit sed temporibus totam velit vero!'
//     ],
//     [
//         'id'=>'3',
//         'title'=>'',
//         'img'=>'https://images.satu.kz/93746493_w640_h640_dell-alienware-17.jpg',
//         'price'=>'13000',
//         'button'=>'Купить',
//         'text'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam beatae cumque, <br> dolorem doloribus eaque error illo, iure molestiae non nulla officiis perferendis repellat reprehenderit sed temporibus totam velit vero!'

//     ],
//     [

//         'id'=>'4',
//         'title'=>'Компютер',
//         'img'=>'https://avatars.mds.yandex.net/i?id=b596d3ed6770f7e76de7377a13e26d95-5354201-images-thumbs&n=13',
//         'price'=>'13000',
//         'button'=>'Купить',
//         'text'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam beatae cumque, <br> dolorem doloribus eaque error illo, iure molestiae non nulla officiis perferendis repellat reprehenderit sed temporibus totam velit vero!'

//     ],
//     [
//         'id'=>'5',
//         'title'=>'Компютер',
//         'img'=>'https://images.satu.kz/150620760_w640_h640_smartfon-vivo-y1s.jpg',
//         'price'=>'13000',
//         'button'=>'Купить',
//         'text'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam beatae cumque, <br> dolorem doloribus eaque error illo, iure molestiae non nulla officiis perferendis repellat reprehenderit sed temporibus totam velit vero!'

//     ],
//     [
//         'id'=>'6',
//         'title'=>'Компютер',
//         'img'=>'https://www.technodom.kz/media/catalog/product/d/6/d6896664980ddcee39274bb7abfa6a59e272f311_217406_1.jpg',
//         'price'=>'13000',
//         'button'=>'Купить',
//         'text'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam beatae cumque, <br> dolorem doloribus eaque error illo, iure molestiae non nulla officiis perferendis repellat reprehenderit sed temporibus totam velit vero!'

//     ],
//     [
//         'id'=>'7',
//         'title'=>'Компютер',
//         'img'=>'https://az.all.biz/img/az/service_catalog/17339.jpeg',
//         'price'=>'13000',
//         'button'=>'Купить',
//         'text'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam beatae cumque, <br> dolorem doloribus eaque error illo, iure molestiae non nulla officiis perferendis repellat reprehenderit sed temporibus totam velit vero!'

//     ],
    
//     [
//         'id'=>'7',
//         'title'=>'Компютер',
//         'img'=>'https://az.all.biz/img/az/service_catalog/17339.jpeg',
//         'price'=>'13000',
//         'button'=>'Купить',
//         'text'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam beatae cumque, <br> dolorem doloribus eaque error illo, iure molestiae non nulla officiis perferendis repellat reprehenderit sed temporibus totam velit vero!'

//     ],
//      [
//         'id'=>'7',
//         'title'=>'Компютер',
//         'img'=>'https://az.all.biz/img/az/service_catalog/17339.jpeg',
//         'price'=>'13000',
//         'button'=>'Купить',
//         'text'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam beatae cumque, <br> dolorem doloribus eaque error illo, iure molestiae non nulla officiis perferendis repellat reprehenderit sed temporibus totam velit vero!'

//     ],
//      [
//         'id'=>'7',
//         'title'=>'Компютер',
//         'img'=>'https://az.all.biz/img/az/service_catalog/17339.jpeg',
//         'price'=>'13000',
//         'button'=>'Купить',
//         'text'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam beatae cumque, <br> dolorem doloribus eaque error illo, iure molestiae non nulla officiis perferendis repellat reprehenderit sed temporibus totam velit vero!'

//     ],
// ];
?>