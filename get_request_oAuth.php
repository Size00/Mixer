  
function mixer(){
$url = 'https://mixer.com/api/v1/'; 
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, 
array('Content-Type: application/json; charset=utf-8', 'Authorization: Bearer ttlpmeOT5QuNbdN2c2IvHz8KY0VAwhrorc1o8BshdyxUGSoYLU1dpz8B5MaP28lR'));
$result = curl_exec($ch);
curl_close($ch);
print_r ($result);
 }
mixer();

// You could use this function to make simple get request but need your own Authorization <token> 
// later ill use scopes and add POST request in another script
