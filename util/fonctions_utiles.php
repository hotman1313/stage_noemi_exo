<?php
	
function userExists($log, $pass){
	$json = file_get_contents('../data/members.json');
	$members = json_decode($json);
	
	foreach ($members->members as $member) {
	    if($member->login == $log && $member->password == $pass) {
			return true;
		}
	    
	}
	return false;
}
	?>
	
