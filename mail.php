<?php
if (isset($_POST['submit']){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    $timeline = $_POST['timeline'];
    $budget = $_POST['budget'];

    $errorEmpty = false;
    $errorEmail = false;

    if(empty($name) ||($email) ||($subject) ||($description) ||($timeline)  ||($budget) ){
        echo "<span class='form-error'> Fill in all fields!</span>";
        $errorEmpty = true;}
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<span class='form-error'> Write a valid e-mail address!</span>";
        }
        else{
            echo "<span class='form-success'> Fill in all fields!</span>";

        }

    }
    else
    {
        echo "Their was an error!";
    }
?>
<script>
    $("#inputName, #inputEmail, #inputPonenumber, #inputSubject, #inputDescription, #inputTimeline, #inputBudget").removeClass("input-error");
    var $errorEmpty = <?php echo $errorEmpty; ?>;
    var $errorEmail = <?php echo $errorEmail; ?>;
    if (errorEmpty == true){
        $("#inputName, #inputEmail, #inputPonenumber, #inputSubject, #inputDescription, #inputTimeline, #inputBudget").addClass("input-error");
    }
    if (errorEmail == true){
        $("#inputEmail").addClass("input-error");
    }
    if (errorEmpty == false && errorEmail == false){
        $("#inputName, #inputEmail, #inputPonenumber, #inputSubject, #inputDescription, #inputTimeline, #inputBudget").val("");

    }