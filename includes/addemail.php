
	<?php  
	  $dbc = mysqli_connect('localhost', 'arta1', 'demo123', 
	          'email_store')
			  or die('Error');
			  
	  
	  $email = $_POST['email'];
	  
      $query = "INSERT INTO email_list (email) " .
               "VALUES ('$email')";
      mysqli_query($dbc, $query)
              or die('Error');	

      echo 'You are registered.';
      


      mysqli_close($dbc);	  
	?> 
