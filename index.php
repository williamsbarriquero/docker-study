<?php

use OpenSwoole\Http\Server;
use OpenSwoole\Http\Request;
use OpenSwoole\Http\Response;

$server = new OpenSwoole\HTTP\Server("0.0.0.0", 9501);

$server->on("Start", function(Server $server)
{
    echo "OpenSwoole http server is started at http://127.0.0.1:9501\n";
});

$server->on("Request", function(Request $request, Response $response)
{
    $response->header("Content-Type", "text/plain");
    $response->end("Hello World\n");
});

$server->start();
