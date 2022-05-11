<?php
	header('Content-Type: text/html; charset=utf-8');
	/*
     *获取各分类的文章的id，title，url,post_date,except,img_url
	 */
    $activities = get_cate();//活动
    $campus_news = get_cate(9);//校园动态
    $interviews = get_cate(10);//人物专访
    $innovations = get_cate(11);//创新创业
//
    // for($i=0;$i<count($innovations);$i++){
    //     echo $innovations[$i]["title"];
    //     echo '</br>';
    //     echo $innovations[$i]["url"];
    //     echo '</br>';
    //     echo $innovations[$i]["except"];
    //     echo '</br>';
    //     echo $innovations[$i]["img_url"];
    //     echo '</br>';
    //     echo $innovations[$i]["post_date"];
    //     echo '</br>';
    // }
//文章数量限制，摘要字数限制
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>湘潭大学最具影响力学生门户网站--三翼校园网</title>
    <!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sune.css">
</head>
<body>
    <div id="header">
        <div class="main-head">
            <div class="xtu-logo1"></div>
            <div class="xtu-logo2"></div>
            <div class="sune-logo"></div>
            <div class="menu">
                <ul class="menu-body">
                    <li><a href="<?php echo $innovations[0]["url"] ?>">首页</a></li>
                    <li class="li_about"><a href="https://studio.sky31.com/index.html"></a>团委相关</a>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/open_btn.png" alt="表示可展开">
                        <ul class="about_committee">
                            <li><a href="https://studio.sky31.com/index.html">组织架构</a></li>
                            <li><a href="https://studio.sky31.com/index.html">机构成员</a></li>
                        </ul>
                    </li>
                    <li><a href="https://studio.sky31.com/index.html">通知通告</a></li>
                    <li><a href="https://studio.sky31.com/index.html">校园资讯</a></li>
                    <li><a href="https://studio.sky31.com/index.html">团学资讯</a></li>
                    <li><a href="https://studio.sky31.com/index.html">媒体湘大</a></li>
                </ul>
                <div class="btn-more">
                    <button>更多</button>
                </div>
            </div>
        </div>
        <div class="head-body">
            <div class="left-color"></div>
            <div class="sune-net-logo"></div>
            <div class="xtu-bc">
                <!-- <div class="all-img-btn"></div> -->
                <div class="xtu-photo"></div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="content-body">
            <div class="content-container">
                <p class="content-head-title">校园新闻</p>
                <div class="school-dynamic">
                    <p>校园动态</p>
                </div>
                <div class="double-div">
                    <div class="character-interview">
                        <p>人物专访</p>
                    </div>
                    <div class="content-innovation">
                        <p>创新创业</p>
                    </div>
                </div>

                <div class="depth-investigation"></div>
                <div class="hot-spot"></div>
                <div class="notice-announcement"></div>
                <div class="school-consultation"></div>
                <div class="media-xtu"></div>
                <div class="xtu-literature"></div>
            </div>
        </div>
        <div class="content-footer"></div>
    </div>
    <div id="footer">
        <div class="footer-up">
            <div class="call-us-div">
                <p class="call-us">联系我们</p>
                <p>三翼QQ</p>
                <p>三翼微信公众号</p>
                <p>三翼微博</p>
                <p>湘潭大学</p>
                <p>中国大学生在线</p>
            </div>
            <div class="footer-menu-div">
                <p class="footer-menu">菜单</p>
                <p>三翼邮局</p>
                <p>招商动态</p>
            </div>
            <div class="right-div">
                <p>Copyright? 2004-2021湘潭大学三翼工作室</p>
                <p>All Rights Reserved网站备案号：湘ICP备18021862号-1湘公网安备 43030202001141号</p>
                <div class="right-down">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/tuan_icon.png" alt="团徽">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/suneschool-logo-white.png" alt="三翼校园logo">
                </div>
            </div>
        </div>
        <div class="footer-down">
            <p>法律通知/隐私策略</p>
        </div>
    </div>
</body>
</html>