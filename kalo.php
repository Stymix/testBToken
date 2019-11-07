<?php
system('gem install lolcat');
system('apt install toilet -y');
system('clear');
system("toilet --width 33 -f pagga -F border --gay '  earning prenium ' && toilet --width 30 -f term -F border --gay '           SUBCRIBE                   Earning Prenium      ' | lolcat&& toilet --width 34 -f term '[>] creator : Sami Gaming' -F gay | lolcat && toilet --width 34 -f term '[>] support : Gift_The_Gamer' | lolcat && toilet --width 34 -f term '[>] support : Anonymes' | lolcat && toilet --width 34 -f term '[>] support : Simon_Gaming' | lolcat");
system("toilet --width 30 -f term -F border --gay '             BOT                        APP_ KALO      ' | lolcat");
$login="https://api.kalo-app.com/api/v1/login";
//Cheeck In
$in="https://api.kalo-app.com/api/v1/user_check_in";
//Nonton videos
$watch="https://api.kalo-app.com/api/v1/add_token_by_rule";
//rules Coment
$coment="https://api.kalo-app.com/api/v1/get_ranked_comments";
//Catagory
$category="https://api.kalo-app.com/api/v1/get_video_categories?user_hash=a90c99c6-0356-467e-954f-a785824ed651";
//Luky 100point
include('config.php');
$draw = "https://api.kalo-app.com/api/v1/lucky_draw";
$data  = '{"email":"'.$email.'","password":"'.$pass.'"}';
echo "\033[0;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
echo "Akun ".$email."\n";
echo "\033[0;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
$data = '{"email":"ganbro023@gmail.com","password":"B1smillah@123"}';
$ua=array();
$ua[] = "User-Agent: Android/7.0; Blacktail/1.8.0; Manufacturer/ADVAN; Model/5061";
$ua[] = "Accept-Language: id-ID";
$ua[] = "Referer: https://api.kalo-app.com/";
$ua[] = "Content-Type: application/json; charset=UTF-8";
$ua[] = "Host: api.kalo-app.com";
function chek($hash){
 $ch = curl_init ();
 curl_setopt ($ch, CURLOPT_URL,"https://api.kalo-app.com/api/v1/user_check_in");
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt ($ch, CURLOPT_POST, 1);
 $headers  =array();
 $headers[] = "User-Agent: Android/7.0; Blacktail/1.8.0; Manufacturer/ADVAN; Model/5061";
 $headers[] = "Accept-Language: id-ID";
 $headers[] = "Referer: https://api.kalo-app.com/";
 $headers[] = "Content-Type: application/x-www-form-urlencoded";
 curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt ($ch, CURLOPT_POSTFIELDS,"user_hash=".$hash);
 curl_setopt ($ch, CURLOPT_COOKIEJAR, "cookie.txt");
 curl_setopt ($ch, CURLOPT_COOKIEFILE, "cookie.txt");
 $result = curl_exec ($ch);
 curl_close($ch);
 $json = json_decode($result,true);
 $poin = $json['data']['intraday_check_in_reward']['data']['kalo_amount'];
 $stt = $json['data']['intraday_check_in_reward']['message'];
for ($time=5;$time>-1;$time--){
  echo "\r                                         \r";
  echo "\r\033[0;37m".$time." \033[1;32mWait Chek-In \033[1;37m";
  if ($time == 34 or $time == 29 or $time == 24 or $time == 19 or $time == 14 or $time == 9 or $time == 4){echo "•";}
  if ($time == 33 or $time == 28 or $time == 23 or $time == 18 or $time == 13 or $time == 8 or $time == 3){echo "••";}
  if ($time == 32 or $time == 27 or $time == 22 or $time == 17 or $time == 12 or $time == 7 or $time == 2){echo "•••";}
  if ($time == 31 or $time == 26 or $time == 21 or $time == 16 or $time == 11 or $time == 6 or $time == 1){echo "••••";}
  if ($time == 30 or $time == 25 or $time == 20 or $time == 15 or $time == 10 or $time == 5 or $time == 0){echo "•••••\r";}
  sleep(1);
}
}

function draw($draw,$hash,$token){
 $ch = curl_init ();
 curl_setopt ($ch, CURLOPT_URL,$draw);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt ($ch, CURLOPT_POST, 1);
 $headers  =array();
 $headers[] = "User-Agent: Android/7.0; Blacktail/1.8.0; Manufacturer/ADVAN; Model/5061";
 $headers[] = "Accept-Language: id-ID";
 $headers[] = "Referer: https://api.kalo-app.com/";
 $headers[] = "Content-Type: application/x-www-form-urlencoded";
 curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt ($ch, CURLOPT_POSTFIELDS,"user_hash=".$hash);
 curl_setopt ($ch, CURLOPT_COOKIEJAR, "cookie.txt");
 curl_setopt ($ch, CURLOPT_COOKIEFILE, "cookie.txt");
 $result = curl_exec ($ch);
 curl_close($ch);
 $json = json_decode($result,true);
 $luky = $json["data"]["lucky_draw"];
 $token  = $json["data"]["kalo_token"];
echo "\033[0;37mSisa_Token \033[92m[\033[0;37m".$token."\033[92m]      \033[0;37mLuky_Draw \033[92m: \033[1;37m".$luky."\n";
for ($time=30;$time>-1;$time--){
  echo "\r                                         \r";
  echo "\r\033[0;37m".$time." \033[1;32mWait Luky_Draw \033[1;37m";
  if ($time == 34 or $time == 29 or $time == 24 or $time == 19 or $time == 14 or $time == 9 or $time == 4){echo "•";}
  if ($time == 33 or $time == 28 or $time == 23 or $time == 18 or $time == 13 or $time == 8 or $time == 3){echo "••";}
  if ($time == 32 or $time == 27 or $time == 22 or $time == 17 or $time == 12 or $time == 7 or $time == 2){echo "•••";}
  if ($time == 31 or $time == 26 or $time == 21 or $time == 16 or $time == 11 or $time == 6 or $time == 1){echo "••••";}
  if ($time == 30 or $time == 25 or $time == 20 or $time == 15 or $time == 10 or $time == 5 or $time == 0){echo "•••••\r";}
  sleep(1);
}
}

function ball($ua,$hash){
 $bal="https://api.kalo-app.com/api/v1/get_balance";
 $ch = curl_init ();
 curl_setopt ($ch, CURLOPT_URL,$bal);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt ($ch, CURLOPT_POST, 1);
 curl_setopt ($ch, CURLOPT_HTTPHEADER, $ua);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt ($ch, CURLOPT_POSTFIELDS,'{"watch_wallet":false,"user_hash":"'.$hash.'"}');
 curl_setopt ($ch, CURLOPT_COOKIEJAR, "cookie.txt");
 curl_setopt ($ch, CURLOPT_COOKIEFILE, "cookie.txt");
 $result = curl_exec ($ch);
 curl_close($ch);
 $json = json_decode($result,true);
 $usd  = $json["data"]["usd"];
 $token = $json["data"]["kalo_token"];
echo "\033[92m||\033[0;37mTOTAL TOKEN \033[92m= \033[0;37m".$token."      \033[92m||\033[0;37mTOTAL USD \033[92m= \033[0;37m".$usd."\n";
echo "\033[0;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
}
$data  = '{"email":"'.$email.'","password":"'.$pass.'"}';
 $ch = curl_init ();
 curl_setopt ($ch, CURLOPT_URL, $login);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt ($ch, CURLOPT_POST, 1);
 curl_setopt ($ch, CURLOPT_HTTPHEADER, $ua);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt ($ch, CURLOPT_POSTFIELDS,$data);
 curl_setopt ($ch, CURLOPT_COOKIEJAR, "cookie.txt");
 curl_setopt ($ch, CURLOPT_COOKIEFILE, "cookie.txt");
 $result = curl_exec ($ch);
 curl_close($ch);
 $json = json_decode($result,true);
if($json["message"] == "success"){
for($time=11;$time>-1;$time--){
echo "\r                                       \r";
echo "\033[1;32m";
if($time==11 or $time==5){echo " login s";}
if($time==10 or $time==4){echo " login su";}
if($time==9  or $time==3){echo " login suc";}
if($time==8  or $time==2){echo " login succ";}
if($time==7  or $time==1){echo " login succe";}
if($time==6){echo " login succes";}
if($time==0){echo " login succes\r";}
sleep(1);
}
}else{
for($time=11;$time>-1;$time--){
echo "\r                                       \r";
echo "\033[1;31m";
if($time==11 or $time==5){echo " login f";}
if($time==10 or $time==4){echo " login fa";}
if($time==9  or $time==3){echo " login fai";}
if($time==8  or $time==2){echo " login fail";}
if($time==7  or $time==1){echo " login faile";}
if($time==6){echo " login failed";}
if($time==0){echo " login failed\n";}
sleep(1);
}
echo "Cek Pass and Email\033[0;37m\n\n";
exit;}

 $poin = $json["data"]["kalo_token"];
 $code = $json["data"]["invite_code"];
 $hash = $json["data"]["user_hash"];
   $ch = curl_init ();
   curl_setopt ($ch, CURLOPT_URL,"https://api.kalo-app.com/api/v1/get_video_categories?user_hash=".$hash);
   curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
   curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt ($ch, CURLOPT_HTTPHEADER, $ua);
   curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
   curl_setopt ($ch, CURLOPT_COOKIEJAR, "cookie.txt");
   curl_setopt ($ch, CURLOPT_COOKIEFILE, "cookie.txt");
   $result = curl_exec ($ch);
   curl_close($ch);
ball($ua,$hash);
chek($hash);
while(True){
 for($no=0;$no< 20;$no++){
 $ch = curl_init ();
 curl_setopt ($ch, CURLOPT_URL,"https://api.kalo-app.com/api/v1/get_user_daily_task_status");
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt ($ch, CURLOPT_POST, 1);
 curl_setopt ($ch, CURLOPT_HTTPHEADER, $ua);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt ($ch, CURLOPT_POSTFIELDS, $data);
 curl_setopt ($ch, CURLOPT_COOKIEJAR, "cookie.txt");
 curl_setopt ($ch, CURLOPT_COOKIEFILE, "cookie.txt");
 $result = curl_exec ($ch);
 curl_close($ch);
   $ch = curl_init ();
   curl_setopt ($ch, CURLOPT_URL,"https://api.kalo-app.com/api/v1/get_banner?type=3");
   curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
   curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt ($ch, CURLOPT_HTTPHEADER, $ua);
   curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
   curl_setopt ($ch, CURLOPT_COOKIEJAR, "cookie.txt");
   curl_setopt ($ch, CURLOPT_COOKIEFILE, "cookie.txt");
   $result = curl_exec ($ch);
   curl_close($ch);
 $ch = curl_init ();
 curl_setopt ($ch, CURLOPT_URL,"https://api.kalo-app.com/api/v1/get_user_challenge_status");
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt ($ch, CURLOPT_POST, 1);
 curl_setopt ($ch, CURLOPT_HTTPHEADER, $ua);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt ($ch, CURLOPT_POSTFIELDS, $data);
 curl_setopt ($ch, CURLOPT_COOKIEJAR, "cookie.txt");
 curl_setopt ($ch, CURLOPT_COOKIEFILE, "cookie.txt");
 $result = curl_exec ($ch);
 curl_close($ch);
//Videos
 $ch = curl_init ();
 curl_setopt ($ch, CURLOPT_URL,"https://api.kalo-app.com/api/v1/get_videos");
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt ($ch, CURLOPT_POST, 1);
 curl_setopt ($ch, CURLOPT_HTTPHEADER, $ua);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt ($ch, CURLOPT_POSTFIELDS, $data);
 curl_setopt ($ch, CURLOPT_COOKIEJAR, "cookie.txt");
 curl_setopt ($ch, CURLOPT_COOKIEFILE, "cookie.txt");
 $result = curl_exec ($ch);
 curl_close($ch);
 $json = json_decode($result,true);
 $id   = $json["data"][0]["id"];
//Tambah Id

 $v ='{
  "user_hash": "'.$hash.'",
  "video_id": '.$id.'
}';
 $ch = curl_init ();
 curl_setopt ($ch, CURLOPT_URL,"https://api.kalo-app.com/api/v1/get_tip_ranking_list");
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt ($ch, CURLOPT_POST, 1);
 $headers  =array();
 $headers[] = "User-Agent: Android/7.0; Blacktail/1.8.0; Manufacturer/ADVAN; Model/5061";
 $headers[] = "Accept-Language: id-ID";
 $headers[] = "Referer: https://api.kalo-app.com/";
 $headers[] = "Content-Type: application/json; charset=UTF-8";
 $headers[] = "Host: api.kalo-app.com";
 $headers[] = "Connection: Keep-Alive";
 curl_setopt ($ch, CURLOPT_HTTPHEADER,$headers);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt ($ch, CURLOPT_POSTFIELDS,$v);
 curl_setopt ($ch, CURLOPT_COOKIEJAR, "cookie.txt");
 curl_setopt ($ch, CURLOPT_COOKIEFILE, "cookie.txt");
 $result = curl_exec ($ch);
 curl_close($ch);
 $json = json_decode($result,true);
for ($time=30;$time>-1;$time--){
  echo "\r                                         \r";
  echo "\r\033[0;37m".$time." \033[1;32mWait watching \033[1;37m";
  if ($time == 34 or $time == 29 or $time == 24 or $time == 19 or $time == 14 or $time == 9 or $time == 4){echo "•";}
  if ($time == 33 or $time == 28 or $time == 23 or $time == 18 or $time == 13 or $time == 8 or $time == 3){echo "••";}
  if ($time == 32 or $time == 27 or $time == 22 or $time == 17 or $time == 12 or $time == 7 or $time == 2){echo "•••";}
  if ($time == 31 or $time == 26 or $time == 21 or $time == 16 or $time == 11 or $time == 6 or $time == 1){echo "••••";}
  if ($time == 30 or $time == 25 or $time == 20 or $time == 15 or $time == 10 or $time == 5 or $time == 0){echo "•••••\r";}
  sleep(1);
}

///Ambil Token
 $ch = curl_init ();
 curl_setopt ($ch, CURLOPT_URL,"https://api.kalo-app.com/api/v1/add_token_by_rule");
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt ($ch, CURLOPT_POST, 1);
// curl_setopt ($ch, CURLOPT_HTTPHEADER,$headers);
 $headers  =array();
 $headers[] = "User-Agent: Android/7.0; Blacktail/1.8.0; Manufacturer/ADVAN; Model/5061";
 $headers[] = "Accept-Language: id-ID";
 $headers[] = "Referer: https://api.kalo-app.com/";
 $headers[] = "Content-Type: application/x-www-form-urlencoded";
 curl_setopt ($ch, CURLOPT_HTTPHEADER,$headers);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt ($ch, CURLOPT_POSTFIELDS,"user_hash=".$hash."&action=watch_video");
 curl_setopt ($ch, CURLOPT_COOKIEJAR, "cookie.txt");
 curl_setopt ($ch, CURLOPT_COOKIEFILE, "cookie.txt");
 $result = curl_exec ($ch);
 curl_close($ch);
 $json  = json_decode($result,true);
$js = json_decode($result);
$limit = ($js->code);
 if($limit==10004){
echo "\033[0;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
echo "\033[92m||\033[1;31mLIMIT \033[1;37mHARIAN\n";
ball($ua,$hash);
exit;
}
 $token = $json['data']['kalo_token'];
 $usd   = $json['data']['usd'];
if(100 < $token){
echo "\033[0;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
draw($draw,$hash,$token);
echo "\033[0;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
    }else{
echo "\033[92m||\033[0;37mTotal Token \033[92m[\033[1;37m".$token."\033[92m]      ||\033[0;37mUSD\033[92m[\033[0;37m".$usd."\033[92m]\n";
   }
  }
chek($hash);
}










?>
