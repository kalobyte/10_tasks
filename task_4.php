<?php
function  progressbar()
{


    $progressbars = array(
        array(
            "text" => "My Tasks",
            "value" => "130 / 500",
            "attr_d-flex" => "mt-2",
            "attr_progress" => "mb-3",
            "attr_progress-bar" => "bg-fusion-400",
            "style" => "65%",
            "attr_aria-valuenow" => "66",
            "attr_aria-valuemin" => "0",
            "attr_aria-valuemax" => "100"
        ),
        array(
            "text" => "Transfered",
            "value" => "440 TB",
            "attr_d-flex" => "",
            "attr_progress" => "mb-3",
            "attr_progress-bar" => "bg-success-500",
            "style" => "34%",
            "attr_aria-valuenow" => "34",
            "attr_aria-valuemin" => "0",
            "attr_aria-valuemax" => "100"
        ),
        array(
            "text" => "Bugs Squashed",
            "value" => "77%",
            "attr_d-flex" => "",
            "attr_progress" => "mb-3",
            "attr_progress-bar" => "bg-info-400",
            "style" => "77%",
            "attr_aria-valuenow" => "77",
            "attr_aria-valuemin" => "0",
            "attr_aria-valuemax" => "100"
        ),
        array(
            "text" => "User Testing",
            "value" => "7 days",
            "attr_d-flex" => "",
            "attr_progress" => "mb-g",
            "attr_progress-bar" => "bg-primary-300",
            "style" => "84%",
            "attr_aria-valuenow" => "84",
            "attr_aria-valuemin" => "0",
            "attr_aria-valuemax" => "100"
        )
    );


    foreach($progressbars as $progressbar) {

            echo '<div class="d-flex ' .$progressbar["attr_d-flex"]. '">'.$progressbar["text"].'<span class="d-inline-block ml-auto">'.$progressbar["value"].'</span></div>
                <div class="progress progress-sm '.$progressbar["attr_progress"].'">
                    <div class="progress-bar '.$progressbar["attr_progress-bar"].'" role="progressbar" style="width: '.$progressbar["style"].';" aria-valuenow="'.$progressbar["attr_aria-valuenow"].'" aria-valuemin="'.$progressbar["attr_aria-valuemin"].'" aria-valuemax="'.$progressbar["attr_aria-valuemax"].'"></div>
                </div>
             ';
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <?php progressbar(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
