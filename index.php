<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Donate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="./style.css" rel="stylesheet">
    <style>
    .d-flex {
        align-items: start;
    }
    </style>
</head>

<body>


    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12">
                <form id="regForm" action="amount.php" method="post" enctype="multipart/form">
                    <h1 id="register">Donate</h1>
                    <div class="all-steps" id="all-steps"> <span class="step">1</span> <span class="step">2</span></div>
                    <div class="tab">
                        <div class="container-fluid">

                            <br><br>
                            <div class="row">
                                <div class="col-12 col-md-4">Ground Floor</div>
                                <div class="col-12 col-md-4">
                                    <ul>Emergency and Trauma Unit</ul>
                                </div>
                                <div class="col-12 col-md-4 d-flex">
                                    <button type="button" onclick="decrement(1)">-</button>
                                    <input id="1" type="number" name="1" min="10000">
                                    <button type="button" onclick="increment(1)">+</button>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-12 col-md-4">First floor</div>
                                <div class="col-12 col-md-4">
                                    <ul>Out patient clinics(Services)+Pharmacy</ul>
                                </div>
                                <div class="col-12 col-md-4 d-flex">
                                    <button type="button" onclick="decrement(2)">-</button>
                                    <input id="2" type="number" name="2" min="500000">
                                    <button type="button" onclick="increment(2)">+</button>
                                </div>
                            </div>

                            <br><br>
                            <div class="row">
                                <div class="col-12 col-md-4">Second floor</div>
                                <div class="col-12 col-md-4">
                                    <ul>
                                        <p>Diagnostics and Imaging services</p>
                                        <p>Chemo daycare centre</p>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-4 d-flex">
                                    <button type="button" onclick="decrement(3)">-</button>
                                    <input id="3" type="number" name="3" min="500000">
                                    <button type="button" onclick="increment(3)">+</button>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-12 col-md-4">Third floor</div>
                                <div class="col-12 col-md-4">
                                    <ul>
                                        <p>Inpatient Services - Male General ward</p>
                                        <p>Inpatient Services - Female General ward</p>
                                        <p>Inpatient Services - Pediatric</p>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-4 d-flex">
                                    <button type="button" onclick="decrement(4)">-</button>
                                    <input id="4" type="number" name="4" min="500000">
                                    <button type="button" onclick="increment(4)">+</button>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-12 col-md-4">Fourth floor</div>
                                <div class="col-12 col-md-4">
                                    <ul>
                                        <p>Single and double occupancy rooms
                                        </p>
                                        <p>Laboratory</p>
                                        <p>UPS Room</p>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-4 d-flex">
                                    <button type="button" onclick="decrement(5)">-</button>
                                    <input id="5" type="number" name="5" min="500000">
                                    <button type="button" onclick="increment(5)">+</button>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-12 col-md-4">Fifth floor</div>
                                <div class="col-12 col-md-4">
                                    <ul>
                                        <p>Single and double occupancy rooms</p>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-4 d-flex">
                                    <button type="button" onclick="decrement(6)">-</button>
                                    <input id="6" type="number" name="6" min="500000">
                                    <button type="button" onclick="increment(6)">+</button>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-12 col-md-4">Sixth floor</div>
                                <div class="col-12 col-md-4">
                                    <ul>
                                        <p>Operation Theatre Complex</p>
                                        <p>Intensive Care Unit Rooms</p>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-4 d-flex">
                                    <button type="button" onclick="decrement(7)">-</button>
                                    <input id="7" type="number" name="7" min="500000">
                                    <button type="button" onclick="increment(7)">+</button>
                                </div>
                            </div>

                            <br><br>
                            <div class="row">
                                <div class="col-12 col-md-4"> Terrace floor</div>
                                <div class="col-12 col-md-4">
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
                                <div class="col-12 col-md-4 d-flex">
                                    <button type="button" onclick="decrement(8)">-</button>
                                    <input id="8" type="number" name="8" min="500000">
                                    <button type="button" onclick="increment(8)">+</button>
                                </div>
                            </div>





                            Total : <input type="number" name="total" id="total" />
                        </div>

                    </div>

                    <!-- details -->
                    <div class="tab">

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <lable>First Name
                                    </lable>
                                    <input type="text" name="firstName">
                                </div>
                                <div class="col-12 col-md-6">
                                    <lable>Last Name</lable>
                                    <input type="text" name="lastName">
                                </div>
                                <div class="col-12 col-md-6">
                                    <lable>Phone Number</lable>
                                    <input type="text" name="phone">
                                </div>
                                <div class="col-12 col-md-6">
                                    <lable>Email ID</lable>
                                    <input type="text" name="email">
                                </div>
                                <div class="col-12 col-md-6">
                                    <lable>Address</lable>
                                    <input type="text" name="address">
                                </div>
                                <div class="col-12 col-md-6">
                                    <lable>Country</lable>
                                    <input type="text" name="country">
                                </div>
                                <div class="col-12 col-md-6">
                                    <lable>State</lable>
                                    <input type="text" name="state">
                                </div>
                                <div class="col-12 col-md-6">
                                    <lable>Pincode</lable>
                                    <input type="text" name="pincode">
                                </div>
                                <div class="col-12 col-md-6">
                                    <lable>Pancard</lable>
                                    <input type="text" name="pan">
                                </div>
                                <div class="col-12 col-md-6">
                                    <lable>Aadhar</lable>
                                    <input type="text" name="aadhar" pattern="^[2-9]{1}[0-9]{3}\\s[0-9]{4}\\s[0-9]{4}$"
                                        ;>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="thanks-message text-center" id="text-message"> <img
                            src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                        <h3>Thanks for your Donation!</h3> <span>Your donation has been entered! We will contact you
                            shortly!</span>
                    </div>
                    <div style="overflow:auto;" id="nextprevious">
                        <div style="float:right;"> <button type="button" id="prevBtn"
                                onclick="nextPrev(-1)">Previous</button> <button type="button" id="nextBtn"
                                onclick="nextPrev(1)">Next</button> </div>
                    </div>
                </form>

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


    <script src="./main.js" type="text/javascript"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>

</body>

</html>