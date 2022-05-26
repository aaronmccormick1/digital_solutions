<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
        $(function() {
            $('#datepicker1').datepicker();
        });
        $(function() {
            $('#datepicker2').datepicker();
        });
    </script>

    <body class="diagonal-split-background">
        <div style="border: 2px solid white; border-radius: 10px; background-color: #0077b6; margin: 2.5% 8.5% 2.5% 8.5%">
            <div style="text-align: center; padding-top: 30px; color: white">
                <img src="img/logo.jpg" alt="logo" width="60" height="54" class="d-inline-block" style="margin-right: 10px;">
                <div class="d-inline-block" style="color: #fff; font-family: 'Poppins', sans-serif"></div></a>
                <h1>JJ Keller Autos</h1>
                <h2>Driver's Inspection Report</h2>
                <h3 style="font-size: 16px;">COMPLETION OF THIS REPORT REQUIRED BY FEDERAL LAW, 49 CFR 396.11 & 396.13.</h3>
            </div>
            <form action="formsubmit.php" method="post" style="padding: 0% 5% 2.5% 5%;">
                <div class="row g-3">
                    <div class="col-sm-5">
                        <input type="number" class="form-control" placeholder="Truck or Trackor No." aria-label="Truck or Trackor No." name="truckNo">
                    </div>
                    <div class="col-sm">
                        <input type="number" class="form-control" placeholder="Milage (No Tenths)" aria-label="Milage (No Tenths)" name="milage">
                    </div>
                    <div class="col-sm">
                        <input type="number" class="form-control" placeholder="Trailer No." aria-label="Trailer No." name="trailerNo">
                    </div>
                </div>
                <div class="row g-3" style="margin-top: 10px">
                    <div class="col-sm">
                        <input type="number" class="form-control" placeholder="Daily No." aria-label="Daily No." name="dailyNo">
                    </div>
                    <div class="col-sm">
                        <input type="number" class="form-control" placeholder="Trailer No." aria-label="Trailer No." name="trailerNo2">
                    </div>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Location" aria-label="Location" name="location">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col" style="text-align: center;">
                            ATA/VMRS System Code Numbers for Shop Use Only
                        </div>
                        <div class="col" style="text-align: center;">
                            CHECK DEFECTS ONLY. Explain under REMARKS.
                        </div>
                    </div>
                </div>

                <div>
                    <h2 style="text-align: center; margin-top: 15px;">POWER UNIT</h2>
                </div>
                <div>
                    <div class="row">
                        <div class="col">
                            <h4 style="font-size: 18px;">GENERAL CONDITION</h4>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Cabs/Doors/Windows" aria-label="..." name="general_condition[]"> 02 <b>Cabs/Doors/Windows</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Body/Doors" aria-label="..." name="general_condition[]"> 02 <b>Body/Doors</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Oil Leak" aria-label="..." name="general_condition[]"> __ <b>Oil Leak</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Grease Leak" aria-label="..." name="general_condition[]"> __ <b>Grease Leak</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Coolant Leak" aria-label="..." name="general_condition[]"> 42 <b>Coolant Leak</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Fuel Leak" aria-label="..." name="general_condition[]"> 44 <b>Fuel Leak</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Other" aria-label="..." name="general_condition[]"> __ <b>Other</b>
                            </div>
                            <div class="col-sm-5" style="margin-top: 5px; width: 100px;">
                                <input type="text" class="form-control" placeholder="Identify" aria-label="other" name="general_condition_other">
                            </div>
                            <h4 style="font-size: 18px; padding-top: 8px;">ENGINE COMPARTMENT</h4>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Oil Level" aria-label="..." name="engine_compartment[]"> 45 <b>Oil Level</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Coolant Level" aria-label="..." name="engine_compartment[]"> 42 <b>Coolant Level</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Belts" aria-label="..." name="engine_compartment[]"> __ <b>Belts</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Other" aria-label="..." name="engine_compartment[]"> __ <b>Other</b>
                            </div>
                            <div class="col-sm-5" style="margin-top: 5px; padding: 0px; width: 100px;">
                                <input type="text" class="form-control" placeholder="Identify" aria-label="other" name="engine_compartment_other">
                            </div>
                        </div>
                        <div class="col">
                            <h4 style="font-size: 18px;">IN-CAB</h4>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Gauges/Warning Indicators" aria-label="..." name="in_cab[]"> 03 <b>Gauges/Warning Indicators</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Windshield Wipers/Washers" aria-label="..." name="in_cab[]"> 02 <b>Windshield Wipers/Washers</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Horns" aria-label="..." name="in_cab[]"> 54 <b>Horns</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Heater/Defroster" aria-label="..." name="in_cab[]"> 01 <b>Heater/Defroster</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Mirrors" aria-label="..." name="in_cab[]"> 02 <b>Mirrors</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Steering" aria-label="..." name="in_cab[]"> 15 <b>Steering</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Clutch" aria-label="..." name="in_cab[]"> 23 <b>Clutch</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Service Brakes" aria-label="..." name="in_cab[]"> 13 <b>Service Brakes</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Parking Brake" aria-label="..." name="in_cab[]"> 13 <b>Parking Brake</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Emergency Brakes" aria-label="..." name="in_cab[]"> 13 <b>Emergency Brakes</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Triangles" aria-label="..." name="in_cab[]"> 53 <b>Triangles</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Fire Extinguisher" aria-label="..." name="in_cab[]"> 53 <b>Fire Extinguisher</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Other Safety Equipment" aria-label="..." name="in_cab[]"> 53 <b>Other Safety Equipment</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Spare Fuses" aria-label="..." name="in_cab[]"> 34 <b>Spare Fuses</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Seat Belts" aria-label="..." name="in_cab[]"> 02 <b>Seat Belts</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Other" aria-label="..." name="in_cab[]"> __ <b>Other</b>
                            </div>
                            <div class="col-sm-5" style="margin-top: 5px; padding: 0px; width: 100px;">
                                <input type="text" class="form-control" placeholder="Identify" aria-label="other" name="in_cab_other">
                            </div>
                        </div>
                        <div class="col">
                            <h4 style="font-size: 18px;">EXTERIOR</h4>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Lights" aria-label="..." name="exterior[]"> 34 <b>Lights</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Reflectors" aria-label="..." name="exterior[]"> 34 <b>Reflectors</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Suspension" aria-label="..." name="exterior[]"> 16 <b>Suspension</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Tires" aria-label="..." name="exterior[]"> 17 <b>Tires</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Wheels/Rims/Lugs" aria-label="..." name="exterior[]"> 18 <b>Wheels/Rims/Lugs</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Battery" aria-label="..." name="exterior[]"> 32 <b>Battery</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Exhaust" aria-label="..." name="exterior[]"> 43 <b>Exhaust</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Brakes" aria-label="..." name="exterior[]"> 13 <b>Brakes</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Air Lines" aria-label="..." name="exterior[]"> 13 <b>Air Lines</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Light Line" aria-label="..." name="exterior[]"> 34 <b>Light Line</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Fifth-Wheel" aria-label="..." name="exterior[]"> 49 <b>Fifth-Wheel</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Tire-Downs" aria-label="..." name="exterior[]"> 71 <b>Tire-Downs</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Rear-End Protection" aria-label="..." name="exterior[]"> 14 <b>Rear-End Protection</b>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Other" aria-label="..." name="exterior[]"> __ <b>Other</b>
                            </div>
                            <div class="col-sm-5" style="margin-top: 5px; padding: 0px; width: 100px;">
                                <input type="text" class="form-control" placeholder="Identify" aria-label="other" name="exterior_other">
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." style="float: right"> <b style="float: right; margin-right: 5px;">NO DEFECTS</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h2 style="text-align: center; margin-top: 15px;">TOWED UNIT(S)</h2>
                </div>
                <div class="row">
                    <div class="col">
                        <div>
                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Body/Doors" aria-label="..." name="towed_units[]"> 71 <b>Body/Doors</b>
                        </div>
                        <div>
                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Tie-Downs" aria-label="..." name="towed_units[]"> 71 <b>Tie-Downs</b>
                        </div>
                        <div>
                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Lights" aria-label="..." name="towed_units[]"> 34 <b>Lights</b>
                        </div>
                        <div>
                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Reflectors" aria-label="..." name="towed_units[]"> 34 <b>Reflectors</b>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Suspension" aria-label="..." name="towed_units[]"> 16 <b>Suspension</b>
                        </div>
                        <div>
                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Tires" aria-label="..." name="towed_units[]"> 17 <b>Tires</b>
                        </div>
                        <div>
                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Wheels/Rims/Lugs" aria-label="..." name="towed_units[]"> 18 <b>Wheels/Rims/Lugs</b>
                        </div>
                        <div>
                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Brakes" aria-label="..." name="towed_units[]"> 13 <b>Brakes</b>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Landing Gear" aria-label="..." name="towed_units[]"> 77 <b>Landing Gear</b>
                        </div>
                        <div>
                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="King Pin/Upper Plate" aria-label="..." name="towed_units[]"> 59 <b>King Pin/Upper Plate</b>
                        </div>
                        <div>
                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Fifth-Wheel (Dolly)" aria-label="..." name="towed_units[]"> 59 <b>Fifth-Wheel (Dolly)</b>
                        </div>
                        <div>
                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Other Coupling Devices" aria-label="..." name="towed_units[]"> 59 <b>Other Coupling Devices</b>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Rear-End Protection" aria-label="..." name="towed_units[]"> 79 <b>Rear-End Protection</b>
                        </div>
                        <div>
                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Other" aria-label="..." name="towed_units[]"> __ <b>Other</b>
                        </div>
                        <div class="col-sm-5" style="margin-top: 5px; padding: 0px; width: 100px;">
                            <input type="text" class="form-control" placeholder="Identify" aria-label="other" name="towed_units_other">
                        </div>
                        <div>
                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." style="float: right"> <b style="float: right; margin-right: 5px;">NO DEFECTS</b>
                        </div>
                    </div>
                </div>
                <textarea rows="3" style="height:100%; width: 100%; font-size: 18px; padding: 5px; border-radius: 15px; margin-top: 15px" placeholder="Remarks" name="remarks"></textarea>
                <div class="row" style="margin-top: 15px;">
                    <div class="col">
                        <h4 style="font-size: 18px;">REPORTING DRIVER:</h4>
                        <input type="text" class="form-control" placeholder="Name" aria-label="other" style="width: 50%; display: inline-block;" name="reporting_driver_name">
                        <input type="text" class="form-control" placeholder="Emp. No." aria-label="other" style="width: 45%; display: inline-block;" name="reporting_employee_number">
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <div class="input-group date" id="datepicker">
                                    <input type="text" class="form-control" placeholder="Date" name="reporting_driver_date">
                                    <span class="input-group-append">
                                        <span class="input-group-text bg-white d-block" style="height: 40px;">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h4 style="font-size: 18px;">MAINTENANCE ACTION:</h4>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Repairs Made" aria-label="..." name="maintenance[]"><b> Repairs Made</b>
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="No Repairs Needed" aria-label="..." name="maintenance[]"><b> No Repairs Needed</b>
                                </div>
                            </div>
                        </div>
                        <input type="text" class="form-control" placeholder="R.O#'S" aria-label="other" style="width: 40%; display: inline-block; margin-top: 10px" name="maintenance_ros">
                        <input type="text" class="form-control" placeholder="Certified By" aria-label="other" style="width: 45%; display: inline-block;" name="maintenance_certified_by">
                        <input type="text" class="form-control" placeholder="Location" aria-label="other" style="width: 45%; display: inline-block;" name="maintenance_location">
                    </div>
                </div>
                <div class="row" style="margin-top: 15px;">
                    <div class="col">
                        <h4 style="font-size: 18px;">REVIEWING DRIVER:</h4>
                        <input type="text" class="form-control" placeholder="Name" aria-label="other" style="width: 50%; display: inline-block;" name="reviewing_driver_name">
                        <input type="text" class="form-control" placeholder="Emp. No." aria-label="other" style="width: 45%; display: inline-block;" name="reviewing_driver_employee_number">
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <div class="input-group date" id="datepicker1">
                                    <input type="text" class="form-control" placeholder="Date" name="reviewing_driver_date">
                                    <span class="input-group-append">
                                        <span class="input-group-text bg-white d-block" style="height: 40px;">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <div class="input-group date" id="datepicker2">
                                    <input type="text" class="form-control" placeholder="Date" name="maintenance_date">
                                    <span class="input-group-append">
                                        <span class="input-group-text bg-white d-block" style="height: 40px;">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <textarea rows="1" style="height:100%; width: 100%; font-size: 18px; padding: 5px; border-radius: 15px; margin-top: 15px" placeholder="Shop Remarks" name="shop_remarks"></textarea>
                <button type="submit" class="btn btn-primary btn-block" style="margin:auto; display:block; margin-top: 30px; font-size: 20  px">Submit</button>
                <p style="margin-bottom: 0; margin-top: 50px">Copyright 2015 J.J Keller & Associates, Inc - Neenah, WI - JJKeller.com - (800) 327-6868 - Printed in the USA</p>
            </form>
        </div>
    </body>

    </html>
<?php
} else {
    header("Location: login.php");
    exit();
} ?>