<?php
include('/list.php');
connect();
$z = mysql_query("select * from stend_pn where cat='" . $_GET['view'] . "'");

//$res = mysql_fetch_array($z);
while($re = mysql_fetch_array($z)){
?>

<!-- !-->
    <div class="col-xs-3" style="border-bottom:1px solid #e8e8e8;margin: 10px 0px;border-radius: 10px;">
    <div class="box">
        <img src="/pages/services/shop/modules/editor/modules/uploads/<? print $re["img"]; ?>" width="250px" height="300px">
    </div>
    <div class="box" style="text-align:center;min-height:50px;">
    <a href="/shop/<?print $_GET['view']."/".$re["id"];?>">
        <b>
            <?
            if((!empty($re['width']) && !empty($re['height'])) || ($re['width'] != 0) && ($re['height'] != 0))
                print $re["name"]." ".$re['height']."x".$re['width']." см.";
            else if(!empty($re['height']) && $re['height'] != 0)
                print $re["name"]." (".$re['height']."см.)";
            else
                print $re["name"];

            ?>
        </b>
    </a>
    </div>
    <div class="box center-xs" style="margin-top:5px;min-height:100px">
        <?
        $string = substr($re["description"], 0, 250);
        $string = rtrim($string, "!,.-");
        $string = substr($string, 0, strrpos($string, ' '));
	        echo $string."… ";
    ?>
    </div>
    <div class="box" style="text-align: center;margin-bottom:10px;">
        <div class="row middle-xs">
            <div class="col-xs">
                <div class="box start-xs">
                    <? print "Цена: <b>" . $re["price"] . " </b>грн"; ?>
                </div>
            </div>
            <div class="col-xs">
                <div class="box end-xs">
                    <a href="#" >
                        <a href="/shop/<?print $_GET['view']."/".$re["id"];?>" class="btn btn-large btn-primary ">Подробнее</a>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- !-->

<?}?>