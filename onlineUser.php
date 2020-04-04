//////online mixer users///////////
function mixeronline($mixername) {	
    $Mixer_API_Url = 'https://mixer.com/api/v1/channels/';
    $parameter = ['token',
	          'online',
	          'viewersCurrent'];
	$paramtrim = rtrim(implode(',', $parameter), ',');
	$channel_URL = $Mixer_API_Url . ''.$mixername.'?' . $paramtrim; 	
	$json_details = json_decode(file_get_contents($channel_URL), true); 
	$token = $json_details['token'];
	$viewersCurrent = $json_details['viewersCurrent'];
	$online = $json_details['online'];
    if($online == 'false'){
		echo $token.' is Online <br/>';
	}else{
		echo $token.' is Offline <br/>';
	}
}
mixeronline('Ice_poseidon'); // Change to whatever username you want ...

//////////loop through multiple users //////////
$users = ["ice_poseidon", "LunaLaVinci", "RubylaRouge", "GlamVonGrimm", "Covent", "ViciouZz"]; // you could also get user names from your database
foreach ($users as $user)
{ 
 echo mixeronline($user);
}
//////////////////////////////////////////////////////
/////////////////////////////////////////////////////
/////////////////////////////////////////////////////

function mixerOnlineV2(){
    $Mixer_API_Url = 'https://mixer.com/api/v1/channels/';
	$parameter = [ 'token',
		       'online',
		       'viewersCurrent'];
	$paramtrim = rtrim(implode(',', $parameter), ',');
	$users = array("ice_poseidon", "LunaLaVinci", "RubylaRouge", "GlamVonGrimm", "Covent", "ViciouZz"); // you could get users from your database
        $uao = new ArrayObject($users);
	$uao->asort(); // this is really needed but could be useful for other things.	
	foreach ($uao as $key) {
	$channel_URL = $Mixer_API_Url . ''.$key.'?' . $paramtrim; 	
	$json_details = json_decode(file_get_contents($channel_URL), true); 
	$token = $json_details['token'];
	$viewersCurrent = $json_details['viewersCurrent'];
	$online = $json_details['online'];
	if($online == 'false'){
		echo $token.' is Online <br/>';
	}else{
		echo $token.' is Offline <br/>';
	 }
    }		
}	

mixerOnlineV2();
/////////////////////////////////////////////////////
////////////////////////////////////////////////////
////////////////////////////////////////////////////
