<!--Hire me form-->

<link rel="stylesheet" href="main.css">
<form action="mailto: devmoki@gmail.com" method="POST" enctype="text/plain" id ="Hire" class="mt-5">
<div class="container">
    <span class="bg-dark text-white"> Hire Me</span><hr class="bg-dark">
    <div class="row">
        <div class="col">
            <div class="card bg-white">
<!--Heading-->
            <div class="card-header">
                <h4 class="my-4">Hire me by filling the form below</h4>
 <!--Input fields-->
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" placeholder="Enter your full-names" 
                id="inputName" name="name">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="text" class="form-control" placeholder="Enter your E-mail"  
                id="inputEmail" name="email">
            </div>
            <div class="form-group">
                <label for="inputPhonenumber">Phone-number</label>
                <input type="number" class="form-control" placeholder="Phone-number" 
                id="inputPhonenumber" name="phonenumber">
            </div>
            <!--Subject-->
            <div class="form-group">
                <label for="inputSubject">Subject</label>
                <textarea class="form-control" placeholder="Project title" id="inputSubject" 
                name="subject"></textarea>
            </div>
            <!--Description-->
            <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea class="form-control" placeholder="Describe the task to be done here" 
                id="inputDescription" name="description"></textarea>
            </div>
            <!--Project timeline-->
            <div class="form-group">
                <label for="inputTimeline">Timeline</label>
                <textarea class="form-control" placeholder="When should the project be completed?" 
                id="inputTimeline" name="timeline"></textarea>
            </div>
            <!--Budget-->
            <div class="form-group">
                    <label for="inputBudget">Budget</label>
                <textarea class="form-control" placeholder="What is your budget?" id="inputBudget" 
                name="budget"></textarea>
            </div>
            <!--Button-->
            <div class="form-group">
                <button id="mailSubmit"class="btn btn-success text-white" name="submit">Submit</button>
            </div>
                    <p class="form-message"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>