<? session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?
$test = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
function connect()
{//2UWXvGb2   champ00.mysql.ukraine.com.ua
//    $conn = mysql_connect("91.206.201.169", "champ00_db", "222222") or die(mysql_error(123123123123123));
    $conn = mysql_connect("91.206.201.169", "champ00_db", "222222") or die(mysql_error());
    $tbl = mysql_select_db("champ00_db", $conn) or die(mysql_error());
    mysql_query("SET NAMES utf8");
//    return $tbl;
}
if(($test[strlen($test)-1] == 1 && $test[strlen($test)-3] == 't') || (isset($_GET['quit']) && $_GET['quit'] == 1))
{
    $_SESSION["password"] = null;
    $_SESSION['id'] = null;
    $_SESSION['login'] = null;
    $_SESSION['f'] = null;
    $_SESSION['i'] = null;
    $_SESSION['o'] = null;
    $_SESSION['group'] = null;
    print "<meta http-equiv='refresh' content='0; url=/?ch='>";
}

?>
<html>
<head>
<!--    --><?//=$_SERVER['DOCUMENT_ROOT']?>
    <meta charset="utf-8" type="html">
    <link rel="stylesheet" href="/assets/css/flexboxgrid.css"> <!-- Blocks !-->
    <link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css"><!-- Fraem !-->
    <link rel="stylesheet" href="/assets/css/ChempStyle.css"><!-- MyStyle !-->
    <link rel="stylesheet" href="/assets/css/font-awesome.css"><!-- MyStyle !-->
    <link rel="stylesheet" href="/assets/css/style.css"><!-- MyStyle !-->
    <script type="text/javascript" src="/assets/js/sprinkle.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.js"></script>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css"><!-- Fraem !-->
    <script src="/assets/js/bootstrap.min.js"></script>
<!--    <script type="text/javascript" src="/pages/services/shop/modules/prod/List_prod.js"></script>-->

    <script type="text/javascript" src="/assets/js/jquery.mosaicflow.js"></script>
</head>
<body style="min-height:100%;position:relative;background: #e8e8e8">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="menu"
     style="border-radius:0px;border: 0px;background:#88212a;color:white">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse">
            <div class="row">
                <div class="col-xs-2">
                    <div class="box ">
                        <a class="navbar-brand" href="/?ch=1" style="margin-top:-10px">
                            <img class="logo" src="/assets/img/logo-head.png" width="130px" alt="CHAMPION LOGO"
                                 style="position: absolute;left: 20px">
                        </a>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="box">
                        <ul class="nav navbar-nav" style="position:absolute">
                            <li <? if ($_GET['ch'] == 1) print "class='active'" ?>><a href="/?ch=1 " style="color: white ">Главная</a>
                            </li>
                        <!--                            <li><a href="/portfolio/" style="color: white">Портфолио</a></li>-->
                            <li
                                <?
                                if((int)$test[strlen($test)-2].$test[strlen($test)-1] > 9){
                                    $t = (int)$test[strlen($test)-2].$test[strlen($test)-1];
                                }
                                else $t = (int)($test[strlen($test)-1]);
                                if ($_GET['ch'] != 1 && $_GET['ch']!= 3 && $test[strlen($test)-4] != 'd' && ($_GET['ch'] == 2 || ($test[strlen($test)-1] == 2 && $test[strlen($test)-3] == 'h') || $t > 0)) print "class='active'"
                                ?>
                                ><a style="color: white" href="/shop?ch=2/">Магазин</a>
                            </li>

                            <li>
                            <a style="color: white" onclick="Reformal.widgetOpen();return false;"
                               href="http://champion.reformal.ru">
                                Отзывы
                            </a>
                        </li>
                            <li
                                <? if ($_GET['ch'] == 3) print "class='active'" ?>><a style="color: white" href="/contacts/?ch=3">Контакты</a>
                            </li>
                        <? if (!empty($_SESSION['password'])) { ?>
                            <li class="dropdown">
                                <? print "<a style='color: white;' class='dropdown-toggle' data-toggle='dropdown' href='#'>"; ?>
                                <? print $_SESSION['i'] . " " . $_SESSION['o'] ?>
                                <span class="caret"></span>
                                <ul class="dropdown-menu" style="background-color: rgba(255, 255, 255, 0.95)">
                                    <? print"<li><a href='/id" . $_SESSION['id'] . "'>Профиль</a></li>"; ?>
                                    <? print"<li><a href='/id" . $_SESSION['id'] . "/list'>Список заказов</a></li>"; ?>
                                    <? print"<li><a href='?quit=1'>Выход</a></li>"; ?>
                                </ul>
                            </li>
                        <? } else { ?>
                            <li <? if ($_GET['auth'] == 1) print "class='active'" ?>>
                                <a style="color: white" href="/auth/">
                                    Вход
                                </a>
                            </li>
                        <? } ?>
                            <form action="/search" method="post">
                                <li>
                                    <div class="row">
                                        <div class="col-xs-10" style="padding-top:10px">
                                            <div class="input-group">
                                                <input type="text" class="form-control" size="150px">
												<span class="input-group-btn">
													<button class="btn btn-group-xs" type="submit">
                                                        <span class="glyphicon glyphicon-search"></span>
                                                    </button>
												</span>
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                        <!-- /.col-lg-6 -->
                                    </div>
                                    <!-- /.row -->
                                </li>
                            </form>
                        </ul>
                    </div>
                </div>
                </div>
        </div><!--/.nav-collapse -->
    </div>
</div>


<script type="text/javascript">
    var reformalOptions = {
        project_id: 973649,
        project_host: "champion.reformal.ru",
        tab_orientation: "none",
        tab_border_width: 0
    };
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.async = true;
    document.getElementsByTagName('body')[0].appendChild(script);
    script.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'media.reformal.ru/widgets/v3/reformal.js';
</script>
