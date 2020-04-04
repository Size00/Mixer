//////online mixer users///////////
function mixeronline($mixername) {	
    $Mixer_API_Url = 'https://mixer.com/api/v1/channels/';
	$parameter = [ 'token',
				   'online',
				   'viewersCurrent'];
	$paramtrim = rtrim(implode(',', $parameter), ',');
	$channel_URL = $Mixer_API_Url . ''.$mixername.'?' . $paramtrim; 	
	$json_details = json_decode(file_get_contents($channel_URL), true); 
	$token = $json_details['token'];
	$viewersCurrent = $json_details['viewersCurrent'];
	$online = $json_details['online'];
    if($online == 'false'){
		echo 'Online';
	}else{
		echo 'Offline';
	}
}
mixeronline('Ice_poseidon'); // Change to whatever username you want ...
//////
