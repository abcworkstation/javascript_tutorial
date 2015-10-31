<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Javascript Basic </title>
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
                <p class="para"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquam aperiam consectetur enim natus, quae sapiente. Animi aut, dolorum et fugit mollitia nam, officia porro quo ratione sapiente velit vero.</p>
                <ul>
                    <li><a href="#"> This is menu link </a></li>
                    <li><a href="#"> This is menu link </a></li>
                    <li class="active"><a href="#"> This is menu link </a></li>
                    <li><a href="#"> This is menu link </a></li>
                    <li><a href="#"> This is menu link </a></li>
                    <li><a href="#"> This is menu link </a></li>
                    <li class="up"><a class="close" href="#"> This is menu link </a></li>
                    <li><a href="#"> This is menu link </a></li>
                    <li><a href="#"> This is menu link </a></li>
                </ul>


                <div class="height" style="height: 500px;"></div>
                <div id="box">
                    This is box area
                </div>
            </div>

        </div>
        <footer class="row">
            <p> This is footer for more information</p>
        </footer>
    </div>
</body>
</html>