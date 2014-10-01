<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operator_register.php';

/*
 *      post('businessName'); --> The API does a check on the Business name to determine whether the account already exists in Narnoo.
        post('contactName');
        post('email'); --> The business's enquiry address. The API does a check on this to determine whether the account already exists in Narnoo.
        post('url');
        
        post('countryCode'); --> Phone Country Code ( 61 )
        post('areaPhone'); --> Phone area code ( 07 )
        post('phone');
        post('category');
                *Accommodation
                *Attraction
                *Dining
                *Entertainment
                *Service
                *Retail
        post('subcategory'); --> If subcategory does not exist, then the API will best guess the subcategory, if that fails we have an updating list of words that match our subcategories. You can get operator to check and update these details if needed.
        
        Optional*****
        post('keywords'); --> if left out, we set keyworks as business name and category
        
        Optional*****
        Either Latitude and Longitude or Address
        post('latitude');
        post('longitude');
        
        Optional*****
        post('address'); -> Ideally the full address format. ( Number Street Suburb State Postcode Country )
 * 
 * @notitifcations --> The operator is notified of account creation and the Distributor is CC'd into this email.
 * @connected --> The operator is automatically connected to the distributor's operator list.
 * @returns Operator information.
 * 
 */

$business_name = 'Escape2.tv';
$contact_name = 'James Wells';
$email = 'jimkenwells@hotmail.com';
$website = 'http://www.example.com/';
$country_code = '61';
$area_code = '07';
$phone = '40516366';
$category = 'Attraction';
$subcategory = 'Reef';
$keywords = 'Reef,Delete Me,Demo';
$latitude = NULL;
$longitude = NULL;
$address = '181 Mulgrave Road, QLD, Cairns, 4870';


$http_request = new Register($api_settings);
$response = $http_request->registerOperator($business_name,$contact_name,$email,$website,$country_code,$area_code,$phone,$category,$subcategory,$keywords,$latitude,$longitude,$address);
echo '<pre>';
print_r($response);
echo '</pre>';

?>
