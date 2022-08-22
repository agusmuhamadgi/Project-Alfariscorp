<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Halaman Login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/style1.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
</head>

<body onLoad="getTime()">

    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

    <div class="container">

        <div id="showtime"></div>
        <div class="col-lg-4 col-lg-offset-4">
            <div class="lock-screen">
                <h2><a data-toggle="modal" href="#myModal"><i class="fa fa-lock"></i></a></h2>
                <p>UNLOCK</p>

                <form class="form-login" action="aksi-login.php" method="post">
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h3 class="modal-title">Login Here</h3>
                                </div>
                                <div class="modal-body">
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                                    <br>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required .focus()>
                                </div>
                                <div class="modal-footer centered">
                                    <button data-dismiss="modal" class="btn btn-theme02" type="reset">Cancel</button>
                                    <button class="btn btn-theme03" type="submit">Login</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>


            </div>
            <! --/lock-screen -->
        </div><!-- /col-lg-4 -->

    </div><!-- /container -->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("img/login-bg.jpg", {
            speed: 500
        });
    </script>

    <script>
        function getTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            // add a zero in front of numbers<10
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('showtime').innerHTML = h + ":" + m + ":" + s;
            t = setTimeout(function() {
                getTime()
            }, 500);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
    </script>

</body>

</html>