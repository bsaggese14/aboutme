<?php 

    if(isset($_POST['email'])) {
	   $email = htmlspecialchars($_POST['email']);
    }
    if(isset($_POST['message'])) {
        $message = htmlspecialchars($_POST['message']); 
    }
    if(isset($_POST['name'])) {
        $name = htmlspecialchars($_POST['name']); 
    }
    if(isset($_POST['inquiryReason'])) {
        $inquiryType = $_POST['inquiryReason']; 
    }
    if (isset($_POST['submit'])) {
    	if (strlen($message) < 1) {
    		echo '<p> * message field not filled. *</p>';
    	}
        else if (strlen($name) < 1) {
            echo '<p> * name field not filled. *</p>';
        }
    	else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

    		mail("bs623@cornell.edu", "$inquiryType inquiry from 2300/p1 from $name", $message);
    		echo "<p> * Your email was sent with return address: '$email' with content: '$message' *</p>";
            echo "<p>$inquiryType</p>";
    	}
        else {
            echo '<p> * invalid email *</p>';
        }
	}
	
?> 