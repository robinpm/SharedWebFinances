<?php
$servername = "sql177.main-hosting.eu";
$username = "u714174257_admin";
$password = "purn@drak4OUFT3braw";
$dbname = "u714174257_drysql";
$charset = 'utf8mb4';

header('Access-Control-Allow-Origin: http://localhost:3000', false);

$dsn = "mysql:host=$servername;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$stmt = $pdo->query('SELECT * FROM `SharedFinances` WHERE Month(`Date`) = MONTH(CURRENT_TIMESTAMP) ORDER BY Date');

// $muhjson = json_encode($stmt->fetch());

$muhjson ='';
while ($row = $stmt->fetch()) {
    $muhjson = $muhjson.json_encode($row);
}

// Storing a string into the variable which 
// needs to be Encrypted 
$simple_string = "Welcome to W3docs\n";

// Displaying the original string 
// echo "Original String: " . $muhjson;

// Storingthe cipher method 
$ciphering = "AES-128-CTR";

// Using OpenSSl Encryption method 
$iv_length = openssl_cipher_iv_length($ciphering);
$options   = 0;

// Non-NULL Initialization Vector for encryption 
$encryption_iv = '1234567891011121';

// Storing the encryption key 
$encryption_key = "Nutt";

// Using openssl_encrypt() function to encrypt the data 
$encryption = openssl_encrypt($simple_string, $ciphering, $encryption_key, $options, $encryption_iv);

// Displaying the encrypted string 
// echo "Encrypted String: " . $encryption . "\n";
echo $encryption;

// Non-NULL Initialization Vector for decryption 
$decryption_iv = '1234567891011121';

// Storing the decryption key 
$decryption_key = "W3docs";

// Using openssl_decrypt() function to decrypt the data 
$decryption = openssl_decrypt($encryption, $ciphering, $decryption_key, $options, $decryption_iv);

// Displaying the decrypted string 
// echo "Decrypted String: " . $decryption;


