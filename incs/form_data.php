<?php 
require_once("/dbconnect.php"); 

if(isset($_POST['company_name'], $_POST['company_email'], $_POST['company_website'], $_POST['company_location'], $_POST['founded_year'], $_POST['company_address'], $_POST['company_facebook'])) {

    $company_name = $_POST['company_name'];
    $company_email = filter_var($_POST['company_email'], FILTER_SANITIZE_EMAIL); // Corrected filter
    $company_website = $_POST['company_website'];
    $company_location = $_POST['company_location'];
    $company_phone = $_POST['company_phone'];
    $founded_year = $_POST['founded_year'];
    $company_address = $_POST['company_address'];
    $company_facebook = $_POST['company_facebook'];

} else {
    echo("The data was not correct.");
    exit; 
}

if($conn->connect_error) {  
    die('Connection failed: ' . $conn->connect_error);
} else {
 
    $statement = $conn->prepare("INSERT INTO form_data (company_name, company_email, company_website, company_location, company_phone, founded_year, company_address, company_facebook) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $statement->bind_param("ssssisss", $company_name, $company_email, $company_website, $company_location, $company_phone, $founded_year, $company_address, $company_facebook);

    if ($statement->execute()) {
        echo "Data is inserted successfully.";
    } else {
        echo "Error inserting data: " . $statement->error;
    }

    $statement->close();
}
?>
