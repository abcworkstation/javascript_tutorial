<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Javascript Basic : click </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/style.css">
    <script language="javascript" type="text/javascript" src="js/jquery-2.1.4.js"></script>

    <script src="js/script.js"></script>
</head>
<body>
    <div id="coantienr" class="container">
        <header class="row">
            <h1 class="text-center"> This is header </h1>
        </header>
        <div class="main-content row">
            <div class="col-md-3 sidebar" data-bg="#ff00dd">
                <a class="testing" data-bg="red" data-height="255" data-width="200" href="box"> draw box </a>
            </div>
            <div class="col-md-9 content">
               <p class="text-center">
                   <a data-target="popup_1" href="#" class="btn btn-success btn-xs btn-click"> Click Me <span> Change It </span></a>
               </p>
                
            </div>

        </div>
        <footer class="row">
            <p> This is footer for more information</p>
        </footer>
    </div>


    <div id="popup_1" class="popup">
        <div class="popup_main">
            <div class="popup_head">
                <h3> This is popup head <span class="popup-trash"> X </span> </h3>
            </div>
            <div class="popup_body">
                <p> This is popup body </p>
            </div>
            <div class="popup_footer">
                <p> This is popup footer</p>
            </div>
        </div>
    </div>

</body>
</html>