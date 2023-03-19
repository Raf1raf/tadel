تستسسن<?php
$API_KEY = "توكنك";
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);

function bot($method,$datas=[]){
  $PvPPPP = "https://api.telegram.org/bot".API_KEY."/".$method;
  $SeroDatas = http_build_query($datas);
  $BerRo = file_get_contents($PvPPPP.'?'.$SeroDatas);
  return json_decode($BerRo);
}

Echo "
// ملف رشق مدفوع كسر كل بوتات التلي 🎉
#BY B E R O ~ @PVPPPP ~ @SERO_BOTS 
";

// ملف رشق مدفوع كسر كل بوتات التلي 🎉
#BY B E R O ~ @PVPPPP ~ @SERO_BOTS 
#تغير حقوق اغتصب امك
//شغل ملفك ولاتلعب بهاي الحقوق مثل ماوضحتلك فوك 🌐

$update = json_decode(file_get_contents('php://input'));
$message= $update->message;
$text = $message->text;
$chat_id= $message->chat->id;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$a = strtolower($text);
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$tc = $message->chat->type  ;



	$nmbr = "07" ; #رقمك اسيا
$admin = 5561152568;
$chnl = "@SocialPlsBot" ;


$sudo = "$admin";

if($update->message->group_chat_created or $update->message->new_chat_member->username == bot('getme','bot')->result->username) {
	bot('sendMessage',[
       'chat_id'=>$chat_id ,
        'text'=>"ماشتغل بكروبات انا ✅" ,
    ]);
    bot('leaveChat',[ 
'chat_id'=>$chat_id, 
]);
 
	exit;
	} 
if($text and $from_id != $sudo){
bot('forwardMessage',[
'chat_id'=>$sudo,
'from_chat_id'=>$chat_id,
  'message_id'=>$update->message->message_id,
'text'=>$text,
]);
}
if($message->reply_to_message->forward_from->id and $from_id == $sudo){
    bot('sendMessage',[
       'chat_id'=>$message->reply_to_message->forward_from->id,
        'text'=>$text,
    ]);
    bot('sendmessage',[
       'chat_id'=>$sudo,
        'text'=>"
تم ارسال لرساله
",
]);
}

$ckl = $chnl; # معرف لقناة ويه @
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$ckl."&user_id=".$from_id);
$getch2 = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$ckl))->result;
$Namech2 = $getch2->title;
$getch2li = str_replace("@","",$ckl);
if($message && (strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
*
📣 ⁞ عليك الأشتراك في قناة البوت.
*
📢 ⁞ قناة البوت : [$ckl] 
*
📡 ⁞ اشترك بلقناة بعدها ارسل /start .
*
", 
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>$Namech2,'url'=>"https://t.me/$getch2li"]],
]])
]);return false;}

$hui = "@sero_bots" ; # معرف لقناة ويه @
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$hui."&user_id=".$from_id);
$getch2 = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$hui))->result;
$Namech2 = $getch2->title;
$getch2li = str_replace("@","",$hui);
if($message && (strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
*
📣 ⁞ عليك الأشتراك في قناة البوت.
*
📢 ⁞ قناة البوت : [$hui] 
*
📡 ⁞ اشترك بلقناة بعدها ارسل /start .
*
", 
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>$Namech2,'url'=>"https://t.me/$getch2li"]],
]])
]);return false;}
$Api_Tok = "توكن" ;#توكن لموقع
if(isset($update->callback_query)){

$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = $up->from->username;
$name = $up->from->first_name;
$message_id = $up->message->message_id;
$data = $up->data;
$tc = $up->chat->type ;
}

$rshq = json_decode(file_get_contents("rshq.json"),true);


$rsedi = json_decode(file_get_contents("https://kd1s.com/api/v2?key=$Api_Tok&action=balance"));
$flos = $rsedi->balance; 
$treqa = $rsedi->currency; 

if($text == "/start") {
	if($chat_id == $admin ) {
	bot('sendMessage',[
'chat_id'=>$chat_id,

'text'=>"
*
◉︙قسم الرشق 
يمنك اضافه او خصم نقاط
يمكن قفل استقبال الرشق وفتحها
يمكنك صنع هدايا 
*

رصيدك في الموقع : *$flos$*
العمله : *$treqa*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
     [['text'=>"اضافه او خصم نقاط",'callback_data'=>"coins" ]],
     [['text'=>"صنع كود هديه",'callback_data'=>"hdiamk" ]],
     [['text'=>"فتح استقبال الرشق",'callback_data'=>"onrshq" ], ['text'=>"قفل استقبال الرشق",'callback_data'=>"ofrshq" ]], 
     

]
])
]);
$rshq['mode'][$from_id]  = null;
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
}
}


if($data == "back") {
	if($chat_id == $admin ) {
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
◉︙قسم الرشق 
يمنك اضافه او خصم نقاط
يمكن قفل استقبال الرشق وفتحها
يمكنك صنع هدايا 
*

رصيدك في الموقع : *$flos$*
العمله : *$treqa*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
     [['text'=>"اضافه او خصم نقاط",'callback_data'=>"coins" ]],
     [['text'=>"صنع كود هديه",'callback_data'=>"hdiamk" ]],
     [['text'=>"فتح استقبال الرشق",'callback_data'=>"onrshq" ], ['text'=>"قفل استقبال الرشق",'callback_data'=>"ofrshq" ]], 
     
]
])
]);
$rshq['mode'][$from_id]  = null;
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
}
}

if($data == "hdiamk" and $chat_id == $admin ) {
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
ارسل عدد النقاط داخل الهديه 

*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"back" ]],
       
      ]
    ])
]);
    $rshq['mode'][$from_id]  = "hdiMk";
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
} 

# - الملف كتابه بيرو @PvPPPP 
$rnd=rand(999,99999);
if($text and $rshq['mode'][$from_id] == "hdiMk") {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   
  تم اضافة كود هدية جديد
 - - - - - - - - - - - - - - - - - - 
 الكود : `Bero". $rnd."`
 عدد النقاط : $text
 - - - - - - - - - - - - - - - - - - 
 بوت الرشق المجاني : [@".bot('getme','bot')->result->username. "] 
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"admin" ]],
       
      ]
    ])
]);
$rshq["Bero".$rnd]  = "on|$text";
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
} 
if($data == "onrshq") {
	if($chat_id == $admin ) {
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
تم فتح استقبال الرشق
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
     
     [['text'=>"رجوع",'callback_data'=>"rshaq" ]], 
]
])
]);
$rshq['rshaq']  = "on";
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
}
}

# - الملف كتابه بيرو @PvPPPP# 
if($data == "ofrshq") {
	if($chat_id == $admin ) {
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
تم قفل استقبال الرشق
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
     
     [['text'=>"رجوع",'callback_data'=>"rshaq" ]], 
]
])
]);

$rshq['rshaq']  = "of";
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
}
}

if($data == "coins" and $chat_id == $admin ) {
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
ارسل ايدي الشخص الان

*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"back" ]],
       
      ]
    ])
]);
    $rshq['mode'][$from_id]  = "coins";
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
} 

if($text and $rshq['mode'][$from_id] == "coins") {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   
   ارسل عدد النقاط لاضافته للشخص
   
اذا تريد تخصم كتب ويا - 
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"admin" ]],
       
      ]
    ])
]);
$rshq['mode'][$from_id]  = "coins2";
$rshq['id'][$from_id]  = "$text";
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
} 

if($text and $rshq['mode'][$from_id] == "coins2") {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   
  تم اضافه $text ل". $rshq['id'][$from_id]. "
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"admin" ]],
       
      ]
    ])
]);
$rshq['mode'][$from_id]  = null;
$rshq["coin"][$rshq['id'][$from_id]] += $text;
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
} 

$rshq = json_decode(file_get_contents("rshq.json"),true);
if(!$rshq){
	bot('sendMessage',[
   'chat_id'=>$admin,
   'text'=>"
   *
~ تم ضبط الاعدادات تلقائيا ✨
*
  ", 
  'parse_mode'=>"markdown",
]);
	$rshq['rshaq'] = "✅" ;
	$rshq= json_encode($rshq,32|128|265);
    file_put_contents("rshq.json",$rshq); 
	} 
$rshaq = $rshq['rshaq'];
if($rshaq == "on") {
	$rshaq = "✅" ;
	} else {
		$rshaq = "❌" ;
		} 
$coin = $rshq["coin"][$from_id];
$bot_tlb = $rshq['bot_tlb'];
$mytl = $rshq["cointlb"][$from_id];
$share = $rshq["mshark"][$from_id] ;
$coinss = $rshq["coinss"][$from_id];
$tlby =$rshq["tlby"][$from_id];
if($rshq["coin"][$from_id] == null) {
	$coin = 0;
	}
	if($rshq["tlby"][$from_id] == null) {
	$tlby = 0;
	}
	if($rshq["coinss"][$from_id] == null) {
	$coinss = 0;
	}
	if($rshq["mshark"][$from_id] == null) {
	$share = 0;
	}
	if($rshq["cointlb"][$from_id] == null) {
	$mytl = 0;
	}
	if($rshq['bot_tlb'] == null) {
	$bot_tlb = 0;
	}

$e=explode("|", $data) ;
$e1=str_replace("/start",null,$text); 
if($text == "/start$e1" and is_numeric($e1) and !preg_match($text,"#Bero#")) {
	if(!in_array($e1, $rshq["3thu"])){
		if($e1 != $from_id) {
			if(!in_array($from_id , $rshq["3thu"])){
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
لقد دخلت لرابط الدعوه الخاص بصديقك وحصل علي *5* نقاط

  ", 
  'parse_mode'=>"markdown",
]);
bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
اهلا بك في البوت..
 عدد نقاطك : $coin
 📮| عدد الطلبات المكتملة في البوت: *$bot_tlb*
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"الخدمات ⭐",'callback_data'=>"service" ]],
     [['text'=>"الحساب ℹ️",'callback_data'=>"acc" ], ['text'=>"جمع النقاط",'callback_data'=>"plus" ]],
     [['text'=>"شرح البوت",'callback_data'=>"info" ],['text'=>"كود هديه",'callback_data'=>"hdia" ]], 
     [['text'=>"تحويل النقاط 💲",'callback_data'=>"transer" ]],
     [['text'=>"شراء النقاط 🎉",'callback_data'=>"buy" ],['text'=>"شحن النقاط التلقائي",'callback_data'=>"Asiacell" ]],
       [['text'=>"استقبال الرشق : $rshaq",'callback_data'=>"mstqbll"]],
       
      ]
    ])
]);
$rshq["3thu"][] = $from_id ;
$rshq["coin"][str_replace(" ", null, $e1)] += 5;
$rshq["mshark"][str_replace(" ", null, $e1)] += 1;
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq); 
} else {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
اهلا بك في البوت..
 عدد نقاطك : $coin
 📮| عدد الطلبات المكتملة في البوت: *$bot_tlb*
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"الخدمات ⭐",'callback_data'=>"service" ]],
     [['text'=>"الحساب ℹ️",'callback_data'=>"acc" ], ['text'=>"جمع النقاط",'callback_data'=>"plus" ]],
     [['text'=>"شرح البوت",'callback_data'=>"info" ],['text'=>"كود هديه",'callback_data'=>"hdia" ]], 
     [['text'=>"تحويل النقاط 💲",'callback_data'=>"transer" ]],
     [['text'=>"شراء النقاط 🎉",'callback_data'=>"buy" ],['text'=>"شحن النقاط التلقائي",'callback_data'=>"Asiacell" ]],
       
       [['text'=>"استقبال الرشق : $rshaq",'callback_data'=>"mstqbll"]],
      ]
    ])
]);
} 
} else {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
لايمكنك الدخول لرابط الدعوه الخاص بك✅
  ", 

]);
bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
اهلا بك في البوت..
 عدد نقاطك : $coin
 📮| عدد الطلبات المكتملة في البوت: *$bot_tlb*
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"الخدمات ⭐",'callback_data'=>"service" ]],
     [['text'=>"الحساب ℹ️",'callback_data'=>"acc" ], ['text'=>"جمع النقاط",'callback_data'=>"plus" ]],
     [['text'=>"شرح البوت",'callback_data'=>"info" ],['text'=>"كود هديه",'callback_data'=>"hdia" ]], 
     [['text'=>"تحويل النقاط 💲",'callback_data'=>"transer" ]],
     [['text'=>"شراء النقاط 🎉",'callback_data'=>"buy" ],['text'=>"شحن النقاط التلقائي",'callback_data'=>"Asiacell" ]],
       [['text'=>"استقبال الرشق : $rshaq",'callback_data'=>"mstqbll"]],
       
      ]
    ])
]);
} 
} else {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
اهلا بك في البوت..
 عدد نقاطك : $coin
 📮| عدد الطلبات المكتملة في البوت: *$bot_tlb*
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"الخدمات ⭐",'callback_data'=>"service" ]],
     [['text'=>"الحساب ℹ️",'callback_data'=>"acc" ], ['text'=>"جمع النقاط",'callback_data'=>"plus" ]],
     [['text'=>"شرح البوت",'callback_data'=>"info" ],['text'=>"كود هديه",'callback_data'=>"hdia" ]], 
     [['text'=>"تحويل النقاط 💲",'callback_data'=>"transer" ]],
     [['text'=>"شراء النقاط 🎉",'callback_data'=>"buy" ],['text'=>"شحن النقاط التلقائي",'callback_data'=>"Asiacell" ]],
       [['text'=>"استقبال الرشق : $rshaq",'callback_data'=>"mstqbll"]],
       
      ]
    ])
]);
} 
} 

# - الملف كتابه بيرو @PvPPPP! #

if($text == "/start") {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
اهلا بك في البوت..
 عدد نقاطك : $coin
 📮| عدد الطلبات المكتملة في البوت: *$bot_tlb*
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"الخدمات ⭐",'callback_data'=>"service" ]],
     [['text'=>"الحساب ℹ️",'callback_data'=>"acc" ], ['text'=>"جمع النقاط",'callback_data'=>"plus" ]],
     [['text'=>"شرح البوت",'callback_data'=>"info" ],['text'=>"كود هديه",'callback_data'=>"hdia" ]], 
     [['text'=>"تحويل النقاط 💲",'callback_data'=>"transer" ]],
     [['text'=>"شراء النقاط 🎉",'callback_data'=>"buy" ],['text'=>"شحن النقاط التلقائي",'callback_data'=>"Asiacell" ]],
       [['text'=>"استقبال الرشق : $rshaq",'callback_data'=>"mstqbll"]],
       
      ]
    ])
]);
 }
 
 if($data == "buy") {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
اسعار النقاط داخل البوت
  5000 نقطة = 5$
  10000 نقطة = 10$
  20000 نقطة = 20$
  40000 نقطة = 40$

لشراء النقاط : @PvPPPP 
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[

     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
} 


if($data == "tobot") {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
اهلا بك في البوت..
 عدد نقاطك : $coin
 📮| عدد الطلبات المكتملة في البوت: *$bot_tlb*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"الخدمات ⭐",'callback_data'=>"service" ]],
     [['text'=>"الحساب ℹ️",'callback_data'=>"acc" ], ['text'=>"جمع النقاط",'callback_data'=>"plus" ]],
     [['text'=>"شرح البوت",'callback_data'=>"info" ],['text'=>"كود هديه",'callback_data'=>"hdia" ]], 
     [['text'=>"تحويل النقاط 💲",'callback_data'=>"transer" ]],
     
     [['text'=>"شراء النقاط 🎉",'callback_data'=>"buy" ],['text'=>"شحن النقاط التلقائي",'callback_data'=>"Asiacell" ]],
       [['text'=>"استقبال الرشق : $rshaq",'callback_data'=>"mstqbll"]],
       
      ]
    ])
]);
} 

$rshq = json_decode(file_get_contents("rshq.json"),true);
if($data == "hdia") {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
ارسل رمز الهدية الان
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
    $rshq['mode'][$from_id]  = "hdia";
   
    
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
} 


if($data == "transer") {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
ارسل عدد النقاط لتحويله 🎉
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
    $rshq['mode'][$from_id]  = $data;
   
    
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
} 


$MakLink = substr(str_shuffle('AbCdEfGhIjKlMnOpQrStU12345689807'),1,13);
if(is_numeric($text) and $rshq['mode'][$from_id] == "transer") {
	if($rshq["coin"][$from_id] >= $text) {
		if(!preg_match('/+/',$text) or !preg_match('/-/',$text) ){
			if($text >= 20) {
		bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
تم صنع رابط تحويل بقيمه $text نقاط 💲
- وتم استقطاع *$text* من نقاطك ➖

الرابط : https://t.me/". bot('getme','bot')->result->username. "?start=Bero$MakLink

ايدي وصل التحويل : `". base64_encode($MakLink). "`

صار عدد نقاطك : *". $rshq["coin"][$from_id]. "*
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]);
$rshq["coin"][$from_id] -= $text;
$rshq['mode'][$from_id]  = null;
$rshq['thoiler'][$MakLink]["coin"] = $text;
$rshq['thoiler'][$MakLink]["to"] = $from_id;
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
} 
else 
{
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
يمكنك تحويل نقاط اكثر من 20 فقط
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]);
} 

 } 
else
 {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
لاتحاول استخدام الكلجات سيتم حظرك عام؟ 👎
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]);
	} 
	} else {
		bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
نقاطك غير كافيه ❌🗣️
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]);
} 
		} 
	
if($text and $rshq['mode'][$from_id] == "hdia") {
	if(explode("|", $rshq[$text])[0] == "on") {
		if($rshq['mehdia'][$from_id][$text] !="on" ) {
		bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
~ لقد حصلت علي". explode("|", $rshq[$text])[1]. " نقطه من كود الهديه
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]);
bot('sendMessage',[
   'chat_id'=>$admin,
   'text'=>"
هذا اخذ كود الهديه بقيمه".explode("|", $rshq[$text])[1]."
 
 ~ [$name](tg://user?id=$chat_id) 
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]);
$rshq['mode'][$from_id] = null;
$rshq['mehdia'][$from_id][$text] = "on" ;
$rshq["coin"][$from_id] += explode("|", $rshq[$text])[1];
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
} else {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   انت مستخدم الكود من قبل
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]);
	} 
	} else {
		bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
كود الهدية خطأ
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]);
$rshq['mode'][$from_id]  = null;
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
		} 
	} 
if($data == "plus") {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
🔰 #متابعين مجاناً لـ انستقرام

    أول بوت رسمي لزيادة المتابعين مجانا
    
    اضغط على الرابط في الأسفل للحصول على المتابعين مجاناً، يمكنك مشاركة الرابط لزيادة المزيد من المتابعين مجاناً. 
    
https://t.me/". bot('getme','bot')->result->username. "?start=$from_id
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
[['text'=>"شراء النقاط 🎉",'callback_data'=>"buy" ],['text'=>"شحن النقاط التلقائي",'callback_data'=>"Asiacell" ]],
       [['text'=>"استقبال الرشق : $rshaq",'callback_data'=>"mstqbll"]],
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
} 

if($data == "info") {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
البوت الاول في التليجرام لزيادة متابعين الانستقرام بشكل فوري و سريع و بنسبة ثبات 99% 

    كل ماعليك هو دعوة اصدقائك من خلال الرابط الخاص بك وستحصل على متابعين مقابل كل شخص تحصل تدعوه تحصل على 10 نقاط
    
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
} 


if($data == "mstqbll") {
	if($rshq['rshaq'] == "on") {
	$ster = "مفتوح ✅" ;
	$wsfer = "يمكنك الرشق ✅" ;
	} else {
		$ster = "مقفل ❌" ;
		$wsfer = "لايمكنك الرشق حاليا اجمع نقاط لحد ما ينفتح ❌" ;
		} 
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
استقبال الرشق $ster
- $wsfer
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);

} 

# - الملف كتابه بيرو @PvPPPP) #
# بـيــرو @PvPPPP - @JJJNTJ 

$e1=str_replace("/start Bero",null,$text); 
if(preg_match('/start Bero/',$text)){
	if($rshq['thoiler'][$e1]["to"] != null) {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
  لقد حصلت علي *". $rshq['thoiler'][$e1]["coin"]. "* نقاط من رابط التحويل
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
bot('sendMessage',[
   'chat_id'=>$rshq['thoiler'][$e1]["to"],
   'text'=>"
   تحويل مكتمل 💯
   
   معلومات الي دخل للرابط ✅
 اسمه : [$name](tg://user?id=$chat_id)
 ايديه : `$from_id`
 
 وتم تحويل". $rshq['thoiler'][$e1]["coin"]." نقاط لحسابه
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
$rshq['thoiler'][$e1]["to"] = null;
$rshq["coin"][$from_id] += $rshq['thoiler'][$e1]["coin"];
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
} else {
	bot('sendMessage',[
   'chat_id'=>$from_id, 
   'text'=>"
   رابط التحويل هذا غير صالح ❌
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
	} 
} 
if($data == "acc") {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
🔰 نقاطك: $coin
🔰 الدعوات: $share
🔰 النقاط المصروفة: $mytl
🔰 الايدي: `$from_id`

معلومات اكثر عن حساب {[@$user]}
▪️اموالك المسترجعة جزئيا :". $coinss. "
طلباتك بداخل البوت : $tlby طلب 📂.
▪️طلباتك المكتملة :". $tlby. "
 ➖➖➖➖➖➖➖
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
} 

 if($data == "service") {
 	if($rshaq == "✅") {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
اختر الخدمة المطلوبة
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'متابعين ثابتين' ,'callback_data'=>"type|thbt"], ['text'=>'متابعين غير ثابتين' ,'callback_data'=>"type|mthbt"]],
[['text'=>'متابعين حقيقيين' ,'callback_data'=>"type|hq"]],
[['text'=>'لايكات' ,'callback_data'=>"type|like"], ['text'=>'مشاهدين' ,'callback_data'=>"type|view"]],
[['text'=>'معلومات طلب' ,'callback_data'=>"infotlb"]],
[['text'=>'رجوع' ,'callback_data'=>"tobot"]],
]])
]);
} else {
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
تم قفل استقبال الرشق عزيزي

اجمع نقاط الان علماينفتح الرشق
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[

[['text'=>'رجوع' ,'callback_data'=>"tobot"]],
]])
]);
	} 
} 


if($data == "infotlb") {
 	
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
ارسل ايدي الطلب الان
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"tobot"]],
]])
]);
    $rshq['mode'][$from_id]  = $data;
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
}

if(is_numeric($text) and $rshq['mode'][$from_id] == "infotlb"){
	if($rshq["order"][$text] != null){
		$req = json_decode(file_get_contents("https://kd1s.com/api/v2?key=$Api_Tok&action=status&order=".$rshq["order"][$text]));
$startcc = $req->start_count; //224
$status = $req->remains; 
if($status == "0"){
	$s= "طلب مكتمل 🟢";
	}else{
		$s="قيد الانتضار ....";
		}
		bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
معلومات الطلب ،
حاله الطلب : $s
العدد قبل الرشق : $startcc
  ", 
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>'تحديث' ,'callback_data'=>"updates|".$rshq["order"][$text]]],
     [['text'=>'رجوع' ,'callback_data'=>"tobot"]],
       
      ]
    ])
]);
$rshq['mode'][$from_id]  = null;
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
}
}

if($e[0] == "updates"){
	$req = json_decode(file_get_contents("https://kd1s.com/api/v2?key=$Api_Tok&action=status&order=".$e[1]));
$startcc = $req->start_count; 
$status = $req->remains; 
if($status == "0"){
	$sberero= "طلب مكتمل 🟢";
	}else{
		$sberero="قيد الانتضار ....";
		}
		bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
تحديث رقم (".rand(9999,999999).")
معلومات الطلب ،
حاله الطلب : $sberero
العدد قبل الرشق : $startcc
  ", 
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>'تحديث' ,'callback_data'=>"updates|".$e[1]]],
     [['text'=>'رجوع' ,'callback_data'=>"tobot"]],
       
      ]
    ])
]);
	}
if($e[0] == "type"){
	
	if($e[1] == "thbt" or $e[1] == "mthbt" or $e[1] == "hq" ) {
		$typee = "متابعين" ;
		} elseif($e[1] == "view"){
			$typee = "مشاهدات";
			}elseif($e[1] == "like"){
				$typee = "لايكات";
				}
		
		if($e[1] == "thbt") {
			$s3r = 1;
			}
			if($e[1] == "mthbt") {
			$s3r = 2;
			}
			if($e[1] == "hq") {
			$s3r = 0.2;
			}
			if($e[1] == "view") {
			$s3r = 25;
			}
			
			if($e[1] == "like") {
			$s3r = 18;
			}
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
اختر عدد ال$typee المطلوب
    ~ عدد نقاطك الآن: $coin
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'العدد' ,'callback_data'=>"type|$thbt"], ['text'=>'السعر' ,'callback_data'=>"type|$mthbt"]],
[['text'=>$nm.$s3r*25,'callback_data'=>"to|25|$e[1]"], ['text'=>'25 نقطه' ,'callback_data'=>"to|25|$e[1]"]],
[['text'=>$nm.$s3r*50,'callback_data'=>"to|50|$e[1]"], ['text'=>'50 نقطه' ,'callback_data'=>"to|50|$e[1]"]],
[['text'=>$nm.$s3r*100,'callback_data'=>"to|100|$e[1]"], ['text'=>'100 نقطه' ,'callback_data'=>"to|100|$e[1]"]],
[['text'=>$nm.$s3r*200,'callback_data'=>"to|200|$e[1]"], ['text'=>'200 نقطه' ,'callback_data'=>"to|200|$e[1]"]],
[['text'=>$nm.$s3r*300,'callback_data'=>"to|300|$e[1]"], ['text'=>'300 نقطه' ,'callback_data'=>"to|300|$e[1]"]],
[['text'=>$nm.$s3r*400,'callback_data'=>"to|400|$e[1]"], ['text'=>'400 نقطه' ,'callback_data'=>"to|400|$e[1]"]],
[['text'=>'كميات كبيره' ,'callback_data'=>"kmiat|".$e[1]]],
[['text'=>'رجوع' ,'callback_data'=>"tobot"]],
]])
]);
} 

if($e[0] == "kmiat"){
	
	if($e[1] == "thbt" or $e[1] == "mthbt" or $e[1] == "hq" ) {
		$typee = "متابعين" ;
		} elseif($e[1] == "view"){
			$typee = "مشاهدات";
			}elseif($e[1] == "like"){
				$typee = "لايكات";
				}
		
		if($e[1] == "thbt") {
			$s3r = 1;
			}
			if($e[1] == "mthbt") {
			$s3r = 2;
			}
			if($e[1] == "hq") {
			$s3r = 0.2;
			}
			if($e[1] == "view") {
			$s3r = 25;
			}
			
			if($e[1] == "like") {
			$s3r = 18;
			}
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
اختر عدد ال$typee المطلوب
    ~ عدد نقاطك الآن: $coin
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'العدد' ,'callback_data'=>"type|$thbt"], ['text'=>'السعر' ,'callback_data'=>"type|$mthbt"]],
[['text'=>$nm.$s3r*1000,'callback_data'=>"to|1000|$e[1]"], ['text'=>'1000 نقطه' ,'callback_data'=>"to|1000|$e[1]"]],
[['text'=>$nm.$s3r*2000,'callback_data'=>"to|2000|$e[1]"], ['text'=>'2000 نقطه' ,'callback_data'=>"to|2000|$e[1]"]],
[['text'=>$nm.$s3r*4000,'callback_data'=>"to|4000|$e[1]"], ['text'=>'4000 نقطه' ,'callback_data'=>"to|4000|$e[1]"]],
[['text'=>$nm.$s3r*8000,'callback_data'=>"to|8000|$e[1]"], ['text'=>'8000 نقطه' ,'callback_data'=>"to|8000|$e[1]"]],
[['text'=>$nm.$s3r*10000,'callback_data'=>"to|10000|$e[1]"], ['text'=>'10000 نقطه' ,'callback_data'=>"to|10000|$e[1]"]],
[['text'=>$nm.$s3r*20000,'callback_data'=>"to|20000|$e[1]"], ['text'=>'20000 نقطه' ,'callback_data'=>"to|400|$e[1]"]],

[['text'=>'رجوع' ,'callback_data'=>"type|". $e[1]]],
]])
]);
} 


if($e[0] == "to") {
	if($coin >= $e[1]){
		if($rshaq == "✅") {
			
	if($e[2] == "thbt") {
		$tlbia = "متابعين ثابتين 📌👤" ;
			$nm = "يوزر حسابك بدون @" ;
			$s3r = $e[1]*1;
			}
			if($e[2] == "mthbt") {
			$nm = "يوزر حسابك بدون @" ;
			$tlbia = "متابعين غير ثابتين ⭐" ;
			$s3r = $e[1]*2;
			}
			if($e[2] == "hq") {
				$tlbia = "متابعين حقيقيين 👤" ;
			$nm = "يوزر حسابك بدون @" ;
			$s3r = $e[1]*0.5;
			}
			if($e[2] == "view") {
				$tlbia = "مشاهدات 👁️" ;
			$nm = "رابط المنشور" ;
			$s3r = $e[1]*25;
			}
			if($e[2] == "like") {
				$tlbia = "لايكات ❤️" ;
			$nm = "رابط المنشور" ;
			$s3r = $e[1]*15;
			}
			
			bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
 ~ تم استقطاع *$e[1]* من نقاطك. 
*
ارسل $nm
*
",
'parse_mode'=>"markdown",
]);
$rshq['3dd'][$from_id][$from_id]  = $s3r;
    $rshq['mode'][$from_id]  = "to";
    $rshq["coin"][$from_id] -= $e[1];
    $rshq["tlbia"][$from_id] = $tlbia;
    $rshq["cointlb"][$from_id] += $e[1];
    $rshq["s3rltlb"][$from_id] = $e[1];
    $rshq['tp'][$from_id] = $e[2];
    $rshq['coinn'] = $s3r;
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
} else {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
تم قفل استقبال الرشق عزيزي

اجمع نقاط الان علماينفتح الرشق
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[

[['text'=>'رجوع' ,'callback_data'=>"tobot"]],
]])
]);
} 

} else {
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
نقاطك غير كافية
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"جمع النقاط",'callback_data'=>"plus" ]],
       
      ]
    ])
]);
} 
} 

$rshqaft =$rshq['bot_tlb']+1;
$rnd = rand(9999999,9999999999);
if($text and $rshq['mode'][$from_id]  == "to") {
	
	if($rshq['tp'][$from_id] == "thbt") {
			$nm = "يوزر حسابك" ;
			$tp = "متابع" ;
			$inid =9650;
			}
			if($rshq['tp'][$from_id] == "mthbt") {
			$nm = "يوزر حسابك" ;
			$tp = "متابع" ;
			$inid =9650;
			}
			if($rshq['tp'][$from_id] == "hq") {
			$nm = "يوزر حسابك" ;
			$tp = "متابع" ;
			$inid =9650;
			}
			if($rshq['tp'][$from_id] == "view") {
			$nm = "رابط المنشور" ;
			$tp = "مشاهد" ;
			$inid =5132;
			}
			if($rshq['tp'][$from_id] == "like") {
			$nm = "رابط المنشور" ;
			$tp = "لايك" ;
			$inid =9168;
			}
			
			
			$requst = json_decode(file_get_contents("https://kd1s.com/api/v2?key=$Api_Tok&action=add&service=$inid&link=$text&quantity=". $rshq['3dd'][$from_id][$from_id]));
$idreq = $requst->order; 
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
تم ارسال طلبك بنجاح ✅
- - - - - - - - - - - - - - - - - - 
رقم طلبك : `". $rnd."`
العدد : *". $rshq['3dd'][$from_id][$from_id] . "* $tp
$nm : [$text]
- - - - - - - - - - - - - - - - - - 
سيتم ارسال ال". $tp. "ات في غصون دقائق
  ", 
 'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"طلب مراجعه الطلب ✅",'callback_data'=>"sendrq|$idreq|$rnd|". $rshq["s3rltlb"][$from_id] ]],
       
      ]
    ])
]);
bot('sendMessage',[
   'chat_id'=>$admin,
   'text'=>"
طلب جديد ✅
- - - - - - - - - - - - - - - - - - 
معلومات العضو 
ايديه : `$from_id`
يوزره : [@$user]
اسمه : [$name](tg://user?id=$chat_id)

معلومات الطلب ~
ايدي الطلب : `". $rnd. "`
". str_replace("يوزر حسابك", "يوزر", $nm). " : [$text]
العدد". $rshq['3dd'][$from_id][$from_id] . " $tp

نقاطه : ". $rshq["coin"][$from_id]. "
- - - - - - - - - - - - - - - - - - 
  ", 
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"ترجيع نقاطه",'callback_data'=>"ins|$from_id|". $rshq['coinn']]],
     [['text'=>"طلب تعويض تلقائيا",'callback_data'=>"tEwth|$idreq"]],
     [['text'=>"تصفير نقاطه",'callback_data'=>"msft|$from_id"]],
       
      ]
    ])
]);
bot('sendMessage',[
   'chat_id'=>$chnl,
   'text'=>"
✅ اكتمل طـلب الخدمة بنجاح .
- - - - - - - - - - - - - - - - - - 
ايدي الطلب : `". $rnd. "`
نوع الطلب :". $rshq["tlbia"][$from_id]. "
سعر الطلب :". $rshq["s3rltlb"][$from_id]. "
". str_replace("يوزر حسابك", "يوزر", $nm). " : [$text]
العدد ". $rshq['3dd'][$from_id][$from_id] . " $tp
حساب المشتري : [$name](tg://user?id=$chat_id)
الرقم التسلسلي للطلب : *". $rshqaft." * 
- - - - - - - - - - - - - - - - - - 
  ", 
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"Social Plus ➕",'url'=>"https://t.me/". bot('getme','bot')->result->username]],
       
      ]
    ])
]);
$rshq["order"][$rnd]= $idreq;
$rshq["tlby"][$from_id] += 1;
$rshq['3dd'][$from_id][$from_id]  = null;
    $rshq['mode'][$from_id]  = null;
    $rshq['bot_tlb']+= 1;
    
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
} 
 
if($e[0] == "msft" and $from_id == $admin) {
	$requst = json_decode(file_get_contents("https://kd1s.com/api/v2?key=$Api_Tok&action=refil&order=$e[1]"));
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

تم تصفير نقاطه ✅
ايديه : [$e[1]](tg://user?id=$e[1]])

",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
$rshq["coin"][$e[1]] = 0;
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq); 
	} 
	
if($e[0] == "tEwth" and $from_id == $admin) {
	$requst = json_decode(file_get_contents("https://kd1s.com/api/v2?key=$Api_Tok&action=refil&order=$e[1]"));
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

تم طلب تعويض تلقائي للطلب
ايدي الطلب `$e[1]`

",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
	} 
	
	if($e[0] == "sendrq" and $from_id == $admin) {
	$requst = json_decode(file_get_contents("https://kd1s.com/api/v2?key=$Api_Tok&action=refil&order=$e[1]"));
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

تم طلب مراجعه طلبك بنجاح ✅
ايدي الطلب `$e[2]`

",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);

bot('sendMessage',[
   'chat_id'=>$admin,
   'text'=>"
طلب مراجعه للطلب عزيزي المطور ✨
- - - - - - - - - - - - - - - - - - 
ايدي الطلب : `". $e[2]. "`
الي داز الطلب : [$name](tg://user?id=$chat_id)
- - - - - - - - - - - - - - - - - - 
  ", 
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"ترجيع نقاطه",'callback_data'=>"ins|$from_id|". $e[3]]],
       
      ]
    ])
]);
	} 

if($e[0] == "ins" and $from_id == $admin) {
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

تم ارجاع $e[2] نقاط لحساب [$e[1]](tg://user?id=$e[1])

",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"back" ]],
       
      ]
    ])
]);
$rshq["coin"][$e[1]] += $e[2];

$rshq["coinss"][$e[1]] += $e[2];
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
	}
	
	if($data == "Asiacell") {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
اهلا بك في قسم الشحن التلقائي ✨

يمكنك شحن نقاطك تلقائيا من خلال هذا القسم 🔥
    
    يمكنك شحن نقاطك من خلال (ارسال كارت اسيا، تحويل الرصيد) 
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"شحن عن طريق تحويل الرصيد",'callback_data'=>"rsedd|thoil" ], ['text'=>"شحن عن طريق كارتات",'callback_data'=>"rsedd|cart" ]],
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
} 

if($e[0] == "rsedd") {
	
	if($e[1] == "thoil") {
		$TypeShhn = "تحويل الرصيد" ;
		$ws = "
حول الرصيد الي هذا الرقم ($nmbr) 💠

في حال حولت الرصيد ارسل رقمك للبوت ليتم تأكيد طلبك ♻️
" ;
		} elseif($e[1] == "cart") {
			$TypeShhn = "كارت اسيا" ;
			$ws = "الان ارسل رقم الكارت ✴️" ;
			} 
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
  ⚡ : رائع لقد تخترت الشحن عن طريق ($TypeShhn) 
  - $ws
*

",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
$rshq['shhn'][$from_id] = $e[1];
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
} 
 
 
 if(is_numeric($text) and $rshq['shhn'][$from_id ] != null) {
 	if($rshq['shhn'][$from_id] == "thoil") {
		$TypeShhn = "تحويل الرصيد" ;
		$ws = "
رقمك : $text


" ;
$mshkl = "مامحول الرصيد سيتم حظرك نهائيا من البوت" ;
		} elseif($rshq['shhn'][$from_id] == "cart") {
			$TypeShhn = "ارسال كارت اسيا" ;
			$ws = "رقم الكارت : `$text`" ;
			$mshkl = "ارسلت رقم الكارت غلط سيتم حظرك نهائيا من البوت" ;
			} 
 bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
  نوع طلبك : $TypeShhn
  $ws
  سيتم مراجعه طلبك خلال 24 ساعه في حال كنت $mshkl
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);

bot('sendMessage',[
   'chat_id'=>$admin,
   'text'=>"
طلب شحن تلقائي ✅

الشحن عن طريق : $TypeShhn

". str_replace("رقمك", "رقم الشخص", $ws). "
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"تأكيد طلبه ⚡",'callback_data'=>"ok|". $from_id ]],
       
      ]
    ])
]);
$rshq['shhn'][$from_id] = null;
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
} 

if($e[0] == "ok") {
	if($chat_id == $admin) { 
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
  تم تأكيد طلبه بنجاح ✅
  *
  ايدي الشخص `$e[1]`
  ~ [$e[1]](tg://user?id=$e[1])
  
  الآن ارسل عدد النقاط المراد ارسال له


",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
$rshq['mode'][$from_id]  = "shneru" ;
$rshq['coi'][$from_id]  = $e[1] ;
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
} 
} 

if(is_numeric($text) and $rshq['mode'][$from_id]== "shneru" ){
	if($chat_id == $admin) {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   تم تأكيد طلبه في الشحن التلقائي و
 تم ارسال $text نقاط ل [$name](tg://user?id=$chat_id) 
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"back" ]],
       
      ]
    ])
]);
bot('sendMessage',[
   'chat_id'=>$rshq['coi'][$from_id], 
   'text'=>"
~ تم تأكيد طلبك بنجاح (شحن التلقائي) ✅

وتم ارسال $text نقاط لحسابك
  ", 
  'parse_mode'=>"markdown",
  
]);
$rshq['mode'][$from_id]  = null ;
$rshq["coin"][$rshq['coi'][$from_id]] += $text;
$rshq['coi'][$from_id] = null; 
$rshq= json_encode($rshq,32|128|265);
file_put_contents("rshq.json",$rshq);
} 
}
