<?php
//maneiras de adicionar um filtro a mais ou enviar conteudo para um arquivo online usando contexto tem para varias STREAMS como http , php etc...
$contexto = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => "X-From: PHP\r\nContent-Type: text/plain",
        'content' => 'Teste de corpo do request'
    ]
]);
echo file_get_contents('http://httpbin.org/post', false, $contexto);



/*$contexto = stream_context_create([
    'zip' => [
        'password' => '123456'
    ]
]);

echo file_get_contents(
    'zip://arquivos.zip#lista-cursos.txt',
    false,
    $contexto
);*/