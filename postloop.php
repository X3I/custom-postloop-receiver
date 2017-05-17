<?php

if (isset($_GET['action'])) {
    
    switch ($_GET['action']) {
        
        case 'ping':
            echo '{"version":"2.1","software":"MyBB 1.6","connected":"true"}'; // This validates the website type via postloop
            break;
        case 'validateUser':
            // Need to look at this better, assuming is user email
            break;
        case 'get':
            // return postcount and stuff here from the database
            // Example: [{"user_id":"34","username":"Dean","posts":"29"}] 
            break;
        default:
            echo 'Action not found';
    }
    
}

?>
