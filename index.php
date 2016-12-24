<?php
$wxParams = curlGet("http://www.wexue.top/games/TTD/weixinjs.php?url=" . base64_encode('http://www.wexue.top' . $_SERVER["REQUEST_URI"]));
function curlGet($url, $method = 'get', $data = '')
{
    $ch = curl_init();
    $header = "Accept-Charset: utf-8";
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $temp = curl_exec($ch);
    return $temp;
}
?>

<!doctype html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8" />
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="email=no" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="Cache-Control" content="max-age=0" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <script type="text/javascript">
    ! function(userAgent) {
        var screen_w = parseInt(window.screen.width),
            scale = screen_w / 640;
        if (/Android (\d+\.\d+)/.test(userAgent)) {
            var version = parseFloat(RegExp.$1);
            document.write(version > 2.3 ? '<meta name="viewport" content="width=640, initial-scale = ' + scale + ',user-scalable=1, minimum-scale = ' + scale + ', maximum-scale = ' + scale + ', target-densitydpi=device-dpi">' : '<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');
        } else {
            document.write('<meta name="viewport" content="width=640, initial-scale = ' + scale + ' ,minimum-scale = ' + scale + ', maximum-scale = ' + scale + ', user-scalable=no, target-densitydpi=device-dpi">');
        }
    }(navigator.userAgent);
    </script>
    <script type="text/javascript" src="js/bundle.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>长马小秘书的朋友圈</title>
</head>

<body>
    <script type="text/javascript">
    /*<![CDATA[*/
    window.awardUrl = '/circlefriends/award';
    window.infoUrl = '/circlefriends/setinfo';
    window.winnersUsrl = 'site/win.htm' /*tpa=http://vip.m0.hk/vivo820/site/win*/ ;
    window.apiUrl = 'index.htm' /*tpa=http://vip.m0.hk/vivo820*/ ;
    window.cdnUrl = 'http://www.wexue.top/games/TTD/';
    window.baseUrl = '/TTD';
    window.debug = '';
    define('config', {
        "manifest": {
            "css\/style.css": "css\/style.css",
            "images\/banana-dc8481a72e.png": "images\/banana-dc8481a72e.png",
            "images\/d1.jpg": "images\/d1.jpg",
            "images\/d1.jpg": "images\/d2.jpg",
            "images\/d1.jpg": "images\/d3.jpg",
            "images\/d1.jpg": "images\/d4.jpg",
            "images\/dabai.jpg": "images\/dabai.jpg",
            "images\/p0-f-bg-e28c66e081.jpg": "images\/p0-f-bg-e28c66e081.jpg",
            "images\/p4-bg.jpg": "images\/p4-bg.jpg",
            "images\/p6-bg-t-a25456f9eb.jpg": "images\/p6-bg-t-a25456f9eb.jpg",
            "js\/bundle.js": "js\/bundle.js",
            "js\/main.js": "js\/main.js"
        }
    });
    /*]]>*/
    </script>
    <script type="text/javascript">
    //    console.log(window.user_wx);
    $(function() {
        modjs.use('*');
    });
    </script>
    <!-- main(start) -->
    <script type="text/javascript" src="http://pingjs.qq.com/h5/stats.js" name="MTAH5" sid="500156422" ></script>
    <script src="js/jweixin-1.0.0.js"></script>
    <script type="text/javascript">
    window.user = {
        "openid": "oVFyOjo9rvMnkk-vbFPZVazIvvIg",
        "headimgurl": "images/0132.jpg",
        "nickname": "<img src='images/name.png' style='height: 40px'></img>"
    };
    wx.config(
        <?php echo $wxParams;?>
    );
    wx.ready(function () {
        wx.onMenuShareTimeline({
            title: 'Mua❤️—长马大师学院哒哒驾到🐎🐑🐰🐱🐻，就在本周日。', // 分享标题
            link: 'http://www.wexue.top/games/TTD/index.php', // 分享链接
            imgUrl: 'http://www.wexue.top/games/TTD/images/ds.jpg', // 分享图标
            success: function () {
                MtaH5.clickStat('shareCircle');
            },
            cancel: function () {
            }
        });
        wx.onMenuShareAppMessage({
            title: 'Mua❤️—长马大师学院哒哒驾到🐎🐑🐰🐱🐻，就在本周日。', // 分享标题
            desc: '专业跑步知识体系搭配趣味互动授课，含金量十足的长马课程，听了才叫赚到了~', // 分享描述
            link: 'http://www.wexue.top/games/TTD/index.php', // 分享链接
            imgUrl: 'http://www.wexue.top/games/TTD/images/ds.jpg',// 分享图标
            type: 'link', // 分享类型,music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
            success: function () {
                MtaH5.clickStat('shareFriend');
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });
    });
    </script>
    <div class="container">
        <div class="loading" style="text-align: center;background-color: #ffffff">
            <div class="p0-bt" style="background:url('images/p0-bt-fbd473cdd3.png') no-repeat;-webkit-background-size: 100% 100%;background-size: 100% 100%;height: 200px;width: 200px;margin-left: auto;margin-right: auto;margin-top: 300px">
            </div>
            <div class="text"></div>
        </div>
        <div class="page-box unload">
            <section class="page-0">
                <div class="content">
                    <div class="p0-bg"></div>
                    <div class="p0-f">
                        <div class="p0-f-bg"></div>
                        <div class="line">
                            <div class="p0-line1"></div>
                            <div class="p0-line2"></div>
                            <div class="p0-line3"></div>
                        </div>
                    </div>
                    <div class="time">
                        <div class="time-h">
                        </div>
                        <div class="time-date">
                        </div>
                        <div class="week">
                        </div>
                        <div class="p0-time-w">
                        </div>
                    </div>
                    <div class="p0-bt"></div>
                    <div class="p0-up"></div>
                    <div class="p0-iconL"></div>
                    <div class="p0-iconR"></div>
                </div>
            </section>
            <section class="page-1">
                <div class="content">
                    <div class="p1-f">
                        <div class="p1-f-bg"></div>
                    </div>
                    <div class="p1-bt"></div>
                    <div class="p1-ts">
                        <div class="p1-ts-1"></div>
                        <div class="p1-ts-2"></div>
                    </div>
                    <div class="p1-yd">
                        <canvas height="483" width="483" id="mycanvas"></canvas>
                        <!--                    <div class="p1-yd-ts"></div>-->
                    </div>
                    <div class="p1-iconL"></div>
                    <div class="p1-iconR"></div>
                </div>
            </section>
            <section class="page-2">
                <div class="content">
                    <div class="p2-bg"></div>
                    <!-- <div class="p2-p"> -->
                    <!-- <div class="p2-p1">
                            <div class="p2-p1-t">
                            </div>
                            <div class="p2-p1-b">
                            </div>
                        </div> -->
                    <!-- <div class="p2-p2"> </div> -->
                    <!-- </div> -->
                    <div class="p2-bottom">
                        <div class="dian">
                            <span class="dian-ate">●</span><span>●</span>
                        </div>
                        <div class="p2-wx-icon"></div>
                        <div class="p2-bt"></div>
                    </div>
                </div>
            </section>
            <section class="page-3">
                <div class="content">
                    <div class="p3-bg">
                        <div class="p3-1 vioce">
                            <div class="vioce-sound">
                                <div class="voice-sound-icon1 "></div>
                                <div class="voice-sound-icon2"></div>
                                <div class="voice-sound-icon3 at"></div>
                            </div>
                        </div>
                        <div class="p3-2"></div>
                        <div class="p3-3">
                        </div>
                        <div class="p3-4"></div>
                        <div class="p3-5">
                        </div>
                        <div class="p3-6"></div>
                        <div class="p3-7 envelope">
                            <div class="p-3round"></div>
                        </div>
                        <div class="p3-8"></div>
                    </div>
                    <div class="p3-bottom">
                        <div class="p4-bottom">
                            <span class="yue">
                        什么？什么？我错过了什么？
                    </span>
                            <div class="p4-round"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page-4">
                <div class="content">
                    <div class="p4-bg">
                        <div class="p4-yh-w">
                            <div class="p4-yh-w-icon">
                            </div>
                        </div>
                        <div class="p4-ch">
                            <div class=" p4-round-1 ">
                            </div>
                        </div>
                    </div>
                    <div class="p4-bottom">
                        <span class="yue">
                       什么？什么？我错过了什么？
                    </span>
                        <div class="p4-round">
                        </div>
                    </div>
                </div>
            </section>
            <section class="page-5">
                <div class="content">
                    <div class="p5-bg">
                        <div class="p5-bg-t">
                            <div class="Circlefriends">
                                <div class="p5-round">
                                </div>
                            </div>
                            <div class="buy">
                                <!--                            <a href=""></a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page-6">
                <div class="content">
                    <div class="p6-scY">
                        <div class="p6-bg-t">
                        </div>
                        <div class="p6-line clearfix">
                            <div class="hand-img">
                                <div class="Bob-hand">
                                </div>
                            </div>
                            <div class="cont">
                                <div class="name">腾提度体育</div>
                                <div class="cont-w">
                                    世界上最长的城是长城，世界上最长的马拉松是长城马拉松，比长更长的是你奔跑的脚步。告别葛优躺，迎接长城跑，2016年金秋10月北京怀柔，一起出发吧！
                                </div>
                                <div class="picture picture-video">
                                    <video src="public/music/video.mp4" style="width: 100%" controls="controls">
                                        您的浏览器不支持 video 标签。
                                    </video>
                                </div>
                                <div class="Thumb-comments_D">
                                    <div class="p6-line-time">
                                        1分钟前
                                    </div>
                                    <div class="Thumb-comments">
                                        <div class="Thumb" data-thumbool="false">
                                            <div class="Thumb-cancel">
                                            </div>
                                        </div>
                                        <div class="comments">
                                        </div>
                                    </div>
                                    <div class="Thumb-comments-icon" data-iconbool="false">
                                    </div>
                                </div>
                                <div class="p6Thumb-comments-jiao">
                                </div>
                                <div class="Thumb-comments_D-cont">
                                    <div class="Thumb-cont">
                                        <div class="Thumb-line_D">
                                            <span class="Thumb-line">
                                        阿飞，
                                    </span>
                                            <span class="Thumb-line">
                                        长马小秘书，
                                    </span>
                                            <span class="Thumb-line">
                                    就是爱跑步
                                    </span>
                                        </div>
                                    </div>
                                    <div class="comments-cont">
                                        <div class="comments-line">
                                            <span class="comments-name">
                                            阿飞:
                                        </span>
                                            <span class="comments-cont-w">
                                            北马签不中，我也不怕啦，长马也是杠杠滴！
                                        </span>
                                        </div>
                                        <div class="comments-line">
                                            <span class="comments-name">
                                             岳云喵:
                                        </span>
                                            <span class="comments-cont-w">
                                           在长城跑？这么神奇吗？
                                        </span>
                                        </div>
                                        <div class="comments-line">
                                            <span class="comments-name">
                                             长马小秘书:
                                        </span>
                                            <span class="comments-cont-w">
                                            不要着急，先来学学基本套路，本周日跑步猫体能训练中心长马大师学院开讲啦!
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="p6-line clearfix">
                            <div class="hand-img">
                                <div class="Stuart-hand">
                                </div>
                            </div>
                            <div class="cont">
                                <div class="name">喵奇奇</div>
                                <div class="cont-w">
                                    据说长马大师学院集聚了许多专业培训师哦，里约奥运会中国男篮的科研教练奥运前夕给我们来上课，是不是赚到了呢？
                                </div>
                                <div class="picture">
                                    <div class="p6-kaisa-icon">
                                        <img src="images/zs.jpg" style="width: 98%" alt="" data-preimg="0" />
                                    </div>
                                    <div class="p6-cj p6-kaisa-cj">
                                        长城马拉松官网<span class="p6-cj-w-icon"></span>
                                    </div>
                                </div>
                                <div class="Thumb-comments_D">
                                    <div class="p6-line-time">
                                        3分钟前
                                    </div>
                                    <div class="Thumb-comments">
                                        <div class="Thumb" data-thumbool="false">
                                            <div class="Thumb-cancel">
                                            </div>
                                        </div>
                                        <div class="comments">
                                        </div>
                                    </div>
                                    <div class="Thumb-comments-icon" data-iconbool="false">
                                    </div>
                                </div>
                                <div class="p6Thumb-comments-jiao">
                                </div>
                                <div class="Thumb-comments_D-cont">
                                    <div class="Thumb-cont">
                                        <div class="Thumb-line_D">
                                            <span class="Thumb-line">
                                        喵小萌
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="p6-line clearfix">
                            <div class="hand-img">
                                <div class="Kevin-hand">
                                </div>
                            </div>
                            <div class="cont">
                                <div class="name">飞毛腿</div>
                                <div class="cont-w">
                                    这周日要去长城马拉松大师学院听赵杰修教授的《马拉松运动的生理学基础》，他是国家体育总局体育科学研究所运动生物科学研究中心主任，还曾经给刘翔、姚明做过训练计划呢。有一起去的小伙伴吗？
                                </div>
                                <div class="picture">
                                    <div class="p6-cj-icon">
                                        <img src="images/jb1.jpg" style="width: 300px" alt="" data-preimg="0" />
                                    </div>
                                </div>
                                <div class="Thumb-comments_D">
                                    <div class="p6-line-time">
                                        12分前
                                    </div>
                                    <div class="Thumb-comments">
                                        <div class="Thumb" data-thumbool="false">
                                            <div class="Thumb-cancel">
                                            </div>
                                        </div>
                                        <div class="comments">
                                        </div>
                                    </div>
                                    <div class="Thumb-comments-icon" data-iconbool="false">
                                    </div>
                                </div>
                                <div class="p6Thumb-comments-jiao">
                                </div>
                                <div class="Thumb-comments_D-cont">
                                    <div class="Thumb-cont">
                                        <div class="Thumb-line_D">
                                            <span class="Thumb-line">
                                       喵小花
                                    </span>
                                        </div>
                                    </div>
                                    <div class="comments-cont">
                                        <div class="comments-line">
                                            <span class="comments-name">
                                    喵小花:
                                    </span>
                                            <span class="comments-cont-w">
                                    还有其他老师的课吗？
                                    </span>
                                        </div>
                                        <div class="comments-line">
                                            <span class="comments-name">
                                    长马小秘书:
                                    </span>
                                            <span class="comments-cont-w">
                                    @喵小花 还有老师讲急救知识奥！
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="p6-line clearfix">
                            <div class="hand-img">
                                <div class="zihao-hand">
                                </div>
                            </div>
                            <div class="cont">
                                <div class="name">风火轮</div>
                                <div class="cont-w">
                                    第一反应可是我们跑者跑马路上安全保障的守护使者，第一反应的陆俊老师这次要交我们如何自救，应该很涨姿势吧！
                                </div>
                                <div class="picture">
                                    <div class="p6-zihao-icon">
                                        <img src="images/jb2.jpg" style="width: 300px">
                                    </div>
                                </div>
                                <div class="Thumb-comments_D">
                                    <div class="p6-line-time">
                                        12分前
                                    </div>
                                    <div class="Thumb-comments">
                                        <div class="Thumb" data-thumbool="false">
                                            <div class="Thumb-cancel">
                                            </div>
                                        </div>
                                        <div class="comments">
                                        </div>
                                    </div>
                                    <div class="Thumb-comments-icon" data-iconbool="false">
                                    </div>
                                </div>
                                <div class="p6Thumb-comments-jiao">
                                </div>
                                <div class="Thumb-comments_D-cont">
                                    <div class="Thumb-cont">
                                        <div class="Thumb-line_D">
                                            <span class="Thumb-line">
                                       马拉松的男人
                                            </span>
                                        </div>
                                    </div>
                                    <div class="comments-cont">
                                        <div class="comments-line">
                                            <span class="comments-name">
                                    喵小黑:
                                    </span>
                                            <span class="comments-cont-w">
                                    上次在参加无锡马拉松时一个跑友突然昏厥，就是陆俊老师团队救过来的吧！
                                    </span>
                                        </div>
                                        <div class="comments-line">
                                            <span class="comments-name">
                                    长马小秘书:
                                    </span>
                                            <span class="comments-cont-w">
                                    @喵小黑 参加长马这种极限运动更需要学习一些急救知识奥！
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="p6-line clearfix">
                            <div class="hand-img">
                                <div class="junda-hand">
                                </div>
                            </div>
                            <div class="cont">
                                <div class="name">跑步儿</div>
                                <div class="cont-w">
                                   今天看朋友圈说央视主持人鲁健7月24日也会出席长马大师学院，真的吗？好想去看啊！
                                </div>
                                <div class="picture">
                                    <div class="p6-zihao-icon">
                                        <img src="images/jb3.jpg" style="width: 300px">
                                    </div>
                                </div>
                                <div class="Thumb-comments_D">
                                    <div class="p6-line-time">
                                        20分前
                                    </div>
                                    <div class="Thumb-comments">
                                        <div class="Thumb" data-thumbool="false">
                                            <div class="Thumb-cancel">
                                            </div>
                                        </div>
                                        <div class="comments">
                                        </div>
                                    </div>
                                    <div class="Thumb-comments-icon" data-iconbool="false">
                                    </div>
                                </div>
                                <div class="p6Thumb-comments-jiao">
                                </div>
                                <div class="Thumb-comments_D-cont">
                                    <div class="Thumb-cont">
                                        <div class="Thumb-line_D">
                                        </div>
                                    </div>
                                    <div class="comments-cont">
                                        <div class="comments-line">
                                            <span class="comments-name">
                                    喵大白:
                                    </span>
                                            <span class="comments-cont-w">
                                    哇~~ 好喜欢鲁健老师！
                                    </span>
                                        </div>
                                        <div class="comments-line">
                                            <span class="comments-name">
                                    长马小秘书:
                                    </span>
                                            <span class="comments-cont-w">
                                    @喵大白 我已经收到邀请啦，不仅有鲁健，还有花样滑冰世界冠军陈露，著名演员金亮和梁艺馨！
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="p6-line clearfix">
                            <div class="hand-img">
                                <div class="yinfei-hand">
                                </div>
                            </div>
                            <div class="cont">
                                <div class="name">喵大白</div>
                                <div class="cont-w">
                                    更多明星嘉宾炫彩来袭。。。
                                </div>
                                <div class="picture">
                                    <div class="p6-zihao-icon">
                                        <img src="images/jb4.jpg" style="width: 200px">
                                        <img src="images/jb5.jpg" style="width: 200px">
                                        <img src="images/jb6.jpg" style="width: 200px;margin-top:20px">
                                        <img src="images/jb7.jpg" style="width: 200px;margin-top:20px">
                                    </div>
                                </div>
                                <div class="Thumb-comments_D">
                                    <div class="p6-line-time">
                                        29分前
                                    </div>
                                    <div class="Thumb-comments">
                                        <div class="Thumb" data-thumbool="false">
                                            <div class="Thumb-cancel">
                                            </div>
                                        </div>
                                        <div class="comments">
                                        </div>
                                    </div>
                                    <div class="Thumb-comments-icon" data-iconbool="false">
                                    </div>
                                </div>
                                <div class="p6Thumb-comments-jiao">
                                </div>
                                <div class="Thumb-comments_D-cont">
                                    <div class="Thumb-cont">
                                        <div class="Thumb-line_D">
                                        </div>
                                    </div>
                                    <div class="comments-cont">
                                        <div class="comments-line">
                                            <span class="comments-name">
                                    喵小受:
                                    </span>
                                            <span class="comments-cont-w">
                                    哇噻，这么多明星关注长城马拉松呀!
                                    </span>
                                        </div>
                                        <div class="comments-line">
                                            <span class="comments-name">
                                    长马小秘书:
                                    </span>
                                            <span class="comments-cont-w">
                                    一起奔跑吧，喵~~
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="p6-line clearfix">
                            <div class="hand-img">
                                <div class="sunchen-hand">
                                </div>
                            </div>
                            <div class="cont">
                                <div class="name">腾提度体育</div>
                                <div class="cont-w">
                                    7月24日（周日），跑步猫体能训练中心，“智胜长马，决胜万里”长马大师学院第二期即将拉开帷幕，有理论有实践，还有人工呼吸哦!
                                </div>
                                <div class="picture">
                                    <div class="p6-zihao-icon">
                                        <img src="images/d1.jpg" style="width: 200px">
                                        <img src="images/d2.jpg" style="width: 200px">
                                        <img src="images/d3.jpg" style="width: 200px;margin-top:20px">
                                        <img src="images/d4.jpg" style="width: 200px;margin-top:20px">
                                    </div>
                                </div>
                                <div class="Thumb-comments_D">
                                    <div class="p6-line-time">
                                        29分前
                                    </div>
                                    <div class="Thumb-comments">
                                        <div class="Thumb" data-thumbool="false">
                                            <div class="Thumb-cancel">
                                            </div>
                                        </div>
                                        <div class="comments">
                                        </div>
                                    </div>
                                    <div class="Thumb-comments-icon" data-iconbool="false">
                                    </div>
                                </div>
                                <div class="p6Thumb-comments-jiao">
                                </div>
                                <div class="Thumb-comments_D-cont">
                                    <div class="Thumb-cont">
                                        <div class="Thumb-line_D">
                                            <span class="Thumb-line">
                                             秦始皇
                                            </span>
                                        </div>
                                    </div>

                                     <div class="comments-cont">
                                        <div class="comments-line">
                                            <span class="comments-name">
                                   长马小秘书:
                                    </span>
                                            <span class="comments-cont-w">
                                    组委会精心安排了人工呼吸，没有练习的都不能走哦
                                    </span>
                                        </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="p6-line clearfix">
                            <div class="hand-img">
                                <div class="siyuan-hand">
                                </div>
                            </div>
                            <div class="cont">
                                <div class="name">长马小秘书</div>
                                <div class="cont-w">
                                   7月24日，下午13：30——17：00，北京市朝阳区光华路9号光华路SOHO二期A座西入口下沉式广场B28-B29跑步猫体能训练中心，长马大师学院等你来哦！
                                </div>
                                <div class="picture">
                                    <div class="p6-zihao-icon">
                                        <img src="images/map.jpg" style="width: 95%">
                                    </div>
                                </div>
                                <div class="Thumb-comments_D">
                                    <div class="p6-line-time">
                                        40分前
                                    </div>
                                    <div class="Thumb-comments">
                                        <div class="Thumb" data-thumbool="false">
                                            <div class="Thumb-cancel">
                                            </div>
                                        </div>
                                        <div class="comments">
                                        </div>
                                    </div>
                                    <div class="Thumb-comments-icon" data-iconbool="false">
                                    </div>
                                </div>
                                <div class="p6Thumb-comments-jiao">
                                </div>
                                <div class="Thumb-comments_D-cont">
                                    <div class="Thumb-cont">
                                        <div class="Thumb-line_D">
                                            <span class="Thumb-line">
                                             孟姜女
                                            </span>
                                        </div>

                                    </div>

                                     <div class="comments-cont">
                                        <div class="comments-line">
                                            <span class="comments-name">
                                    孟姜女:
                                    </span>
                                            <span class="comments-cont-w">
                                    收到
                                    </span>
                                        </div>
                                        <div class="comments-line">
                                            <span class="comments-name">
                                    runner:
                                    </span>
                                            <span class="comments-cont-w">
                                   收到
                                    </span>
                                        </div>
                                        <div class="comments-line">
                                            <span class="comments-name">
                                    喵喵:
                                    </span>
                                            <span class="comments-cont-w">
                                   收到
                                    </span>
                                        </div>
                                        <div class="comments-line">
                                            <span class="comments-name">
                                    飞毛腿:
                                    </span>
                                            <span class="comments-cont-w">
                                  一定去！
                                    </span>
                                        </div>
                                        <div class="comments-line">
                                            <span class="comments-name">
                                    风火轮:
                                    </span>
                                            <span class="comments-cont-w">
                                   楼上怎么不排队，收到
                                    </span>
                                        </div>

                                         <div class="comments-line">
                                            <span class="comments-name">
                                    阿飞:
                                    </span>
                                            <span class="comments-cont-w">
                                   哈哈，收到
                                    </span>
                                        </div> <div class="comments-line">
                                            <span class="comments-name">
                                    岳云喵:
                                    </span>
                                            <span class="comments-cont-w">
                                   收到
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </section>
            <section class="page-7">
                <div class="content">
                    <div class="p7-icon"></div>
                </div>
            </section>
        </div>
        <div class="up"><i></i></div>
    </div>
    <!-- main(end) -->
    <!-- 浮层模块(start) -->
    <div class="modal hide">
    </div>

    <div class="f-banana" data-f="banana">
    <!--<div class="banana1">-->
    <!--<div class="f-phone-Shut" data-shut="banana">-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="banana2">-->
    <!--<div class="f-phone-Shut" data-shut="banana">-->
    <!--</div>-->
    <!--</div>-->

    <div class="banana0">
        <img src="images/banana-dc8481a72e.png">

        <div class="f-phone-Shut" data-shut="banana">
        </div>
    </div>
</div>
    <!-- 浮层模块(end) -->
    <script type="text/javascript">
    $(function() {
        modjs.use('app');
    });
    </script>
    <script type="text/javascript" src="js/main.js"></script>
    <div id="orientLayer" class="mod-orient-layer">
        <div class="content">
            <i class="icon"></i>
            <div class="desc">为了更好的体验，请使用竖屏浏览</div>
        </div>
    </div>
    <style type="text/css">
    .mod-orient-layer {
        display: none;
        position: fixed;
        height: 100%;
        width: 100%;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        background: #000;
        z-index: 9997
    }
    
    .mod-orient-layer .content {
        position: absolute;
        width: 100%;
        top: 45%;
        margin-top: -75px;
        text-align: center
    }
    
    .mod-orient-layer .icon {
        display: inline-block;
        width: 67px;
        height: 109px;
        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIYAAADaCAMAAABU68ovAAAAXVBMVEUAAAD29vb////x8fH////////x8fH5+fn29vby8vL////5+fn39/f6+vr////x8fH////////+/v7////09PT////x8fH39/f////////////////////x8fH///+WLTLGAAAAHXRSTlMAIpML+gb4ZhHWn1c2gvHBvq1uKJcC6k8b187lQ9yhhboAAAQYSURBVHja7d3blpowFIDhTUIAOchZDkre/zE7ycySrbUUpsRN2/1fzO18KzEqxEVgTiZNfgmmtxRc8iaR8HNe8x4BtjQePKayYCIoyBSgvNNE1AkNSHqZyLqk97EgUCCHBzZ5mkg7ScvIJuIyOyXBRFxgpqWZyGsAZLB1KjsJi8nutHU4JCRbFRH8tmirI9k8Jx2sqNs8K/m0LQkrktO2crgcgXGB4AiTEsB0hJfo9MGgX7CGcYiYwQxmMOOvZwRhBG8tCoMXjBDeXvWCEcHbi14wgCBmMIMZzGAGM5jxETNwzMAxA8cMHDNwzMAxA8cMHDNwzMAxA8cMHDNwzMAxY6E2rUQxnH2tz9cirlJFwFBJedaPnUv0M7++egPDE8iAJcIDmxwH5wwv9vUviw2kLbVO3TJU5uul/EyB0FoLp4x60PdGUd3qPurrWyjGGTc05u+1dcgI7/+tCCPARWGhH7o5Y7RCf+bH9ctXLp6v2BVDxfqz0oPXeSVaNtINo/1SXDv4dck8IIkbhtC2ol+iouEonTBCbYvVMnXOjxww6s/RFrBUpXHh/gw1rHj5d/qhYn9Gpk2FWh6xRBRX5Oj3Znh2Sq49/L6+y8pB26q9GbE2dbA2mVbx6I+7MfBglLCttm73ZQi7AD3iL4HqjFYJHSPRppqaUaJ3ATpGa+ckpGak2hRRMyqjGMkvl+xyFeSMwjAqcsZgGDdyhl0oNTnDN4yenJGZFGxNChP5/Y3efh6SM2rDOJMzboYxkDMqwyjIGcIw6F+io2FU1IxIm1JqRmgXSkvNKNCXeTpGrU0JNSO2c6LIGPgCS8AuDHz9ta0SXWDtxoDRH+MqlbC2Dt2G2JFRadtQZt2qq/orGowdGb2euxYiqWEpVWhTBnszoNAPdStuQwxqf0aocdWKW4Z+DfszIh8pxJqbuCE4YAC+4bm0evtipjpgJHeFnyyt1Ku2xa0bhjxr27p75rECNwyI9ZwvXkHq+7aTaMEV44YYy/spfgjgjNHaWW+GeUhGEX7tLlVinIFDDSgnOwhi1V6bU0b6tVS9eAERe863g4dRrtiHdc6o+nn5vtyVVgR79Cqt4uL6gfHPQyGqtP2vf7HADGbcYwaOGThm4JiBYwaOGThm4JiBYwaOGThm4JiBYwaOGThm4JiBYwaOGThm4JjhtOM+J/AgT008yDMkN/dPP9hzS8zAMQN3OEYeekp5YU7KOKXwVXqiY+QS7smcinGKABWdiBgpPJTSMHJ4KidhhPBUSMLw4CmPhKHgKUXCkHsygum71ftNSgCX6bsl8FQyfbcL5EdYsDk0R3j7aiA5wpt5AjKg/2gLJEBD/0Hf2OOf/vRrj6z/7GtP4B3nMKyjHA12kIPSjnJs3FEO0TvKkYJHOWCR+rjJH0Vn6fI5PjNbAAAAAElFTkSuQmCC');
        transform: rotate(90deg);
        -webkit-transform: rotate(90deg);
        -webkit-animation: rotation infinite 1.5s ease-in-out;
        animation: rotation infinite 1.5s ease-in-out;
        -webkit-background-size: 67px;
        background-size: 67px
    }
    
    .mod-orient-layer .desc {
        margin-top: 20px;
        font-size: 15px;
        color: #fff
    }
    </style>
    <script type="text/javascript" src="http://tajs.qq.com/h5?sId=500001636" charset="UTF-8"></script>
    <script>
    (function() {



        var orientLayer = document.getElementById("orientLayer");
        //判断横屏竖屏
        function checkDirect() {
            if (document.documentElement.clientHeight >= document.documentElement.clientWidth) {
                return "portrait";
            } else {
                return "landscape";
            }
        }

        //显示屏幕方向提示浮层
        function orientNotice() {
            var orient = checkDirect();
            if (orient == "portrait") {
                orientLayer.style.display = "none";
            } else {
                orientLayer.style.display = "block";
            }
        }

        orientNotice();
        window.addEventListener("onorientationchange" in window ? "orientationchange" : "resize", function() {
            setTimeout(orientNotice, 200);
        });
    })();
    </script>
</body>

</html>
