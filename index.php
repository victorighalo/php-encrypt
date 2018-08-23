<?php


$public = "-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCtDibQSJb+4BYr+X82IO/qekuV
vQwA3lh/IPmd9gy5oQvW0IAOnairsaknbaJiIkCSYbjd8jLFg4tDW/4cRPV8Q/hn
VWU3/LPX5N9b9btWxfsZs4ARbEbsPz0aV321WcuikrnutWz/mEWobEusT0tsvCRf
46xsTXtAKSJGMcupaQIDAQAB
-----END PUBLIC KEY-----";

$private = "-----BEGIN PRIVATE KEY-----
MIICdgIBADANBgkqhkiG9w0BAQEFAASCAmAwggJcAgEAAoGBAK0OJtBIlv7gFiv5
fzYg7+p6S5W9DADeWH8g+Z32DLmhC9bQgA6dqKuxqSdtomIiQJJhuN3yMsWDi0Nb
/hxE9XxD+GdVZTf8s9fk31v1u1bF+xmzgBFsRuw/PRpXfbVZy6KSue61bP+YRahs
S6xPS2y8JF/jrGxNe0ApIkYxy6lpAgMBAAECgYBrcI3IYkjclGMvigbgpDJPcP3c
STJal7B5vQ88crYTyViAVZIrgNZnQjWytO5L3tgYCXOs1+GNns2nVEW/Z1DAgBda
WBU1QnMYTY8PsrMs3Luqmb0iLggYuq+xtxUrZYXJLYOjWhA7q8XZQsBJuypUqfWn
Na/nWZ4j+x6gTvKwAQJBANvvpfUkYOa3CKLtExNjaXFxLPjH85kCQkL/lVrYqpr6
idBHuI5k5zsCdBPZQbarFQHSpyrYjFdB36Vx6GCUbMkCQQDJbpD1Ptfxl/kH6j+c
j+bJkAT022BMAXm/Yi96CMnywRk9/IZMjvRzZmgiuwVAakjnDUJ3P2hOxyIkcKwN
S8ehAkAglfsyvPcWd9vxt8pxvvLqeeg92/I9o1YJ8zA/y4ZLe/9bOqUfg9e2qIBm
SHQyClsMcBeQg5EXhI0MSDozxQnxAkEAwnLiqmyVB1q+gv6Fk7xyfMdzkW+owRZ3
keHVlQeg85+mn2kDuCoUHsaP5l8Fzc4MPEdXj0f9iHbBJc5CuL8boQJABox7h2xo
BjsSZJOOVt2q98bZVzJ9tqQhhJhK7eGBGmD6JKdMsEtkgTnYwIsvWo3UE6Z/pRP4
LWDPKl06YQMkEg==
-----END PRIVATE KEY-----";

$cypher =  'AES-256-CBC';
if (!$privateKey = openssl_pkey_get_private($private)) die('Loading Private Key failed');
if (!$publicKey = openssl_pkey_get_public($public)) die('Loading Public Key failed');
$encrypted = '';
$decrypted = '';
$plaintext = 'victorighalo@gmail.com';


if (!openssl_public_encrypt($plaintext, $encrypted, $publicKey))    die('Failed to encrypt data');

$newcrypt = openssl_encrypt($plaintext, $cypher, 'asdsfdfdfd', 0, 'iuiuu');

var_dump($newcrypt);

echo '<p>$encrypted = ' . $encrypted . '<p>';

if (!openssl_private_decrypt($encrypted, $decrypted, $privateKey))  die('Failed to decrypt data');

echo '<p>$decrypted = ' . $decrypted . '<p>';
