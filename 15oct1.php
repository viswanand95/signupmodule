<html>
    <head>
        <script type="text/javascript">

            function check()
            {
                if (document.getElementById('FirstName').value==""
                 || document.getElementById('FirstName').value==undefined)
                {
                    alert ("Please Enter a First Name");
                }else  if (document.getElementById('emailid').value==""
                 || document.getElementById('emailid').value==undefined)
                {
                    alert ("Please Enter a Email id");
                }else if(document.getElementById('emailid').value!="/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/")
				{
				    alert ("Please Enter a Valid Email Address");					  
				}else if(document.getElementById('phno').value==""
                 || document.getElementById('phno').value==undefined)
                {
                    alert ("Please Enter phone number");
                }else if(document.getElementById('address1').value==""
                 || document.getElementById('address1').value==undefined)
                {
                    alert ("Please Enter address");
                }else{
					//server call
				}			
            }

        </script>
    </head>
    <body>
		    <h3>First Name*:</h3>
            <input type="text" name="FirstName" id="FirstName">
           	<h3>Second Name:</h3>	
            <input type="text" name="SecondName" id="SecondName">
			<h3>Email Id:*</h3>
			<input type="text" name="emailid" id="emailid" size="20" >
			<h3>Ph:No:*</h3>
			<input type="text" name="phno" id="phno" size="15" >
			<h3>Pin Code:*</h3>
			<input type="text" name="pincode" id="pincode" size="30" >
			<h3>Address 1:*</h3>
			<textarea name="comment" name="address1" id="address1"  ></textarea>
			<h3>Address 2:</h3>
			<textarea name="comment" name="address2" id="address2" ></textarea>
			<br>
			<br>
            <button name="btn_move" id="btn_move" onclick="check()">Check</button>
    </body>
</html>