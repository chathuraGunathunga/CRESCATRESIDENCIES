<?php
include '/./url.php';
$url = new Url();
echo'<link href="'.$url->home_base_url().'calanderthem/calanderstyle/fullcalendar.css" rel="stylesheet" >';
echo'<link href="'.$url->home_base_url().'calanderthem/calanderstyle/fullcalendar.print.css" rel="stylesheet" media="print">';
echo'<link href="'.$url->home_base_url().'calanderthem/calanderstyle/custom.css" rel="stylesheet">';
echo'<script src="'.$url->home_base_url().'calanderthem/lib/moment.min.js"></script>';
echo'<script src="'.$url->home_base_url().'calanderthem/lib/jquery.min.js"></script>';
echo'<script src="'.$url->home_base_url().'calanderthem/calanderstyle/fullcalendar.min.js"></script>';
echo '<script src="'.$url->home_base_url().'calanderthem/calanderstyle/custom.js"></script>';
;?>

