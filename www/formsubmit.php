<?php
//FIRST SECTION
$truckNo = $_POST['truckNo'];
$milage = $_POST['milage'];
$trailerNo = $_POST['trailerNo'];
$dailyNo = $_POST['dailyNo'];
$trailerNo2 = $_POST['trailerNo2'];
$location = $_POST['location'];
//SECOND SECTION
$general_condition = $_POST['general_condition'];
$general_condition_other = $_POST['general_condition_other'];
//THIRD SECTION
$engine_compartment = $_POST['engine_compartment'];
$engine_compartment_other = $_POST['engine_compartment_other'];
//FOURTH SECTION
$in_cab = $_POST['in_cab'];
$in_cab_other = $_POST['in_cab_other'];
//FIFTH SECTION
$exterior = $_POST['exterior'];
$exterior_other = $_POST['exterior_other'];
//SIXTH SECTION
$towed_units = $_POST['towed_units'];
$towed_units_other = $_POST['towed_units_other'];
//SEVENTH SECTION
$remarks = $_POST['remarks'];
$reporting_driver_name = $_POST['reporting_driver_name'];
$reporting_employee_number = $_POST['reporting_employee_number'];
$reporting_driver_date = $_POST['reporting_driver_date'];

$reviewing_driver_name = $_POST['reviewing_driver_name'];
$reviewing_driver_employee_number = $_POST['reviewing_driver_employee_number'];
$reviewing_driver_date = $_POST['reviewing_driver_date'];
//tested up to here
$maintenanc= $_POST['maintenance'];

$maintenance_ros = $_POST['maintenance_ros'];
$maintenance_certified_by = $_POST['maintenance_certified_by'];
$maintenance_location = $_POST['maintenance_location'];
$maintenance_date = $_POST['maintenance_date'];
$shop_remarks = $_POST['shop_remarks'];


$conn = new mysqli('localhost', 'root', '', 'digital_solutions');
if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO mdl_test(truckNo, milage, trailerNo, dailyNo, trailerNo2, `location`, general_condition, general_condition_other, engine_compartment, engine_compartment_other, in_cab, in_cab_other, exterior, exterior_other, towed_units, towed_units_other, remarks, reporting_driver_name, reporting_employee_number, reporting_driver_date, reviewing_driver_name, reviewing_driver_employee_number, reviewing_driver_date, maintenance, shop_remarks, maintenance_ros, maintenance_certified_by, maintenance_date, maintenance_location)
    values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iiiiissssssssssssssssssssssss", $truckNo, $milage, $trailerNo, $dailyNo, $trailerNo2, $location, $general_condition, $general_condition_other, $engine_compartment, $engine_compartment_other, $in_cab, $in_cab_other, $exterior, $exterior_other, $towed_units, $towed_units_other, $remarks, $reporting_driver_name, $reporting_employee_number, $reporting_driver_date, $reviewing_driver_name, $reviewing_driver_employee_number, $reviewing_driver_date, $maintenance, $shop_remarks, $maintenance_ros, $maintenance_certified_by, $maintenance_date, $maintenance_location);
    $stmt->execute();
    header('Location: /dashboard.php');
    $stmt->close();
    $conn->close();
}
?>