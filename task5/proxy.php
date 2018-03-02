<?php

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_connect($socket, 'ya.ru', 80);

$send = "GET / HTTP/1.1\nHost: www.yandex.ru\n\n";

socket_send($socket, $send, strlen($send), 0);

$buf = socket_read($socket, 2048, PHP_BINARY_READ );

var_dump($buf);

