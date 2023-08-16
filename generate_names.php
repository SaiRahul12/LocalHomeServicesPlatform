<?php
$categories = array(
    "Home Maintenance and Repair" => array(
        "Plumbing", "Electrical Repairs", "Painting", "Carpentry",
        "HVAC (Heating, Ventilation, and Air Conditioning)",
        "Appliance Repair", "Flooring Installation and Repair",
        "Roofing and Gutter Cleaning", "Window and Door Repair",
        "Pest Control"
    ),
    "Cleaning Services" => array(
        "House Cleaning", "Office Cleaning", "Carpet Cleaning", "Window Cleaning",
        "Deep Cleaning", "Upholstery Cleaning", "Move-In/Move-Out Cleaning",
        "Industrial Cleaning", "Commercial Cleaning"
    ),
    "Beauty and Personal Care" => array(
        "Hair Cutting and Styling", "Makeup Services", "Manicure and Pedicure",
        "Spa Services", "Barber Services", "Hair Removal (Waxing, Threading)",
        "Skin Treatments", "Massage Therapy", "Nail Art"
    ),
    "Health and Wellness" => array(
        "Yoga Instruction", "Fitness Training", "Nutrition Consultation",
        "Meditation Classes", "Personal Training", "Physical Therapy",
        "Mental Health Counseling", "Alternative Medicine (Acupuncture, Herbal Medicine)"
    ),
    "Moving and Relocation" => array(
        "Residential Moving", "Commercial Moving", "Packing and Unpacking",
        "Furniture Assembly", "Storage Services", "Vehicle Transportation",
        "International Relocation", "Loading and Unloading"
    ),
    "Event Planning and Management" => array(
        "Wedding Planning", "Party Planning", "Corporate Event Planning",
        "Catering Services", "Venue Selection", "Decoration Services",
        "Entertainment Services", "Audio-Visual Services"
    ),
    "Child and Elderly Care" => array(
        "Babysitting", "Nanny Services", "Senior Care", "Pet Sitting",
        "Dog Walking", "Pet Grooming", "Tutoring", "Homework Help"
    ),
    "Automotive Services" => array(
        "Car Wash and Detailing", "Auto Repair and Maintenance", "Oil Change",
        "Tire Rotation and Replacement", "Battery Replacement", "Car Inspection",
        "Car Rental Services"
    ),
    "Technology Services" => array(
        "Computer Repair", "Software Installation and Troubleshooting",
        "Network Setup and Configuration", "Data Recovery", "Tech Support",
        "Home Automation Setup"),
    // Add more categories and services here
);
$experts = array();
foreach ($categories as $category => $services) {
    foreach ($services as $service) {
        $name = generateRandomIndianName(); 
        $location = generateRandomIndianLocation(); 
        $experts[] = array(
            "name" => $name,
            "service" => $service,
            "location" => $location
        );
    }
}
header("Content-Type: application/json");
echo json_encode($experts);
function generateRandomIndianName() {
    $firstNames = array("Aarav", "Aditi", "Arjun", "Dia", "Kabir", "Meera");
    $lastNames = array("Sharma", "Patel", "Verma", "Singh", "Gupta", "Kumar");
    $randomFirstName = $firstNames[array_rand($firstNames)];
    $randomLastName = $lastNames[array_rand($lastNames)];
    return $randomFirstName . " " . $randomLastName;
}
function generateRandomIndianLocation() {
    $cities = array("Mumbai", "Delhi", "Bangalore", "Chennai", "Kolkata");
    $states = array("MH", "DL", "KA", "TN", "WB");
    $randomCity = $cities[array_rand($cities)];
    $randomState = $states[array_rand($states)];
    return $randomCity . ", " . $randomState;
}
?>

