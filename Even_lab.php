<!DOCTYPE html>
<html>
    <head>
    
    <title>Even Numbers</title>
    <style>
        form { padding:25px
            border -radius:10px;
            width:300px;

        margin:0 auto;
        box-shadow;0 0 10px rgba(0,0,0,0.2);
    }
        </style>
    </head>
    <body>
       
           
           <center>

      
     <h1>Participant Registration</h1>
</center>
     <form onsubmit="return handelsubmit()">
    
        <label for="name">FullNAME:</label><br>
<input type="text"id="name"/><br>


<label>Email:</label><br>
<input type ="text"id="email"/><br>

<label>Password</label><br>
<input type ="text"id="pass"/><br>

<label> Confrim password:</label><br>
<input type ="text"id="cpass"/><br><br><br>

<button type ="submit">Register</button><br>

</form>

<div id="output"></div>

<script>
    function handelsubmit()
    {
        var name=document.getElemnetById ("name").value;
        var email=document.getElemnetById ("email").value;
        var password=document.getElementById ("password ").value;
           var confrimpassword=document.getElementById ("Cpassword ").value;
var outputDiv =document.getElementById("output");

    }



outputDiv.innerHTML=<h2>Registration Successful</h2>
Name:${name}<br>
Email:${email}<br>
Password:${password}<br>
Confrim Password:${confrimpassword};
return false;
</script>










    </body>
</html>