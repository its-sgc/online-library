function contact(){
var name=document.getElementById('na').value;

var ea=document.getElementById('ea').value;
var tx=document.getElementById('tx').value;


var usercheck=/^[A-Z.a-z ]{5,30}$/;
var emcheck=/^[a-zA-Z0-9]{3,}@[A-Za-z]{3,}[.]{1}[a-zA-Z.]{2,6}$/;

if(usercheck.test(name))
{
	document.getElementById('na').style.borderColor="green";
	
}
else{

	document.getElementById('na').style.borderColor="red";
	
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
