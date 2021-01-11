<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
class HelloController extends Controller
{
    public function params($id='noname', $pass='unknown'){
        return <<<EOF
<html>
    <head>
    <title>Hello/Index</title>
    </head>
    <style>
        body{
            font-size: 16px;
            color: #999;
        }
        h1{
            font-size: 100pt;
            text-align: right;
            color: #eee;
            margin: -40px 0px -50px 0px;
        }
    </style>
    <body>
        <h1>Index</h1>
        <p>これは、HelloコントローラのParamsアクションです。</p>
        <ul>
        <li>ID: {$id}</li>
        <li>PASS: {$pass}</li>
        </ul>
    </body>
</html>
EOF;
    }
        public function index(Request $request, Response $response){
        $html = <<<EOF
<html>
    <head>
    <title>Hello/Index</title>
    </head>
    <style>
        body{
            font-size: 16px;
            color: #999;
        }
        h1{
            font-size: 100pt;
            text-align: right;
            color: #eee;
            margin: -40px 0px -50px 0px;
        }
    </style>
    <body>
        <h1>Hello</h1>
        <p>これは、HelloコントローラのIndexアクションです。</p>
        <ul>
        <li><b>request</b></li>
        <li>{$request}</li>
        <li><b>response</b></li>
        <li>{$response}</li>
        </ul>
    </body>
</html>
EOF;
            $response->setContent($html);
            return $response;
        }
        public function other(){
            global $head, $style, $body, $end;

            $html = $head . tag('title', 'Hello/Other') . $style . $body
                . tag('h1', 'Other') . tag('p', 'this is other page')
                . $end;
            return $html;
        }
}
