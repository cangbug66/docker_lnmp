<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2020/3/29
 * Time: 17:34
 */
//var_export(phpinfo());

$redis = new Redis();
$conn = $redis->connect("192.168.10.10",1079);
var_export("conn:",$conn);
var_export($redis->set("name","yuwen"));
//$http = new Swoole\Http\Server("0.0.0.0", 9501);
//
//$http->on('request', function ($request, $response) {
//    var_dump($request->get, $request->post);
//    $response->header("Content-Type", "text/html; charset=utf-8");
//    $response->end("<h1>Hello Swoole. #".rand(1000, 9999)."</h1>");
//});
//
//$http->start();

//$server = new Swoole\WebSocket\Server("0.0.0.0", 9501);
//
//$server->on('open', function (Swoole\WebSocket\Server $server, $request) {
//    echo "server: handshake success with fd{$request->fd}\n";
//});
//
//$server->on('message', function (Swoole\WebSocket\Server $server, $frame) {
//    echo "receive from {$frame->fd}:{$frame->data},opcode:{$frame->opcode},fin:{$frame->finish}\n";
//    $server->push($frame->fd, "this is server");
//});
//
//$server->on('close', function ($ser, $fd) {
//    echo "client {$fd} closed\n";
//});
//
//$server->start();