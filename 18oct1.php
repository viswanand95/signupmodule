<html>
 <head>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
   <script type="text/javascript">
   
   function login()
   {
	 var name = document.getElementById('FirstName');
	 var phno = document.getElementById('phno');
	 var email = document.getElementById('emailid');
	 var pass1 = document.getElementById('password').value;
     var pass2 = document.getElementById('confirmpassword').value;
	 var name1 = /^[a-zA-Z ]{2,15}$/;
	 var phoneno =  /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; 
	 var email_id = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
	 console.log(!name1.test(name.value));
	 console.log(!email_id.test(email.value));
	 console.log(!phoneno.test(phno.value));
	 
	            if (document.getElementById('FirstName').value==""
                 || document.getElementById('FirstName').value==undefined)
                {
                    alert ("Please Enter a First Name");
                }else  if (!name1.test(name.value))
                {
                    alert ("Please enter valid first name");
                }else if(document.getElementById('phno').value==""
                 || document.getElementById('phno').value==undefined)
                {
                    alert ("Please Enter phone number");
                }else if(!phoneno.test(phno.value)){
					 alert("Please provide a valid phone number");
				}else if(document.getElementById('address1').value==""
                 || document.getElementById('address1').value==undefined)
                {
                    alert ("Please Enter address");
                }else if (document.getElementById('emailid').value==""
                 || document.getElementById('emailid').value==undefined)
                {
                    alert ("Please Enter email address");
                }else if(!email_id.test(email.value)){
					alert ("please enter valid email id");
				}else if(document.getElementById('password').value==""
                 || document.getElementById('password').value==undefined){
					alert ("please enter password");
				 }else if(document.getElementById('confirmpassword').value==""
                 || document.getElementById('confirmpassword').value==undefined){
					alert ("please confirm password");
				 }else if (pass1 != pass2){
					 alert ("password mismatch");
				 }else{
					$.ajax({
                        type: "POST",
                        url: '18oct2.php',
                        data: {"Firstname": document.getElementById('FirstName').value , "Secondname": document.getElementById('SecondName').value , "phno" : document.getElementById('phno').value ,
						"address1" : document.getElementById('address1').value , "address2" : document.getElementById('address2').value ,"emailid": document.getElementById('emailid').value ,
						"password": document.getElementById('password').value },
                        success:  function(data){
						alert (data);
						}
					});
					 				
				}
	 }
   </script>
 </head>
 <body>
 
    <h1>User Details</h1>
	<h3>First Name*:</h3>
	<input type="text" name="FirstName" id="FirstName">
	<h3>Second Name:</h3>	
	<input type="text" name="SecondName" id="SecondName">
	<h3>Phone.no:*</h3>
	<input type="text" name="phno" id="phno" size="15" >
	<h3>Address 1:*</h3>
	<textarea name="comment" name="address1" id="address1"  ></textarea>
	<h3>Address 2:</h3>
	<textarea name="comment" name="address2" id="address2" ></textarea>
			
    <h1>New User</h1>
    <h3>Email Id:*</h3>
	<input type="text" name="emailid" id="emailid" size="20" >
	<h3>Password:*</h3>
	<input type="password" name="password" id="password" size="20" >
	<h3>Confirm Password:*</h3>
	<input type="password" name="confirmpassword" id="confirmpassword" size="20" >
	<br>
	<br>
	<button name="login" id="login" onclick="login()">Login</button>
 </body>
</html>