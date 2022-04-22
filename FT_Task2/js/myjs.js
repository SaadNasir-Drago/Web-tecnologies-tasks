function validateform()
{
    var fname=document.getElementById("fname").value;
    var lname=document.getElementById("lname").value;
    var age=document.getElementById("age").value;
    var salary=document.getElementById("salary").value;
    var address=document.getElementById("address").value;
    var email=document.getElementById("email").value;
    var pass=document.getElementById("pass").value;

    
    if(!(fname || lname || age|| salary || address || email || pass))
    {
        document.getElementById("message1").innerHTML="*all field cannot be empty";
        return false;
    }
    if(fname.length<4)
    {
        document.getElementById("message2").innerHTML="*name must be greater than 3 letters";
        return false;
        
    }
    if(lname.length<4)
    {
        document.getElementById("message3").innerHTML="*name must be greater than 3 letters";
        return false;
        
    }
    if(pass.length<7)
    {
        document.getElementById("message4").innerHTML="*password must be greater than 6 letters";
        return false;
        
    }
    
    
    return true;

}



function ValidateEmail(inputText)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{
alert("Valid email address!");
document.form1.email.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.form1.email.focus();
return false;
}
}

