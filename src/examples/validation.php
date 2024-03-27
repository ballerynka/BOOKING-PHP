<!-- this scripts allows client to rate a hotel-->
<style>body{
    background-color: #222;
    color: white;
}</style>
<?php

$agg_rate_value = 4.5;
$agg_rate_count = 10;

if(isset($_GET['rate'])){
$rate = $_GET['rate'];
print("You've rated this app with {$rate}");
}

?>

<form action="/validation.php" method="GET">
    <input 
    type="text" 
    name="rate"
    required>
    
    <button>RATE</button>
</form>





<? if (isset($average)): ?>
<table>
<tr>
<td><?print($grade1)?></td>
<td><?print($grade2)?></td>
<td><?print($grade3)?></td>
<td><?print($average)?></td>
</tr>
</table>
<? endif ?>



<? if (isset($error)): ?>

<?print($error)?>

<? endif ?>


    
<? if (isset($error2)): ?>

<?print($error2)?>
       
<? endif ?>
