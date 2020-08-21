function validate(){
var name=document.getElementById('na').value;

var pa=document.getElementById('pa').value;


var usercheck=/^[A-Z.a-z ]{5,30}$/;
var passcheck=/^[a-zA-Z0-9!@#$%^&*]{8,20}$/;
if(usercheck.test(name))
{
	document.getElementById('na').style.borderColor="green";
	document.getElementById('usererror').style.display='none';
}
else{

	document.getElementById('na').style.borderColor="red";
	document.getElementById('usererror').style.display='block';
	document.getElementById('usererror').style.color='red';
}	
if(passcheck.test(pa))
{
	//alert(" password valid");
	document.getElementById('pa').style.borderColor="green";
    document.getElementById('passerror').style.display='none';
}

else{
   document.getElementById('pa').style.borderColor="red";
    document.getElementById('passerror').style.display='block';
    document.getElementById('passerror').style.color='red';
	//alert("password invalid");
	//document.getElementById('nameerror').innerHTML="user name is invalid";
}

}