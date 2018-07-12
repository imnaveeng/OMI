function getsdData()
{	
	var username = document.forms['reg']['username'].value;
	var firstname = document.forms['reg']['firstname'].value;
	var lastname = document.forms['reg']['lastname'].value;
	var password = document.forms['reg']['password'].value;
	var age = document.forms['reg']['age'].value;
	var mobile = document.forms['reg' ]['mobile'].value;
	var email = document.forms['reg']['email'].value;
	var address = document.forms['reg']['address'].value;
	if(username==""|| firstname=="" || lastname==""|| password=="" || age==""||mobile=="" || email=="" || address=="")
	{
		var erroMsg=document.getElementsByClassName('erroMsg')[0];	
		erroMsg.innerHTML="please do not leave any field empty";
		erroMsg.classList.add('erroMsgshow');
		setTimeout(removeWarning,5000);
		return false;

	}
}

function removeWarning()
{
	var erroMsg=document.getElementsByClassName('erroMsgshow')[0];
	erroMsg.classList.remove('erroMsgshow');
}
function validate()
{
	
		getsdData();
	  return getsdData();
	
	  
}