<?
//  $file = fopen("./data/tours.json", "r");
//  $tours = json_decode(fread($file,1000000), true);
//  fclose($file);

//  require "data.php"


$tours = load('tours');



// if(isset($_POST['search'])){
//    $tours = array_filter($tours, function ($tour){
//       return similar_text($tour['name'], $_POST['search']) >= 3;
//    });
// 
// }





?>
<section>

<!-- FILTERS -->

<form action="/?page=tours" method="post">
<input name="search" type="text" placeholder="enter keywords ...">
<button>SEARCH</button>
</form>



<ul>
   <? for($i=0; $i <count($tours); $i++){?>
<li>
   <h2><?=$tours[$i]['name']?><?if($tours[$i]['offer']){?><img class="offer" src="<?=OFFER_STICKER?>" alt=""><?}?></h2>

   <img src="<?=$tours[$i]['photo']?>" alt="" width='100%' height="300">

<p class="description"><?=$tours[$i]['description']?></p>
   <div>Duration of vacation : <?=$tours[$i]['duration']['quantity']?><?=' '?><?=$tours[$i]['duration']['definition']?></div>
   <div>Price : <?=$tours[$i]['price']['amount']?><?=' '?><?=$tours[$i]['price']['currency']?></div>

</li>


<?}?>
</ul>

</section>