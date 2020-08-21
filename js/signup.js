function display_popup(){
		document.getElementById('popup').style.display="block";
	}
	function close_popup(){
		document.getElementById('popup').style.display="none";
	}
			function validate()
		{
			var n=document.getElementById('name').value;
		   
			var p =document.getElementById('pass').value;
			var r =document.getElementById('re').value;
			var ph=document.getElementById('phone').value;
		    var s=document.getElementById('school').value;
		    var u=document.getElementById('user').value;
		    var e=document.getElementById('email').value;
            var g=document.getElementById('gen').value;
    
    var namecheck=/^[A-Z.a-z ]{5,30}$/;
var passcheck=/^[a-zA-Z0-9!@#$%^&*]{8,20}$/;
var emcheck=/^[A-Za-z0-9]{3,}@[A-Za-z]{3,}[.]{1}[a-zA-Z.]{2,6}$/;
var usercheck=/^[A-Z.a-z]{5,30}$/;
var mobcheck=/^[98]{2}[0-9]{8}$/;
if(g=""){
	document.getElementById('gen').style.borderColor="red";
	//document.getElementById('generror').style.display='none';
	//document.getElementById('generror').style.color='red';
}
else{
	document.getElementById('gen').style.borderColor="green";
//document.getElementById('generror').style.display='none';

}
if(usercheck.test(u))
{
	//alert("valid");
	document.getElementById('user').style.borderColor="green";
	//document.getElementById('usererror').style.display='none';
}
else{

	//alert("invalid");
	document.getElementById('user').style.borderColor="red";
	//document.getElementById('usererror').style.display='block';
	//document.getElementById('usererror').style.color='red';
}	
if(namecheck.test(n))
{
	//alert("valid");
	document.getElementById('name').style.borderColor="green";
	//document.getElementById('nameerror').style.display='none';
}
else{

	//alert("invalid");
	document.getElementById('name').style.borderColor="red";
	//document.getElementById('nameerror').style.display='block';
		//document.getElementById('nameerror').style.color='red';

}	
if(passcheck.test(p))
{
	//alert(" password valid");
	document.getElementById('pass').style.borderColor="green";
	document.getElementById('re').style.borderColor="green";
	//document.getElementById('paerror').style.display='none';
}

else{
document.getElementById('pass').style.borderColor="red";
document.getElementById('re').style.borderColor="red";

    //document.getElementById('passerror').style.display="block";
    	//document.getElementById('repasserror').style.display='block';
//document.getElementById('passerror').style.color="red";
    	//document.getElementById('repasserror').style.display='red';
	//alert("password invalid");
	

}
/*if(p==r)
{
	//alert(" password valid");
	
	document.getElementById('pass').style.borderColor="green";
		document.getElementById('re').style.borderColor="green";
	
	//document.getElementById('repasserror').style.display='none';
}

else{

document.getElementById('repass').style.borderColor="red";
    //document.getElementById('repasserror').style.display="block";
	//document.getElementById('repasserror').style.color="red";
    	
	//alert("password invalid");
	
}*/
if(emcheck.test(e))
{
	document.getElementById('email').style.borderColor="Green";
    //document.getElementById('emailerror').style.display="none";
	
    	
	//alert("email valid");
	
}
else{
document.getElementById('email').style.borderColor="red";
   // document.getElementById('emaierror').style.display="block";
	//document.getElementById('emailerror').style.color="red";
	//alert("invalid");
	
}
if(mobcheck.test(ph))
{
	document.getElementById('phone').style.borderColor="green";
    //document.getElementById('phoneerror').style.display="none";
	//alert(" phone valid");
	
}
else{
document.getElementById('phone').style.borderColor="red";
  // document.getElementById('phoneerror').style.display="block";
	 //  document.getElementById('phoneerror').style.color="red";
//alert("invalid");
	
}
		
if(s=="")
{
document.getElementById('school').style.borderColor="red";
//document.getElementById('schoolerror').style.display="block";

//document.getElementById('schoolerror').style.color="red";

}	else{
	document.getElementById('school').style.borderColor="green";
	//document.getElementById('schoolerror').style.display="none";

}		
}
