<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The African Union</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/aos.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css">

    <?php if (isset($admin)) : ?>
        <style>
            * {
                box-sizing: border-box
            }

            body {
                font-family: "Lato", sans-serif;
            }

            /* Style the tab */
            .tab {
                float: left;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
                width: 200px;
                height: 300px;
            }

            /* Style the buttons inside the tab */
            .tab button {
                display: block;
                background-color: inherit;
                color: black;
                padding: 10px 16px;
                width: 100%;
                border: none;
                outline: none;
                text-align: left;
                cursor: pointer;
                transition: 0.3s;
                font-size: 17px;
                text-align: center;

            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                background-color: #ddd;
            }

            /* Create an active/current "tab button" class */
            .tab button.active {
                background-color: #03e85b;
                border-radius: 20px;
                border-color: #08451f;
                border: 10px solid green;
            }

            /* Style the tab content */
        </style>

    <?php endif; ?>

</head>

<body>