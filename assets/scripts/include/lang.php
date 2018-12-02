<?php
	if (empty($_SERVER["HTTP_ACCEPT_LANGUAGE"])) {
		$setlang = 'de';
	} else {
		$setlang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		$acceptlang = ['cs', 'de', 'en', 'fr', 'it', 'ja'];
		$setlang = in_array($setlang, $acceptlang) ? $setlang : 'en';
	}
?>