function mixerclips($id){
$clips_jd = json_decode(file_get_contents('https://mixer.com/api/v1/clips/channels/'.$id), true);
foreach($clips_jd as $clip){
	echo 'https://mixer.com/Ice_Poseidon?clip='.$clip['shareableId'].'<br>';
 }
}
mixerclips('15759230'); // mixers user_id
