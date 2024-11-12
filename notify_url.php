<?php
require './Mao/common.php';
require_once("./api/epay.config.php");
require_once("lib/epay_notify.class.php");
$alipay_config["partner"] = $mao['yzf_id'];
$alipay_config["key"] = $mao['yzf_key'];
$alipay_config["sign_type"]    = strtoupper('MD5');

//字符编码格式 目前支持 gbk 或 utf-8
$alipay_config['input_charset']= strtolower('utf-8');
$alipay_config["apiurl"]= $mao['yzf_url'];
$alipayNotify = new AlipayNotify($alipay_config);
$verify_result = $alipayNotify->verifyNotify();
if($verify_result) {
	$out_trade_no = $_GET['out_trade_no'];
	$trade_no = $_GET['trade_no'];
	$trade_status = $_GET['trade_status'];
	$type = $_GET['type'];
    $shop = $DB->get_row("SELECT * FROM mao_dindan WHERE M_id='{$mao['id']}' and ddh='{$out_trade_no}' limit 1");
    $cha_1 = $DB->get_row("select * from mao_shop where M_id='{$mao['id']}' and id='{$shop['M_sp']}' limit 1");

	if(!$shop){
        sysmsg('订单号不存在.请返回重新发起支付！<a href="/index.php">返回</a>');
	}elseif($shop['zt'] == 0 || $shop['zt'] == 2 || $shop['zt'] == 3){
        echo 'success';

	}elseif($cha_1['kucun'] < 1){
        sysmsg('商品库存不足,请联系客服解决！<a href="/index.php">返回</a>');
    }elseif($shop['zt'] == 1){
        $js_1 = ($cha_1['kucun'] - $shop['sl']);
        $js_2 = ($cha_1['xiaoliang'] + $shop['sl']);
        $DB->query("update mao_dindan set zt='0' where M_id='{$mao['id']}' and id='{$shop['id']}'");
        $DB->query("update mao_shop set kucun='{$js_1}',xiaoliang='{$js_2}' where M_id='{$mao['id']}' and id='{$cha_1['id']}'");

        if($mao['dx_1'] == 0){
            $js_1 = ($mao['price'] - 0.01);
            if($mao['price'] >= 0.01 || $mao['sj'] != "" || $mao['sj'] != null){
                $msg = dx("{$mao['sj']}","3");
                if($msg == "0"){
                    $DB->query("update mao_data set price='{$js_1}' where id='{$mao['id']}'");
                }
            }
        }

        if($mao['yzf_type'] == 1){
            $js_3 = ($mao['price'] + $shop['price']);
            $DB->query("update mao_data set price='{$js_3}' where id='{$mao['id']}'");
        }

        echo 'success';
	}else{
        sysmsg('订单出错！<a href="/index.php">返回</a>');
	}
}else{
	sysmsg('验证失败！<a href="/index.php">返回</a>');
}
?>