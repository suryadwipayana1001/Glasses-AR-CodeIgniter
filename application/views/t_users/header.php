<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Surya Kacamata</title>

    <!-- Favicon  -->
    
    <!-- Core Style CSS -->
    <link  href="<?php echo base_url('assets/css/core-style.css')?>" rel="stylesheet" />
    <link  href="<?php echo base_url('assets/style.css')?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/dropify/dropify.min.css'?>">
    
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets/release/JeelizNNCwidget.js') ?>"></script>
        <link rel='stylesheet' href="<?php echo base_url('assets/css/JeeWidgetPublicGitBasic.css') ?>" />
</head>
<?php

$a = $this->input->get(); 
if (isset($a['code'])) $ar = $a['code']; else $ar = "";
?>
<body onload="JEEWIDGET.start({
        sku: '<?php echo $ar; ?>',
        searchImageMask: 'https://appstatic.jeeliz.com/jeewidget/images/target.png',
        searchImageColor: 0xff0000,
        onError: function(errorLabel){ alert('AN ERROR HAPPENED: ' + errorLabel); }
    })">