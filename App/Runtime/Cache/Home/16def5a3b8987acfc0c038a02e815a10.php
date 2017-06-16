<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="Generator" content="YONGDA v1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="Keywords" content="SMS EMS MMS 短消息群发 语音 阅读器 SMS,EMS,MMS,短消息群发语音合成信息阅读器 黑色 白色 滑盖"/>
    <meta name="Description" content=""/>

    <title>YONGDA商城 - Powered by YongDa</title>

    <link href="/Public/Home/css/style.css" rel="stylesheet" type="text/css"/>

</head>
<body style="cursor: auto;">

<div class="block clearfix" style="position: relative; height: 98px;">
    <a href="#" name="top"><img class="logo" src="/Public/Home/images/logo.gif"></a>

    <div id="topNav" class="clearfix">
        <div style="float: left;">
            <font id="ECS_MEMBERZONE">
                <div id="append_parent"></div>
                欢迎光临本店&nbsp;
                <?php if($_SESSION['user_id'] != ''): ?>&nbsp;<?php echo ($_SESSION['user_name']); ?>
                    <a href="<?php echo U('user/logout');?>">退出</a>
                    <?php else: ?>
                    <a href="<?php echo U('user/login');?>"> 登录</a>
                    <a href="<?php echo U('user/register');?>">注册</a><?php endif; ?>
            </font>
        </div>
        <div style="float: right;">
            <a href="<?php echo U('Cart/lst');?>">查看购物车</a>
            |
            <a href="<?php echo U('index/index');?>">选购中心</a>
            |
            <a href="#">标签云</a>
            |
            <a href="#">报价单</a>&nbsp;&nbsp;&nbsp;
            <?php echo ($nowwea); ?>
        </div>
    </div>
    <div id="mainNav" class="clearfix">
        <a <?php if($cat_id < 1): ?>class='cur'<?php endif; ?> href="<?php echo U('index/index');?>" >首页<span></span></a>
        <?php if(is_array($catedata)): foreach($catedata as $key=>$val): if($val['id'] == $cat_id): ?><a class="cur" href="<?php echo U('index/category',['cat_id'=>$val[id]]);?>"><?php echo ($val["cat_name"]); ?><span></span></a>
                <?php else: ?>
                <a href="<?php echo U('index/category',['cat_id'=>$val[id]]);?>"><?php echo ($val["cat_name"]); ?><span></span></a><?php endif; endforeach; endif; ?>
        <a href="#">优惠活动<span></span></a>
        <a href="#">留言板<span></span></a>
    </div>

</div>

<div class="header_bg">
    <div style="float: left; font-size: 14px; color:white; padding-left: 15px;">
    </div>

    <form id="searchForm" method="get" action="#">
        <input name="keywords" id="keyword" type="text"/>
        <input name="imageField" value=" " class="go"
               style="cursor: pointer; background: url('/Public/Home/images/sousuo.gif') no-repeat scroll 0% 0% transparent; width: 39px; height: 20px; border: medium none; float: left; margin-right: 15px; vertical-align: middle;"
               type="submit"/>

    </form>
</div>
<div class="blank5"></div>
<div class="header_bg_b">
    <div class="f_l" style="padding-left: 10px;">
        <img src="/Public/Home/images/biao6.gif"/>
        <?php echo ($iparea); ?>，现在下单(截至次日00:30已出库)，<b>明天上午(9-14点)</b>送达 <b>免运费火热进行中！</b>
    </div>
    <div class="f_r" style="padding-right: 10px;">
        <img style="vertical-align: middle;" src="/Public/Home/images/biao3.gif">
        <span class="cart" id="ECS_CARTINFO">
                        <a href="" title="查看购物车">您的购物车中有 <?php echo ($total["total_number"]); ?> 件商品，总计金额 ￥<?php echo ($total["total_price"]); ?> 元。</a></span>
        <a href="<?php echo U('Cart/lst');?>"><img style="vertical-align: middle;" src="/Public/Home/images/biao7.gif"></a>

    </div>
</div>


<div class="block block1">
    <div class="block box">
        <div class="blank"></div>
        <div id="ur_here">
            当前位置: <a href="#">首页</a> <code>&gt;</code> 用户中心
        </div>
    </div>
    <div class="blank"></div>

    <div class="block box">

        <div class="usBox clearfix">
            <div class="usBox_1 f_l">
                <div class="logtitle"></div>
                <form name="formLogin" action="" method="post">
                    <table align="left" border="0" cellpadding="3" cellspacing="5" width="100%">
                        <tbody>
                        <tr>
                            <td align="right" width="15%">用户名</td>
                            <td width="85%"><input name="user_name" size="25" class="inputBg" type="text"/></td>
                        </tr>
                        <tr>
                            <td align="right">密码</td>
                            <td>
                                <input name="user_pwd" size="15" class="inputBg" type="password"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><input value="1" name="remember" id="remember" type="checkbox"/>
                                <label for="remember">请保存我这次的登录信息。</label></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align="left">
                                <input name="submit" value="" class="us_Submit" type="submit"/>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="../../../../index.php" class="f3">密码问题找回密码</a>&nbsp;&nbsp;&nbsp;<a href="#" class="f3">注册邮件找回密码</a></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
                <div class="blank"></div>
            </div>
            <div class="usTxt">
                <div class="regtitle"></div>
                <div style="padding-left: 50px;">
                    <strong>如果您不是会员，请注册</strong> <br/>
                    <strong class="f4">友情提示：</strong><br/>
                    不注册为会员也可在本店购买商品<br/>
                    但注册之后您可以：<br/>
                    1. 保存您的个人资料<br/>
                    2. 收藏您关注的商品<br/>
                    3. 享受会员积分制度<br/>
                    4. 订阅本店商品信息 <br/>
                    <a href="#"><img src="/Public/Home/images/bnt_ur_reg.gif"></a>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="blank"></div>
<div class="block">
    <a href="#" target="_blank" title="YONGDA商城"><img alt="YONGDA商城" src="/Public/Home/images/di.jpg"></a>
    <div class="blank"></div>
</div>
<div class="block">
    <div class="box">
        <div class="helpTitBg" style="clear: both;">
            <dl>
                <dt><a href="#" title="新手上路 ">新手上路 </a></dt>
                <dd><a href="#" title="售后流程">售后流程</a></dd>
                <dd><a href="#" title="购物流程">购物流程</a></dd>
                <dd><a href="#" title="订购方式">订购方式</a></dd>
            </dl>
            <dl>
                <dt><a href="#" title="手机常识 ">手机常识 </a></dt>
                <dd><a href="#" title="如何分辨原装电池">如何分辨原装电池</a></dd>
                <dd><a href="#" title="如何分辨水货手机 ">如何分辨水货手机</a></dd>
                <dd><a href="#" title="如何享受全国联保">如何享受全国联保</a></dd>
            </dl>
            <dl>
                <dt><a href="#" title="配送与支付 ">配送与支付 </a></dt>
                <dd><a href="#" title="货到付款区域">货到付款区域</a></dd>
                <dd><a href="#" title="配送支付智能查询 ">配送支付智能查询</a></dd>
                <dd><a href="#" title="支付方式说明">支付方式说明</a></dd>
            </dl>
            <dl>
                <dt><a href="#" title="会员中心">会员中心</a></dt>
                <dd><a href="#" title="资金管理">资金管理</a></dd>
                <dd><a href="#" title="我的收藏">我的收藏</a></dd>
                <dd><a href="#" title="我的订单">我的订单</a></dd>
            </dl>
            <dl>
                <dt><a href="#" title="服务保证 ">服务保证 </a></dt>
                <dd><a href="#" title="退换货原则">退换货原则</a></dd>
                <dd><a href="#" title="售后服务保证 ">售后服务保证</a></dd>
                <dd><a href="#" title="产品质量保证 ">产品质量保证</a></dd>
            </dl>
            <dl>
                <dt><a href="#" title="联系我们 ">联系我们 </a></dt>
                <dd><a href="#" title="网站故障报告">网站故障报告</a></dd>
                <dd><a href="#" title="选机咨询 ">选机咨询</a></dd>
                <dd><a href="#" title="投诉与建议 ">投诉与建议</a></dd>
            </dl>
        </div>
    </div>


</div>
<div class="blank"></div>
<div id="bottomNav" class="box block">
    <div class="box_1">
        <div class="links clearfix">
            <a href="#" target="_blank" title="YONGDA商城"><img src="/Public/Home/images/category.htm" alt="YONGDA商城" border="0"></a>


            [<a href="#" target="_blank" title="">yongda商城</a>]
        </div>
    </div>
</div>
<div class="blank"></div>
<div id="bottomNav" class="box block">
    <div class="bNavList clearfix">
        <a href="#">免责条款</a>
        |
        <a href="#">隐私保护</a>
        |
        <a href="#">咨询热点</a>
        |
        <a href="#">联系我们</a>
        |
        <a href="#">公司简介</a>
        |
        <a href="#">批发方案</a>
        |
        <a href="#">配送方式</a>

    </div>
</div>

<div id="footer">
    <div class="text">
        © 2005-2012 YONGDA 版权所有，并保留所有权利。<br/>
    </div>
</div>
<div style="display: none; top: 200px;" id="compareBox" align="center">
    <ul id="compareList"></ul>
    <input value="" type="button"/>
</div>
</body>
</html>