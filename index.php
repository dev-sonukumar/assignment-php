<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <header class="navContainer">
        <section class="container navbarContainer">

            <nav class="navbar flex">
                <div class="branding">
                    <img src="./images/branding.png" alt="branding" />
                </div>
                <ul class="listItems flex">
                    <li class="nav-item dropdown">
                        <a href="#" class="dropbtn">Services <span><i class="fa-solid fa-chevron-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Service 1</a></li>
                            <li><a href="#">Service 2</a></li>
                            <li><a href="#">Service 3</a></li>
                        </ul>
                    </li>
                    <li><a href="about.php">Experts</a></li>
                    <li><a href="contact.php">Reviews</a></li>
                    <li><a href="login.php">About us</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="dropbtn">Subject <span><i class="fa-solid fa-chevron-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Subject 1</a></li>
                            <li><a href="#">Subject 2</a></li>
                            <li><a href="#">Subject 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="dropbtn">Resources <span><i class="fa-solid fa-chevron-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Resources 1</a></li>
                            <li><a href="#">Resources 2</a></li>
                            <li><a href="#">Resources 3</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="order flex">
                    <div><a href="/" class="btn">Order Now</a></div>
                    <div><img src="./images/adduser.png" alt="" /></div>
                </div>
            </nav>
        </section>
    </header>


    <!-- --- hero section  ----->

    <section class="heroSection">
        <div class="container flex">
            <!-- Hero left container  -->
            <div class="heroLeft">
                <div>
                    <h1>
                        <span class="heroText">#1 Assignment W</span>riting
                        <span>Services by E</span>xperts
                    </h1>
                    <p>
                        Essay Writing Assistance by Profession Ph.D. Experts Book Now with
                        Us
                    </p>
                    <div>
                        <img src="./images/reviews google.png" alt="" srcset="" />
                    </div>
                </div>
            </div>

            <!--Hero right container  -->
            <div class="heroRight">
                <container>
                    <form action="#" method="POST" class=" formContainer bdr">
                        <h4>Trusted Assignment Help by Real Experts</h4>
                        <div class="formmain flex">
                            <!-- -- left form --  -->
                            <div class="formLeft flex">
                                <!-- Eamil -->
                                <input type="email" name="email" placeholder="Email" required />

                                <input type="text" name="subject" placeholder="Subject" required />


                                <div class="flex">
                                    <a href="#" class="page-btn">-</a>

                                    <span class=" pages">
                                        <input type=" number" name="pages" placeholder="Number" />
                                    </span>

                                    <a href="#" class="page-btn">+</a>
                                </div>


                                <select name=" number" class="yourNumber">
                                    <option value="Numbers">Your Number</option>
                                    <option value="option1">Number 1</option>
                                    <option value="option2">Number 2</option>
                                    <option value="option3">Number 3</option>
                                </select>

                            </div>
                            <!-- -- right form --  -->

                            <div class="formRight flex">
                                <select name="assignment" class="assessment">
                                    <option value="volvo">Assesment</option>
                                    <option value="option1">option 1</option>
                                    <option value="option2">option 2</option>
                                    <option value="option3">option 3</option>
                                </select>

                                <select name="budget" class="budget">
                                    <option value="budget">$ Budget</option>
                                    <option value="option1">option 1</option>
                                    <option value="option2">option 2</option>
                                    <option value="option3">option 3</option>
                                </select>

                                <div class="flex wordLimit">
                                    <label class="switch">
                                        <input type="checkbox" />
                                        <span class="slider round"></span>
                                    </label>
                                    <p>No Word Limit</p>
                                </div>

                                <input type="test" name="deadline" placeholder="Deadline" required />

                            </div>
                        </div>

                        <div class="flex formmain2">
                            <label class="switch">
                                <input type="checkbox" />
                                <span class="slider round"></span>
                            </label>
                            <p>Get a Flat 10% Off on First Booking</p>
                        </div>
                        <input type="file" name="" id="">
                        <input type="submit" value="submit" class="submit-btn">
                    </form>
            </div>
        </div>
    </section>
</body>

</html>




<?php
 error_reporting(0);
// Check if the form was submitted
if (isset($_POST)){
  
   // Get the form data
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $number = $_POST['number'];
   $assignment = $_POST['assignment'];
   $budget = $_POST['budget'];
   $deadline = $_POST['deadline'];
   $wordLimit = isset($_POST['wordLimit'])? 'Yes' : 'No';
   
   // display the form

   
   echo "First fill the form then:- <br>";
   echo "Please check the details below: <br><br>";
   
   // display the form data in a formatted manner (for example, in a table)
   echo "<table>";
   echo "<tr><td>Email:</td><td>$email</td></tr>";
   echo "<tr><td>Subject:</td><td>$subject</td></tr>";
   echo "<tr><td>Number:</td><td>$number</td></tr>";
   echo "<tr><td>Assignment:</td><td>$assignment</td></tr>";
   echo "<tr><td>Budget:</td><td>$budget</td></tr>";
   echo "<tr><td>Deadline:</td><td>$deadline</td></tr>";
   echo "<tr><td>Word Limit:</td><td>$wordLimit</td></tr>";
   echo "</table>";
   
   // Save the form data in a database (for example, using PDO
  //  echo "Email: $email <br>";
  //  echo "Subject: $subject <br>";
  //  echo "Number: $number <br>";
  //  echo "Assignment: $assignment <br>";
  //  echo "Budget: $budget <br>";
  //  echo "Deadline: $deadline <br>";
  //  echo "Word Limit: $wordLimit <br>";
}