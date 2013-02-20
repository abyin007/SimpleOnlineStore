
function validate_name()
	{
	var x=document.getElementById("name").value;
	if(x==""){
		err_name.innerHTML="Name is empty";
		return "1";}
	else
		err_name.innerHTML="Name : "+x;
	}

function validate_username()
{
var x=document.getElementById("username").value;
if(x=="")
	err_username.innerHTML="Username is empty";
else
	err_username.innerHTML="Username : "+x;
}
	
function validate_passsword()
{
var x=document.getElementById("password").value;
if(x=="")
	err_passsword.innerHTML="Passsword is empty";
else
	err_passsword.innerHTML="Passsword : "+x;
}


function validate_checkPasswords()
{
var x=document.getElementById("password").value;
var y=document.getElementById("confirm_password").value;
if(x==y)
	err_checkPassword.innerHTML="Passwords are correct";
else{
	err_checkPassword.innerHTML="Passwords are incorrect";
	if(y=="")
		err_checkPassword.innerHTML="Empty";	
}}

function validate_email()
	{
	//var valid_email=/^\w+@+\w+.+\w$/;
	var valid_email=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var y=document.getElementById("email").value;
	if(valid_email.test(y))
		err_email.innerHTML="Corrent email id format";
	else
		{
		err_email.innerHTML="Incorrent email id format";
		return "1";
		}

	}
	
function validate_all_details()
{
	valid_1=validate_name();window.location.reload();
	alert("Invaild email id :"+valid_1);window.location.reload();
	valid_2=validate_email();
	valid_3=validate_username();
	valid_4=validate_password();
	
	if(valid_1=="1")
		{
		alert("Invaild email id");
		}
	if(valid_3=="1")
		{
		alert("Invaild date");
		}
	if(valid_1=="1" || valid_3=="1")
		{
		alert("Enter the details`");
		window.location.reload();
		}
	alert("Thank you");
}
