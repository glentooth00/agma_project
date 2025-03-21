<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?></title>

    <!-- Favicon -->
    <link rel="icon" href="resources/images/favicon2.ico" type="image/x-icon">

    <!---- CSS ---->
    <link rel="stylesheet" type="text/css" href="resources/css/style.css" >

    <!-- bootstrap -->
    <link href="resources/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap JS & Dependencies -->
    <script src="resources/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Alpine Js --->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!---- Tailwaind js --->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />


    <style>
        /* Make body take full height */
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        /* Make main content expand to fill space */
        .content {
            flex: 1;
        }
        /* Footer styles */
        .footer {
            background-color: #2B2C32;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>

</head>
<body>

        <div class="shadow-sm bg-body p-2 col-md-12 mb-5">
            <div class="col-md-6 d-flex p-1">
                <div class="text-white">
                    <img src="resources/images/logo2.png" width="70px"/>
                </div>
                <div class="p-1">
                <h6 class="display-5" x-data="{ message: 'WEB-APP'}" x-text="message"></h6>
                </div>
            </div>
        </div>