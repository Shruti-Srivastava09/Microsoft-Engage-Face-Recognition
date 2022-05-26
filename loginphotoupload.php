<?php
if(isset($_POST['photoStore'])) {
    $encoded_data = $_POST['photoStore'];
    $binary_data = base64_decode($encoded_data);

    $photoname = uniqid().'.jpeg';

    $result = file_put_contents('loginUploadPhoto/'.$photoname, $binary_data);
    $successvalue  = array("msg"=> 'success', "filename"=> $photoname);
    if($result) {
        echo json_encode($successvalue);
    } else {
        echo json_encode(array("msg"=> 'failure', "filename"=> ""));
    }
}