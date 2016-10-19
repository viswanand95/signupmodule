<?php
		 
		$conn = new mysqli('localhost','root', '86083139555A','anand');

        if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
        } 
		
		 $FirstName = $_POST['Firstname'];
         $SecondName =$_POST['Secondname'];
		 $phno =$_POST['phno'];
		 $address1=$_POST['address1'];
		 $address2=$_POST['address2'];
         $Email = $_POST['emailid'];
		 $Password=$_POST['password'];
		 
		 $sql_check = "SELECT emailid from input WHERE emailid = '$Email'";
         $result = $conn->query($sql_check);
		 if (($result->num_rows)!=0){
			 echo "email already exists";
		 }else{ 
		 $sql = "INSERT INTO input (Firstname, SecondName, phno, address1, address2, emailid, password)
           VALUES ('$FirstName', '$SecondName','$phno','$address1','$address2', '$Email', '$Password')";	

		   if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
          }
 
          $conn->close(); 
		 }
?> 