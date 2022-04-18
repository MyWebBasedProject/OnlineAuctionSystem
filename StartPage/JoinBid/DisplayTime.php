<?php
    //called for all users 
    session_start();
    $productID = $_SESSION["ProductID"];
    $conn = mysqli_connect("127.0.0.1:50844", "azure", "6#vWHD_$", "bidding_wars");
    $result = mysqli_query($conn,"SELECT bidTime FROM $productID WHERE UserName='DummyUser'");
    $counterTime;
    while($row = mysqli_fetch_array($result))
    {
        $counterTime = $row['bidTime'];
    }
    if($counterTime == -2)
    {
        echo -2;
    }
    else
    {
        echo $counterTime;
    }
?>