<?php
	$xml = new DomDocument("1.0","UTF-8");
	$xml->formatOutput=true;
	$xml->preserveWhiteSpace=false;
	$xml->load("export.xml");
	
	if(!$xml)
	{
		$register=$xml->createElement("register");
		$xml->appendChild($register);
	}
	else
	{
		$register=$xml->firstChild;
	}
	if(isset($_POST['submit']))
	{
		$fname = $_POST['first_name'];
		$lname = $_POST['last_name'];
		$mname = $_POST['middle_name'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$number = $_POST['number'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$sex = $_POST['subject'];
		$agee = $_POST['agee'];
		$questions = $_POST['questions'];
		$status = $_POST['status'];
		$facc = $_POST['facebook'];
		$questions1 = $_POST['questions2'];
	
	$user=$xml->createElement("user");
	$register->appendChild($user);	
	$firstname=$xml->createElement("first_name",$fname);
	$user->appendChild($firstname);
	$lastname=$xml->createElement("last_name",$lname);
	$user->appendChild($lastname);
	$middlename=$xml->createElement("middle_name",$mname);
	$user->appendChild($middlename);
	$useraddress=$xml->createElement("address",$address);
	$user->appendChild($useraddress);
	$useremail=$xml->createElement("email",$email);
	$user->appendChild($useremail);	
	$username=$xml->createElement("username",$username);
	$user->appendChild($username);
	$usernumber=$xml->createElement("number",$number);
	$user->appendChild($usernumber);
	$userpassword=$xml->createElement("password",$password);
	$user->appendChild($userpassword);
	$usercpassword=$xml->createElement("cpassword",$cpassword);
	$user->appendChild($usercpassword);
	$usersex=$xml->createElement("subject",$sex);
	$user->appendChild($usersex);
	$useragee=$xml->createElement("agee",$agee);
	$user->appendChild($useragee);
	$userquestions=$xml->createElement("questions",$questions);
	$user->appendChild($userquestions);
	$userstatus=$xml->createElement("status",$status);
	$user->appendChild($userstatus);
	$userfacebook=$xml->createElement("facebook",$facc);
	$user->appendChild($userfacebook);
	$userquestions2=$xml->createElement("questions2",$questions1);
	$user->appendChild($userquestions2);

	
	
	echo "<xmp>".$xml->saveXML()."</xmp>";	
	$xml->save("export.xml");
	}
	
?>