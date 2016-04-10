<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>大连大学图书馆</title>
	<link rel="stylesheet" type="text/css" href="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/css/index.css">
	<script type="text/javascript" src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/js/index.js"></script>
	<!-- 百度地图API -->
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=iBUgAroTOcTe61Z982tEp36i"></script>
</head>
<body>
	<!-- 主页面开始 -->
	<div class="page" id="page-main">
		<!-- 网页头部 -->
		<div class="header">
			<!-- 左上角logo -->
			<a href="javascript:void(0)" class="logo">
				<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/logo.png" alt="logo">
			</a>
			<!-- 右上角菜单 -->
			<div class="menu">
				<a href="javascript:void(0)">馆藏书目检索</a>
				<span>|</span>
				<a href="javascript:void(0)">学校主页</a>
				<span>|</span>
				<a href="javascript:void(0)" class="qcode">PAD版
					<div class="tips">
						<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/qcode.png">
						<br>
						<span>扫描访问PAD版</span>
					</div>
				</a>
				<span>|</span>
				<a href="javascript:void(0)" class="qcode">手机版
					<div class="tips">
						<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/qcode.png">
						<br>
						<span>扫描访问手机版</span>
					</div>
				</a>
				<span>|</span>
				<a href="javascript:void(0)">我的图书馆</a>
			</div>
		</div>
		<!-- 搜索框 -->
		<div class="search">
			<div class="wrapper-span">
				<span>站内搜索</span>
				<span class="triangle"></span>
			</div>
			<div class="wrapper-input">
				<input type="text" id="keyword" placeholder="请输入搜索关键字">
				<input type="button" value="" id="btn-search">
				<ul id="search-tips">
				</ul>
				<div  id="clear-history">
					<span id="clear-history-btn">清空历史记录</span>
				</div>
			</div>	
		</div>
		<!-- 日历框 -->
		<div class="calendar">
			<a href="javascript:void(0)" class="calendar-icon"><!-- 日历活动 --></a>
			<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/calendarpic.jpg" class="calendar-pic">
			<ul class="calendar-week">
				<li>星期日<span>SUN</span></li>
				<li>星期一<span>MON</span></li>
				<li>星期二<span>TUE</span></li>
				<li>星期三<span>WEN</span></li>
				<li>星期四<span>THU</span></li>
				<li>星期五<span>FRI</span></li>
				<li>星期六<span>SAT</span></li>
			</ul>
			<ul class="calendar-date" id="calendar-date">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
		<!-- 弹出遮罩层 -->
		<div class="layer" id="layer">
			<div class="news-wrapper">
				<div class="close-wrapper"><span id="close">x</span></div>
				<ul class="item-box" id="newslist">
					<div class="connect">
						建立连接
					</div>
				</ul>
			</div>
		</div>
		<!-- 向下箭头 -->
		<div class="arrow" id="arrow"></div>
		<!-- 页面底部 -->
		<div class="footer">
			Copyright © 2001-2015 大连大学图书馆 All Rights Reserved.
		</div>
	</div>
	<!-- 主页面结束 -->
	
	<!-- 服务页开始 -->
	<div class="page" id="page-service">
		<!-- 页面标题 -->
		<div class="title-wrapper">
			<h1 class="title"><a href="<?php echo U('server/index');?>"  target="_blank">服务</a></h1>
		</div>
		<!-- 内容容器 -->
		<div class="content-wrapper">
			<!-- 容器左边 -->
			<div class="content-left">
				<!-- 导航按钮 -->
				<ul class="item" id="tab-notice">
					<li class="on-orange"><a href="#">讲座培训</a></li>
					<li><a href="#">投稿指南</a></li>
					<li><a href="#">文件下载</a></li>
				</ul>
				<div class="content-list-orange">
					<!-- 讲座培训动态新闻 -->
					<ul class="service-notice listitem">
						<li>
							<a href="#" class="dot brown">大连大学Springer培训讲座</a>
						</li>
						<li>
							<a href="#" class="dot brown">Springer 为您的科研事业插上腾飞的翅膀…</a>
						</li>
						<li>
							<a href="#" class="dot brown">SCI数据库讲座</a>
						</li>
						<li>
							<a href="#" class="dot brown">高校IEL数据库培训-2015下半年</a>
						</li>
						<li>
							<a href="#" class="dot brown">图书馆讲座通知</a>
						</li>
					</ul>
					<!-- 投稿指南动态新闻 -->
					<ul class="service-notice listitem" style="display: none;">
						<li>
							<a href="#" class="dot brown">《中文核心期刊要目总览》(2011年版)</a>
						</li>
						<li>
							<a href="#" class="dot brown">《中文社会科学引文索引》(CSSCI) 扩展版…</a>
						</li>
						<li>
							<a href="#" class="dot brown">《中文社会科学引文索引》(CSSCI) 来源期…</a>
						</li>
						<li>
							<a href="#" class="dot brown">国家批准出版物的查询与非法出版物的查验</a>
						</li>
						<li>
							<a href="#" class="dot brown">《中文社会科学引文索引》(CSSCI) 来源期…</a>
						</li>
					</ul>
					<!-- 文件下载动态新闻 -->
					<ul class="service-notice listitem" style="display: none;">
						<li>
							<a href="#" class="dot brown">大连大学图书馆电子培训室使用管理制度</a>
						</li>
						<li>
							<a href="#" class="dot brown">关于图书馆LED、发布机、网站等电子设备…</a>
						</li>
						<li>
							<a href="#" class="dot brown">联创自助打印复印客户端驱动下载</a>
						</li>
						<li>
							<a href="#" class="dot brown">大连大学图书馆报告厅使用管理制度</a>
						</li>
						<li>
							<a href="#" class="dot brown">资料室管理规则</a>
						</li>
					</ul>
				</div>
				<!-- 导航按钮 -->
				<ul class="item" id="tab-msg">
					<li class="on-blue"><a href="#">学科服务</a></li>
					<li><a href="#">文献传递</a></li>
					<li><a href="#">信息咨询</a></li>
				</ul>
				<div class="content-list-blue">
					<!-- 学科服务简介 -->
					<div class="service-msg listitem">
						<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/service.jpg">
						<p>中国高校人文社会科学文献中心是全国性的唯一的人文社科外文期刊文献保障体系。CASHL人文社科外文期刊目次数据库收录了11100种国外人文社会科学领域的重要期刊…<a href="#" class="details">[详细]</a></p>
					</div>
					<!-- 文献传递简介 -->
					<div class="service-msg listitem" style="display: none;">
						<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/service.jpg">
						<p>请点击<a href="" class="details">[详细]</a>查看具体内容</p>
					</div>
					<!-- 信息咨询简介 -->
					<div class="service-msg listitem" style="display: none;">
						<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/service.jpg">
						<p>暂无资料</a></p>
					</div>
				</div>
			</div>
			<!-- 容器右边 -->
			<div class="content-right">
				<!-- 导航图标 -->
				<ul class="service-icon">
					<li>
						<a href="#" class="icon1 brown">学位论文提交</a>
					</li>
					<li>
						<a href="#" class="icon2 brown">VPN服务</a>
					</li>
					<li>
						<a href="#" class="icon3 brown">研修室预约</a>
					</li>
					<li>
						<a href="#" class="icon4 brown">馆长信箱</a>
					</li>
					<li>
						<a href="#" class="icon5 brown">失物招领</a>
					</li>
					<li>
						<a href="#" class="icon6 brown">入馆指南</a>
					</li>
				</ul>
				<!-- 阅读推荐 -->
				<h3>
					<a href="#" class="recommend">阅读推荐</a>
					<a href="#" class="more">更多&gt;&gt;</a>
				</h3>
				<ul class="book-wrapper">
					<li>
						<a href="#" class="brown"><img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/book1.jpg">红高粱</a>
						<span>莫言作品</span>
					</li>
					<li>
						<a href class="brown"><img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/book2.png">平凡的世界</a>
						<span>路遥作品</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- 服务页结束 -->
	
	<!-- 概况页开始 -->
	<div class="page" id="page-survey">
		<!-- 页面标题 -->
		<div class="title-wrapper">
			<h1 class="title"><a href="javascript:void(0)">概况</a></h1>
		</div>
		<div class="content-wrapper">
			<!-- 左侧内容区 -->
			<div class="content-left">	
				<!-- 导航按钮 -->
				<ul class="item" id="tab-intro">
					<li class="on-orange"><a href="#">本馆介绍</a></li>
					<li><a href="#">分布图示</a></li>
					<li><a href="#">馆舍风貌</a></li>
				</ul>
				<div class="content-list-orange">
					<!-- 本馆简介 -->
					<dl class="library-intro listitem">
						<dt>历史：</dt>
						<dd>我馆是于1995年由原大连大学工学院图书馆、大连大学医学院图书馆及大连大学师范学院图书馆合并而成。</dd>
						<dt>面积：</dt>
						<dd>图书馆大楼于1995年建成并使用，总建筑面积21550.6平方米。</dd>
						<dt>借阅：</dt>
						<dd>馆内图书分藏五个库室，均实行开架借阅。馆内有15个阅览室，其中电子阅览室和多媒体阅览室拥有110个阅览座位。另有设在各…<a href="#" class="details">[详细]</a></dd>
					</dl>
					<!-- 分布图示 -->
					<ul class="buildings listitem" style="display: none;">
						<li><a href="#">主楼</a></li>
						<li><a href="#">辅楼</a></li>
					</ul>
					<!-- 馆舍风貌 -->
					<ul class="houseview listitem" style="display: none;">
						<li><a href="#">
							<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/mainout.jpg">
							<span class="brown">主楼外部</span>
						</a></li>
						<li><a href="#">
							<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/mainin.jpg">
							<span class="brown">主楼内部</span>
						</a></li>
						<li><a href="#">
							<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/supout.jpg">
							<span class="brown">辅楼外部</span>
						</a></li>
						<li><a href="#">
							<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/supin.jpg">
							<span class="brown">辅楼内部</span>
						</a></li>
					</ul>
				</div>
			</div>
			<!-- 右侧内容区 -->
			<div class="content-right">
				<!-- 导航按钮 -->
				<ul class="item" id="tab-survey">
					<li class="on-blue">
						<a href="#">工作动态</a>
					</li>
					<li>
						<a href="#">部门设置</a>
					</li>
					<li>
						<a href="#">应急预案</a>
					</li>
				</ul>
				<div class="content-list-blue">
					<!-- 工作动态 -->
					<dl class="content-detail listitem" id="workState">
						<dt>
							<a href="#" class="notice-title">图书馆征集“连大学人文库”文…</a>
							<p>为了更好地反映大连大学的教学、科研成果，珍藏、展示和传播我校师生和校友的学术著作，弘扬大连大学的学术精神，进一步传承大连大学的历史文化，图书馆将建立"连大学人文库"，并开辟"连大学人文库"特色馆藏区。为此，特向在校师生…<a href="#" class="details">[详细]</a></p>
						</dt>
						<dd>
							<a href="#" class="dot">大连大学图书馆学生管理委员会报名表</a>
							<span>10-08</span>
						</dd>
						<dd>
							<a href="#" class="dot">图书馆关于开展Q&A活动的通知</a>
							<span>11-10</span>
						</dd>
						<dd>
							<a href="#" class="dot">马丁·R·贝扬斯板画展</a>
							<span>11-06</span>
						</dd>
						<dd>
							<a href="#" class="dot">自然印象— 刘日升风光、人文摄影作品展</a>
							<span>11-05</span>
						</dd>
						<dd>
							<a href="#" class="dot">大连大学图书馆学生管理委员会章程（试行）</a>
							<span>10-08</span>
						</dd>
					</dl>
					<!-- 部门设置 -->
					<dl class="content-detail listitem" id="departmentSet" style="display: none;">
						<dt>
							<a href="#" class="notice-title">部门设置</a>
							<p>大连大学图书馆部门设置为一室五部：办公室、采编部、阅览部、流通部、参考咨询部、信息部。 1、 办公室 （电话：87402853、内线62853） 负责全馆日常事务及管理等。 2、采编部 （电话：87402850、内线62850） 采编部负责除期刊以…<a href="#" class="details">[详细]</a></p>
						</dt>
					</dl>
					<!-- 应急预案 -->
					<dl class="content-detail listitem" id="contingencyPlan" style="display: none;">
						<dt>
							<a href="#" class="notice-title">图书馆防控甲型H1N1 流感应急…</a>
							<p>一、总体目标 为做好甲型H1N1 流感防控工作，提高防控水平和应对能力，做到早发现、早报告、早隔离、早治疗，及时有效地采取各项防控措施，防止疫情传播、蔓延，保障广大师生的身体健康和生命安全，特制定本预案。 二、工作原则…<a href="#" class="details">[详细]</a></p>
						</dt>
						<dd>
							<a href="#" class="dot">大连大学图书馆突发公共事件总体应急预案</a>
							<span>11-05</span>
						</dd>
						<dd>
							<a href="#" class="dot">大连大学图书馆安全预防及消防应急预案</a>
							<span>11-05</span>
						</dd>
						<dd>
							<a href="#" class="dot">大连大学图书馆各级安全防火责任人</a>
							<span>11-05</span>
						</dd>
						<dd>
							<a href="#" class="dot">大连大学图书馆日常的消防管理工作</a>
							<span>11-05</span>
						</dd>
						<dd>
							<a href="#" class="dot">大连大学图书馆消防灭火、人员疏散操作规程</a>
							<span>11-05</span>
						</dd>
						<dd>
							<a href="#" class="dot">大连大学图书馆应急疏散路线</a>
							<span>11-05</span>
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
	<!-- 概况页结束 -->

	<!-- 魅力图书馆页开始 -->
	<div class="page" id="page-library">
		<!-- 页面标题 -->
		<div class="title-wrapper">
			<h1 class="title"><a href="" target="_blank">魅力图书馆</a></h1>
		</div>
		<!-- 内容区容器 -->
		<div class="content-wrapper">
			<!-- 左侧发刊词 -->
			<div class="content-left">
				<p class="foreword">当2009年的钟声敲响，美好的未来等待着问候与拜访。新的一年，新的起点，新的展望，连大图书馆人的电子期刊《魅力图书馆》闪亮登场，今后的日子它将陪伴我们更有力地前行。《魅力图书馆》给我们74个连大图书馆人提供了施展才华的舞台，它是我们诉说心声的知心角，也是我们探讨学术的论坛，更是反映我们图书馆风貌、展现图书馆人的风采、昭示图书馆人自强不息的窗口，它是我们梦寐以求的精神家园。…<a href="#">[详细]</a></p>
			</div>
			<!-- 右侧精品推荐 -->
			<div class="content-right">
				<h3>
					<a href="#" class="recommend">精品推荐</a>
					<a href="#" class="more">更多&gt;&gt;</a>
				</h3>
				<ul class="pic">
					<li><a href="#">
						<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/pic1.jpg">
						<span class="brown">图书馆占座之我见</span>
					</a></li>
					<li><a href="#">
						<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/pic2.jpg">
						<span class="brown">对图书馆占座问题的几点看法</span>
					</a></li>
					<li><a href="#">
						<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/pic3.jpg">
						<span class="brown">参观关向应纪念馆有感</span>
					</a></li>
					<li><a href="#">
						<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/pic4.jpg">
						<span class="brown">女人当自尊自爱自信自强---读《简爱》有感</span>
					</a></li>
					<li><a href="#">
						<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/pic5.jpg">
						<span class="brown">与那些好书的偶然邂逅</span>
					</a></li>
					<li><a href="#">
						<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/pic6.jpg">
						<span class="brown">图书馆重视安全教育，启动应急预案</span>
					</a></li>
					<li><a href="#">
						<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/pic7.jpg">
						<span class="brown">一个熟悉又陌生的城市—汕头</span>
					</a></li>
					<li><a href="#">
						<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/pic8.jpg">
						<span class="brown">坚守信念--关向应纪念馆观后感</span>
					</a></li>
					<li><a href="#">
						<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/pic9.jpg">
						<span class="brown">现实与虚幻中的孤独</span>
					</a></li>
					<li><a href="#">
						<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/pic10.jpg">
						<span class="brown">一杯茶一把椅</span>
					</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- 魅力图书馆页结束 -->

	<!-- 思想者页开始 -->
	<div class="page" id="page-thinker" style="display:none;">
		<!-- 页面标题 -->
		<div class="title-wrapper">
			<h1 class="title"><a href="" target="_blank">思想者</a></h1>
		</div>
		<!-- 导航按钮 -->
		<ul class="item" id="tab-thinker">
			<li class="on-blue"><a href="#">沁心美文</a></li>
			<li><a href="#">名著欣赏</a></li>
			<li><a href="#">大爱无疆</a></li>
			<li><a href="#">心灵驿站</a></li>
			<li><a href="#">阅读指南</a></li>
			<li><a href="#">科学沙龙</a></li>
			<li><a href="#">文化雨露</a></li>
			<li><a href="#">就业指导</a></li>
		</ul>
		<div class="content-list-blue">
			<!-- 沁心美文 -->
			<ul class="item-box listitem">
				<li>
					<!-- 日期 -->
					<div class="item-date">
						<span class="day">05</span>
						<span class="yearmonth">2015-11</span>
					</div>
					<!-- 内容 -->
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">清欢若有味</a>
						<p class="item-brief">文/蒋婵琴 图/吴冠中 细雨斜风作晓寒，淡烟疏柳媚晴滩。入淮清洛渐漫漫。 雪沫乳…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">05</span>
						<span class="yearmonth">2015-11</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">冰心：心因饱经忧患而愈加温厚</a>
						<p class="item-brief">冰心 原名谢婉莹，中国诗人，现代作家，翻译家，儿童文学作家，社会活动家，散文家。笔名冰…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">05</span>
						<span class="yearmonth">2015-11</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">叔本华：一个人只有在独处时才能成为自己</a>
						<p class="item-brief">叔本华 德国著名哲学家。唯意志主义的创始人和主要代表之一。在人生观上，受印度教和佛教…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">05</span>
						<span class="yearmonth">2015-11</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">一颗初心，慢煮岁月</a>
						<p class="item-brief">岁月两个字，有些缠绵，有些静好，盛放着我所有的悲喜，那些染指的馨香，常让我想起当初…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
			</ul>
			<!-- 名著欣赏 -->
			<ul class="item-box listitem" style="display: none;">
				<li>
					<!-- 日期 -->
					<div class="item-date">
						<span class="day">13</span>
						<span class="yearmonth">2015-10</span>
					</div>
					<!-- 内容 -->
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">《论语》给你一颗强大的心</a>
						<p class="item-brief">我们如果笼统一点、宏观一点看待《论语》这部经典著作的话，可以发现，整个一部《…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">13</span>
						<span class="yearmonth">2015-10</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">《周易》中的十种美“德”</a>
						<p class="item-brief">一、盛德 《周易·系辞上》云：“盛德大业至矣哉！富有之谓之业，日新…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">13</span>
						<span class="yearmonth">2015-10</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">这些全都出自《礼记》</a>
						<p class="item-brief">【半途而废】 语出《礼记·中庸》：“君子遵道而行，半涂而废，吾弗能已…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">13</span>
						<span class="yearmonth">2015-10</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">《左传》名言30句全是智慧</a>
						<p class="item-brief">1、多行不义必自毙。(《左传·隐公元年》) 译文：多干坏事，一定会自取灭亡。 2…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
			</ul>
			<!-- 大爱无疆 -->
			<ul class="item-box listitem" style="display: none;">
				<li>
					<!-- 日期 -->
					<div class="item-date">
						<span class="day">12</span>
						<span class="yearmonth">2015-11</span>
					</div>
					<!-- 内容 -->
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">女百万富翁耗尽家财收养75名弃婴</a>
						<p class="item-brief">李利娟与孩子们 李利娟今年45岁，从小在县城长大，十几岁就在外打拼做生意，24…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">12</span>
						<span class="yearmonth">2015-11</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">女子资助87个山里娃 18人考上清华北大</a>
						<p class="item-brief">麦琼方和她收来的旧衣物（5月14日摄）。新华社记者卢羡婷摄 麦琼方和孩子们在一起…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">12</span>
						<span class="yearmonth">2015-11</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">她才7岁，却拯救了数百万生命！</a>
						<p class="item-brief">世界上最大的力量，不是权力、学问与金钱，而是爱，那遍布宇宙、藏于心灵却又被假象遮…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">12</span>
						<span class="yearmonth">2015-11</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">女子突发急病机上乘客合力救援</a>
						<p class="item-brief">乘客、导游、机组人员自发为女乘客急救。同机乘客“互联网女神”摄 …<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
			</ul>
			<!-- 心灵驿站 -->
			<ul class="item-box listitem" style="display: none;">
				<li>
					<!-- 日期 -->
					<div class="item-date">
						<span class="day">06</span>
						<span class="yearmonth">2015-11</span>
					</div>
					<!-- 内容 -->
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">上帝的恩典——跳过来吧！（哲理漫画）</a>
						<p class="item-brief">1、许多时候，我们面对的困难，我们无法解决。 2、我们企图逃避的时候，却发现我们已…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">06</span>
						<span class="yearmonth">2015-11</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">心胸，是被痛苦和委屈撑大的！</a>
						<p class="item-brief">沙粒进入蚌体内，蚌觉得不舒服，但又无法把沙粒排出。好在蚌不怨天尤人，而是逐步用体内营…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">06</span>
						<span class="yearmonth">2015-11</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">一只鸡的尊严</a>
						<p class="item-brief">来听听这只鸡的心声，有意思... 小鸡问母鸡：“妈妈，今天可否不用下蛋，带我出…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">06</span>
						<span class="yearmonth">2015-11</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">生活煎熬是为了磨练我们成为更好的人</a>
						<p class="item-brief">生活中的煎熬，都是为了磨练我们成为更优秀的人。 我们都会遇见一段需要…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
			</ul>
			<!-- 阅读指南 -->
			<ul class="item-box listitem" style="display: none;">
				<li>
					<!-- 日期 -->
					<div class="item-date">
						<span class="day">22</span>
						<span class="yearmonth">2015-10</span>
					</div>
					<!-- 内容 -->
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">看一看哈佛凌晨4点的图书馆</a>
						<p class="item-brief">美国哈佛大学图书馆凌晨4点座无虚席 凌晨4点的哈佛大学图书馆里，灯火通…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">22</span>
						<span class="yearmonth">2015-10</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">书房就是我的王国</a>
						<p class="item-brief">对大部分中国爱书人而言，“书房”二字所能唤起的想象多半会牵出一个叫李谧的人来…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">22</span>
						<span class="yearmonth">2015-10</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">文学书籍能救你的命吗？</a>
						<p class="item-brief">美国短篇小说杂志《Electric Literature》曾做过一个实验：哪一本重量级小说能为你挡住冷枪？…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">22</span>
						<span class="yearmonth">2015-10</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">网络时代要怎么读经典？</a>
						<p class="item-brief">[摘要]读书，当然要读好书，怎么才算好书呢，于是很自然地抬出“经典”的说辞。那些经过…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
			</ul>
			<!-- 科学沙龙 -->
			<ul class="item-box listitem" style="display: none;">
				<li>
					<!-- 日期 -->
					<div class="item-date">
						<span class="day">10</span>
						<span class="yearmonth">2015-11</span>
					</div>
					<!-- 内容 -->
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">中国科学家获“科学突破奖”:他们到底干了什么</a>
						<p class="item-brief">先来一条快讯--由俄罗斯富翁尤里·米尔纳领衔资助的“科学突破奖”…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">10</span>
						<span class="yearmonth">2015-11</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">Magic Leap展示增强现实技术：仿佛置身梦境</a>
						<p class="item-brief">新浪科技讯 北京时间10月30日消息，虚拟现实技术（VR）主要手段是将一个完全浸入式环境投…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">10</span>
						<span class="yearmonth">2015-11</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">中国科学家获基础物理学突破奖</a>
						<p class="item-brief">由俄罗斯富翁Yuri Milner领衔资助的“科学突破奖”（BREAKTHROUGH PRI…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">10</span>
						<span class="yearmonth">2015-11</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">多国科学家发现沙子造太阳能电池用硅材料</a>
						<p class="item-brief">[环球科技报道 记者 王欢]据日本共同社11月6日报道，日本东京大学客座教授鲤沼秀…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
			</ul>
			<!-- 文化雨露 -->
			<ul class="item-box listitem" style="display: none;">
				<li>
					<!-- 日期 -->
					<div class="item-date">
						<span class="day">23</span>
						<span class="yearmonth">2015-10</span>
					</div>
					<!-- 内容 -->
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">孔子思想的价值千古不灭</a>
						<p class="item-brief">孔子的思想，几千年以来，始终成为国家民族文化的中心，的确是有它千古不灭…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">23</span>
						<span class="yearmonth">2015-10</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">叶嘉莹：把传统文化的真正精神教给年轻人</a>
						<p class="item-brief">近些年，社会上掀起“国学热”…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">23</span>
						<span class="yearmonth">2015-10</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">《朱子家训》 字字珠玑</a>
						<p class="item-brief"> 朱熹（1130.9.15-1200.4.23） 字元晦，又字仲晦，号晦庵，晚称晦翁，谥文…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">21</span>
						<span class="yearmonth">2015-10</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">九月九 重阳节</a>
						<p class="item-brief">[摘要]施蛰存：“（我曾）有一个很天真的体会，以为茱萸是一种草本或木本的植物，每…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
			</ul>
			<!-- 就业指导 -->
			<ul class="item-box listitem" style="display: none;">
				<li>
					<!-- 日期 -->
					<div class="item-date">
						<span class="day">29</span>
						<span class="yearmonth">2015-10</span>
					</div>
					<!-- 内容 -->
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">武大校长毕业致辞：敢闯善创拓新立业</a>
						<p class="item-brief">武汉大学校长李晓红致辞。图片来源：武汉大学网站 人民网北京6月27日电（记…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">29</span>
						<span class="yearmonth">2015-10</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">月薪三千时做月薪八千的事，你就赢了！</a>
						<p class="item-brief">以“要不要加班”来评价一份工作好不好的人，绝不是企业需要的人才，因为他对工作的…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">29</span>
						<span class="yearmonth">2015-10</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">高校"励志哥"借钱上班拼到年薪40万</a>
						<p class="item-brief"> 武昌理工学院2008届校友马揆被评为“最励志校友”之一，家境贫困的他凭借自己的勤…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
				<li>
					<div class="item-date">
						<span class="day">29</span>
						<span class="yearmonth">2015-10</span>
					</div>
					<div class="item-content">
						<a href="javascript:void(0)" class="item-title">一份30个字的个人简历</a>
						<p class="item-brief">【导读】这 个世界上，总有很多人很自以为是地以为若是他们做不到的事情，别人做到了，必定不是什…<a href="javascript:void(0)" class="details">[详细]</a></p>
					</div>
				</li>
			</ul>
		</div>
		<!-- 底部链接 -->
		<ul class="links">
			<li class="link1"><a href="#">感恩教育</a></li>
			<li class="link2"><a href="#">励志成才</a></li>
			<li class="link3"><a href="#">学术研究</a></li>
			<li class="link4"><a href="#">阅读指导</a></li>
			<li class="link5"><a href="#">生存能力</a></li>
			<li class="link6"><a href="#">热点关注</a></li>
		</ul>
	</div>
	<!-- 思想者页结束 -->

	<!-- 联系我们页开始 -->
	<div class="page" id="page-contact">
		<!-- 页面标题 -->
		<div class="title-wrapper">
			<h1 class="title"><a href="javascript:void(0)">联系我们</a></h1>
		</div>
		<!-- 内容容器 -->
		<div class="content-wrapper">
			<!-- 左侧内容 -->
			<div class="content-left">
				<!-- 分享到 -->
				<div class="share">
					<span>分享到 : </span>
					<a href="#" class="sina" title="分享到新浪微博"><!-- 新浪微博 --></a>
					<a href="#" class="weixin" title="分享到微信"><!-- 微信 --></a>
					<a href="#" class="qq" title="分享给QQ好友"><!-- QQ好友 --></a>
				</div>
				<div class="time">
					<h5>开馆时间 :</h5>
					<p>图书馆主楼</p>
					<p>周一至周五8:10-21:40 周六、日8:50-21:40</p>
					
				</div>
				<div class="address">
					<p><b>地址：</b>天津职业技术师范大学-图书馆</p>
					<p><b>电话：</b>022-28116964</p>
					<!--
					<p><b>传真：</b>0411-87402853</p>
				-->
					<p><b>交通方式：</b>火车站-大连大学</p>
					<p><b>邮政编码：</b>300222</p>
				</div>
				<div class="qrcode">
					<div class="box">
						<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/qcode.jpg" alt="">
						<p>微信公众号</p>
					</div>
					<div class="box">
						<img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/qcode.jpg" alt="">
						<p>新浪微博</p>
					</div>
				</div>
			</div>
			<!-- 右侧内容(百度地图) -->
			<div class="content-right" id="bdmap">
				<!-- <img src="<?php echo C('DOMAIN');?>./Application/Home/View/workshop/images/map.png" width="615" height="468"> -->
			</div>
		</div>
	</div>
	<!-- 联系我们页结束 -->

	<!-- 右侧导航栏开始 -->
	<ul id="sidebar-nav">
		<li id="survice">服务</li>
		<li id="survey">概况</li>
		<li id="library">魅力图书馆</li>
		<li id="contact">联系我们</li>
		<li id="totop">返回顶部</li>
		<!--
		<li id="thinker"  style="display:none;">思想者</li>
		-->
	</ul>
	<!-- 右侧导航栏结束 -->


</body>
</html>