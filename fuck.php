
<?php

// jsonを受け取っている
$json = file_get_contents("php://input");

// jsonを解凍している
$request = json_decode($json, true);

// 編集
// $edit = ["message" => $message];
// . '!!!!', "fuck"=>"fuck!!!????"]; 
// $edit = $message . '!!!';

$request["message"] .= "!!!!!!!!!!!";

// レスポンスを送出している
echo json_encode($request, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);



