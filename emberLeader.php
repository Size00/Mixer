function embers_leaders(){
$sore = 'embers-alltime'; // you could change this string to 'sparks-alltime'
$c_id = '15759230'; // channelId
$url = 'https://mixer.com/api/v2/leaderboards/'.$sore.'/channels/'.$c_id.'?limit=100';
$jd_url = json_decode(file_get_contents($url), true);
foreach($jd_url as $leader){
 echo $leader['username'].' donated '. $leader['statValue'].' embers </br>';
  } 
 }
embers_leaders();
