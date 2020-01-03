<?php 

session_start();



if(isset($_POST["submit"]))

{

if($_SESSION['capcha_key'] == $_POST['capcha'])

	{

	$subject1 = "Enquiry from Satin Skin - Festive Season Offer";

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

	//@mail("parthiban@opendesigns.in",$subject1,$message1,$headers1);

 



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

<title>Satin Skin FB Landing Page</title>

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



body

{

    background: #f3d8cd;

}

.wrapp