<?php 
    use yii\helpers\Html;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Guests for Restaurant Service</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap core CSS -->

       <?= Html::cssFile('@web/assets/index/css/bootstrap.min.css')?>
        <!-- Custom styles for this template -->
       <?= Html::cssFile('@web/assets/index/css/restaurantapp.css')?>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="../dist/js/html5shiv.3.7.0.js"></script>
          <script src="../dist/js/respond.min.1.3.0.js"></script>
        <![endif]-->
    </head>
    <body>
        <a class="sr-only sr-only-focusable" href="#content" tabindex="1"><div class="container"><span class="skiplink-text">Skip to main content</span></div></a>

        <div class="navbar navbar-worldskills navbar-static-top">
            <div class="cube-container">
                <div class="cube-right-bottom-blue">&nbsp;</div>
            </div>
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Reservations</a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="?r=index/regulations">Information</a></li>
                        <li><a href="?r=index/single">Booking</a></li>
                        <li><a href="?r=admin/index">Management</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- use the following link for login and logoff -->
                        <?php 
                            $session = Yii::$app->session;
                            if(!empty($sessio['name'])){
                        ?>
                            <li>管理员：<?php echo $sessio['name'];?></a></li>
                            <li><a href="?r=admin/login">退出</a></li>
                        <?php }else{ ?>
                            <li><a href="?r=admin/login">Login</a></li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">

            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Information</li>
            </ol>

            <?= $content ?>
            
            <footer>
                <hr class="hr-extended" />
                <p>© 2018 WorldSkills</p>
            </footer>

        </div>

    <!-- Bootstrap core JS -->
        <?= Html::jsFile('@web/assets/index/js/jquery.min.1.11.1.js')?>
        <?= Html::jsFile('@web/assets/index/js/bootstrap.js')?>
        <?= Html::jsFile('@web/assets/index/js/restaurantapp.js')?>
        <?= Html::jsFile('@web/assets/index/js/add.js')?>
    </body>
</html>
