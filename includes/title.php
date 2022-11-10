<?php 
    if($url[1] == 'dashboard'){
        echo "<title>Home | Rapid Parcel Express</title>";
    }
    else if($url[1] == 'add_package'){
        echo "<title>Add Package | Rapid Parcel Express</title>";
    }
    else if($url[1] == 'update_package'){
        echo "<title>Update Package | Rapid Parcel Express</title>";
    }
    else if($url[1] == 'track_package'){
        echo "<title>Track Package | Rapid Parcel Express</title>";
    }
    else if($url[1] == 'add_admin'){
        echo "<title>Add Admin | Rapid Parcel Express</title>";
    }
?>