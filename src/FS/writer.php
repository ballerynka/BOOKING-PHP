<? 










// get client_name from url (method GET)
// save the name inside a text file
if(isset($_GET['client_name'])){
    $client_name = $_GET['client_name'];
//save to file
$file = fopen("./client.txt", "w");
fwrite($file, $client_name);
fclose($file);

}else{
    print('client_name parametr missing');
}

?>