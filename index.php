<?php
$data="Hello World";
$pass="hello@Bangladesh";
$repeat= "Hello Shamim";
$auguest="This is new Bangladesh";
	echo "<h1>".$data."</h1>"."<br>";
	echo "<h1>". chunk_split($data,5,"...")."</h1>"."<br>";
	print_r(explode(" ", $data));
	echo "<h1>".$pass."</h1>"."<br>";
	echo "<h1>". md5($pass)."</h1>";
	echo "<h1>".$pass."</h1>"."<br>";
	echo "<h1>". sha1($pass)."</h1>";
	echo "<h1>".$repeat."</h1>"."<br>";
	echo "<h1>".str_repeat($repeat, 5)."</h1>"."<br>";
	echo "<h1>".$repeat."</h1>"."<br>";
	echo "<h1>".str_replace("Shamim", "Developer", $repeat)."</h1>"."<br>";
	echo "<h1>".$repeat."</h1>"."<br>";
	echo "<h1>".str_shuffle("Shamim")."</h1>"."<br>";
	print_r(str_split($repeat))."<br>";
	echo "<h1>".$auguest."</h1>"."<br>";
	echo "<h1>".str_word_count($auguest)."</h1>"."<br>";
	echo "<h1>".stripos($auguest,"Bangladesh")."</h1>"."<br>";
	echo "<h1>".strlen($auguest,)."</h1>"."<br>";


?>