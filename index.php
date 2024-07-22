<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Court DBMS</title>
    <link rel="stylesheet" href="public/css/carousel.css">
    <link rel="stylesheet" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/2f7569df82.js" crossorigin="anonymous"></script>
    <link rel="icon" href="public/images/statue.jpg" type="image/x-icon">
</head>

<body>

    <!--Vertical Left in-page Nav Bar-->
    <div>
        <ul>
            <li class="navbar" title="Home" onclick="location.href = '#home' ">
                <i class="fab fa-jira fa-2x" id="home-btn"></i>
            </li>
            <li class="navbar" title="Login/Signup" onclick="location.href = '#faq' ">
                <i class="fab fa-jira fa-2x" id="login-btn"></i>
            </li>
            <li class="navbar" title="FAQ" onclick="location.href = '#faq' ">
                <i class="fab fa-jira fa-2x" id="faq-btn"></i>
            </li>
            <li class="navbar" title="Contact" onclick="location.href = '#contact' ">
                <i class="fab fa-jira fa-2x" id="contact-btn"></i>
            </li>
        </ul>
    </div>
    <!-- left nav ends-->

    <div id="home">
        <div class="title-bar" style="background-color: rgb(204, 60, 60);">
            <div id="item1">
                <i class="fas fa-gavel fa-3x"></i>
                <h1>Court Case Information System</h1>
            </div>
            <div id="item2">
                <button class="sm" id="home-login-btn" onclick="location.href='#login'">Login</button>
            </div>
        </div>
        <div id="login">
        <div class="carousel-wrapper " style="margin-top: 40px;">
            <div class="carousel__button carousel__button--prev hide">
                <i class="fas fa-chevron-left fa-4x hover-effect"></i>
            </div>
            <div class="carousel__track-container">
                <ul class="carousel__track">
                    <li class="carousel__slide current-slide">
                        <img class="carousel__image" src="public/images/quote1.jpg" alt="">
                        <button class="sm" id="client-btn" onclick="window.location.href='client_login.php'">
                            Log in as Client
                        </button>
                    </li>
                    <li class="carousel__slide">
                    <img class="carousel__image img-fluid rounded shadow" src="public/images/quote2.jpg" alt="" style="object-fit: cover; border: 1px solid #ddd;">
                        <button class="sm" id="lawyer-btn" onclick="window.location.href='lawyer_login.php'">
                            Log in as Lawyer
                        </button>
                    </li>
                </ul>
            </div>
            <div class="carousel__button carousel__button--next">
                <i class="fas fa-chevron-right fa-4x hover-effect"></i>
            </div>
            <style>
            .hover-effect:hover {
                color: white;
            }
            </style>
        </div>
        <div class="carousel__nav">
            <button class="carousel__indicator current-slide"></button>
            <button class="carousel__indicator"></button>
            
        </div>
    </div>
    </div>
    <!-- home section ends -->

    
    <!-- login carousel ends -->

    <div id="faq" class="container py-5" style="margin-bottom: 50px;" style="margin-top: 10px;">
        <div class="faq-content">
            <h3 class="text-center mb-4">Frequently asked Questions</h3>
            <div class="accordion mx-auto" id="faqAccordion">
                <div class="accordion-item rounded">
                    <button class="accordion">Is this website, a legit government website ?</button>
                    <div class="panel">
                        <p>Yes, this website is in control of the Indian government and is a legit one.</p>
                    </div>

                    <button class="accordion">Is this website secure and safe?</button>
                    <div class="panel">
                        <p>This website take the users data and keeps it safe and secure. We assure you that your private data will only be used for necessary transaction purposes.</p>
                    </div>

                    <button class="accordion">What payment methods are accepted here?</button>
                    <div class="panel">
                        <p>You can pay for transaction using Credit , Debit Cards also the service of E- Challan or Net - Banking is made available for the users</p>
                    </div>

                    <button class="accordion">How to find the best suited lawyer for our case?</button>
                    <div class="panel">
                        <p>There are filters in the website that sorts various lawyers as per their field of specialization,ratings, win-ratio and cost,So that you can find the best suited lawyer for your case</p>
                    </div>
                </div>
            </div>
        
    
    
             <!-- faq section ends -->

            <!-- Contact form start -->
        <div class="accordion mx-auto" id="faqAccordion" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="container">
                <h3 class="text-center my-4">Your Feedback Matters</h3>
                <br>
                <div id="contact" class="bg-secondary">
                <label for="fname">First Name :</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

                <label for="lname">Last Name :</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

                <label for="email">Email :</label>
                <input type="text" id="email" name="email" placeholder="Your email address.." required>

                <label for="comments">Message :</label>
                <textarea id="comments" name="comments" placeholder="Write something.." style="height:200px" minlength="5"
                    maxlength="250"></textarea>

                <div class="contact-submit">
                    <button class="submit-btn btn btn-secondary" value="Submit" name='contact_submit' onclick="redirect()">Submit</button>
                
                </div>
         </div>
        </div>
      </div>
    </div>
</div>


    <script src="public/js/app.js"> </script>
    <script>
        function redirect() {
            const fname = document.getElementById('fname').value;
            const lname = document.getElementById('lname').value;
            const email = document.getElementById('email').value;
            const comments = document.getElementById('comments').value;
            window.location.href =
                "https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=adithyal556@gmail.com&su=Contact+by+" +
                fname + "+" + lname +
                "&body=" + comments + "&disablechatbrowsercheck=1";
        }
    </script>

    <script src="public/js/app.js"> </script>

</body>

</html>