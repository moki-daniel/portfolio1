$('#Hire').submit(function(e){

    //variables for the code

 var name = document.getElementById('inputName'),
    email = document.getElementById('inputEmail'),
    phonenumber = document.getElementById('inputPhonenumber'),
    subject = document.getElementById('inputSubject'),
    description = document.getElementById('inputDescription'),
    timeline = document.getElementById('inputTimeline'),
    budget = document.getElementById('inputBudget');

    //if no information keyed in
    if (!name.value || !email.value || !phonenumber.value || !subject.value 
        || !description.value || !timeline.value || !budget.value)
        {
            //error message
        alertify.error('Please check your entries again')
    }
    else
    {
        //got from formspree for email direction
        $.ajax({
            url: "https://formspree.io/devmoki@gmail.com",
            method: "POST",
            data: $(this) .serialize(),
            datatype: "json"
        });
        e.preventDefault()
        $(this).get(0).reset()
        //success message
        alertify.success('message sent')

    }
})