<?php  
	header("Content-Type:text/html;charset=utf-8");
    date_default_timezone_set('PRC');   
    $data = file_get_contents('php://input');  
    $data = json_decode($data, true); 
	$chatmsg = $data['chatmsg'] ?? null;
	$chatname = $data['chatname'] ?? null;
	$uname = $data['uname'] ?? null;
	$username = $data['username'] ?? null;


// 定义 JSON 文件路径  
$jsonFilePath = '../chat/'.$chatname.'.json';  
  

// 读取 JSON 文件内容  
$jsonContent = file_get_contents($jsonFilePath);  
  
// 将 JSON 内容解析为 PHP 数组  
$dataArray = json_decode($jsonContent, true);  

// 准备聊天消息数据  
$chatData =[ [$username,date("Y-m-d H:i:s"),$chatmsg,"text"] ] ;  

  
// 读取现有的聊天数据（如果有的话）  
$existingChatData = [];  
if (file_exists($jsonFilePath)) {  
    $existingChatData = json_decode(file_get_contents($jsonFilePath), true);  
    if (!is_array($existingChatData)) {  
        $existingChatData = []; // 如果解码失败，则初始化为空数组  
    }  
}  
  
// 合并新的聊天数据到现有数据中  
$updatedChatData = array_merge($existingChatData, $chatData);  
ksort($updatedChatData); // 保持键的顺序（可选）  
  
// 将更新后的聊天数据写回文件  
file_put_contents($jsonFilePath, json_encode($updatedChatData, JSON_PRETTY_PRINT));  
  

// 响应成功（可选）  
echo json_encode(["static" => "200", "msg" => "发送成功！"]);  
?>