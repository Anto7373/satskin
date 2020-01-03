<?php 

session_start();



if(isset($_POST["submit"]))

{

if($_SESSION['capcha_key'] == $_POST['capcha'])

	{

	$subject1 = "Enquiry from Satin Skin - Flatten Tummy and Regain your Body Image.";

	$message1 = "<b>Enquiry detail is follow:</b><br><br>

	

	<b>Name : </b> $_POST[name]<br>

	<b>Phone :</b> $_POST[phone]<br>

	<b>Email : </b>$_POST[email]<br>

	<b>City : </b> $_POST[city]<br>

	<b>Message : </b>$_POST[message]<br>

	<br><br>";

	

	$subject2 = "Acknowledgement from Satin Skin";

	$message2 = "<em>Dear  $_POST[name]</em>

<br />

<br />

We thank you for visiting our website http://www.satinskin.in/ and registering with us.  </em><br />

<br />

It will be our best endeavor to reply your query at the earliest possible time. We would normally respond within 2 business days or certainly earlier. </em>

<br />





Many    Thanks and Best Regards,</em><br />

<strong><em> Satin Skin </em></strong>

<br />

<br />

P.S: Our response within the above mentioned timeline is subject to availability of complete and accurate query filled in by you.</em>";





	$headers1  = 'MIME-Version: 1.0' . "\n";

	$headers1 .= "Content-type: text/html; charset=iso-8859-1". "\n";

	$headers1 .= "From: $_POST[name]"."<$_POST[email]>";





	$headers  = 'MIME-Version: 1.0' . "\n";

	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";

	$headers .= 'From: Satin Skin'.'<noreply@satinskin.in>';

	@mail("lalithasatin@gmail.com",$subject1,$message1,$headers1);

	@mail("rsuresh@g3lasers.com",$subject1,$message1,$headers1);

	@mail("odi.enquiries@gmail.com",$subject1,$message1,$headers1);

	@mail("priya.seetharaman@opendesignsin.com",$subject1,$message1,$headers1);

 



    @mail($_POST[email],$subject2,$message2,$headers);	



	$_SESSION[enq_msg] = "Thank you. You have successfully sent your message. We shall revert to you at the earliest. Informations will be confidential.";

	

	header("Location:satin-skin-landing.php");

	exit;

	}

	

	else

	{

		$_SESSION['enq_msg'] = "Entered Invalid Code";

	}



}

?>

<html>

<head>

<title>Satin Skin FB Landinding Page</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<script type="text/javascript">

function checkform3 (field,min, max)

{

  		

	    var name = document.enq2.name;

		   var phone = document.enq2.phone;

		 var email = document.enq2.email;

		 var city = document.enq2.city;

		  var message = document.enq2.message;

		 

		

			

	    if (name.value == "Name")

	    {

	        window.alert("Please enter your name.");

	        name.focus();

	        return false;

	    }

		

		if(!isNaN(name.value))

		{

		name.focus();

		alert("Please Enter the Alphabets");

		return false;

		}



	  

	 if (phone.value == "Phone")

	    {

	        window.alert("Please enter your Phone Number.");

	        phone.focus();

	        return false;

	    }

		

		if (!min) { min = 6 } 

		if (!max) { max = 15 } 

		

		if ( (parseInt(phone.value) != phone.value) ||  

			   phone.value.length < min || phone.value.length > max) { 

		window.alert("Please enter a valid Phone number.");

		phone.focus(); 

		phone.select(); 

		return false; 

		}

		

		 if(isNaN(phone.value)) <!-- Alphabets -->

		{

		alert("Please Enter valid Mobile Number");

		phone.focus();

		return false;

		}



  if (email.value == "Email")

	    {

	        window.alert("Please enter your e-mail address.");

	        email.focus();

	        return false;

	    }

	    if (email.value.indexOf("@", 0) < 0)

	    {

	        window.alert("Please enter a valid e-mail address.");

	        email.focus();

	        return false;

	    }

	    if (email.value.indexOf(".", 0) < 0)

	    {

	        window.alert("Please enter a valid e-mail address.");

	        email.focus();

	        return false;

	    }

		

		if (city.value == "City")

	    {

	        window.alert("Please enter the city name.");

	        city.focus();

	        return false;

	    }

		

		if(!isNaN(city.value))

		{

		city.focus();

		alert("Please Enter the valid city name");

		return false;

		}



		  if (message.value == "Message")

	    {

	        window.alert("Enter your message");

	        message.focus();

	        return false;

	    }

		  return true;

}

</script>

 

<style type="text/css">

.wrapper {

	margin: 0 auto;

	width: 852px;

	margin-top: 50px;

	display: block;

	overflow: hidden;

}

.lpContent {

	margin: 0 auto;

	width: 852px;

	margin-top: 50px;

	display: block;

	height:800px;

	overflow: hidden;

	background:url(images/lb-bg.jpg) no-repeat;

}

.link

{

	float:right;

	margin-right: 66px;

    margin-top: 69px;

}

.link a

{

	color:#0073c0;

	border:none;

	outline:none;

	 

}

.social

{

	margin:0;

	padding:0;

	display:block;

	overflow:hidden;

}

.soclal ul

{

	margin:0;

	padding:0;

}

.soclal ul li 

{

	float:left;

	list-style-type:none;

}

.soclal ul li a

{

	outline:none;

	border:none;

}





/*.bg1 {

	background: url(images/landing_01.jpg) no-repeat;

	height: 178px;

}

.bg2 {

	background: url(images/landing_02.jpg) no-repeat;

	height: 172px;

}

.bg3 {

	background: url(images/landing_03.jpg) no-repeat;

	height: 221px;

}

.bg4 {

	background: url(images/landing_04.jpg) no-repeat;

	height: 112px;

}

*/.quickQuery {

	color: #FFFFFF;

	margin-bottom: 15px;

	margin-left: 463px;

	padding:296px 18px 12px;

	width: 360px;

	float:left;

}

.quickQuery ul {

	padding: 0 0px;

	margin: 0;

	float:left;

	display:block;

	overflow:hidden;

}

.quickQuery ul p {

	padding: 0;

	margin: 0 0 8px 0;

}

.quickQuery ul li {

	margin-bottom: 5px;

	list-style-type: none;

	display: block;

	overflow: hidden;

	margin-bottom: 9px;

}

.quickQuery ul li input.w130 {

	float: left;

	margin-right: 11px;

	width: 118px;

}

.quickQuery ul li input.w175 {

	float: left;

	margin-right: 11px;

	width: 104px;

}

.quickQuery ul li input {

	color: #3A3A3A;

	font-size: 12px;

	padding: 6px 10px 6px 6px;

	width: 138px !important;

}

.quickQuery ul li textarea {

	float: left;

	height:66px;

	width: 137px;

	border: 0;

	padding: 5px;

}

.quickQuery ul li input.sendBtn {

	width: 80px;

	background: url(../images/send-btn.jpg) no-repeat !important;

	height: 68px;

	border: 0;

	border-top: solid 1px #01839e;

	border-right: solid 1px #01839e;

	border-bottom: solid 1px #01839e;

	padding: 0 !important;

	margin: 0 !important;

}

.sbutn { width:73px; line-height:28px; text-transform:uppercase; color:#fff !important; background:#00a4e3; border:none;}

</style>

<script>

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

})(window,document,'script','//www.google-analytics.com/analytics.js','ga');



ga('create', 'UA-43723806-1', 'satinskin.in');

ga('require', 'displayfeatures');

ga('send', 'pageview');



</script> 

</head>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<!-- Save for Web Slices (Untitled-1) -->

<div class="lpContent">

<div class="link"><a target="_blank" href="http://www.satinskin.in">

  <img src="images/url.png" width="145" height="20" alt=""/></a></div>

  <div class="bg3">

  

    <div class="quickQuery qUICKQueryIn">

        <form onsubmit="return checkform3();" action="#" id="enq2" name="enq2" method="POST">

      <ul>

          <li>

            <input type="text" onblur="if(this.value =='') this.value='Name';" onfocus="if(this.value=='Name') this.value='';" class="nameInput w130   " value="Name" name="name" />

          </li>

          <li>

            <input type="text" onblur="if(this.value =='') this.value='Phone';" onfocus="if(this.value=='Phone') this.value='';" class="nameInput   " value="Phone" name="phone" />

          </li>

            <li><input type="text" onblur="if(this.value =='') this.value='Email';" onfocus="if(this.value=='Email') this.value='';" class="nameInput w130 " value="Email" name="email" /></li>

            <li>

             <input type="text" onblur="if(this.value =='') this.value='City';" onfocus="if(this.value=='City') this.value='';" class="nameInput w130   " value="City" name="city" />

          </li>

          </ul>

          

          <ul>

          

          <li>

            <textarea name="message" value="" onfocus="if(this.value=='Message') this.value='';"  onblur="if(this.value == '') this.value='Message';">Message</textarea>

          </li>

          <li> <img src="capcha.php" width="60" height="19" alt=""/><input name="capcha" style="width:78px !important;" id="capcha" type="text" size="10" class="fl w70"/> </li>

          <li><input type="submit" class="sbutn" value="Submit" name="submit" /></li>

          

            

      </ul>

    

        </form>



    </div>

  </div>

  <div class="bg4">

  

  </div>

</div>

 

<!-- End Save for Web Slices -->

</body>

<?php if($_SESSION[enq_msg] != ""){ echo "<script>alert('".$_SESSION[enq_msg]."')</script>"; $_SESSION[enq_msg]='';} ?>

</html>