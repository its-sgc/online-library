<?php include 'partials/_header.php'; ?>
	
	<span class=description >
	<h4><pre>Signup with us to be a part of 
	Online-Library</pre></h4>
	</span>

	<img class="signup-img" src="img/v14.png" width=40% height=20%></img>
</div>
	<div class="form">
		<div class=forms>
	<h1>Create an account</h1>
	<b>Full Name</b><br>
    <span>  <input type="text" id="name"><br>
    	<small id="nameerror" style="display:none">Invalid name</small>
	<b>school/college name</b><br>
		<input type="text"  id="school"><br>
		<small id="schoolerror" style="display:none">This field is empty</small>
    <b>Username</b><br>
		<input type="text"  id="user"><br>
		<small id="usererror" style="display:none">Invalid username</small>
		<b>Phone Number</b><br>
	    <input type="text"  id="phone"><br>
	    <small id="phoneerror" style="display:none">Invalid number</small>
    <b>Email</b><br>
	    <input type="text"  id="email"><br>
	    <small id="emailerror" style="display:none">Invalid Email</small>
	<b>Password</b><br>
		<input type="password"  id="pass"><br>
		<small id="passerror" style="display:none">Invalid Password</small>
    <b>Re-type password</b><br>
		<input type="password" id="re"><br><br></span>
		<small id="repasserror" style="display:none">Password not match</small>
	<b>Gender</b><br>
		<input type="radio" name="g" id=gen>Male
		<input type="radio" name="g" id=gen>Female
		<input type="radio" name="g" id=gen>Other
		<small id="generror" style="display:none">Select your gender</small><br> <br>	
		<button onclick="validate();"><a href="login.php">Register</a></button><br>
		<p class=login><a href="login.php">Already have an account..??</a></p>
	</div>
</div>



<?php include 'partials/_footer.php'; ?>