<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ISM Advancea | <?php echo $titre; ?></title>
    <link rel="icon" href="<?php echo site_url(); ?>assets/img/logo.png" type="image/x-icon">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo css_url("bootstrap/bootstrap"); ?>"/>
    <link rel="stylesheet" href="<?php echo css_url("style"); ?>">
    <link rel="stylesheet" href="<?php echo css_url("font-awesome.min"); ?>">
</head>
<body onload="myFunction()" style="margin:0;">
    <div id="loader"></div>
    <div style="display:none;" class="animate-bottom" id="monContenu">
        <nav class="navbar navbar-default  navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand text-center" href="#">
                                <img src="<?php echo site_url(); ?>assets/img/logo.jpg" alt="logo" width="50px" height="50px" class="logo"/>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active">
                                <a href="#">
                                    Accueil
                                </a>
                            </li> 
                           <hr class="visible-xs">
                            <li>
                                <a href="#">
                                  A propos
                                </a>
                            </li>
                            <hr class="visible-xs">
                            <li class="#">
                                <a href="#">
                                  Mention 
                                </a>
                            </li>
                            <hr class="visible-xs">
                            <li>
                                <a href="#">
                                  Professeur
                                </a>
                            </li>
                            <hr class="visible-xs">
                            <li>
                                <a href="#">
                                  Etudiant
                                </a>
                            </li>
                            <hr class="visible-xs">
                            <li>
                                <a href="#">
                                  Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
        </nav>
        <section class="content">
            <?php echo $output; ?>
        </section>
        <section class="container footer navbar-fixed-bottom">
            <div class="row text-center">
               <strong>Copyright &copy; 2018 <a href="#">ISM Advancea</a>.</strong> Tous droits réservés. 
            </div>   
               <div class="row text-center">
                    <div class="col-sm-3 pull-right">
                            <ul class="reseausociaux">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                            </ul>
                    </div>
                </div>
        </section>
    </div>
    <script src="<?php echo base_url("assets/js/jquery-3.2.0.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap/bootstrap.min.js"); ?>"></script>
    <script type="text/javascript">         
        $(document).ready(function(){
            var loader = "<img src='<?php echo base_url(); ?>assets/img/ajax-loader.gif'/>";
        });
    </script>
     <script>
    /**script loader***/
      var myVar;
      function myFunction() {
          myVar = setTimeout(showPage, 1000);
      }

      function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("monContenu").style.display = "block";
      }
      /**script loader***/
    </script>
</body>
</html>
