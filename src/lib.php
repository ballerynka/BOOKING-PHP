<?
function load ($name) {

$file = fopen("./data/{$name}.json", "r");
$data = json_decode(fread($file,1000000), true);
fclose($file);
return $data;

}

//$tours = load('tours');



function save($data, $name){
    $file = fopen("./data/{$name}.json", "w");
    fwrite($file, json_encode($data, JSON_PRETTY_PRINT,4));
fclose($file);
}
?>