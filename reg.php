
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet"  href="reg.css">
</head>
<body>
    <h2 id="wel">WELCOME</h2>                                   
        <form class="col-6 offset-3 form-group  "action="practise_project.php" method="POST">
        
        <div class="row">
            <div class="" id="colm">
                <div class="regi">
                    <form class="form-group " action="practise_project.php" method="POST">
                        <h2 class="cc">
                            Registration
                        </h2>
                        <hr style="color:blue;">
                        <div class="fog">
                            <div class="col">
                                <label for="Name">Name:</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Name" aria-label="Name" required>
                            </div>
                            <div class="col">
                                <label for="Name">Email:</label>
                                <input type="email" class="form-control" name="email" placeholder="abc@example.com" aria-label="Email" required>
                            </div>
                            <div class="col">
                                <label for="Name">Password:</label>
                                <input type="password" class="form-control" name="pass" placeholder="Password" aria-label="Password" minlength="8" maxlength="20" required>
                                <p>Password Must be atleast 8 character.</p>
                            </div>
                            <div class="col">
                                <label for="Name">Password:</label>
                                <input type="password" class="form-control" name="Pass" placeholder="Password" aria-label="Password" minlength="8" maxlength="20" required>
                                <p>Password Must be same as Above.</p>
                            </div>
                            <div class="col">
                                <label for="Name">Phone:</label>
                                <input type="tel" class="form-control" name="phone" placeholder="Phone Number" aria-label="Phone Number" required>
                            </div>
                            <div class="col">
                                <label for="Name">Subject:</label>
                                <input type="text" class="form-control" name="subject" placeholder="Subject" aria-label="Subject" required>
                            </div>
                            
                        </div>
                    </form>
                    <button type="submit" class= "btn-sm btnn">Register</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>


