<?php
include('GemzoneDecrypt.php');

class decryptservice extends GemzoneDecrypt {


    function __construct(){
        $this->text = "dfewrewfwefewrf";
        $this->$text = '';
        $this->$encrypted = '';
        $this->$decrypted = '';
    }
    static function Encrypt(){
    if (!$publicKey = openssl_pkey_get_public(self::getPublicKey())) die('Loading Public Key failed!');
    if (!openssl_public_encrypt($text, $encrypted, $publicKey)) die('Failed to encrypt data');
    echo '<p>$encrypted = ' . $encrypted . '<p>';
    }

    static function Decrypt(){
        if (!$privateKey = openssl_pkey_get_private(self::getPrivateKey())) die('Loading Private Key failed!');
        var_dump($privateKey);
        if (!openssl_private_decrypt(self::$encrypted, self::$decrypted, $privateKey)) die('Failed to decrypt data');
        echo '<p>$decrypted = ' . self::$decrypted . '<p>';
        }
}

decryptservice::Encrypt();

// if (!$privateKey = openssl_pkey_get_private($private)) die('Loading Private Key failed');
// if (!$publicKey = openssl_pkey_get_public($public)) die('Loading Public Key failed');
// $encrypted = '';
// $decrypted = '';
// $plaintext = 'victorighalo@gmail.com';


// if (!openssl_public_encrypt($plaintext, $encrypted, $publicKey))    die('Failed to encrypt data');

// $newcrypt = openssl_encrypt($plaintext, $cypher, 'asdsfdfdfd', 0, 'iuiuu');

// var_dump($newcrypt);

// echo '<p>$encrypted = ' . $encrypted . '<p>';

// if (!openssl_private_decrypt($encrypted, $decrypted, $privateKey))  die('Failed to decrypt data');

// echo '<p>$decrypted = ' . $decrypted . '<p>';