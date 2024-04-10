<?php

require "connection.php";

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NSBM | Home</title>
    <link rel="icon" href="resources/logo/thisara.png" />

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <!-- loder -->
    <div class="loder" id="loder">
        <img src="resources/green_spinner.gif" alt="Loading...">
    </div>
    <!-- loder -->

    <div class="container-fluid">
        <div class="row">

            <?php include "header.php"; ?>

            <div class="col-12 mt-lg-5 pt-lg-5">
                <div class="row mt-lg-2">
                    <div class="col-12 home-box1">
                        <div class="row">
                            <div class="col-12" style="background-color: #2b3146;opacity: 0.9;">
                                <div class="row pt-lg-5 pb-lg-5 ps-lg-5 pe-lg-2">
                                    <div class="col-12 col-lg-6">
                                        <div class="row animation1" style="padding-top: 120px;">
                                            <span class="fw-bold d-none d-lg-block" style="font-size: 92px;color: #991b10;">WELCOME</span><br />
                                            <span class="fw-bold d-block d-lg-none" style="font-size: 62px;color: #991b10;">WELCOME</span><br />

                                            <span class="fw-bold d-none d-lg-block text-lg-center" style="font-size: 52px;color: #ffffff;margin-top: -30px;">NSBM HOSTELS</span>
                                            <span class="fw-bold d-block d-lg-none" style="font-size: 42px;color: #ffffff;margin-top: -30px;">NSBM HOSTEL</span>

                                            <span class="fw-bold fs-4 mt-0 mt-lg-2" style="color: #666666;">At NSBM Hostels, our contemporary facilities, welcoming environment, and dedicated team guarantee a rewarding educational experience. <br />
                                                Join us and redefine student living today!</span>
                                            <ul class="pt-0 pt-lg-5">
                                                <button class="text-white header-button1 fs-6 ps-5 pe-5 pt-2 pb-2" href="contact.php" onclick="studentsigninModel();">Student Sign In</button>
                                                <button class="text-white header-button1 fs-6 ps-5 pe-5 pt-2 pb-2" href="contact.php" onclick="wardensigninModel();">Warden Sign In</button>

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4 mt-lg-0 mb-3 col-lg-6 home-rightImageBox d-none d-lg-block animation2" style="background-color: #151823;"></div>
                                    <div class="col-12 mt-4 mt-lg-0 mb-3 col-lg-6 home-rightImageBox d-block d-lg-none animation2" style="background-color: #151823;height: 350px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-5 pt-3 pt-lg-0 mt-lg-1">
                        <div class="row">

                            <div class="col-lg-6 d-none d-lg-block mb-4 position-absolute homeBox2RightBox" id="animation3" style="margin-top: -80px;"></div>

                            <div class="offset-0 offset-lg-6 col-12 col-lg-6 ps-5 pe-5 d-none d-lg-block" id="animation4" style="height: 400px;padding-top: 100px;">
                                <span class="fw-bold" style="color: #222222;font-size: 45px;">Hostel Accommodations</span><br />
                                <span class="fw-bold" style="color: #222222;font-size: 45px;"> Nurturing Academic</span>&nbsp;&nbsp;<span class="fw-bold" style="color: #991b10;font-size: 45px;">achievement and Personal Development</span>
                                <p style="color: #666666;font-size: 17px;">"The Student Hostel Collection at NSBM provides a carefully selected variety of accommodations designed specifically for university students. Our collection offers comfortable, convenient, and budget-friendly housing choices situated near campuses for easy access to academic resources and facilities."</p>
                                <p class="mt-1" style="color: #ff3737;font-size: 27px;">Do you have Hostels ? <a href="#" class="text-decoration-none" onclick="signUpModel();">Click Here<i class="bi bi-chevron-double-right fs-5"></i></a></p>
                            </div>

                            <div class="offset-0 offset-lg-6 col-12 col-lg-6 ps-2 pe-2 d-block d-md-none d-lg-none mb-5" style="height: 400px;padding-top: 150px;">
                                <span class="fw-bold" style="color: #222222;font-size: 45px;">Hostel Accommodations</span><br />
                                <span class="fw-bold" style="color: #222222;font-size: 45px;"> Nurturing Academic</span>&nbsp;&nbsp;<span class="fw-bold" style="color: #991b10;font-size: 45px;">achievement and Personal Development</span>
                                <p style="color: #666666;font-size: 17px;">"The Student Hostel Collection at NSBM provides a carefully selected variety of accommodations designed specifically for university students. Our collection offers comfortable, convenient, and budget-friendly housing choices situated near campuses for easy access to academic resources and facilities."</p>
                                <p class="mt-1" style="color: #ff3737;font-size: 27px;">Do you have Hostels ? <a href="#" class="text-decoration-none" onclick="signUpModel();">Click Here<i class="bi bi-chevron-double-right fs-5"></i></a></p>
                            </div>

                            <div class="offset-0 offset-lg-6 col-12 col-lg-6 ps-2 pe-2 d-none d-md-block d-lg-none" style="height: 300px;padding-top: 60px;">
                                <span class="fw-bold" style="color: #222222;font-size: 45px;">Hostel Accommodations</span><br />
                                <span class="fw-bold" style="color: #222222;font-size: 45px;"> Nurturing Academic</span>&nbsp;&nbsp;<span class="fw-bold" style="color: #991b10;font-size: 45px;">achievement and Personal Development</span>
                                <p style="color: #666666;font-size: 17px;">"The Student Hostel Collection at NSBM provides a carefully selected variety of accommodations designed specifically for university students. Our collection offers comfortable, convenient, and budget-friendly housing choices situated near campuses for easy access to academic resources and facilities."</p>
                                <p class="mt-1" style="color: #ff3737;font-size: 27px;">Do you have Hostels ? <a href="#" class="text-decoration-none" onclick="signUpModel();">Click Here<i class="bi bi-chevron-double-right fs-5"></i></a></p>
                            </div>

                        </div>
                    </div>



                    <div class="col-12 mt-lg-5 pt-lg-5 mb-lg-5">
                        <div class="row mt-3 pt-5">
                            <div class="col-12 text-center">
                                <p class="fw-bold" style="color: #222222;font-size: 60px;">Gallery</p>
                            </div>
                            <div class="col-12 mt-2 mb-2">
                                <div class="row gap-2 gap-lg-4 justify-content-center">
                                    <div class="col-5 col-lg-2 bg-black project1" style="height: 200px;">
                                        <a class="text-white header-button1 p1b fs-6 ps-3 pe-3 pt-2 pb-2 ps-lg-5 pe-lg-5 pt-lg-2 pb-lg-2" href="#">Visit Hostel</a>
                                    </div>
                                    <div class="col-5 col-lg-2 bg-black project3" style="height: 200px;">
                                        <a class="text-white header-button1 p1b fs-6 ps-3 pe-3 pt-2 pb-2 ps-lg-5 pe-lg-5 pt-lg-2 pb-lg-2" href="#">Visit Hostel</a>
                                    </div>
                                    <div class="col-5 col-lg-2 bg-black project2" style="height: 200px;">
                                        <a class="text-white header-button1 p1b ps-3 pe-3 pt-2 pb-2 ps-lg-5 pe-lg-5 pt-lg-2 pb-lg-2" href="#">Visit Hostel</a>
                                    </div>
                                    <div class="col-5 col-lg-2 bg-black project4" style="height: 200px;">
                                        <a class="text-white header-button1 p1b ps-3 pe-3 pt-2 pb-2 ps-lg-5 pe-lg-5 pt-lg-2 pb-lg-2" href="#">Visit Hostel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-2 mb-2">
                                <div class="row gap-2 gap-lg-4 justify-content-center">
                                    <div class="col-5 col-lg-2 bg-black project5" style="height: 200px;">
                                        <a class="text-white header-button1 p1b fs-6 ps-3 pe-3 pt-2 pb-2 ps-lg-5 pe-lg-5 pt-lg-2 pb-lg-2" href="#">Visit Hostel</a>
                                    </div>
                                    <div class="col-5 col-lg-2 bg-black project6" style="height: 200px;">
                                        <a class="text-white header-button1 p1b fs-6 ps-3 pe-3 pt-2 pb-2 ps-lg-5 pe-lg-5 pt-lg-2 pb-lg-2" href="#">Visit Hostel</a>
                                    </div>
                                    <div class="col-5 col-lg-2 bg-black project7" style="height: 200px;">
                                        <a class="text-white header-button1 p1b ps-3 pe-3 pt-2 pb-2 ps-lg-5 pe-lg-5 pt-lg-2 pb-lg-2" href="#">Visit Hostel</a>
                                    </div>
                                    <div class="col-5 col-lg-2 bg-black project8" style="height: 200px;">
                                        <a class="text-white header-button1 p1b ps-3 pe-3 pt-2 pb-2 ps-lg-5 pe-lg-5 pt-lg-2 pb-lg-2" href="#">Visit Hostel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- services -->
                    <div class="col-12 mt-2 mb-3 addShape1" style="background-color: #2e323e;">
                        <div class="row">
                            <div class="col-6 offset-3 d-none d-lg-block text-center">
                                <span class="text-black fs-5 fw-bold">These descriptions encompass different facets of the provided topic.</span><br />
                                <span class="text-black" style="font-size: 60px;font-weight: 700;font-family: Fira Sans Condensed;line-height: 1.1em;">Should you have any particular inquiries or require additional details regarding any of these subjects, don't hesitate to ask!




                                </span>
                            </div>
                            <div class="col-12 d-block d-lg-none text-center">
                                <span class="text-black fs-5 fw-bold">These descriptions encompass different facets of the provided topic.</span><br />
                                <span class="text-black" style="font-size: 30px;font-weight: 700;font-family: Fira Sans Condensed;">Should you have any particular inquiries or require additional details regarding any of these subjects, don't hesitate to ask!




                                </span>
                            </div>
                            <div class="col-12 mt-5">
                                <div class="row p-2 gap-1 gap-lg-2 justify-content-center">
                                    <div class="col-12 col-lg-3 shadow" style="background-color: #ffffff;">
                                        <div class="row">
                                            <div class="col-4 text-center p-2">
                                                <i class="bi bi-shield fs-1 text-black"></i>
                                            </div>
                                            <div class="col-8 p-2 pt-3 pb-3">
                                                <span class="fs-4 fs-lg-3 fw-bold" style="color: #2e323e;">Security Measures</span><br />
                                                <span style="color: #666666;">
                                                    Ensuring the safety and safeguarding of data,
                                                    assets, and individuals against unauthorized access,
                                                    breaches, or harm is paramount.
                                                    Security measures encompass a range of strategies including encryption,
                                                    authentication protocols, firewalls, and routine security assessments,
                                                    all aimed at minimizing risks and upholding the confidentiality, integrity, and
                                                    availability of resources.</span><br />

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3 shadow" style="background-color: #ffffff;">
                                        <div class="row">
                                            <div class="col-4 text-center p-2">
                                                <i class="bi bi-device-ssd fs-1 text-black"></i>
                                            </div>
                                            <div class="col-8 p-2 pt-3 pb-3">
                                                <span class="fs-4 fs-lg-3 fw-bold" style="color: #2e323e;">Condition</span><br />
                                                <span style="color: #666666;">Condition refers
                                                    to the state or quality of something at a specific moment.
                                                    In the realm of products or services, it pertains to their physical,
                                                    functional, or operational state. By actively monitoring and sustaining optimal conditions,
                                                    efficiency, performance, and longevity are upheld,
                                                    with timely intervention to address any issues preventing deterioration.</span><br />

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3 shadow" style="background-color: #ffffff;">
                                        <div class="row">
                                            <div class="col-4 text-center p-2">
                                                <i class="bi bi-globe2 fs-1 text-black"></i>
                                            </div>
                                            <div class="col-8 p-2 pt-3 pb-3">
                                                <span class="fs-4 fs-lg-3 fw-bold" style="color: #2e323e;">Transport</span><br />
                                                <span style="color: #666666;">Transportation entails the transfer or movement of goods,
                                                    individuals, or information from one location to another.
                                                    It encompasses diverse modes like road, rail, air, water,
                                                    and digital networks. A well-functioning transportation infrastructure
                                                    is crucial for enabling trade, commerce, mobility, and communication,
                                                    thereby fostering economic development and social cohesion.
                                                </span><br />

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3 shadow" style="background-color: #ffffff;">
                                        <div class="row">
                                            <div class="col-4 text-center p-2">
                                                <i class="bi bi-terminal-dash fs-1 text-black"></i>
                                            </div>
                                            <div class="col-8 p-2 pt-3 pb-3">
                                                <span class="fs-4 fs-lg-3 fw-bold" style="color: #2e323e;">Affordable</span><br />
                                                <span style="color: #666666;">Affordability refers to the accessibility
                                                    or availability of something without imposing financial burden
                                                    or difficulty. It suggests reasonable pricing or costs in
                                                    relation to the value or advantages provided. Ensuring
                                                    affordability entails efficient resource management,
                                                    cost reduction, and improving cost-effectiveness to broaden
                                                    accessibility of products, services, or resources to a broader
                                                    audience or market segment.</span><br />

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3 shadow" style="background-color: #ffffff;">
                                        <div class="row">
                                            <div class="col-4 text-center p-2">
                                                <i class="bi bi-coin fs-1 text-black"></i>
                                            </div>
                                            <div class="col-8 p-2 pt-3 pb-3">
                                                <span class="fs-4 fs-lg-3 fw-bold" style="color: #2e323e;">Trust</span><br />
                                                <span style="color: #666666;">Developing trust involves instilling confidence and dependability in relationships,
                                                    transactions, or systems. Trust is nurtured by being transparent,
                                                    consistent, and accountable. It requires keeping commitments,
                                                    showcasing proficiency, and protecting the interests and expectations
                                                    of those involved.</span><br />

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- services -->

                    



                </div>
            </div>

            <?php include "footer.php"; ?>

            <!-- Land loader Sign up -->
            <!-- Vertically centered modal -->
            <!-- Modal -->
            <div class="modal fade" id="lm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Landlord Sign up</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="overflow-y: auto;">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="f" />
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="l" />
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" id="e" />
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" id="p" />
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Mobile</label>
                                        <input type="text" class="form-control" id="m" />
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label class="form-label">Gender</label>
                                        <select class="form-select" id="g">
                                            <?php

                                            $rs = Database::search("SELECT * FROM `gender`");
                                            $n = $rs->num_rows;

                                            for ($x = 0; $x < $n; $x++) {
                                                $d = $rs->fetch_assoc();

                                            ?>

                                                <option value="<?php echo ($d["gender_id"]); ?>"><?php echo ($d["gender"]); ?></option>

                                            <?php

                                            }

                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-12 d-none mt-lg-3" id="msgdiv">

                                        <div class="alert alert-danger" role="alert" id="alertdive">
                                            <i class="bi bi-x-octagon-fill fs-5" id="msg">

                                            </i>

                                        </div>

                                    </div>
                                    <div class="col-12 col-lg-6 d-grid p-4">
                                        <button type="button" class="btn btn-primary" onclick="signUp();">Sign Up</button>
                                    </div>
                                    <div class="col-12 col-lg-6 p-4">
                                        <span class="text-black"><b>Already have an account?</b></span> <br /> <a href="#" onclick="signinModel();" class="fs-6">Sign In</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Land loader Sign up -->

            <!-- Land loader Sign in -->
            <!-- Vertically centered modal -->
            <!-- Modal -->
            <div class="modal fade" id="lm2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Landlord Sign In</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="overflow-y: auto;">
                            <div class="col-12">
                                <div class="row">
                                    <?php

                                    $email = "";
                                    $password = "";

                                    if (isset($_COOKIE["email"])) {
                                        $email = $_COOKIE["email"];
                                    }

                                    if (isset($_COOKIE["password"])) {
                                        $password = $_COOKIE["password"];
                                    }

                                    ?>

                                    <div class="col-12">
                                        <span class="text-danger" id="msg2"></span>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email2" value="<?php echo ($email); ?>" />
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password2" value="<?php echo ($password); ?>" />
                                    </div>
                                    <div class="col-6 mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="rememberme" />
                                            <label class="form-check-label">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col-6 text-end mt-2">
                                        <a href="#" class="link-primary" onclick="forgotPassword();">Forgot Password</a>
                                    </div>
                                    <div class="col-12 col-lg-6 d-grid">
                                        <button class="btn btn-primary" onclick="signIn();">Sign In</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Land loader Sign in -->

            <!-- modal -->

            <div class="modal" tabindex="-1" id="forgotPasswordModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Reset Password</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3">

                                <div class="col-6">
                                    <label class="form-label">New Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="npi">
                                        <button class="btn btn-outline-secondary" type="button" id="npb" onclick="showPassword();"><i id="e1" class="bi bi-eye-slash-fill"></i></button>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label class="form-label">Re-Type Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="rtpi">
                                        <button class="btn btn-outline-secondary" type="button" id="rtpb" onclick="reTypePasswordShow();"><i id="e2" class="bi bi-eye-slash-fill"></i></button>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Verification Code</label>
                                    <input type="text" class="form-control" id="vc" />
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="resetpw();">Reset Password</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal -->

        </div>

        <!-- Admin Sign in -->
        <!-- Vertically centered modal -->
        <!-- Modal -->
        <div class="modal fade" id="lm3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Admin Sign In</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="overflow-y: auto;">
                        <div class="col-12">
                            <div class="row">
                                <?php

                                $email = "";
                                $password = "";

                                if (isset($_COOKIE["email"])) {
                                    $email = $_COOKIE["email"];
                                }

                                if (isset($_COOKIE["password"])) {
                                    $password = $_COOKIE["password"];
                                }

                                ?>

                                <div class="col-12">
                                    <span class="text-danger" id="msg3"></span>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email3" value="<?php echo ($email); ?>" />
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password3" value="<?php echo ($password); ?>" />
                                </div>
                                <div class="col-6 mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="rememberme2" />
                                        <label class="form-check-label">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-6 text-end mt-2">
                                    <a href="#" class="link-primary" onclick="adminforgotPassword();">Forgot Password</a>
                                </div>
                                <div class="col-12 col-lg-6 d-grid">
                                    <button class="btn btn-primary" onclick="adminsignIn();">Sign In</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Admin Sign in -->
        <!-- modal -->

        <!-- modal -->

        <div class="modal" tabindex="-1" id="adminforgotPasswordModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Admin Reset Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">

                            <div class="col-6">
                                <label class="form-label">New Password</label>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" id="npi1">
                                    <button class="btn btn-outline-secondary" type="button" id="npb1" onclick="adminshowPassword();"><i id="e3" class="bi bi-eye-slash-fill"></i></button>
                                </div>
                            </div>

                            <div class="col-6">
                                <label class="form-label">Re-Type Password</label>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" id="rtpi1">
                                    <button class="btn btn-outline-secondary" type="button" id="rtpb1" onclick="adminreTypePasswordShow();"><i id="e4" class="bi bi-eye-slash-fill"></i></button>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Verification Code</label>
                                <input type="text" class="form-control" id="vc1" />
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="adminresetpw();">Reset Password</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal -->


        <!-- student Sign in -->
        <!-- Vertically centered modal -->
        <!-- Modal -->
        <div class="modal fade" id="stsign" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Student Sign In</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="overflow-y: auto;">
                        <div class="col-12">
                            <div class="row">
                                <?php

                                $email = "";
                                $password = "";

                                if (isset($_COOKIE["email"])) {
                                    $email = $_COOKIE["email"];
                                }

                                if (isset($_COOKIE["password"])) {
                                    $password = $_COOKIE["password"];
                                }

                                ?>

                                <div class="col-12">
                                    <span class="text-danger" id="smsg"></span>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" id="semail" value="<?php echo ($email); ?>" />
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" id="spassword" value="<?php echo ($password); ?>" />
                                </div>
                                <div class="col-6 mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="srememberme" />
                                        <label class="form-check-label">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-6 text-end mt-2">
                                    <a href="#" class="link-primary" onclick="studentforgotPassword();">Forgot Password</a>
                                </div>
                                <div class="col-12 col-lg-6 d-grid">
                                    <button class="btn btn-primary" onclick="studentsignIn();">Sign In</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- student Sign in -->
        <!-- modal -->

        <div class="modal" tabindex="-1" id="studentforgotPasswordModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Student Reset Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">

                            <div class="col-6">
                                <label class="form-label">New Password</label>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" id="npi3">
                                    <button class="btn btn-outline-secondary" type="button" id="npb3" onclick="studentshowPassword();"><i id="e5" class="bi bi-eye-slash-fill"></i></button>
                                </div>
                            </div>

                            <div class="col-6">
                                <label class="form-label">Re-Type Password</label>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" id="rtpi3">
                                    <button class="btn btn-outline-secondary" type="button" id="rtpb3" onclick="studentreTypePasswordShow();"><i id="e6" class="bi bi-eye-slash-fill"></i></button>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Verification Code</label>
                                <input type="text" class="form-control" id="vc3" />
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="studentresetpw();">Reset Password</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal -->

        <!-- warden Sign in -->
        <!-- Vertically centered modal -->
        <!-- Modal -->
        <div class="modal fade" id="wardensign" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Warden Sign In</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="overflow-y: auto;">
                        <div class="col-12">
                            <div class="row">
                                <?php

                                $email = "";
                                $password = "";

                                if (isset($_COOKIE["email"])) {
                                    $email = $_COOKIE["email"];
                                }

                                if (isset($_COOKIE["password"])) {
                                    $password = $_COOKIE["password"];
                                }

                                ?>

                                <div class="col-12">
                                    <span class="text-danger" id="msgw"></span>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" id="emailw" value="<?php echo ($email); ?>" />
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" id="passwordw" value="<?php echo ($password); ?>" />
                                </div>
                                <div class="col-6 mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remembermew" />
                                        <label class="form-check-label">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-6 text-end mt-2">
                                    <a href="#" class="link-primary" onclick="wardenforgotPassword();">Forgot Password</a>
                                </div>
                                <div class="col-12 col-lg-6 d-grid">
                                    <button class="btn btn-primary" onclick="wardensignIn();">Sign In</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- warden Sign in -->

        <!-- modal -->

        <div class="modal" tabindex="-1" id="wardenforgotPasswordModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Warden Reset Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">

                            <div class="col-6">
                                <label class="form-label">New Password</label>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" id="npi4">
                                    <button class="btn btn-outline-secondary" type="button" id="npb4" onclick="wardenshowPassword();"><i id="e7" class="bi bi-eye-slash-fill"></i></button>
                                </div>
                            </div>

                            <div class="col-6">
                                <label class="form-label">Re-Type Password</label>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" id="rtpi4">
                                    <button class="btn btn-outline-secondary" type="button" id="rtpb4" onclick="wardenreTypePasswordShow();"><i id="e8" class="bi bi-eye-slash-fill"></i></button>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Verification Code</label>
                                <input type="text" class="form-control" id="vc4" />
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="wardenresetpw();">Reset Password</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal -->


    </div>

    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>

</body>

</html>