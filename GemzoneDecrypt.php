<?php

class GemzoneDecrypt { 
    protected $public = "-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCtDibQSJb+4BYr+X82IO/qekuV
vQwA3lh/IPmd9gy5oQvW0IAOnairsaknbaJiIkCSYbjd8jLFg4tDW/4cRPV8Q/hn
VWU3/LPX5N9b9btWxfsZs4ARbEbsPz0aV321WcuikrnutWz/mEWobEusT0tsvCRf
46xsTXtAKSJGMcupaQIDAQAB
-----END PUBLIC KEY-----";

protected $private = "-----BEGIN PRIVATE KEY-----
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

    public function getPrivateKey(){
        return $this->private;
    }

    public function getPublicKey(){
        return $this->public;
    }
}