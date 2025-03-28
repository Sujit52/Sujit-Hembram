

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3ea3574147.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="https://i.ibb.co/hZ5hHFZ/IMG-20240129-164651-271.jpg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Lobster&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>!! SDK_SUJIT !!</title>
    <link rel="stylesheet" href="tl.css">
</head>
<body>
    <div class="main-container">
        <div class="heading-text">
Bank Booster Script
                    <div class="border-wrap">
                <div class="borderLeft"></div>
                <p id="logoText">SDK_SUJIT</p>
                <div class="borderRight"></div>
            </div>
        </div>

<?php
    
  error_reporting(0);
   $mobile=$_REQUEST['mobile'];
   $bankno=$_REQUEST['bankno'];
   $bankname=$_REQUEST['bankname'];
   $ifsc=$_REQUEST['ifsc'];
    $otp=$_REQUEST['otp'];
    $sessionkey=$_REQUEST['sessionkey'];
    
function Randomer($length){
$str="";
for($i=0;$i<$length;$i++){
$str.=mt_rand(0,9);
}
return $str;
}

$m=array("ram","shyam","lalit","som","sonu","king","nemar","nandu","lokesh","rahul","tom","tony","michal","jones","starc","smith","smriti","suman","pooja","jyoti","munro","guptil","taylor","tanu","tejas","tanmay","surbi" ,"gaurav","goru","ganesh","decock","amla","anju","hero","killer","russel","simmons","sindhu","hacker", "sambhu","sabita","chinu","donald","kapil","viru","baldau","ramu","rawdi","ravan","ram2","shyam2","lalit2","somw","sronu","kinhg","nemhar","nanbdu","lokhesh","rahhul","tohm","tonhy","michhal","jonjes","starhch","smijth","smrhiti","sumhan","poongja","jyhoti","munbro","gupktibl","taylbdjdjor","tajdudnhu","tejajdjdhs","tanmhajdjdy","surgeiurjdbi" ,"gaurhdjdjjdfjav","gojrdjdjjrjru","ganehudjdsh","dechoudjdck","amudjdjdlga","anididju","hedujdro","killedhdur","russeduudl","simmojdjdns","sijdjdndhu","hacdjdjker", "samjdjdbhu","sabidjjdta","chijdjdnu","donjdjdald","kapdjdjil","virdjjdu","baldadjjdu","rajdjdmu","rawddjjdi","ravdjjdan");
$fname=$m[mt_rand(0,50)];

$n=array("patjdjdel","shardjdjma","sinhdudgh","thakfjjdur","gupududta","kumari","kundu","kumari","soni","trumph","steve","som","mondal","mick","manav","maryin","jones","hamza","rathour","mondak","kohli","dhawan","silva","dhoni","patil","poker","pronjal","piku","pondu","randi","rawdi","jalbbi","julmi","joker","khan","chaubey","ali","vishnoi","voni","ballad","billu","kalia","kuber","roberg","robert","ren","rewsi","modu",);
$lname=$n[mt_rand(0,50)];
function rando($length){
$str="";
$char='abcdefghijklnmopqrstvwxyz123456789';
$charArray= str_split($char);
for($i=0;$i<$length;$i++){
$randitem= array_rand($charArray);
$str.="".$charArray[$randitem];
}

return $str;
}
$im=rando(4);
$ik=rando(16);
$sa=rando(8).'-'.rando(4).'-'.rando(4).'-'.rando(4).'-'.rando(12);
function RandomNumber($length){
$str="";
for($i=0;$i<$length;$i++){
$str.=mt_rand(0,9);
}
return $str;

}
$cook=rando(strlen("2a0c836489c081ab23"));
$ip=rando(strlen("47.15.245.157"));
$n=RandomNumber(2).'.'.RandomNumber(6);
$did=RandomNumber(16);
$two=RandomNumber(2);
$social=RandomNumber(31);
$i=RandomNumber(1);
$pw=RandomNumber(8);
$name="$fname $lname";
$four=RandomNumber(4);
$five=RandomNumber(5);
$three=RandomNumber(3);
$teni= RandomNumber(10);

$uid= RandomNumber(6);
$fourteen=RandomNumber(14);


function generateRandomIp() {
    return mt_rand(1, 255) . '.' . mt_rand(0, 255) . '.' . mt_rand(0, 255) . '.' . mt_rand(1, 255);
}

$ip = generateRandomIp();



$url="https://cricket6.in/user/profile/verify_bank_account";
    
    $data='{"first_name":"'.$fname.'","last_name":"'.$lname.'","bank_name":"'.$bankname.'","ac_number":"'.$bankno.'","ifsc_code":"'.$ifsc.'","upi_id":"85'.$pw.'@ptyes"}';
    
    $headers= [
    'Host: cricket6.in',
'sec-ch-ua: "Android WebView";v="119", "Chromium";v="119", "Not?A_Brand";v="24"',
'_ga_token: '.$two.'d93f4f7ad22f',
'accept-language: en',
'x-refid: '.$fourteen.'',
'sec-ch-ua-mobile: ?1',
'user-agent: Mozilla/5.0 (Linux; Android 13; Pixel 7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36',
'requesttime: Thu, 27 Mar 2025 04:35:38 GMT',
'content-type: application/json;charset=UTF-8',
'accept: application/json, text/plain, */*',
'ult: ',
'sessionkey: '.$sessionkey.'',
'device: web',
'user-token: '.$three.'7f0d'.$four.'ece0ef9',
'sec-ch-ua-platform: "Android"',
'origin: http://cricket6.in',
'x-requested-with: via.bolte',
'sec-fetch-site: cross-site',
'sec-fetch-mode: cors',
'sec-fetch-dest: empty',
'referer: http://cricket6.in/',
'content-length:'.strlen('{"first_name":"'.$fname.'","last_name":"'.$lname.'","bank_name":"'.$bankname.'","ac_number":"'.$bankno.'","ifsc_code":"'.$ifsc.'","upi_id":"85'.$pw.'@ptyes"}')
    
    ];
    
    
 


$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,0);
$output=curl_exec($ch);
$json=json_decode($output,true);
curl_close($ch);


  $code=$json['message'];
  $sessionKey = $json['data']['Sessionkey'];
  $rcode=$json['response_code'];
 
$ot=$output;



if($rcode==="200")
{
	
	
echo"<div class='msg success'>Booster Claim Successfully</div>";
echo"<div class='msg success'>Amount Credited To Your Account Within 24 Hrs.</div>";
echo"<div class='msg white'>!! Thank You. !!</div>";
echo"<meta http-equiv='refresh' content=1;url='https://facebook.com/sujitkumarhembram52'>";
   }    
   
else{
	echo"<div class='msg error'> $code </div>";
	echo"<meta http-equiv='refresh' content=1;url='https://facebook.com/sujitkumarhembram52'>";
		
 
}


?>

<a href="https://facebook.com/sujitkumarhembram52" class="telBtn">
    <i class="fa-regular fa-paper-plane"></i><span>SDK_SUJIT</span>
</a>
  </div>
</body>
</html>