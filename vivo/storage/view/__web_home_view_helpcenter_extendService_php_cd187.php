<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>vivo智能手机官方商城</title>
		<link rel="shortcut icon" href="https://swsdl.vivo.com.cn/vivoshop/web/dist/img/favicon_7761e1f.ico">
		<script>
			{
				{
					$sys["sys_count"]
				}
			}
			var Root = "http://127.0.0.1/vivo";
		</script>
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo/resource/hdjs/home/css/master.css" />
					<link rel="stylesheet" type="text/css" href="http://127.0.0.1/vivo/resource/hdjs/home/css/helpcenter.css" />
		
		<script src="http://127.0.0.1/vivo/resource/hdjs/home/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="http://127.0.0.1/vivo/resource/hdjs/home/js/master.js" type="text/javascript" charset="utf-8"></script>
			</head>

	<body>
		<div class="head-search">
			<div class="search-box">
				<form action="" method="get" class="searchForm">
					<input type="text" maxlength="20" placeholder="如:x6" name="searchKeywordStr" id="" value="" />
					<button type="submit">搜索</button>
				<input type='hidden' name='__TOKEN__' value='1e2995e7a1922b49ff721e9adf789c2d'/><input type='hidden' name='__TOKEN__' value='1e2995e7a1922b49ff721e9adf789c2d'/><input type='hidden' name='__TOKEN__' value='1e2995e7a1922b49ff721e9adf789c2d'/></form>
				<script>
					$(function() {
						$('.searchForm').submit(function() {
							var searchKeywordStr = $(this).find("input[name=searchKeywordStr]").val();
							location.href = "http://127.0.0.1/vivo/index.php?s=home/product/search" + "&searchKeywordStr=" + searchKeywordStr;
							return false;
						})
					})
				</script>
				<a href="" class="close"></a>
			</div>
		</div>
		<header class="header">
			<div class="wrapper">
				<nav>
					<a href="http://127.0.0.1/vivo/index.php?s=home/index/index" class="logoImg">
						<img src="http://127.0.0.1/vivo/resource/hdjs/home/other/master/logo.png" />
					</a>
					<ul class="nav">
													<li>
								<a href="http://127.0.0.1/vivo/index.php?s=home/product/phone&category_id=2" category_id="2">手机</a>
							</li>
													<li>
								<a href="http://127.0.0.1/vivo/index.php?s=home/product/phone&category_id=8" category_id="8">上衣</a>
							</li>
													<li>
								<a href="http://127.0.0.1/vivo/index.php?s=home/product/phone&category_id=19" category_id="19">配件</a>
							</li>
											</ul>
					<script>
						$(function() {
							$('.nav li a').each(function(k, v) {
								var This = $(this);
								var thisCategory_id = {
									{
										q('get.category_id', '0', 'intval')
									}
								}; //这是获取的当前分类的ID
								$.post("http://127.0.0.1/vivo/index.php?s=home/common/is_category", {
									"category_id": thisCategory_id
								}, function(res) {
									if(This.attr('category_id') == res) {
										This.css({
											"background": "#008cd6",
											"color": "#fff"
										});
									}
									//第一，获取当前页面的category_id

									//	                        //如果当前这个循环的category_id == 当前这个页面的category_id的话，就给他一个类
									//	                        if($(this).attr('category_id') == $thisCategory_id){
									//	                            $(this).css({"background":"#008cd6","color":"#fff"});
									//	                        }
								}, "json")
							})
						})
					</script>
					<div class="search-user">
						<ul class="u">
							<li class="search">
								<a href="">
									<b></b>
								</a>
							</li>
							<li class="user">
								<a href="http://127.0.0.1/vivo/index.php?s=home/my/index">
									<b></b>
								</a>
								<div class="user-menu">
									<h1 class="member-center">
                                <a href="http://127.0.0.1/vivo/index.php?s=home/my/information">
                                    <i></i>
                                    个人中心
                                </a>
                                
                                <span class="icon-angular"></span>
                            </h1>
									<h1 class="my-order">
                                <a href="http://127.0.0.1/vivo/index.php?s=home/my/order">
                                    <i style="background-position: -48px 0;"></i>
                                    我的订单
                                </a>
                            </h1>
																		<h1 class="logout">
                                    <a href="script:;">
                                        <i style="background-position: -100px 0;"></i>
                                        退出登录
                                    </a>
                                </h1>
																	</div>
								<script>
									$(function() {
										$(".member-center").hover(function() {
											$(this).find("i").css("background-position", "0px -45px");
										}, function() {
											$(this).find("i").css("background-position", "0px 0px");
										})

										$(".my-order").hover(function() {
											$(this).find("i").css("background-position", "-48px -45px");
										}, function() {
											$(this).find("i").css("background-position", "-48px 0px");
										})

										$(".logout").hover(function() {
											$(this).find("i").css("background-position", "-100px -45px");
										}, function() {
											$(this).find("i").css("background-position", "-100px 0px");
										})

										$('.logout a').click(function() {
											alertDiv("退出", "确定退出么", "退出", "取消", "error");
											$(".btn-blue").click(function() {
												$.post("http://127.0.0.1/vivo/index.php?s=home/common/out", {
													"a": 1
												}, function(res) {
													location.href = "http://127.0.0.1/vivo/index.php?s=home/index/index";
												}, "json")
											})

											return false;
										})

									})
								</script>
							</li>
							<li class="shopCar">
								<a href="http://127.0.0.1/vivo/index.php?s=home/shoppingcar/shoppingcar">
									<b id="end"></b>
									<span class="shopcart-num">0</span>
								</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--这里是子模板的内容start-->
		
	<div class="main">
		<div class="content">
			<div class="crumbs">
				您的位置是:
				<a href="http://127.0.0.1/vivo/index.php?s=home/index/index">首页</a>
				<b></b> 帮助中心<b></b>手机延保			</div>
		</div>
		<div class="content">
			<aside class="menu-bar">
				<dl class="menu">
					<dt class="menu-title buy-process"><i></i><span>购买流程</span></dt>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/alipay">支付宝支付</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/huabei">花呗分期</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/invoice">发票说明</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/coupon">优惠券说明</a>
					</dd>
					<dt class="menu-title send-mode"><i></i><span>配送方式</span></dt>
					<dd class="menu-item on">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/transport">配送方式</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/transportCost">配送费用</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/sign">签收须知</a>
					</dd>
					<dt class="menu-title service-support"><i></i><span>服务支持</span></dt>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/servicePromise">服务保证</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/afterService">售后服务</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/brokenScreen">碎屏宝</a>
					</dd>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/extendService">手机延保</a>
					</dd>
					<dt class="menu-title brand-service"><i></i><span>品牌服务</span></dt>
					<dd class="menu-item">
						<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/contactUs">联系我们</a>
					</dd>
				</dl>
			</aside>
			
	<article class="c">
		<!--c start -->
		<div class="c-title cl">
			<h1>手机延保</h1>
		</div>
		<div class="c-container">
			<img src="https://swsdl.vivo.com.cn/vivoshop/web/dist/img/help/extend-service_bbe41a7.png">
			<h2 class="h21">延保</h2>
			<ul>
				<li>在vivo手机产品原有保修期结束之次日起，延长主机半年的保修服务。</li>
				<li>vivo延保服务仅针对主机，不包含电池、耳机、充电器、数据线等附件或单独购买或赠送的配件产品。</li>
				<li>vivo延保服务自产品保修届满之日开始生效，具体有效期为半年。</li>
			</ul>
		</div>
	</article>

		</div>
<script type="text/javascript">
	$(function() {
		var on = "手机延保";
		$.each($('.menu-item'),function(k,v){
			console.log(on)
			if($(this).find("a").html() == on){
				$(this).css({"color":"#018ed6","background-color":"#def4ff"});
				$(this).find("a").css("color","inherit");
			}
		})
	})
</script>
	</div>

		<!--这里是子模板的内容end-->
		<footer>
			<div class="shop-agree">
				<div class="wrapper cl">
					<ul>
						<li>
							<a href="">
								<b class="b1"></b>
								<p>
									<span>0</span> 运费购手机
								</p>
							</a>
						</li>
						<li>
							<a href="">
								<b class="b2"></b>
								<p>
									<span>30</span> 天无理由退款
								</p>
							</a>
						</li>
						<li>
							<a href="">
								<b class="b3"></b>
								<p>
									电子发票
								</p>
							</a>
						</li>
						<li>
							<a href="">
								<b class="b4"></b>
								<p>
									<span>380</span> 余家售后服务中心
								</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="shop-help">
				<div class="wrapper">
					<dl>
						<dt>
                    <b class="b1"></b>
                    购买流程
                </dt>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/alipay" target="_blank">支付宝支付</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/invoice" target="_blank">发票说明</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/coupon" target="_blank">优惠券说明</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/huabei" target="_blank">花呗分期</a>
						</dd>
					</dl>
					<dl>
						<dt>
                    <b class="b2"></b>
                    配送方式
                </dt>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/transport" target="_blank">配送方式</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/transportCost" target="_blank">配送费用</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/sign" target="_blank">签收须知</a>
						</dd>
					</dl>
					<dl>
						<dt>
                    <b class="b3"></b>
                    服务支持
                </dt>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/servicePromise" target="_blank">服务保证</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/afterService" target="_blank">售后服务</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/brokenScreen" target="_blank">碎屏保</a>
						</dd>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/extendService" target="_blank">手机延保</a>
						</dd>
					</dl>
					<dl>
						<dt>
                    <b class="b4"></b>
                    品牌服务
                </dt>
						<dd>
							<a href="http://127.0.0.1/vivo/index.php?s=home/helpcenter/contactUs" target="_blank">联系我们</a>
						</dd>
					</dl>
					<dl>
						<dt>
                    <b class="b5"></b>
                    小V在线时段
                </dt>
						<dd>周一至周五 08:00-21:00</dd>
						<dd>周六、周日 09:00-18:00</dd>
						<dd class="online-service">
							<a href="http://wpa.qq.com/msgrd?v=3&uin=2218006427&site=qq&menu=yes" target="_blank">
								<img src="http://127.0.0.1/vivo/resource/hdjs/home/other/master/online-service.png" />
							</a>
						</dd>
					</dl>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="wrapper">
					<div class="sns-box">
						成为vivo粉丝:
						<a href="" class="a1"><b></b></a>
						<a href="" class="a2"><b></b></a>
						<a href="" class="a3"><b></b></a>
						<a href="" class="a4">
							<b></b>
							<div>
								<img src="http://127.0.0.1/vivo/resource/hdjs/home/other/master/qq.png" />
								<em></em>
							</div>
						</a>
					</div>
					<div class="copy-info">
						<a href="" class="footer-logo"></a>
						Copyright ©2011-2016 广东步步高电子工业有限公司 						<br /> 版权所有 保留一切权利粤粤ICP备05100288号 |
						<a href="http://www.miitbeian.gov.cn/">粤ICP备05100288号</a>
					</div>
				</div>
			</div>
		</footer>
		<div class="side-bar">
			<ul>

				<li>
					<a href="http://wpa.qq.com/msgrd?v=3&uin=2218006427&site=qq&menu=yes" class="service" target="_blank">
						<div>
							在线客服
						</div>
					</a>
				</li>
				<li>
					<a href="" class="qrcode">
						<div>
							<img src="http://127.0.0.1/vivo/resource/hdjs/home/other/master/qq.png" alt="" />
							<p>
								支付宝扫码<br />关注最新活动福利
							</p>
						</div>
					</a>
				</li>
				<li>
					<a href="" class="feedback">
						<div>
							意见反馈
						</div>
					</a>
				</li>
				<li>
					<a href="" class="backtop">
						<div>
							返回顶部
						</div>
					</a>
				</li>
			</ul>
		</div>
	</body>

</html>

<style type="text/css">
	.c .c-container {
		margin: 40px 70px 60px 80px;
		text-align: center
	}
	
	.c .c-container h2 {
		color: #353535;
		font-size: 30px
	}
	
	.c .c-container .h21 {
		margin: 40px 0 10px
	}
	
	.c .c-container .h22 {
		margin: 70px 0 10px
	}
	
	.c .c-container .h23 {
		margin: 45px 0 15px
	}
	
	.c .c-container p,
	.c .c-container li {
		text-align: left;
		color: #656565;
		font-size: 20px;
		line-height: 31px
	}
	
	.c .c-container strong {
		color: #008cd6
	}
	
	.c .c-container li {
		padding-left: 29px;
		background: 0 9px no-repeat url(https://swsdl.vivo.com.cn/vivoshop/web/dist/img/help/list-style-image_8338f68.png)
	}
</style>
