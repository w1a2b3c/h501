<?php
require './Mao/common.php';
$id= isset($_GET['id']) ? $_GET['id'] : 0;
$cha_1 = $DB->get_row("select * from mao_shop where M_id='{$mao['id']}' and id='{$id}' limit 1");
if($cha_1['type'] == 1){
    $bt = "天猫优选";
}elseif ($cha_1['type'] == 2){
    $bt = "超值捡漏";
}elseif ($cha_1['type'] == 3){
    $bt = "人气销量";
}
if(!$cha_1){
    sysmsg("商品不存在！");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="bing-analysis-id" content="381g1d1l3c1d2z31">
    <meta charset="utf-8">
    <title><?php echo  '商品详情-'. $mao['title']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
   <link rel="stylesheet" href="/Mao_Public/css/bui.css">
    <script src="/Mao_Public/js/layer.js"></script>
    <script src="/Mao_Public/js/Mao.js"></script>
    <script src="/Mao_Public/js/zepto.js"></script>
    <script src="/Mao_Public/js/bui.js"></script>
    
    <script src="/Mao_Public/js/jquery-2.1.1.min.js"></script>
    <style>
        .bui-list-pic .bui-pic img,
        .bui-list-photo .bui-thumbnail img {
            width: 100%;
            height: 175px;
        }

        hr {
            background: #f3f5f8;
            border: 0;
            padding: 0;
            margin: 0;
            display: block;
            height: 1px;
            width: 100%;
        }

        .bui-slide-main img {
            width: 100% !important;
            height: 402px !important;
            max-width: 400px !important;
        }

        #slide .bui-slide-main ul li {
            height: 402px !important;
        }

        #slide {
            height: 402px !important;
        }

        .bui-dialog .bui-dialog-foot .blue,
        .bui-dialog .bui-dialog-foot .info {
            color: #fff;
            background-color: #ff0057;
        }

        .bui-dialog .bui-dialog-foot [class*=bui-btn] {
            border: none;
        }

        .mask_content {
            position: fixed;
            left: 0;
            width: 100%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10000;
            width: 86%;
            border-radius: 12px;
            padding: 30px 20px;
            text-align: center;
            color: #333;
            display: none;
        }

        .mask_content_info p {
            color: #999;
            margin: 10px 0;
        }

        #mask_oneself {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: #333;
            opacity: 0.3;
            z-index: 9999;
            display: none;
        }

        .mask_content_info {
            position: relative;
        }

        .head_title_content {
            position: absolute;
            top: -70px;
            left: 0;
            width: 100%;
        }

        .head_title_kf {
            background-image: url(img/order-bg.34082824.png);
            background-size: 100% 100%;
            background-repeat: no-repeat;
            width: 240px;
            height: 60px;
            margin: 0 auto;
        }

        .head_title_kf p {
            text-align: center;
            line-height: 56px;
            color: #fff;
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

        .bui-rating .bui-rating-cell-half,
        .bui-rating .bui-rating-cell-full {
            color: #ff0057 !important;
        }

        [class*=bui-btn] .bui-thumbnail {
            width: 1.2rem;
            height: 1.2rem;
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
/*.span1{*/
/*    padding-left: 60px;*/
/*}*/

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
    font-size: 12px
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
<div class="bui-page">
        <header class="bui-bar" style="background-color: #fff;">
            <div class="bui-bar-left">
                <a class="bui-btn btn-back" onclick="bui.back();"><i class="icon-back" style="color: #000;"></i></a>
            </div>
            <div class="bui-bar-main"></div>
            <div class="">
                <div style="display:flex;padding-right:20px;">
                    <a href="/index.php">
                        <i class="icon" style="color: #ff0057;font-size:20px;"></i>
                    </a>
                    <a onclick="fx()" style="margin-left:10px;">
                        <i class="icon" style="color: #000;font-size:20px;"></i>
                    </a>
                </div>

            </div>
        </header>
        <main>
            <div id="slide" class="bui-slide">
                <div class="bui-slide-main">
                    <ul>
                        <li>
                            <img src="<?php echo $cha_1['img']?>">
                        </li>
                    </ul>
                </div>
            </div>
            <div style="padding: 15px;width: 100%;">
                <div style="display:inline;float:left;">
                    <font style="color: #fb0247;font-weight: bolder;">￥<font style="font-size:20px"><?php echo $cha_1['price']?></font>
                    </font>
                </div>
                <div style="display:inline;float:right;">
                    <font style="color: #999;font-size: 10px;">已售<?php echo $cha_1['xiaoliang']?></font>
                </div>
            </div>
            <p style="margin-left: 15px;margin-top: 20px;font-size: 14px;font-weight: bolder;color: black;"><?php echo $cha_1['name']?></p>
            <hr>
            <div style="margin:20px;display:flex;align-items: center;">
                <p style="font-size:16px;color:#333;margin:0;">保障</p>
                <div style="display:flex;align-items: center;margin-left: 15px;font-size:14px;">
                    <div
                        style="background-color:#FCDCCD;display:flex;align-items: center;padding:1px 3px;border-radius:2px;">
                        <img src="/upload/baozhang.png" width="18" alt="">
                        <span style="color:#D5754f;">安心购</span>
                    </div>
                    <span style="margin-left:5px;">品质保障 · 售后无忧 · </span>
                </div>
            </div>

            <hr>
            <div style="margin:20px">
                <p style="margin:0px">
                    <font style="font-size:16px;color:#333;">物流</font>
                    <font style="color: #666;margin-left: 16px;font-size: 14px;"></font>
                </p>
            </div>
            <hr>
            <!--<ul class="bui-list" id="commentGo">-->
            <!--    <li class="bui-btn bui-box">-->
            <!--        <div class="span1">评价(0)</div>-->
            <!--        <div class="item-text">查看全部</div>-->
            <!--        <i class="icon-listright"></i>-->
            <!--    </li>-->
            <!--    <ul class="bui-list status-lists">-->
            <!--        <li class="bui-btn bui-box">-->
            <!--            <div class="icon status-pic">-->
            <!--                <img src="" alt="">-->
            <!--            </div>-->
            <!--            <div class="span1">-->
            <!--                <h3 class="item-title status-title"></h3>-->
            <!--                <p class="details-content"></p>-->
            <!--            </div>-->
            <!--        </li>-->
            <!--    </ul>-->
            <!--    <hr>-->
            <!--</ul>-->
            
                        <ul class="bui-list bui-list-thumbnail">
                <li class="bui-btn bui-box">
                    <div class="bui-thumbnail"><img src="/upload/20240203041249525.jpg" alt=""></div>
                    <div class="span1">
                        <h3 class="item-title" style="display:flex;align-items: center;justify-content: space-between;
font-weight: bolder;font-size:.3rem;color:#333;margin-bottom: 2px;overflow: hidden;">
                            <span>抖音小店</span>
                            <a href="/index.php" style="padding:6px 8px;background-color:#ff0057;font-size:12px;color:#fff;
                        font-weight:normal;border-radius:2px;margin-left:4px;
                        ">进店逛逛</a>
                        </h3>
                        <div class="item-text" style="display:flex;justify-content: space-between">
                            <div style="color: #ff0057;font-size:13px;float:left">5.0<span class="dj">高</span>
                            <div id="rating" class="bui-rating" style="float:left"></div>
                            </div>
                            
                            <p style="color:#666;font-size:12px;padding:2px;">已售9999万</p>
                        </div>
                        <div class="icon_content">
                            <div class="icon_item"><img src="/upload//zijin.png"> <span>已缴纳保证金</span> </div>
                            <div class="icon_item"><img src="/upload//zizhi.png"> <span>商家资质</span> </div>
                        </div>
                    </div>
                </li>
            </ul>
            
            
            
            
            <hr style="height: 10px;">
            <p style="margin: 10px;font-size: 15px;font-weight: bolder;color: black;">商品详细</p>
            <div style="padding: 10px; margin-bottom: 10px;">
                <table class="bui-table">
                    <tbody>
                        <tr>
                            <th style="width: 25%;background-color: #f2f2f2;">
                              优质商品</th>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
              <div class="fui-cell-group">
                <div class="fui-cell">
                    <div class="fui-cell-info" style="border-left: 5px solid #00beda;padding-left: 5px;">商品详情</div>
                </div>
                <hr>
                <div class="content-block content-images" style="margin: 0.4rem 0.4rem;">
                    <?php
                    if($cha_1['xq']  == "" || $cha_1['xq'] == null){
                        echo '<p>该商品未设置详情内容~</p>';
                    }else{
                        echo $cha_1['xq'];
                    }
                    ?>              
            </div>
        </main>
       
        <footer>
            <ul id="tabFootNav" class="bui-nav">

                <li style="display:flex;width:30%;text-align:center;padding:10px 0;">
                    <div id="showMsg" style="width:50%;">
                        <img src="/Mao_Public/img/kefu_icon.png" width="20" alt="">
                        <div class="span1" style="font-size:14px">客服</div>
                    </div>
                    <div style="width:50%;" id="shop_stroe">
                        <img src="/Mao_Public/img/stroe.png" width="20" alt="">
                        <div class="span1" style="font-size:14px">进店</div>
                    </div>
                </li>

                <li id="classifyGo" class="bui-btn bui-box-vertical">
                    <div id="addShopCart" class="bui-btn"
                        style="background-color:#ffc7da!important;color: #f31818;margin-top: -3px;">加入购物车</div>
                </li>
                <li class="bui-btn bui-box-vertical">
                    <div id="buyGoodsGo" class="bui-btn"
                        style="background-color:#ff0057!important;color: #fff; margin-right: 10px;margin-top: -3px;">
                     <div class="fui-navbar  " style="display: block;">
                        <?php
        if($cha_1['kucun'] <= 0){
            echo '<a class="nav-item btn buybtn" style="background: #D1D1D1;">库存不足</a>';
        }elseif($cha_1['zt'] != 0){
            echo '<a class="nav-item btn buybtn" style="background: #D1D1D1;">已下架</a>';
        }else{
            echo '<a class="nav-item btn buybtn jb" data-type="2" onclick="create()">立刻购买</a>';
        }
        ?>
                    </div>
                    
                        </div>
                </li>
            </ul>
        </footer>
    </div>
    
    <!-- 分享弹出框	 -->
    <div id="dialogFull" class="bui-dialog" style="display: none;width: 86%;height: 560px;margin: auto;">
        <div class="bui-dialog-main">
            <img id="imgid" src="" width="" height="">
        </div>
        <div class="bui-dialog-foot">
            <div id="text" style="margin-left: 15px;margin-top: 5px;font-size: 14px;font-weight: bolder;color: black;">
            </div>
            <p style="border:none;text-align:center;">长按保存二维码</p>
            <div class="bui-box">
                <div class="span1" style="background-color: #ff0057;">
                    <div class="bui-btn blue" style="background-color: #ff0057;color:#fff;border:none;">确定</div>
                </div>
            </div>
        </div>
    </div>
<b id="qq"><?php echo $mao['qq']?></b>
<b id="wx"><?php echo $mao['wx']?></b>
<script type="text/javascript">
            function create(){
                var loading = layer.open({
                    type: 2
                    ,content: '加载中'
                    ,shade: 'background-color: rgba(0,0,0,.2)'
                    ,shadeClose:false
                });
                $.ajax({
                    url: '../api/api.php',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        mod: "create",
                        id: "<?php echo $cha_1['id']?>",
                        num: 1,
                        order_img: $('#order_img').attr('src')
                    },
                    success: function (a) {
                        layer.close(loading);
                        if (a.code == 0) {
                            window.location.href="/repair.php?id="+a.ddh;
                        } else {
                            layer.open({
                                content: a.msg
                                ,skin: 'msg'
                                ,time: 2
                            });
                        }
                    },
                    error: function() {
                        layer.close(loading);
                        layer.open({
                            content: '~连接服务器失败！'
                            ,skin: 'msg'
                            ,time: 2
                        });
                    }
                });
            }
        </script>
    
    <script type="text/javascript">

    function closebtn(){
        layer.closeAll();
    }
    // 
    // function add(){
    //     $('.num').val(parseInt($('.num').val())+1);
    // }
    // function minus() {
    //     if ($('.num').val() > 1) {
    //         $('.num').val(parseInt($('.num').val()) - 1);
    //     }
    // }
</script>
    
    
    <script>
        window.uiRating = bui.rating({
            id: "#rating",
            value: 5
        });

        // 展示
        var uiRating3 = bui.rating({
            id: "#rating3",
            disabled: true,
            value: 4
        });
    </script><!--!‭‫‬‫‬‎‫‬‫‫‭‭‭‬‪‫‬‫‬‏‏‭‪‫-->
    

    <script>
        var fx;
        var kf;
        var sortClick;
        var searchGoods;


        $('#showMsg').click(function () {
            function Id_(content){
                return document.getElementById(content)
            }

           alert('客服QQ:'+ Id_("qq").innerText+ '\n' + '客服微信:'+Id_("wx").innerText)

        })

        $('#mask_oneself').click(function () {
            $("#mask_oneself").css('display', 'none');
            $("#mask_content").css('display', 'none');
        })

        $("#shop_stroe").click(function () {
            window.location.href = "/index.php"
        })


        bui.ready(function () {
            $("#commentGo").on("click", function (e) {
                var gid = "6997";
                bui.load({ url: "/index/index/comment?gid=" + gid });
            })

            var uiDialogFull = bui.dialog({
                id: "#dialogFull",
                position: "top",
                fullscreen: true,
                useBox: true,
                buttons: []
            });
            kf = function () {
                var uiLoading = bui.loading({
                    appendTo: ".bui-page",
                    width: 40,
                    height: 40,
                    callback: function (argument) {
                        console.log("clickloading")
                    }
                });
                uiLoading.show();


                $.ajax({
                    url: "/index/index/kf",
                    data: {
                        url: window.location.href,
                    },
                    type: "post",
                    dataType: "json",
                    success: function (data) {
                        uiLoading.stop();
                        if (data.status == 1) {
                            $("#imgid").attr("src", data.data.image);
                            $("#imgid").attr("width", "320px");
                            $("#imgid").attr("height", "450px");
                            $("#text").html("<p style=\"text-align: center;\"> 客服手机号：18988889525 同微信 </p>");
                            uiDialogFull.open();
                        } else {
                            bui.alert(data.msg);
                        }
                    },
                    error: function (data) {
                        uiLoading.stop();
                    }
                });
            }
            fx = function () {
                var uiLoading = bui.loading({
                    appendTo: ".bui-page",
                    width: 40,
                    height: 40,
                    callback: function (argument) {
                        console.log("clickloading")
                    }
                });
                uiLoading.show();
                $.ajax({
                    url: "/index/index/getQrcode",
                    data: {
                        url: window.location.href,
                        name: "测试",
                        price: "999.00",
                        cover: "/public/uploads/20230111/5543482d91fac0b87553091759fb4e82.jpg"
                    },
                    type: "post",
                    dataType: "json",
                    success: function (data) {
                        uiLoading.stop();
                        if (data.status == 1) {
                            $("#imgid").attr("width", "320px");
                            $("#imgid").attr("height", "500px");
                            $("#imgid").attr("src", "data:image/png;base64," + data.image)
                            uiDialogFull.open();
                        } else {
                            bui.alert(data.msg);
                        }
                    },
                    error: function (data) {
                        uiLoading.stop();
                    }
                });
                /*   var url=window.location.href;
                  copyText(url);
              
                  function copyText(text) {
                      var oInput = document.createElement('input');
                      oInput.value = text;
                      document.body.appendChild(oInput);
                      oInput.select(); // 选择对象
                      document.execCommand("Copy"); // 执行浏览器复制命令
                      oInput.className = 'oInput';
                      oInput.style.display='none';
                      bui.alert("已复制分享链接");
                  } */

            }



            var uiSlide = bui.slide({
                id: "#slide",
                height: 450,
                autoplay: true,
                autopage: true,
                //autoheight:true,
                zoom: true
            })

            $("#addShopCart").on("click", function (e) {
                var storage = bui.storage(0);
                var goodsId = "6997";
                storage.set("shopCart", { "gid": goodsId }, "gid");
                bui.hint({ content: "<i class='icon-check'></i><br />添加成功", position: "center", effect: "fadeInDown" });
            });

            // $("#buyGoodsGo").on("click", function (e) {
            //     var gid = ["6997"];
            //     bui.load({ url: "/index/index/buyGoods", param: { gid: JSON.stringify(gid) } });
            // })
        })


    </script>
    <script>
        function goPAGE() {
            if ((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {
                /*window.location.href="你的手机版地址";*/
            }
            else {
                /*window.location.href="你的电脑版地址";    */
                // window.location.href="isPc.html";
                document.getElementsByTagName("body")[0].style.width = '414px';
                document.getElementsByTagName("body")[0].style.margin = '0 auto';
                document.getElementsByTagName("footer")[0].style.width = '414px';
            }
        }
        goPAGE();
    </script>
</body>

</html>