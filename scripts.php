<?php
    $f_name = $_POST['F_Name']; 
    $l_name = $_POST['L_Name']; 
    $occ = $_POST['Occupation']; 

    $information = "\n" . "300" . ',' .  $f_name . ',' . $l_name . ',' . ".@unair.ac.id". ',' . "undefined.undefined@ftmm.unair.ac.id" . ',' . $occ;

    if (isset($_POST["submit"])) {
        file_put_contents(
            "datas/datapribadi.csv",
            $information,
            FILE_APPEND 
        );
    };
?>
