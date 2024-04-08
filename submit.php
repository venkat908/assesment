<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $email = $_POST["email"];
    $job_title = $_POST["job_title"];
    $phone = $_POST["phone"];
    $company_name = $_POST["company_name"];
    $industry = $_POST["industry"];
    $country = $_POST["country"];
    $business_type = $_POST["business_type"];
    $comments = $_POST["comments"];

    
    echo "Form submitted successfully!";
} else {
    http_response_code(400);
    echo "Invalid request.";
}
?>
