<!-- <?php echo date("Y"); ?>  -->
<?php
$start_year = 2018;
if ($start_year == date("Y")) {
        echo $start_year;
} else {
    echo $start_year."-".date("Y");
}
?>