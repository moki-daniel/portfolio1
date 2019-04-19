<?php
print_r($_POST);

//define variables and set to empty values

$name_error = $email_error = $phonenumber_error = $subject_error = $description_error = $timeline_error = $budget_error = "";
$name = $email = $phonenumber = $subject = $description = $timeline = $budget = "";

//form is sumbmitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])){
        $name_error = "Name is required";
    } else {
        $name = test_input($_POST["name"]);

    }
    if (empty($_POST["email"])){
        $email_error = "Name is required";
    } else {
        $email = test_input($_POST["email"]);
        //check if email is well formed
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format";
        }
    }
    if (empty($_POST[phonenumber]))
    $phonenumber_error = "phone-number is required";
    } else {  
    $phonenumber = test_input($_POST["phonenumber"]);
    }
   }
   if (empty($_POST[subject]))
   $subject_error = "subject is required";
   } else {  
   $subject = test_input($_POST["subject"]);
   }
  }
  if (empty($_POST[description]))
  $description_error = "description is required";
  } else {  
  $description = test_input($_POST["description"]);
  }
 }
 if (empty($_POST[timeline]))
  $timeline_error = "Timeline for the project is required";
  } else {  
  $timeline = test_input($_POST["timeline"]);
  }
 }
 if (empty($_POST[budget]))
  $budget_error = "Budget for the project is required";
  } else {  
  $budget = test_input($_POST["budget"]);
  }
 }
 function test_input($data){
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
 }
?>