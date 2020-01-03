<?php

$sendto = "lalithasatin@gmail.com, vignesh@satinskin.in, odi.enquiries@gmail.com"; //info@satinskin.in, lalithasatin@gmail.com,

$username = $_POST['bname'];

//$usermobile = $_POST['mobile1'];

$usermail = $_POST['bemail'];

//$content = nl2br($_POST['msg']);



$subject = "Satin Skin Request a Brochure Form";

$headers = "From: " . strip_tags($usermail) . "\r\n";

$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";

$headers .= "MIME-Version: 1.0\r\n";

$headers .= "Content-Type: text/html;charset=utf-8 \r\n";





$subject2 = "Acknowledgement from Satin Skin -  Request a Brochure Form";

	$message2 = "<em>Dear  $_POST[name]</em>

<br />

<br />

We Thank You for visiting our website http://satinskin.in/ and registering with us. </em><br />

<br />

In case of further queries, please send an email to info@satinskin.in </em>

<br />

<br />

click here Download Brochure http://satinskin.in/images/sation-skin.pdf

<br />

<br />

Assuring  you of our best services.</em>

<br />

<br />

Many    Thanks and Best Regards,</em><br />

<strong><em> Satin Skin</em></strong>

<br />

<br />

P.S: Our response within the above mentioned timeline is subject to availability of accurate and complete query filled in by the users.</em>";



$msg = "<html><body style='font-family:Arial,sans-serif;'>";

$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Satin Skin Request a Brochure Form</h2>\r\n";

$msg .= "<p><strong>Sent by:</strong> ".$username."</p>\r\n";

//$msg .= "<p><strong>Mobile :</strong> ".$usermobile."</p>\r\n";

$msg .= "<p><strong>Email:</strong> ".$usermail."</p>\r\n";

//$msg .= "<p><strong>Message:</strong> ".$content."</p>\r\n";

$msg .= "<script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-43723806-1', 'satinskin.in');  ga('require', 'displayfeatures');  ga('send', 'pageview');    </script>  </body>";



@mail($_POST[bemail],$subject2,$message2,$headers);	

if(@mail($sendto, $subject, $msg, $headers)) {

	header("Location:thank-you.html");
}

?>