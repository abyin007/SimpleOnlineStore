
function validate_name()
	{
	var x=document.getElementById("name").value;
	if(x==""){
		err_name.innerHTML="Name is empty";
		return "1";}
	else
		err_name.innerHTML="Name : "+x;
	}
