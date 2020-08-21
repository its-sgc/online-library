<?php include 'partials/_headermain.php'; ?>
<?php include 'partials/_navbarmain.php'; ?>
<div class=box>
	<h1>Donate</h1>
<p>If anyone is interested to help other then please donate your used book and for that please fill this form</p>

</div>
<div class=main>
	<div>
		<b>Enter fullname</b><br>
		<input type="text" id="na"><br><br>
		<b>Enter School/college name</b><br>
		<input type=text id="sc"><br><br>
		<b>E-mail</b><br>
		<input type=text id="em"><br><br>
		<b>Mobile Number</b><br>
		<input type=text id="ph"><br><br>
		<b>Enter the name of the books</b><br>
		<input type="comment" id="bo"><br><br>
		<b>Enter the total quantity of the books</b><br>
		<input type="text" id="to"><br><br>
		<button onclick="validate();">Submit</button>
	</div>
</div>

<script type="text/javascript">
	function validate(){
var na=document.getElementById('na').value;
var sc=document.getElementById('sc').value;
var bo=document.getElementById('bo').value;
var to=document.getElementById('to').value;
var em=document.getElementById('em').value;
var ph=document.getElementById('ph').value;

var usercheck=/^[A-Z.a-z ]{5,30}$/;
var bookcheck=/^[A-Z.a-z ]{5,500}$/;
var totalcheck=/^[0-9]{1,2}$/;
var emcheck=/^[A-Za-z0-9]{3,}@[A-Za-z]{3,}[.]{1}[a-zA-Z.]{2,6}$/;
var mobcheck=/^[98]{2}[0-9]{8}$/;

if(sc!="")
{
	document.getElementById('sc').style.borderColor="green";
	//document.getElementById('scerror').style.display='none';
}
else{

	document.getElementById('sc').style.borderColor="red";
	//document.getElementById('scerror').style.display='block';
}	
if(usercheck.test(na))
{
	document.getElementById('na').style.borderColor="green";
	//document.getElementById('usererror').style.display='none';
}
else{

	document.getElementById('na').style.borderColor="red";
	//document.getElementById('usererror').style.display='block';
}	
if(mobcheck.test(ph))
{
	document.getElementById('ph').style.borderColor="green";
	//document.getElementById('usererror').style.display='none';
}
else{

	document.getElementById('ph').style.borderColor="red";
	//document.getElementById('usererror').style.display='block';
}	

if(emcheck.test(em))
{
	document.getElementById('em').style.borderColor="Green";
    //document.getElementById('eaerror').style.display="none";
	//alert("email valid");
	
}
else{
document.getElementById('em').style.borderColor="red";
   // document.getElementById('eaerror').style.display="block";
	//alert("invalid");
	
}
if(bookcheck.test(bo))
{
	//alert(" password valid");
	document.getElementById('bo').style.borderColor="green";
    //document.getElementById('bookerror').style.display='none';
}

else{
   document.getElementById('bo').style.borderColor="red";
    //document.getElementById('bookerror').style.display='block';
	}
	if(totalcheck.test(to))
{
	//alert(" password valid");
	document.getElementById('to').style.borderColor="green";
   // document.getElementById('totalerror').style.display='none';
}

else{
   document.getElementById('to').style.borderColor="red";
    //document.getElementById('totalerror').style.display='block';
}	


}
</script>



<script type="text/javascript">
	function validate(){
var name=document.getElementById('na1').value;

var ea=document.getElementById('ea').value;
var tx=document.getElementById('tx').value;


var usercheck=/^[A-Z.a-z ]{5,30}$/;
var emcheck=/^[a-zA-Z0-9]{3,}@[A-Za-z]{3,}[.]{1}[a-zA-Z.]{2,6}$/;

if(usercheck.test(name))
{
	document.getElementById('na1').style.borderColor="green";
	
}
else{

	document.getElementById('na1').style.borderColor="red";
	
}	
if(emcheck.test(ea))
{
	document.getElementById('ea').style.borderColor="Green";
    
	
}
else{
document.getElementById('ea').style.borderColor="red";
    
	
}

if(tx!="")
{
	document.getElementById('tx').style.borderColor="Green";
}
else{
	document.getElementById('tx').style.borderColor="red";

}

}

</script>

<?php include 'partials/_footer.php'; ?>
