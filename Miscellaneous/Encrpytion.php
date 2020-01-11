<?php 

$simple_string = "omkar"; 
echo "Original String: " . $simple_string; echo "<br>";

$ciphering = "AES-128-CTR"; 

$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 

$encryption_iv = '2345678910111211'; 

$encryption_key = "DE"; 

$encryption = openssl_encrypt($simple_string, $ciphering, 
			$encryption_key, $options, $encryption_iv); 
echo "Encrypted String: " . $encryption . "\n"; 
echo "<br>";
?>


