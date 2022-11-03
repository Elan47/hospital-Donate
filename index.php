<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Donate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./style.css" rel="stylesheet">
    <style>
    * {
        font-family: 'Lexend', sans-serif;
        font-size: 14px;
        color: #19438C;

    }

    ul {
        font-size: 16px;
        line-height: 25px;
        font-style: normal;
        font-weight: 400;
        color: #000000;
        text-align: left;
        padding-left: 0rem !important;
    }

    ul p {
        font-size: 16px;
        line-height: 25px;
        font-style: normal;
        font-weight: 400;
        color: #000000;
        text-align: left;
    }

    .d-flex align-items-start btn-c {
        align-items: start;
    }

    .btn-c button {
        background-color: #fff;
        border-radius: 50%;
        /* border: 1px solid gray; */
        font-size: 27px;
        font-weight: bold;
        color: gray !important;


    }

    .main-cont {
        background: #FFFFFF;
        box-shadow: 2px 4px 16px rgba(25, 67, 140, 0.25);
        border-radius: 16px;
        text-align: left;
    }

    .main-ban {
        background: #DDE9FF;
        border-radius: 16px;
    }

    .fixed-bottom {
        /* background: #19438C; */
        color: #FFFFFF;
    }

    .tab label {
        margin: 10px 6px;
        text-align: left !important;

    }


    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: "Lexend", sans-serif;
        border: 1px solid #aaaaaa60;
        /* text-align: center; */

    }

    @media only screen and (max-width: 768px) {
        * {
            font-size: 14px;
            font-weight: 600;
        }

        .main-cont {

            text-align: center;
        }

        ul {
            padding-left: 0rem !important;
            font-size: 12px;
            line-height: 16px;
            font-style: normal;
            font-weight: 400;
            color: #000000;
            text-align: center;
        }

        ul p {
            font-size: 12px;
            line-height: 16px;
            font-style: normal;
            font-weight: 400;
            color: #000000;
            text-align: center;
        }


        input {
            padding: 12px;
            width: 100%;
            font-size: 12px;

        }

        .fa {
            font-size: 18px !important;
        }

        .header-title {
            font-style: normal;
            font-weight: 700;
            color: #19438c;
            font-size: 26px;
            line-height: 28px;
        }

        .header-title-t {

            font-size: 16px;
            line-height: 20px;

        }

        .header-title-t2 {

            font-size: 13px;
            line-height: 20px;

        }

        .button-a {
            width: 100%;
        }

        .main-ban {
            border-radius: 0px;
        }
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
        <div class="container mb-0">
            <!-- <a class="navbar-brand" href="#">Hospital</a> -->
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="collapsibleNavId">


                <p class="  mb-0"><a href="#billing"> <img src="./assets/logo.png" width="50px" alt=""></a></p>

                <p class="button-a mb-0 "><a href="#billing"> Donate</a></p>



                </ul>

            </div>
        </div>
    </nav>

    <div class="container-fluid p-0 m-0">
        <div class="row p-0 m-0 ">
            <div class="col-12 col-md-5 p-0 m-0">
                <img src="./assets/banner.jpg" class="img-fluid" alt="">
            </div>
            <div class=" col-12 col-md-7 p-0 m-0">
                <div class="wrapper">
                    <div class="texts p-3">
                        <h1 class="header-title" style="color: #1c4589">Join Us for a Cause!<br /><span
                                class="header-title-t"> </span>
                        </h1>
                        <p class="header-title-t2">Alone we can do so little,
                            together we can do so much.
                        </p>
                        <p class="button-a mb-0 mx-auto "><a href="#billing"> Donate</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid main-ban p-my-5 p-1">
        <h3 class="text-center text-uppercase my-md-3 my-3" id="billing">Seeking your Donations</h3>
        <div class="container mt-md-5 mt-2 p-md-4 p-0 main-cont ">
            <div class="row d-flex align-items-start  p-0 m-0 btn-c justify-content-center align-items-center">
                <div class="col-12">
                    <form id="regForm" action="amount.php" method="post" enctype="multipart/form">
                        <div class="tab ">
                            <h3 class="text-center px-md-2 p-3 text-decoration-underline">HOSPITAL DEPARTMENTS</h3>
                            <div class="fixed-bottom mx-md-0 m-0">
                                <span class=" bottomMenu hide" id="myID">
                                    <div class="row p-0 m-0">
                                        <div class="col-12 col-md-6 p-0 m-0">
                                            <center style=" background: #19438C; "><strong
                                                    class=" px-0 text-white text-center ">
                                                    <p class="mb-0 p-3 text-white">Total :</p>
                                                </strong></center>
                                        </div>
                                        <div class=" col-12 col-md-6 p-0 m-0">
                                            <input type=" text" name="total" class="" id="total"
                                                placeholder="Total Amount" />
                                        </div>
                                    </div>

                            </div>
                            </span>
                            <div class="container-fluid p-0">


                                <div class="row">
                                    <div class="col-12 col-md-3 d-none d-md-block">
                                        <h5 class="text-left">Floor</h5>
                                    </div>
                                    <div class=" col-12 col-md-5 d-none d-md-block">
                                        <h5 class="text-left">Department</h5>
                                    </div>
                                    <div class="col-12 col-md-4 d-none d-md-block  ">
                                        <h5 class="text-center">Amount</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-3">Ground Floor</div>
                                    <div class="col-12 col-md-5">
                                        <ul>Emergency and Trauma Unit</ul>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex">
                                        <button type="button" onclick="decrement(1)"><i class="fa fa-minus-circle"
                                                aria-hidden="true"></i></button>
                                        <input id="1" type="number" name="1" min="500000" placeholder="...... ">
                                        <button type="button" onclick="increment(1)"><i class="fa fa-plus-circle"
                                                aria-hidden="true"></i></button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-3">First floor</div>
                                    <div class="col-12 col-md-5">
                                        <ul>Out patient clinics(Services)+Pharmacy</ul>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex">
                                        <button type="button" onclick="decrement(2)"><i class="fa fa-minus-circle"
                                                aria-hidden="true"></i></button>
                                        <input id="2" type="number" name="2" min="500000" placeholder="...... ">
                                        <button type="button" onclick="increment(2)"><i class="fa fa-plus-circle"
                                                aria-hidden="true"></i></button>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-12 col-md-3">Second floor</div>
                                    <div class="col-12 col-md-5">
                                        <ul>
                                            <p>Diagnostics and Imaging services</p>
                                            <p>Chemo daycare centre</p>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex align-items-start btn-c">
                                        <button type="button" onclick="decrement(3)"><i class="fa fa-minus-circle"
                                                aria-hidden="true"></i></button>
                                        <input id="3" type="number" name="3" min="500000" placeholder="...... ">
                                        <button type="button" onclick="increment(3)"><i class="fa fa-plus-circle"
                                                aria-hidden="true"></i></button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-3">Third floor</div>
                                    <div class="col-12 col-md-5">
                                        <ul>
                                            <p>Inpatient Services - Male General ward</p>
                                            <p>Inpatient Services - Female General ward</p>
                                            <p>Inpatient Services - Pediatric</p>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex align-items-start btn-c">
                                        <button type="button" onclick="decrement(4)"><i class="fa fa-minus-circle"
                                                aria-hidden="true"></i></button>
                                        <input id="4" type="number" name="4" min="500000" placeholder="...... ">
                                        <button type="button" onclick="increment(4)"><i class="fa fa-plus-circle"
                                                aria-hidden="true"></i></button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-3">Fourth floor</div>
                                    <div class="col-12 col-md-5">
                                        <ul>
                                            <p>Single and double occupancy rooms
                                            </p>
                                            <p>Laboratory</p>
                                            <p>UPS Room</p>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex align-items-start btn-c">
                                        <button type="button" onclick="decrement(5)"><i class="fa fa-minus-circle"
                                                aria-hidden="true"></i></button>
                                        <input id="5" type="number" name="5" min="500000" placeholder="...... ">
                                        <button type="button" onclick="increment(5)"><i class="fa fa-plus-circle"
                                                aria-hidden="true"></i></button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-3">Fifth floor</div>
                                    <div class="col-12 col-md-5">
                                        <ul>
                                            <p>Single and double occupancy rooms</p>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex align-items-start btn-c">
                                        <button type="button" onclick="decrement(6)"><i class="fa fa-minus-circle"
                                                aria-hidden="true"></i></button>
                                        <input id="6" type="number" name="6" min="500000" placeholder="...... ">
                                        <button type="button" onclick="increment(6)"><i class="fa fa-plus-circle"
                                                aria-hidden="true"></i></button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-3">Sixth floor</div>
                                    <div class="col-12 col-md-5">
                                        <ul>
                                            <p>Operation Theatre Complex</p>
                                            <p>Intensive Care Unit Rooms</p>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex align-items-start btn-c">
                                        <button type="button" onclick="decrement(7)"><i class="fa fa-minus-circle"
                                                aria-hidden="true"></i></button>
                                        <input id="7" type="number" name="7" min="500000" placeholder="...... ">
                                        <button type="button" onclick="increment(7)"><i class="fa fa-plus-circle"
                                                aria-hidden="true"></i></button>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-12 col-md-3"> Terrace floor</div>
                                    <div class="col-12 col-md-5">
                                        <ul>
                                            <p> Solar Plant
                                            <p>Heat Pump</p>
                                            <p>Electrical Fitting</p>
                                            <p>Gas Plant</p>
                                            <p>OWC (Organic Waste Convertor)</p>
                                            <p>BMS (Building Management System)</p>
                                            <p>RO (Reverse Osmosis) Plant</p>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex align-items-start btn-c">
                                        <button type="button" onclick="decrement(8)"><i class="fa fa-minus-circle"
                                                aria-hidden="true"></i></button>
                                        <input id="8" type="number" name="8" min="500000" placeholder="...... ">
                                        <button type="button" onclick="increment(8)"><i class="fa fa-plus-circle"
                                                aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="container-fluid">
                                <div class="col-12  col-md-8 mx-auto">
                                    <div class="row my-md-2 my-2">
                                        <h3 class="text-center py-4 text-decoration-underline">HOSPITAL EQUIPMENTS</h3>
                                        <div class="col-12 col-md-6">
                                            CSSD
                                        </div>
                                        <div class="col-12 col-md-6 d-flex align-items-start btn-c">
                                            <button type="button" onclick="edecrement(1)"><i class="fa fa-minus-circle"
                                                    aria-hidden="true"></i></button>
                                            <input id="e1" type="number" name="e1" min="500000" placeholder="...... ">
                                            <button type="button" onclick="eincrement(1)"><i class="fa fa-plus-circle"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div class="row my-md-2 my-2">
                                        <div class="col-12 col-md-6">
                                            Radiology
                                        </div>
                                        <div class="col-12 col-md-6 d-flex align-items-start btn-c">
                                            <button type="button" onclick="edecrement(2)"><i class="fa fa-minus-circle"
                                                    aria-hidden="true"></i></button>
                                            <input id="e2" type="number" name="e2" min="500000" placeholder="...... ">
                                            <button type="button" onclick="eincrement(2)"><i class="fa fa-plus-circle"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div class="row my-md-2 my-2">
                                        <div class="col-12 col-md-6">
                                            Cardiology
                                        </div>
                                        <div class="col-12 col-md-6 d-flex align-items-start btn-c">
                                            <button type="button" onclick="edecrement(3)"><i class="fa fa-minus-circle"
                                                    aria-hidden="true"></i></button>
                                            <input id="e3" type="number" name="e3" min="500000" placeholder="...... ">
                                            <button type="button" onclick="eincrement(3)"><i class="fa fa-plus-circle"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div class="row my-md-2 my-2">
                                        <div class="col-12 col-md-6">
                                            Ambulance
                                        </div>
                                        <div class="col-12 col-md-6 d-flex align-items-start btn-c">
                                            <button type="button" onclick="edecrement(4)"><i class="fa fa-minus-circle"
                                                    aria-hidden="true"></i></button>
                                            <input id="e4" type="number" name="e4" min="500000" placeholder="...... ">
                                            <button type="button" onclick="eincrement(4)"><i class="fa fa-plus-circle"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div class="row my-md-2 my-2">
                                        <div class="col-12 col-md-6">
                                            General ward 43 Beds
                                        </div>
                                        <div class="col-12 col-md-6 d-flex align-items-start btn-c">
                                            <button type="button" onclick="edecrement(5)"><i class="fa fa-minus-circle"
                                                    aria-hidden="true"></i></button>
                                            <input id="e5" type="number" name="e5" min="500000" placeholder="...... ">
                                            <button type="button" onclick="eincrement(5)"><i class="fa fa-plus-circle"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div class="row my-md-2 my-2">
                                        <div class="col-12 col-md-6">
                                            ICU Equipment
                                        </div>
                                        <div class="col-12 col-md-6 d-flex align-items-start btn-c">
                                            <button type="button" onclick="edecrement(6)"><i class="fa fa-minus-circle"
                                                    aria-hidden="true"></i></button>
                                            <input id="e6" type="number" name="e6" min="500000" placeholder="...... ">
                                            <button type="button" onclick="eincrement(6)"><i class="fa fa-plus-circle"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div class="row my-md-2 my-2">
                                        <div class="col-12 col-md-6">
                                            Endoscopy suite
                                        </div>
                                        <div class="col-12 col-md-6 d-flex align-items-start btn-c">
                                            <button type="button" onclick="edecrement(7)"><i class="fa fa-minus-circle"
                                                    aria-hidden="true"></i></button>
                                            <input id="e7" type="number" name="e7" min="500000" placeholder="...... ">
                                            <button type="button" onclick="eincrement(7)"><i class="fa fa-plus-circle"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div class="row my-md-2 my-2">
                                        <div class="col-12 col-md-6">
                                            Medical Furniture
                                        </div>
                                        <div class="col-12 col-md-6 d-flex align-items-start btn-c">
                                            <button type="button" onclick="edecrement(8)"><i class="fa fa-minus-circle"
                                                    aria-hidden="true"></i></button>
                                            <input id="e8" type="number" name="e8" min="500000" placeholder="...... ">
                                            <button type="button" onclick="eincrement(8)"><i class="fa fa-plus-circle"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div class="row my-md-2 my-2">
                                        <div class="col-12 col-md-6">
                                            Major Operation theatre-01
                                        </div>
                                        <div class="col-12 col-md-6 d-flex align-items-start btn-c">
                                            <button type="button" onclick="decrement(9)"><i class="fa fa-minus-circle"
                                                    aria-hidden="true"></i></button>
                                            <input id="9" type="number" name="9" min="500000" placeholder="...... ">
                                            <button type="button" onclick="increment(9)"><i class="fa fa-plus-circle"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div class="row my-md-2 my-2">
                                        <div class="col-12 col-md-6">
                                            Major Operation theatre-02
                                        </div>
                                        <div class="col-12 col-md-6 d-flex align-items-start btn-c">
                                            <button type="button" onclick="decrement(10)"><i class="fa fa-minus-circle"
                                                    aria-hidden="true"></i></button>
                                            <input id="10" type="number" name="10" min="500000" placeholder="...... ">
                                            <button type="button" onclick="increment(10)"><i class="fa fa-plus-circle"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div class="row my-md-2 my-2">
                                        <div class="col-12 col-md-6">
                                            Minior Operation theatre-03
                                        </div>
                                        <div class="col-12 col-md-6 d-flex align-items-start btn-c">
                                            <button type="button" onclick="decrement(11)"><i class="fa fa-minus-circle"
                                                    aria-hidden="true"></i></button>
                                            <input id="11" type="number" name="11" min="500000" placeholder="...... ">
                                            <button type="button" onclick="increment(11)"><i class="fa fa-plus-circle"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div class="row my-md-2 my-2">
                                        <div class="col-12 col-md-6">
                                            Microbiology lab
                                        </div>
                                        <div class="col-12 col-md-6 d-flex align-items-start btn-c">
                                            <button type="button" onclick="decrement(12)"><i class="fa fa-minus-circle"
                                                    aria-hidden="true"></i></button>
                                            <input id="12" type="number" name="12" min="500000" placeholder="...... ">
                                            <button type="button" onclick="increment(12)"><i class="fa fa-plus-circle"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div class="row my-md-2 my-2">
                                        <div class="col-12 col-md-6">
                                            Biochemistry lab
                                        </div>
                                        <div class="col-12 col-md-6 d-flex align-items-start btn-c">
                                            <button type="button" onclick="decrement(13)"><i class="fa fa-minus-circle"
                                                    aria-hidden="true"></i></button>
                                            <input id="13" type="number" name="13" min="500000" placeholder="...... ">
                                            <button type="button" onclick="increment(13)"><i class="fa fa-plus-circle"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div class="row my-md-2 my-2">
                                        <div class="col-12 col-md-6">
                                            Histotopathology lab
                                        </div>
                                        <div class="col-12 col-md-6 d-flex align-items-start btn-c">
                                            <button type="button" onclick="decrement(14)"><i class="fa fa-minus-circle"
                                                    aria-hidden="true"></i></button>
                                            <input id="14" type="number" name="14" min="500000" placeholder="...... ">
                                            <button type="button" onclick="increment(14)"><i class="fa fa-plus-circle"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div class="row my-md-2 my-2">
                                        <div class="col-12 col-md-6">
                                            Oxygen Generator Plant
                                        </div>
                                        <div class="col-12 col-md-6 d-flex align-items-start btn-c">
                                            <button type="button" onclick="decrement(15)"><i class="fa fa-minus-circle"
                                                    aria-hidden="true"></i></button>
                                            <input id="15" type="number" name="15" min="500000" placeholder="...... ">
                                            <button type="button" onclick="increment(15)"><i class="fa fa-plus-circle"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- details -->
                        <div class="tab">

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <label>First Name</label>
                                        <input type="text" name="firstName">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label>Last Name</label>
                                        <input type="text" name="lastName">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label>Email ID</label>
                                        <input type="text" name="email">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label>Address</label>
                                        <input type="text" name="address">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label>Country</label>
                                        <input type="text" name="country">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label>State</label>
                                        <input type="text" name="state">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label>Pincode</label>
                                        <input type="text" name="pincode">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label>Pancard</label>
                                        <input type="text" name="pan">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label>Aadhar</label>
                                        <input type="text" name="aadhar">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="all-steps" id="all-steps"> <span class="step"></span> <span class="step"></span>
                        </div>
                        <div class="thanks-message text-center" id="text-message"> <img
                                src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                            <h3>Thanks for your Donation!</h3> <span>Your donation has been entered! We will contact you
                                shortly!</span>
                        </div>
                        <div style="overflow:auto;" class="mb-5 mt-3 pb-5" id="nextprevious">
                            <div class="mx-auto text-center"> <button type="button" class=" my-2 text-dark" id="prevBtn"
                                    onclick="nextPrev(-1)">Previous</button> <button type="button" class="text-white"
                                    id="nextBtn" onclick="nextPrev(1)">Next</button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    function increment(id) {

        document.getElementById(id).stepUp(50000);
        sumInputs();
    }

    function decrement(id) {

        document.getElementById(id).stepDown(50000);
        sumInputs();
    }

    function eincrement(id) {

        document.getElementById("e" + id).stepUp(50000);
        sumInputs();
    }

    function edecrement(id) {

        document.getElementById("e" + id).stepDown(50000);
        sumInputs();
    }



    window.sumInputs = function() {

        var inputs = document.getElementsByTagName('input'),
            result = document.getElementById('total'),
            sum = 0;

        for (var i = 0; i < inputs.length; i++) {
            var ip = inputs[i];

            if (ip.name && ip.name.indexOf("total") < 0) {
                sum += parseInt(ip.value) || 0;
            }

        }

        result.value = sum;
    }
    </script>
    </script>




    <script src="./main.js" type="text/javascript"></script>
    <script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous">
    </script>
</body>

</html>