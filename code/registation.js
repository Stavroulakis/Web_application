function formValidation()  
{  
var pass = document.getElementsByName('pass')[0]; 
var cpass = document.getElementsByName('cpass')[0];  

 
if(conf_pass(pass,cpass) )
{	
	return true;
}
return false;

}



function conf_pass(pass,cpass)  
{   

if(pass.value==cpass.value)  
{  
return true;  
}  
else  
{  
alert('Enter again pass');  

cpass.focus();  
return false;  
}  
}  

