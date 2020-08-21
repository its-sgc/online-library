<?php include 'partials/_header.php'; ?>
	<div class="login-first">
		<h1>Login</h1>
		<form method="post" action="index2.php">
	<b >	Username</b><br>
	<input type="text" id="na">
	<small id=usererror style="display: none;">invalid name</small> <br><br>
	<b>Password</b><br>
	<input type="password" id="pa">
	<small id=passerror style="display: none;">invalid password</small><br><br><br>
	<button  onclick="validate();"class=login><a href=index2.php>Login</a></button>
	<p><a href=signup.html></a></p>
		<img src="s1.jpg" height="162%" width="427%">
	</form></div>

<div class="popup" id='popup'>
	<div class="popup-container">
		<div class="chatbox">
	<div class="chatlogs">

		<div class="chat friend">
			<div class="user-photo"></div>
				<p class="chat-mess">hello, how are you</p></div>
				<div class="chat self">
					<div class="user-photo"></div>
					<p class="chat-mess">hi how are you</p></div>
		    <div class="chat friend">
			<div class="user-photo"></div>
				<p class="chat-mess">From Middle English anything, ng, onything, from Late Old English aniþing, from </p></div>
				
				<div class="chat self">
					<div class="user-photo"></div>
					<p class="chat-mess">hi how are you</p></div>
		    
		</div>
		<div class="chat-form">
			<textarea></textarea>
			<button>send</button>
	</div>	
</div>
		
		<span class=close onclick="close_popup();"> X </span>
	</div>

	<script type="text/javascript">
	
</script>
</body>
<script src="js/popup.js"></script>
<script src="js/login.js"></script>
</html>

