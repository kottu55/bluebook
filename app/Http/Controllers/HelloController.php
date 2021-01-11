<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
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
EOF;
$body = '</head><body>';
$end = '</body></html>';
function tag ($tag, $txt) {
    return "<{$tag}>" . $txt . "</{$tag}>";

}
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
        public function index(){
            global $head, $style, $body, $end;

            $html = $head . tag('title', 'Hello/Index') . $style . $body
                . tag('h1', 'Index') . tag('p','this is index page')
                . '<a href="hello/other"> go to Other page </a>'
                . $end;
            return $html;
        }
        public function other(){
            global $head, $style, $body, $end;

            $html = $head . tag('title', 'Hello/Other') . $style . $body
                . tag('h1', 'Other') . tag('p', 'this is other page')
                . $end;
            return $html;
        }
}
