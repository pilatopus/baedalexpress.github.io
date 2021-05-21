<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;

		}

		body
		{
			background-image: url(a.jpg);
			background-position: center;
			background-size: cover;
			font-family: Century Gothic;
			margin-top: 40px;
		}
		.regform
		{
			width: 1200px;
			background-color: rgb(0,0,0,0.6);
			margin: auto;
			color: #FFFFFF;
			padding: 10px 0px 10px 0px;
			text-align: center;
			border-radius: 15px 15px 0px 0px;
		}
		.main
		{
			background-color: rgb(0,0,0,0.5);
			width: 1200px;
			margin: auto;
			height: 525px;

		}
		form
		{
			padding: 10px;

		}

		#name
		{
			width: 100%;
			height: 100px;
		}

		.name
		{
			margin-left: 100px;
			margin-top: 30px;
			width: 125px;
			color: white;
			font-size: 18px;
			font-weight: 700;
		}
		.firstname
		{
			position: relative;
			left: 200px;
			top: 15px;
			line-height: 25px;
			width: 250px;
			border-radius: 6px;
			padding: 0 3px;
			font-size: 12px;
			font-family: Century Gothic;

		}
		.lastname
		{
			position: relative;
			left: 417px;
			top: -14px;
			line-height: 25px;
			border-radius: 6px;
			width: 250px;
			padding: 0 3px;
			font-size: 12px;
			font-family: Century Gothic;
		}
		.middlename
		{
			position: relative;
			left: 370px;
			top: -14px;
			line-height: 25px;
			border-radius: 6px;
			width: 250px;
			padding: 0 3px;
			font-size: 12px;
			font-family: Century Gothic;
		}
		.firstlabel
		{
			position: relative;
			color: #E5E5E5;
			text-transform: capitalize;
			font-size: 14px;
			left: 203px;
			top: -36px;
		}
		.lastlabel
		{
			position: relative;
			color: #E5E5E5;
			text-transform: capitalize;
			font-size: 14px;
			left: 158px;
			top: -36px;
		}
		.middlelabel
		{
			position: relative;
			color: #E5E5E5;
			text-transform: capitalize;
			font-size: 14px;
			left: 113px;
			top: -36px;
		}
		.address
		{
			position: relative;
			left: 200px;
			top: -25px;
			line-height: 25px;
			width: 540px;
			border-radius: 6px;
			padding: 0 3px;
			font-size: 12px;
			font-family: Century Gothic;
		}
		.addresslabel
		{
			position: relative;
			color: #E5E5E5;
			text-transform: capitalize;
			font-size: 14px;
			left: -350px;
			top: -48px;
		}
		.username
		{
			position: relative;
			left: 702px;
			top: -60px;
			line-height: 25px;
			width: 250px;
			border-radius: 6px;
			padding: 0 3px;
			font-size: 12px;
			font-family: Century Gothic;
		}
		.usernamelabel
		{
			position: relative;
			left: 420px;
			top: -85px;
			line-height: 40px;
			border-radius: 6px;
			padding: 0 22px;
			font-size: 14px;
			color: #E5E5E5;
		}
		.email
		{
			position: relative;
			left: -410px;
			top: 35px;
			line-height: 25px;
			width: 538px;
			border-radius: 6px;
			padding: 0 3px;
			font-size: 12px;
			font-family: Century Gothic;
		}
		.emaillabel
		{
			position: relative;8
			top: -25px;
			line-height: 40px;
			width: 490px;
			border-radius: 6px;
			padding: 0 22px;
			font-size: 14px;
			color: #E5E5E5;
		}
		.number
		{
			position: relative;
			left: 320px;
			top: 2px;
			line-height: 25px;
			width: 255px;
			border-radius: 6px;
			font-size: 12px;
			color: #555;
			padding: 0 3px;
			font-family: Century Gothic;
		}
		.phone_number
		{
			position: relative;
			color: #E5E5E5;
			text-transform: capitalize;
			font-size: 14px;
			left: 58px;
			top: -24px;
		}
		.password
		{
			position: relative;
			left: 204px;
			top: 20px;
			line-height: 25px;
			width: 390px;
			border-radius: 6px;
			padding: 0 3px;
			font-size: 12px;
			color: #555;
			font-family: Century Gothic;
		}
		.passwordlabel
		{
			position: relative;
			color: #E5E5E5;
			text-transform: capitalize;
			font-size: 14px;
			left: -195px;
			top: -5px;
		}
		.cpassword
		{
			position: relative;
			left: 173px;
			top: 20px;
			line-height: 25px;
			width: 398px;
			border-radius: 6px;
			padding: 0 3px;
			font-size: 12px;
			color: #555;
			font-family: Century Gothic;
		}
		.cpasswordlabel
		{
			position: relative;
			color: #E5E5E5;
			text-transform: capitalize;
			font-size: 14px;
			left: -233px;
			top: -5px;
		}

		.option
		{
			position: relative;
			left: -805px;
			top: 78px;
			line-height: 25px;
			width: 80px;
			height: 25px;
			border-radius: 6px;
			padding: 0 3px;
			font-size: 14px;
			color: #555;
			outline: none;
			overflow: hidden;
			font-family: Century Gothic;
		}
		.sexlabel
		{
			position: relative;
			color: #E5E5E5;
			text-transform: capitalize;
			font-size: 14px;
			left: -885px;
			top: 55px;
		}
		.agee
		{
			position: relative;
			left: 355px;
			top: 50px;
			line-height: 25px;
			width: 100px;
			height: 25px;
			border-radius: 6px;
			padding: 0 3px;
			font-size: 12px;
			color: #555;
			outline: none;
			overflow: hidden;
			font-family: Century Gothic;
		}
		.ageelabel
		{
			position: relative;
			color: #E5E5E5;
			text-transform: capitalize;
			font-size: 14px;
			left: 245px;
			top: 27px;
		}
		.option option
		{
			font-size: 12px;
			font-family: Century Gothic;

		}
		.option1
		{
			position: relative;
			left: 332px;
			top: 51px;
			line-height: 25px;
			width: 80px;
			height: 25px;
			border-radius: 6px;
			padding: 0 3px;
			font-size: 14px;
			color: #555;
			outline: none;
			overflow: hidden;
			font-family: Century Gothic;
		}
		.statuslabel
		{
			position: relative;
			color: #E5E5E5;
			text-transform: capitalize;
			font-size: 14px;
			left: 381px;
			top: 28px;
		}
		.facebook
		{
			position: relative;
			left: 368px;
			top: 50px;
			line-height: 25px;
			width: 398px;
			border-radius: 6px;
			padding: 0 3px;
			font-size: 12px;
			color: #555;
			font-family: Century Gothic;
		}
		.facebooklabel
		{
			position: relative;
			color: #E5E5E5;
			text-transform: capitalize;
			font-size: 14px;
			left: -38px;
			top: 28px;
		}


		.questions-title
		{
  			font-size: 16px;
  			font-weight: 500;
  			color: white;
  			position: relative;
  			left: -665px;
			top: 100px;
 		}
 		.category
 		{
  			display: flex;
   			width: 25%;
   			margin: 14px 0 ;
   			justify-content: space-between;
   			color: white;
   			font-size: 14px;
   			position: relative;
   			top: 90px;
   			left: 220px; 
 		}
 		.category label
 		{
			display: flex;
			align-items: center;
			cursor: pointer;
 		}
 		.category label .dot
 		{
			height: 5px;
			width: 5px;
			border-radius: 50%;
			margin-right: 5px;
			background: #d9d9d9;
			border: 3px solid transparent;
			transition: all 0.3s ease;
		}
		#dot-1:checked ~ .category label .one,
		#dot-2:checked ~ .category label .two
 		{
			background: #9b59b6;
			border-color: #d9d9d9;
 		}
 		form input[type="radio"]
 		{
   			display: none;
 		}
 		 .questions-title1
		{
  			font-size: 16px;
  			font-weight: 500;
  			color: white;
  			position: relative;
  			left: 207px;
			top: 100px;
 		}
 		 .category1
 		{
  			display: flex;
   			width: 25%;
   			margin: 14px 0 ;
   			justify-content: space-between;
   			color: white;
   			font-size: 14px;
   			position: relative;
   			top: 95px;
   			left: 220px; 
 		}
 		.category1 label
 		{
			display: flex;
			align-items: center;
			cursor: pointer;
 		}
 		.category1 label .dot
 		{
			height: 5px;
			width: 5px;
			border-radius: 50%;
			margin-right: 5px;
			background: #d9d9d9;
			border: 3px solid transparent;
			transition: all 0.3s ease;
		}
		#dot-3:checked ~ .category1 label .three,
		#dot-4:checked ~ .category1 label .four
 		{
			background: #9b59b6;
			border-color: #d9d9d9;
 		}
 		form input[type="radio"]
 		{
   			display: none;
 		}
		button
		{
			background-color: #3BAF9F;
			display: block;
			margin: 20px 0px 0px 20px;
			text-align: center;
			border-radius: 12px;
			border: 2px solid #366473;
			padding: 14px 110px;
			outline: none;
			color: white;
			cursor: pointer;
			transition: 0.25px;
			position: relative;
			top: 100px;
			left: 450px;
		}
		button:hover
		{
			background-color: #5390F5;
		}

	</style>
</head>
<body>
	<div class="regform"><h1>Registration Form</h1></div>
	<div class="main">
		<form action="readXML.php" method="post">
			<div id="name">
				<input class="firstname" type="text" name="first_name" placeholder="Enter your First Name" required=""><br>
				<label class="firstlabel">First name</label>
				<input class="lastname" type="text" name="last_name" placeholder="Enter your Last Name" required="">
				<label class="lastlabel">Last name</label>
				<input class="middlename" type="text" name="middle_name" placeholder="Enter your Middle Name" required="">
				<label class="middlelabel">Middle name</label>		
			</div>

			<input class="address" type="text" name="address" placeholder="Enter your Address" required="">
			<label class="addresslabel">Address</label>

			<input class="email" type="text" name="email" placeholder="Enter your Email" required="">
			<label class="emaillabel">Email</label>

			<input class="username" type="text" name="username" placeholder="Enter your Username" required="">
			<label class="usernamelabel">UserName</label>

			<input class="number" type="number" name="number" placeholder="Enter your Number" required="">
			<label class="phone_number">Phone Number</label>

			<input class="password" type="password" name="password" placeholder="Enter your Password" required="">
			<label class="passwordlabel">Password</label>

			<input class="cpassword" type="password" name="cpassword" placeholder="Re-enter your Password" required="">
			<label class="cpasswordlabel">Confirm Password</label>

			<select class="option" name="subject" required="">
				<option disabled="disabled" selected="selected">I am...</option>
				<option>Male</option>
				<option>Female</option>
				<option>Other</option>
			</select>
			<label class="sexlabel">Sex</label>

			<input class="agee" type="number" name="agee" placeholder="Enter your Age" required="">
			<label class="ageelabel">Age</label>

			<label class="statuslabel">Status</label>
			<select class="option1" name="status" required="">
				<option disabled="disabled" selected="selected">I am...</option>
				<option>Single</option>
				<option>In relationship</option>
				<option>Married</option>
			</select>

			<input class="facebook" type="text" name="facebook" placeholder="Enter your Facebook Account Name" required="">
			<label class="facebooklabel">Facebook Account Name</label>


          	<input type="radio" name="questions" id="dot-1" value="Yes" checked="checked">
          	<input type="radio" name="questions" value="No" id="dot-2">
          	<span class="questions-title">Is this your first time using our website?</span>
          		<div class="category">
            		<label for="dot-1">
            			<span class="dot one"></span>
            			<span class="questions">Yes</span>
          			</label>
          			<label for="dot-2">
            			<span class="dot two"></span>
            			<span class="questions">No</span>
          			</label>
          		</div>

          	<input type="radio" name="questions2" id="dot-3" value="Yes" checked="checked">
          	<input type="radio" name="questions2" value="No" id="dot-4">
          	<span class="questions-title1">Is this your first time using a delivery service website?</span>
          		<div class="category1">
            		<label for="dot-3">
            			<span class="dot three"></span>
            			<span class="questions2">Yes</span>
          			</label>
          			<label for="dot-4">
            			<span class="dot four"></span>
            			<span class="questions2">No</span>
          			</label>
          		</div>


			<button type="submit" name="submit">Register</button>

		</form>
		
	</div>

</body>
</html>