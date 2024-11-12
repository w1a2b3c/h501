<?php
if(!file_exists('./install/install.lock')) exit('<script>location="./install";</script>');
require './Mao/common.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <title><?php echo $mao['title']?></title>
    <link rel="stylesheet" type="text/css" href="/Mao_Public/css/Mao.min.css">
    <link rel="stylesheet" type="text/css" href="/Mao_Public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/Mao_Public/css/Mao.diy.css">
    <link rel="stylesheet" type="text/css" href="/Mao_Public/css/iconfont.css">
    <script src="/Mao_Public/js/jquery-2.1.1.min.js"></script>
    <script src="/Mao_Public/layer/layer.js"></script>
    <script src="/Mao_Public/js/Mao.js"></script>
    <link rel="stylesheet" type="text/css" href="/Mao_Public/css/index.css">
    <style>
        .bui-list-pic .bui-pic img,
        .bui-list-photo .bui-thumbnail img {
            width: 100%;
            height: 175px;
        }

        .bui-nav>.active {
            color: #333;
        }

        .bui-nav>[class*=bui-btn].active:after {
            background: #333;
        }

        [class*=bui-btn] .bui-thumbnail {
            width: 1.2rem;
        }

        .bui-rating .bui-rating-cell {
            font-size: .2rem;
        }

        .bui-rating .bui-rating-cell-half,
        .bui-rating .bui-rating-cell-full {
            color: #ff0057 !important;
        }

        .icon_content {
            display: flex;
            align-items: center;
            font-size: 12px;
            color: #666;
        }

        .icon_item {
            display: flex;
            align-items: center;
        }

        .icon_item img {
            width: 18px;
            height: 18px;
            margin-right: 1px;
        }

        .icon_item:last-child {
            margin-left: 10px;
        }

        .bui-rating .bui-rating-cell {
            font-size: .16rem;
        }
        .dj{
            background: rgb(254,244,243);
            color: #ff0057;
            padding: 4px;
            font-size: 6px;
        }
        .tj{
    background: #fff;
    font-weight:500;
     padding: 5px;
}
.tj div{
    width: fit-content;
    border-left: 5px solid red; 
   padding-left: 3px;
}
.tx{
    position: relative;
    z-index: 10;
    overflow: hidden;
    width:50px;
    height:50px;
    float: left;
    border-radius: 10px;
}
.span1{
    padding-left: 60px;
}

.bui-rating .bui-rating-cell {
    position: relative;
    font-family: "icon";
    -webkit-text-stroke-width: 0.1px;
    -webkit-font-smoothing: antialiased;
    margin: 0 .05rem;
    display: inline-block;
    -webkit-appearance: none;
    background-color: transparent;
    border: 0;
    outline: 0;
    background-size: 100% auto;
    color: #aaa;
    font-size: .48rem
}

.bui-rating .bui-rating-cell:before {
    display: inline-block;
    content: "\e62a";
    line-height: 1;
    border-radius: 0
}

.bui-rating .bui-rating-cell:checked {
    color: #fc3
}

.bui-rating .bui-rating-cell:checked:before {
    display: inline-block;
    content: "\e629";
    line-height: 1;
    border-radius: 0
}

.bui-rating .bui-rating-cell .bui-rating-cell-full {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2;
    overflow: hidden
}

.bui-rating .bui-rating-cell-half,.bui-rating .bui-rating-cell-full {
    -webkit-appearance: none;
    background-color: transparent;
    color: #fc3
}

.bui-rating .bui-rating-cell-half:before,.bui-rating .bui-rating-cell-full:before {
    content: "\e629";
    line-height: 1;
    border-radius: 0
}

.bui-rating .bui-rating-cell-half:before {
    content: "\e601"
}

.bui-rating.mini .bui-rating-cell {
    font-size: .2rem
}

.bui-rating.small .bui-rating-cell {
    font-size: .36rem
}

.bui-rating.large .bui-rating-cell {
    font-size: .6rem
}

.bui-rating.xlarge .bui-rating-cell {
    font-size: .76rem
}

    </style>
</head>
<body>
<div class="fui-page-group">
    <div class="fui-page  fui-page-current " style="top: 0; background-color: #fafafa;">
        <!--<<div class="fui-header jb">
            <div class="fui-header-left"></div>
            <div class="title"><?php echo $mao['title']?></div>
            <div class="fui-header-right"></div>
        </div>-->
        <div class="fui-content navbar" style="background-color: #f3f3f3; padding-bottom: 0;">
              <div class="fui-cell-group">
              
        <div class="fui-notice" style="background: #ffffff; border-color: ; margin-bottom: 0px;" data-speed="4">
                                <ul class="bui-list bui-list-thumbnail">
                <li class="bui-btn bui-box">
                    <div class="tx"><img width="100%" height="100%" src="/upload/20240203041249525.jpg" alt=""></div>
                    <div class="span1">
                        <h3 class="item-title" style="font-weight: bolder;font-size:14px;color:#333;margin-bottom: 0.1rem;">抖音小店</h3>
                        <div class="item-text" style="display:flex;justify-content: space-between">
                            <div style="color: #ff0057;font-size:13px;float:left">5.0<span class="dj">高</span>
                            <div id="rating" class="bui-rating" style="float:left" value="5"><div class="bui-rating-cell bui-rating-cell-full"></div><div class="bui-rating-cell bui-rating-cell-full"></div><div class="bui-rating-cell bui-rating-cell-full"></div><div class="bui-rating-cell bui-rating-cell-full"></div><div class="bui-rating-cell bui-rating-cell-full"></div></div>
                            </div>
                            
                            <p style="color:#666;font-size:12px;padding:2px;">已售9999万</p>
                        </div>
                        <div class="icon_content">
                            <div class="icon_item"><img src="/upload/zijin.png"> <span>已缴纳保证金</span> </div>
                            <div class="icon_item"><img src="/upload/zizhi.png"> <span>商家资质</span> </div>
                        </div>
                    </div>
                </li>
            </ul>
            </div>
      
         
         
               
                <!--<div class="fui-icon-group noborder col-4 circle" style="background: #ffffff">
                    <a class="fui-icon-col external" href="list.php?mod=1">
                        <div class="icon"><img style="border-radius: 0" src="/Mao_Public/img/dx.png"></div>
                        <div class="text" style="color: #666666;">天猫优选</div>
                    </a>
                    <a class="fui-icon-col external" href="list.php?mod=2">
                        <div class="icon"><img style="border-radius: 0" src="/Mao_Public/img/yd.png"></div>
                        <div class="text" style="color: #666666;">超值捡漏</div>
                    </a>
                    <a class="fui-icon-col external" href="list.php?mod=3">
                        <div class="icon"><img style="border-radius: 0" src="/Mao_Public/img/lt.png"></div>
                        <div class="text" style="color: #666666;">人气销量</div>
                    </a>
                    <a class="fui-icon-col external" href="list.php?mod=4">
                        <div class="icon"><img style="border-radius: 0" src="/Mao_Public/img/tj.png"></div>
                        <div class="text" style="color: #666666;">商家推荐</div>
                    </a>
                </div>
            </div>-->
            <?php
            $tj_Number = $DB->count("SELECT count(*) from mao_shop WHERE M_id='{$mao['id']}' and tj='0'");
            if($tj_Number > 0){
                ?>


<!--<div id="lazyComponent12" class="lazy-component lazy-component__image" style="margin:0px;padding:0px;border:0px;font-family:-apple-system, BlinkMacSystemFont, &quot;font-size:16px;vertical-align:initial;color:#333333;background-color:#CEE6FD;">
	<div class="cap-title cap-title--normal" style="margin:0px;padding:10px;border:0px;font-style:inherit;font-weight:inherit;font-family:inherit;vertical-align:initial;background-color:#F8F8F8;">
		<h2 class="cap-title__main" style="font-style:inherit;font-weight:inherit;font-family:inherit;font-size:18px;vertical-align:initial;">
			热销 ◆ 店主推荐
		</h2>
	

             
   <div class="fui-cell-group">
               
                    <div class="fui-goods-group block three" style="background: ;">
                        <?php
                        $rs = $DB->query("SELECT * FROM mao_shop WHERE M_id='{$mao['id']}' and (tj='0' && zt='0') order by id desc limit 2");
                        while($rows = $DB->fetch($rs)){
                            if($rows['type'] == 1){
                                $type = "天猫优选";
                            }elseif ($rows['type'] == 2){
                                $type = "超值捡漏";
                            }elseif ($rows['type'] == 3){
                                $type = "人气销量";
                            }
                            ?>
                            <a class="fui-goods-item" style="position: relative;width:100%" href="/goods.php?id=<?php echo $rows['id']?>">
                                <div class="imagezdy triangle" data-text="推荐" data-lazyloaded="true" style="background-image: url('<?php echo $rows['img']?>');"></div>
                                <div class="detail">
                                    <div class="nametj" style="color: #262626;">
                                        <?php echo $rows['name']?>
                                    </div>
                                    <div class="price">
                                        <span class="text" style="color: #ed2822;">
                                            <p class="minprice">¥ <?php echo $rows['price']?></p>
                                        </span>
                                        <?php
                                        if($rows['yf_price'] == "0.00"){
                                            echo '<span class="buy buybtn-3" style="background-color: #01a1ff;margin-right: 5px;">邮</span>';
                                        }
                                        ?>
                                        <span class="buy buybtn-3" style="background-color: #fe5455;"><i class="icon icon-cartfill"></i></span>
                                    </div>
                                </div>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
</div>

</div>-->

                <?php
            }
            ?>
            <div class="fui-cell-group">
                <div class="fui-cell">
                    <div class="fui-cell-info" style="border-left: 5px solid #ef4f4f;padding-left: 5px;">
                        最新商品
                        <a style="float:right" href="list.php">更多</a>
                    </div>
                </div>
                <hr>
                <div class="fui-goods-group block three" style="background: ;">
                    <?php
                    $rs = $DB->query("SELECT * FROM mao_shop WHERE M_id='{$mao['id']}' and zt='0' order by id desc limit 6");
                    while($rows = $DB->fetch($rs)){
                        if($rows['type'] == 1){
                            $type = "天猫优选";
                        }elseif ($rows['type'] == 2){
                            $type = "超值捡漏";
                        }elseif ($rows['type'] == 3){
                            $type = "人气销量";
                        }
                        ?>
                        <a class="fui-goods-item" style="position: relative;" href="/goods.php?id=<?php echo $rows['id']?>">
                            <div class="image <?php if($rows['tj']==0){echo'triangle';}?>" data-text="推荐" style="background-image: url('<?php echo $rows['img']?>');"></div>
                            <div class="detail">
                                <div class="name" style="color: #262626;">
                                     <?php echo $rows['name']?>
                                </div>
                                <div class="price">
									<span class="text" style="color: #ed2822;">
	                                    <p class="minprice">¥ <?php echo $rows['price']?></p>
	                                </span>
                                    <?php
                                    if($rows['yf_price'] == "0.00"){
                                        echo '<span class="buy buybtn-3" style="background-color: #01a1ff;margin-right: 5px;">邮</span>';
                                    }
                                    ?>
                                    <span class="buy buybtn-3" style="background-color: #fe5455;"><i class="icon icon-cartfill"></i></span>
                                </div>
                            </div>
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>


        </div>
    </div>
    <div class="fui-navbar">
        <a href="index.php" class="external nav-item active">
            <span class="icon icon-home"></span>
            <span class="label">首页</span>
        </a>
        <a href="list.php" class="external nav-item ">
            <span class="icon icon-list"></span>
            <span class="label">全部商品</span>
        </a>
        <a onclick="kefu()" class="external nav-item ">
            <span class="icon icon-person2"></span>
            <span class="label">联系客服</span>
        </a>
        <a href="/user/index.php" class="external nav-item ">
            <span class="icon icon-daifukuan1"></span>
            <span class="label">订单查询</span>
        </a>
    </div>
</div>
<?php
if($mao['ym_id'] != "" || $mao['ym_id'] != null){
    ?>
    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? "https://" : "http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_<?php echo $mao['ym_id']?>'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s23.cnzz.com/z_stat.php%3Fid%3D<?php echo $mao['ym_id']?>' type='text/javascript'%3E%3C/script%3E"));</script>
    <?php
}
?>
</body>
</html>