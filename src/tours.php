<?include 'data.php';?>

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