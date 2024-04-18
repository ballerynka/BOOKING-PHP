<?
//  $file = fopen("./data/tours.json", "r");
//  $tours = json_decode(fread($file,1000000), true);
//  fclose($file);

//  require "data.php"


$tours = load('tours');



 if(isset($_POST['search'])){
    $tours = array_filter($tours, function ($tour){
       // return similar_text($tour['name'], $_POST['search']) >= 3
       // ||
       //  $_POST['search'] == '';

       return !(stripos($tour['name'], $_POST['search']) === false || $_POST['search'] == '');
    });
 
 }

if(isset($_POST['max_price']) && isset($_POST['min_price'])){

   $tours = array_filter($tours, function ($tour){

      $minPrice =(int)$_POST['min_price'];
      $maxPrice =(int)$_POST['max_price'];

 if($minPrice <=0 && $maxPrice >=0){

 return $tour['price']['amount'] <= $maxPrice;

 }else if($minPrice >=0 && $maxPrice <=0){

   return $tour['price']['amount'] >= $minPrice;

 }else if($minPrice >=0 && $maxPrice >=0){
   return $tour['price']['amount'] >= $minPrice && $tour['price']['amount'] <=$maxPrice ;
 }
   });

}


$tours= array_values($tours);


?>

<section>


<!-- FILTERS -->

<form action="/?page=tours" method="POST">
<input name="search" type="text" placeholder="enter keywords ..." value="<?$_POST['search'] ?? ''?>">
<button>SEARCH</button>
</form>


<form action="/?page=tours" method="POST">
   min price:<input type="text" name="min_price" type="text" size="10" placeholder="min-price ..." value="<?$_POST['min_price'] ?? ''?>"> 
   max price:<input type="text" name="max_price" type="text" size="10" placeholder="max-price ..." value="<?$_POST['max_price'] ?? ''?>">
   <button>SEARCH</button>
  
</form>

<!-- FILTERS -->
<ul>
   <? for($i=0; $i <count($tours); $i++){?>
<li>
   <h2><?=$tours[$i]['name']?><?if($tours[$i]['offer']){?><img class="offer" src="<?="https://www.academyofclinicalmassage.com/wp-content/uploads/2015/01/special-summer-offer-turqoise.png"?>" alt=""><?}?></h2>

   <img src="<?=$tours[$i]['photo']?>" alt="" width='100%' height="300">

<p class="description"><?=$tours[$i]['description']?></p>
   <div>Duration of vacation : <?=$tours[$i]['duration']['quantity']?><?=' '?><?=$tours[$i]['duration']['definition']?></div>
   <div>Price : <?=$tours[$i]['price']['amount']?><?=' '?><?=$tours[$i]['price']['currency']?></div>

</li>


<?}?>
</ul>

</section>