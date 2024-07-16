<?php
session_start();
include "../php/config.php";

$sql = "SELECT register.photo FROM register WHERE email LIKE '".$_SESSION["email"]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content="The Fitness Club is a state of the art GYM, complete with equipment for cardio and strength training." />

    <link rel="icon" href="../img/logo.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./index.css">

    <title>The Fitness Club - Gym | Cardio | Yoga | Zumba</title>
</head>

<body>
    <div class="position-fixed bottom-0 end-0">
        <a href="#top"><img class="m-4" src="../img/uparrow.png" alt="Error" height="50px" /></a>
    </div>
    <nav class="navbar navbar-expand-lg py-4 bg-dark" data-bs-theme="dark">
        <div class="container gap-5" style="overflow: visible;">
            <a class="navbar-brand text-white order-2" href="aft_login.php" data-bs-toggle="tooltip"
                data-bs-placement="bottom" data-bs-title="TFC">The Fitness Club</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="offcanvas offcanvas-end bg-dark order-1 order-lg-2" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"
                        style="filter: invert(1);"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav align-items-center justify-content-end flex-grow-1 pe-3 gap-3">
                        <li class="nav-item">
                            <a class="nav-link text-capitalize text-center" aria-current="page" href="./aft_login.php"
                                data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize text-center" href="./about.php" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" data-bs-title="About">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize text-center active" href="./trainer.php"
                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                data-bs-title="Trainers">Trainers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize text-center" href="./schedule.php"
                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                data-bs-title="Schedule">Schedule</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize text-center" href="./packages.php"
                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                data-bs-title="Packages">Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-danger border border-white text-capitalize px-4 py-2 fw-bold text-center"
                                href="./ptrainer.php" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                data-bs-title="Hire Private Trainer">Hire Private Trainer</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="dropdown order-3">
                <img class="rounded-circle" src="../php/photo/<?php  echo $row['photo'];?>" height="100px" width="100px"
                    style="cursor: pointer;" alt="Profile" class="dropdown-toggle" id="profileDropdown"
                    data-bs-toggle="dropdown" aria-expanded="false">
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                    <li><a class="dropdown-item" href="../php/perinfo.php">Personal Details</a></li>
                    <li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    }
    }
    ?>

    <section class="trainer-section">
        <div class="container text-center  common-title fw-bold">
            <h2 class="common-heading ">Our Trainers</h2>
            <hr class="w-25 mx-auto" style="color: #dc3545;" />
        </div>

        <div class="container">
            <div class="row p-5 g-5">
                <div class="col-12 t d-flex gap-5" id="1">
                    <img src="../img/t1.png" alt="t1" height="250px" />
                    <div class="border p-3" style="width: 800px;">
                        <p class="fw-bolder mt-4">Nathan FitFlow</p>
                        <p class="t-item">Yoga Trainer</p><br />

                        <p><strong>Experience:</strong>7 years</p>
                        <p><strong>Bio:</strong>Nathan's yoga practice is rooted in a holistic approach to wellness.
                            With a background in martial arts,
                            he incorporates discipline and mindfulness into his yoga sessions. Nathan aims to empower
                            his students to achieve physical
                            strength and mental clarity through the practice of yoga.</p><br>
                        <p><strong>Available from:</strong> 8AM - 12PM to 4PM - 8PM</p>
                        <div class="d-flex gap-2 justify-content-center justify-content-lg-start p-3">
                            <a href="https://www.facebook.com/"><img src="../img/fb.png" class="img-fluid"
                                    alt="Facebook" width="40em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Facebook" /></a>
                            <a href="https://www.instagram.com/"><img src="../img/in.png" class="img-fluid"
                                    alt="Instagram" width="40em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Instagram" /></a>
                            <a href="https://twitter.com/"><img src="../img/twi.png" class="img-fluid" alt="Twitter"
                                    width="36em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Twitter" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 t d-flex gap-5" id="2">
                    <img src="../img/t2.png" alt="t1" height="250px" />
                    <div class="border p-3" style="width: 800px;">
                        <p class="fw-bolder mt-4">Jack Fitness</p>
                        <p class="t-item">Gym Instructor</p><br />

                        <p><strong>Experience:</strong>5 years</p>
                        <p><strong>Bio:</strong>Jack is a fitness enthusiast who believes in the power of discipline and
                            dedication
                            when it comes to achieving fitness goals. With a background in bodybuilding and strength
                            training, he focuses
                            on personalized routines to maximize results while ensuring a fun and engaging workout
                            experience.</p><br>
                        <p><strong>Available from:</strong> 6AM - 10AM to 6PM - 10PM</p>
                        <div class="d-flex gap-2 justify-content-center justify-content-lg-start p-3">
                            <a href="https://www.facebook.com/"><img src="../img/fb.png" class="img-fluid"
                                    alt="Facebook" width="40em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Facebook" /></a>
                            <a href="https://www.instagram.com/"><img src="../img/in.png" class="img-fluid"
                                    alt="Instagram" width="40em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Instagram" /></a>
                            <a href="https://twitter.com/"><img src="../img/twi.png" class="img-fluid" alt="Twitter"
                                    width="36em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Twitter" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 t d-flex gap-5" id="3">
                    <img src="../img/t3.png" alt="t1" height="250px" />
                    <div class="border p-3" style="width: 800px;">
                        <p class="fw-bolder mt-4">Lucas Active</p>
                        <p class="t-item">Zumba Instructor</p><br />

                        <p><strong>Experience:</strong>6 years</p>
                        <p><strong>Bio:</strong>Lucas infuses his passion for dance into his Zumba classes. His dynamic
                            routines
                            combine fitness with the joy of dance, encouraging participants to move to the rhythm while
                            burning calories.
                            His classes are a celebration of fitness and fun.</p><br>
                        <p><strong>Available from:</strong> 7AM - 11AM to 6PM - 10PM</p>
                        <div class="d-flex gap-2 justify-content-center justify-content-lg-start p-3">
                            <a href="https://www.facebook.com/"><img src="../img/fb.png" class="img-fluid"
                                    alt="Facebook" width="40em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Facebook" /></a>
                            <a href="https://www.instagram.com/"><img src="../img/in.png" class="img-fluid"
                                    alt="Instagram" width="40em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Instagram" /></a>
                            <a href="https://twitter.com/"><img src="../img/twi.png" class="img-fluid" alt="Twitter"
                                    width="36em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Twitter" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 t d-flex gap-5" id="4">
                    <img src="../img/t4.png" alt="t1" height="250px" />
                    <div class="border p-3" style="width: 800px;">
                        <p class="fw-bolder mt-4">Ethan Flex</p>
                        <p class="t-item">Yoga Trainer</p><br />

                        <p><strong>Experience:</strong>4 years</p>
                        <p><strong>Bio:</strong>Ethan's yoga journey started as a way to balance his busy lifestyle.
                            Now, he shares his passion
                            for yoga and mindfulness, combining traditional techniques with modern applications for
                            stress relief and physical well-being.
                            His classes are aimed at helping individuals achieve harmony in mind, body, and spirit.</p>
                        <br>
                        <p><strong>Available from:</strong> 6AM - 10AM to 5PM - 9PM</p>
                        <div class="d-flex gap-2 justify-content-center justify-content-lg-start p-3">
                            <a href="https://www.facebook.com/"><img src="../img/fb.png" class="img-fluid"
                                    alt="Facebook" width="40em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Facebook" /></a>
                            <a href="https://www.instagram.com/"><img src="../img/in.png" class="img-fluid"
                                    alt="Instagram" width="40em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Instagram" /></a>
                            <a href="https://twitter.com/"><img src="../img/twi.png" class="img-fluid" alt="Twitter"
                                    width="36em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Twitter" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 t d-flex gap-5" id="5">
                    <img src="../img/t5.png" alt="t1" height="250px" />
                    <div class="border p-3" style="width: 800px;">
                        <p class="fw-bolder mt-4">Olivia Fitwell</p>
                        <p class="t-item">Gym Instructor</p><br />

                        <p><strong>Experience:</strong>6 years</p>
                        <p><strong>Bio:</strong>Olivia is dedicated to promoting a healthy lifestyle through fitness.
                            Her approach combines
                            diverse workout styles, focusing on functional training and endurance. With her guidance,
                            clients experience a balanced
                            and comprehensive fitness routine tailored to their individual goals.</p><br>
                        <p><strong>Available from:</strong> 7AM - 11AM to 4PM - 8PM</p>
                        <div class="d-flex gap-2 justify-content-center justify-content-lg-start p-3">
                            <a href="https://www.facebook.com/"><img src="../img/fb.png" class="img-fluid"
                                    alt="Facebook" width="40em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Facebook" /></a>
                            <a href="https://www.instagram.com/"><img src="../img/in.png" class="img-fluid"
                                    alt="Instagram" width="40em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Instagram" /></a>
                            <a href="https://twitter.com/"><img src="../img/twi.png" class="img-fluid" alt="Twitter"
                                    width="36em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Twitter" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 t d-flex gap-5" id="6">
                    <img src="../img/t6.png" alt="t1" height="250px" />
                    <div class="border p-3" style="width: 800px;">
                        <p class="fw-bolder mt-4">Max Zest</p>
                        <p class="t-item">Zumba Instructor</p><br />

                        <p><strong>Experience:</strong>3 years</p>
                        <p><strong>Bio:</strong>Max's Zumba sessions are high-energy and full of enthusiasm. His vibrant
                            personality
                            and love for dance fitness create an uplifting atmosphere where participants not only get a
                            great workout
                            but also enjoy every moment of the rhythmic movements and infectious beats.</p><br>
                        <p><strong>Available from:</strong> 9AM - 1PM to 6PM - 10PM</p>

                        <div class="d-flex gap-2 justify-content-center justify-content-lg-start p-3">
                            <a href="https://www.facebook.com/"><img src="../img/fb.png" class="img-fluid"
                                    alt="Facebook" width="40em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Facebook" /></a>
                            <a href="https://www.instagram.com/"><img src="../img/in.png" class="img-fluid"
                                    alt="Instagram" width="40em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Instagram" /></a>
                            <a href="https://twitter.com/"><img src="../img/twi.png" class="img-fluid" alt="Twitter"
                                    width="36em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Twitter" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 t d-flex gap-5" id="7">
                    <img src="../img/t8.png" alt="t1" height="250px" />
                    <div class="border p-3" style="width: 800px;">
                        <p class="fw-bolder mt-4">Sophie Wellness</p>
                        <p class="t-item">Yoga Trainer</p><br />

                        <p><strong>Experience:</strong>7 years</p>
                        <p><strong>Bio:</strong>Sophie's yoga practice is centered around holistic wellness. She
                            combines various yoga styles
                            with mindfulness practices to create sessions that not only enhance physical flexibility but
                            also promote mental clarity
                            and emotional balance. Her aim is to guide her students towards a balanced and harmonious
                            life.</p><br>
                        <p><strong>Available from:</strong> 8AM - 12PM to 4PM - 8PM</p>
                        <div class="d-flex gap-2 justify-content-center justify-content-lg-start p-3">
                            <a href="https://www.facebook.com/"><img src="../img/fb.png" class="img-fluid"
                                    alt="Facebook" width="40em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Facebook" /></a>
                            <a href="https://www.instagram.com/"><img src="../img/in.png" class="img-fluid"
                                    alt="Instagram" width="40em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Instagram" /></a>
                            <a href="https://twitter.com/"><img src="../img/twi.png" class="img-fluid" alt="Twitter"
                                    width="36em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Twitter" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 t d-flex gap-5" id="8">
                    <img src="../img/t7.png" alt="t1" height="250px" />
                    <div class="border p-3" style="width: 800px;">
                        <p class="fw-bolder mt-4">Leo Strong</p>
                        <p class="t-item">Gym Instructor</p><br />

                        <p><strong>Experience:</strong>4 years</p>
                        <p><strong>Bio:</strong>Leo is committed to helping individuals achieve their fitness goals
                            through strength
                            and conditioning. His workouts are structured to build strength while ensuring proper form
                            and technique.
                            He emphasizes consistency and determination to attain lasting results.</p><br>
                        <p><strong>Available from:</strong> 6AM - 10AM to 5PM - 9PM</p>
                        <div class="d-flex gap-2 justify-content-center justify-content-lg-start p-3">
                            <a href="https://www.facebook.com/"><img src="../img/fb.png" class="img-fluid"
                                    alt="Facebook" width="40em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Facebook" /></a>
                            <a href="https://www.instagram.com/"><img src="../img/in.png" class="img-fluid"
                                    alt="Instagram" width="40em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Instagram" /></a>
                            <a href="https://twitter.com/"><img src="../img/twi.png" class="img-fluid" alt="Twitter"
                                    width="36em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Twitter" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 t d-flex gap-5" id="9">
                    <img src="../img/t9.png" alt="t1" height="250px" />
                    <div class="border p-3" style="width: 800px;">
                        <p class="fw-bolder mt-4">Ava DanceFit</p>
                        <p class="t-item">Zumba Instructor</p><br />

                        <p><strong>Experience:</strong>5 years</p>
                        <p><strong>Bio:</strong>Ava infuses her passion for dance into her Zumba classes. Her dynamic
                            routines
                            combine fitness with the joy of dance, encouraging participants to move to the rhythm while
                            burning calories.
                            Her classes are a celebration of fitness and fun.</p><br>
                        <p><strong>Available from:</strong> 7AM - 11AM to 6PM - 10PM</p>
                        <div class="d-flex gap-2 justify-content-center justify-content-lg-start p-3">
                            <a href="https://www.facebook.com/"><img src="../img/fb.png" class="img-fluid"
                                    alt="Facebook" width="40em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Facebook" /></a>
                            <a href="https://www.instagram.com/"><img src="../img/in.png" class="img-fluid"
                                    alt="Instagram" width="40em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Instagram" /></a>
                            <a href="https://twitter.com/"><img src="../img/twi.png" class="img-fluid" alt="Twitter"
                                    width="36em" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Twitter" /></a>
                        </div>
                    </div>
                </div>

    </section>

    <footer class="bg-dark">
        <div class="container justify-content-center align-items-center" style="padding: 5rem 3rem 3rem;">
            <div class="row g-5" style="--bs-gutter-x: 8.5rem;">
                <div class="col-lg-4">
                    <div class="text-center text-lg-start">
                        <a class="text-white" href="#">The Fitness Club</a><br /><br />
                        <p class="text-white">Join The Fitness Club for expert-led workouts, diverse classes, and a
                            supportive community. Achieve holistic well-being with our gym, Zumba, Yoga, and luxurious
                            sauna—where passion, purpose, and wellness unite.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center text-lg-start">
                        <h3 class="text-white">Connect With Us</h3><br />
                        <div class="d-flex gap-2 justify-content-center justify-content-lg-start">
                            <a href="https://www.facebook.com/"><img src="../img/fb.png" class="img-fluid"
                                    alt="Facebook" width="40em" /></a>
                            <a href="https://www.instagram.com/"><img src="../img/in.png" class="img-fluid"
                                    alt="Instagram" width="40em" /></a>
                            <a href="https://twitter.com/"><img src="../img/twi.png" class="img-fluid" alt="Twitter"
                                    width="40em" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="site-links text-center text-lg-start">
                        <h3 class="text-white">Site Links</h3>
                        <div class="row">
                            <div class="col-6">
                                <a href="./aft_login.php" class="site-link">Home</a>
                                <a href="./about.php" class="site-link">About</a>
                                <a href="./trainer.php" class="site-link">Trainers</a>
                                <a href="./schedule.php" class="site-link">Schedule</a>
                            </div>
                            <div class="col-6">
                                <a href="./packages.php" class="site-link">Packages</a>
                                <a href="./ptrainer.php" class="site-link">Hire Private Trainer</a>
                                <a href="../php/perinfo.php" class="site-link">View Personal Info</a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="text-white hr" />
                <div>
                    <p class="text-white text-center"><span>Privacy Policy | </span>Copyrights &copy; 2023 The
                        Fitness Club.
                        All rights reserved!</p>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>

</html>