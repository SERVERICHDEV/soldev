<?
function srai($lid,$msg){
	if($lid){
		$smsurl = "https://www.ai-serve.com/srai/multicast.php";
		$ch = curl_init();    // initialize curl handle
		curl_setopt($ch, CURLOPT_URL,$smsurl); // set url to post to
		curl_setopt($ch, CURLOPT_FAILONERROR, 1);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);// allow redirects
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); // return into a variable
		curl_setopt($ch, CURLOPT_TIMEOUT, 3); // times out after 4s
		curl_setopt($ch, CURLOPT_POST, 1); // set POST method
		curl_setopt($ch, CURLOPT_POSTFIELDS, "lid=$lid&msg=$msg"); // add POST fields  //
		$result = curl_exec($ch); // run the whole process
		curl_close($ch);
		return  $result;
	}
}
?>
