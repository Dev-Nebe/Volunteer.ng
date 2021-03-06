<?php

$userId = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Volunteer.ng is a platform for NGOs and other entities in need of funding and manpower from the general public. Registered organizations will be able to create projects and receive funding or volunteer applications from other users.">
    <meta name="keywords" content="donation, funding, volunteer, give out, crowdfunding, help" />
    <meta property="og:title" content="VolunteerNG" />
    <meta property="og:image" content="https://res.cloudinary.com/judejax/image/upload/v1567639575/volunteerNG_green_background.png" />
    <meta property="og:description" content="Volunteer.ng is a platform for NGOs and other entities in need of funding and manpower from the general public. Registered organizations will be able to create projects and receive funding or volunteer applications from other users." />
    
    <title>Volunteer NG | Money Donation</title>
    <link href="./css/fontawesome/css/all.min.css" rel="stylesheet" />
    <link rel="icon" href="https://res.cloudinary.com/judejax/image/upload/v1567639756/favicon.ico" alt="Volunteeer NG Icon" sizes="16x16" type="image/png" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/render.css" />
</head>


<body>
    <!-- Top-Most Nav Starts Here -->
    <div class="topmost-nav">
        <div class="left col-3">
            <a href=""><i class="fab fa-facebook"></i> </a> &nbsp; &nbsp; &nbsp;
            <a href=""><i class="fab fa-instagram"></i> </a> &nbsp; &nbsp; &nbsp;
            <a href=""><i class="fab fa-twitter"></i> </a> &nbsp; &nbsp; &nbsp;
            <a href=""><i class="fab fa-youtube"></i> </a> &nbsp; &nbsp; &nbsp;
        </div>
        <div class="right col-6">
            <a href="tel:7071234567"><i class="fa fa-phone"></i> +234 7071234567</a>
            <a href="mailto:volunteerng@gmail.com"><i class="fa fa-envelope"></i> volunteerng@gmail.com</a>
        </div>
    </div>

    <!-- Top-Most Nav Starts Here -->

    <!-- Second Nav starts here -->
    <!-- Header -->
    <header>
        <div class="container">
            <div id="branding">
                <a href="index.html">
                    <img src="https://res.cloudinary.com/judejax/image/upload/v1567639575/logo.png" alt="Volunteeer Logo" title="Volunteer NG" width="165" height="70" />
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="entities.php">Entities</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="team.php">The Team</a></li>
                    <li class="auth_button">
                        <a href="sign-in.php"> <i class="fa fa-user" style="color: white"></i>
                            Sign In | Sign Up</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>



    <!--inputted code here-->
    <a href="">
        <h2 id="render"><u>Mon</u>ey Donation</h2>
    </a><br />
    <div id="container">

        <div class="how">How do you wish to <a href="">donate?</a></div>
        <a href="make-payment.html">
            <div id="midmenuwhite"> <i class="fa fa-money-bill"></i> Money Donations</div>
        </a>
        <a href="render-a-service.html">
            <div class="midmenugreen"> <i class="fas fa-hand-holding-heart  white-fa"></i> Render A Service
            </div>
        </a>
        <a href="material-gift.html">
            <div class="midmenugreen"> <i class="fa fa-gift white-fa"></i> Material Gift</div>
        </a>
        <div class="break"></div>

        <div id="tohelp"> <strong> Your Information</strong></div>


        <form method="GET" action="pay.php">
            <input type="hidden" name="user" value="<?php echo $userId ?>">
            <div class="contactmenu">First Name <br />
                <input type="text" name="firstname" placeholder="First Name" required /></div>
            <div class="contactmenu">Last Name <br />
                <input type="text" name="lastname" placeholder="Last Name" required /></div>


            <div class="break"></div>
            <div class="number">Email <br />
                <input type="email" name="email" placeholder="Email" required /></div>
            <div class="number">Phone Number <br />
                <input type="number" name="phone" placeholder="Phone Number" /></div>

            <div class="break"></div>
            <div class="number">Dedicate donation in honour this Person (optional) <br />
                <input type="text" placeholder="Full Name of Person" /></div>
            <div class="number">Amount to Donate <br />
                <input type="number" name="amount" placeholder="Amount" required /></div>

            <div class="break"></div>
            <div class="service">Message</div>
            <div class="othersinput">
                <input type="text" placeholder="Leave a Message" />
            </div>


            <div class="pay-button-container">
                <button type="submit" class="pay-button">Make Payment</button>
            </div>
        </form>

        <br>
        <div class="pay-button-container">
            <img src="https://res.cloudinary.com/judejax/image/upload/v1567639672/trusted_by_flutterwave.png" alt="Trusted by Flutterwave" title="Flutterwave">
        </div>
        <!--I dont know how "RECAPTCHA" works-->


    </div>



    </div>


    </div>


    </div>
    <footer>
        <div class="footer">
            <div class="col-3">
                <img src="https://res.cloudinary.com/judejax/image/upload/v1567645699/volunteerNG_white_full.png" alt="Volunteer Ng logo" title="volunteer ng" height="100" width="130"> <br>
                <a href=""><i class="fa fa-phone"></i>+234 7071234567</a>
                <a href=""><i class="fa fa-envelope"></i>volunteerng@gmail.com</a>
                <a href="https://goo.gl/maps/qhUnDeF5drZUdH83A" target="_blank"><i class="fas fa-map-marker"></i>Find
                    Us</a>
            </div>
            <div class="col-3">
                <h3>Donations</h3>
                <ul>
                    <li><a href="material-gift.html"> <i class="fas fa-arrow-right"></i>&nbsp; Gift Donation</a></li>
                    <li><a href="entities.php"><i class="fas fa-arrow-right"></i>&nbsp; Money Donation</a></li>
                    <li><a href="render-a-service.html"><i class="fas fa-arrow-right"></i>&nbsp; Offer a Service</a>
                    </li>
                    <li><a href="sign-in.php"><i class="fas fa-arrow-right"></i>&nbsp; Request for a Donation</a>
                    </li>
                </ul>
            </div>
            <div class="col-3">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="team.php"><i class="fas fa-arrow-right"></i>&nbsp; Our Team</a></li>
                    <li><a href="about.html"><i class="fas fa-arrow-right"></i>&nbsp; About Us</a></li>
            </div>
            <div>
                <h3>Stay Updated</h3>
                <span>Subscribe to our newsletter</span>
                <div class="input-field">
                    <form>
                        <input type="text">
                        <span class="submit"><i class="fas fa-arrow-right"></i></span>
                    </form>
                </div>
                <div class="inline">
                    <a href=""><i class="fab fa-facebook"></i> </a> &nbsp; &nbsp;
                    <a href=""><i class="fab fa-instagram"></i> </a> &nbsp; &nbsp;
                    <a href=""><i class="fab fa-twitter"></i> </a> &nbsp; &nbsp;
                    <a href=""><i class="fab fa-youtube"></i> </a> &nbsp; &nbsp;
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
