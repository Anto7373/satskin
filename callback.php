<?php

$sendto = "lalithasatin@gmail.com, vignesh@satinskin.in, odi.enquiries@gmail.com"; //info@satinskin.in, lalithasatin@gmail.com,   

$usermail = $_POST['fname'];

$usermobile = nl2br($_POST['mobile']);
 
$subject = "Satin Skin Request a Call Back Form";

$headers = "From: " . strip_tags($usermail) . "\r\n";

$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";

$headers .= "MIME-Version: 1.0\r\n";

$headers .= "Content-Type: text/html;charset=utf-8 \r\n";



$msg = "<html><body style='font-family:Arial,sans-serif;'>";

$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Satin Skin Request a Call Back Form</h2>\r\n";

$msg .= "<p><strong>Sent by:</strong> ".$usermail."</p>\r\n";

$msg .= "<p><strong>Message:</strong> ".$usermobile."</p>\r\n";

$msg .= "<script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-43723806-1', 'satinskin.in');  ga('require', 'displayfeatures');  ga('send', 'pageview');    </script>  </body></html>";





if(@mail($sendto, $subject, $msg, $headers)) {

	header("Location:thank-you.html");
}

?>