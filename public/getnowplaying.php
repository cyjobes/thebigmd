<?php
/*
	$vars = json_encode($_POST);
	$Handle2 = fopen("vars.txt", "w");
	fwrite($Handle2, $vars); 
	fclose($Handle2);
*/
If ((isset($_POST["xpwd"])) && (isset($_POST["title"]))) {
	$xpwd= stripcslashes($_POST["xpwd"]);
	if ($xpwd== "JaneWay1?") {
		$data = stripcslashes($_POST["title"]);

		$Handle = fopen("NowPlaying.txt", "w");
		fwrite($Handle, $data); 
		fclose($Handle);
	}
} Else {
	echo "Go away!";
}