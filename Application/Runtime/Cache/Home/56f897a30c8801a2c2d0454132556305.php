<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0023)http://www.hdb.com/post -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>发布活动</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta charset="utf-8">
    <meta property="qc:admins" content="241045133560426375747716">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <link rel="dns-prefetch" href="http://img2.hudongba.com/">
    <link rel="dns-prefetch" href="http://static.hudongba.com/">
    <link rel="dns-prefetch" href="http://img1.hudongba.com/">
    <link rel="apple-touch-icon" href="http://img1.hudongba.com/static_v4/images/other/icon_72x72.png">
    <link rel="icon" type="image/x-icon" href="http://www.hdb.com/favicon.ico" size="16x16 24x24 32x32">
    <link rel="shortcut icon" type="image/x-icon" href="http://www.hdb.com/favicon.ico">
    <link rel="stylesheet" href="/Public/css/common.20160322_190354.min.css">
    <link rel="stylesheet" href="/Public/css/post.20160322_190354.min.css">
    <style>[ms-controller],[ms-important]{display:none}</style>
    <script src=".//Public/js/jquery-1.7.2.min.js"></script>
    <script>
        var _pub_client = "mobile_ios";
        var _imgCdn="http://img1.hudongba.com";
        var _domain="http://www.hdb.com/";
        var _HDB_SOURCE_KEY = "hdb_source";
        var _HDB_POS_KEY = "hdb_pos";
        var _isNoAlertUser = "";// 详情页外链点击是否不弹出提示框
        var _fmShezhi;
        var dataForShare={
            weixin_icon:"http://img1.hudongba.com/images/share/other_weixin_msg_3.png",
            weixin_tl_icon:"http://img1.hudongba.com/images/share/other_weixin_tl_3.png",
            weixin_url:_domain,
            qq_icon:"http://img1.hudongba.com/images/share/other_qq_3.png",
            weibo_icon:"http://img1.hudongba.com/images/share/other_weibo_3.png",
            url:_domain,
            title:"互动吧，免费发布、传播活动，最大化享受微信传播红利。",
            description:"互动吧，免费提供活动发布、管理、传播、收款等全环节服务，通过互动吧，您可以轻松在微信朋友圈、聊天群里组织各类活动。",
            sms:"互动吧，免费提供活动发布、管理、传播、收款等全环节服务，通过互动吧，您可以轻松在微信朋友圈、聊天群里组织各类活动。http://hudong.ba",
            appId:"wx2eb9d27e0e24ec11",
            callback:function(){_$(_api3._shareCount,"info_id=0&info_type=other");}
        };
        var appInfo={
            app_v:4.0,
            info_v:2.1,
            system:"",
            pub_system:"mb"
        };
        var _config={
            _showBtn:1
        };

    </script>
    <script>
    </script>
</head>

<body>
<div class="outSide">
    <div class="post_nav">
        <ul class="post_nav_ul">
            <li class="post_nav_li">
            </li>
            <li class="post_nav_li">
                <a class="sbox1" href="<?php echo U('Index/publish',array('type'=>theme));?>" ontouchstart="">
                    <div class="sbox_k">
                        <p class="sbox_k_pic"><img class="type_Pic" src="/Public/images/91450926536753_party9.png" alt="" style="height: 54px;"></p>
                        <h2 class="sbox_k_title">自定义主题</h2>
                        <p class="sbox_k_desc">适用于所有活动类型</p>
                        <p class="sbox_k_draft ">[草稿]</p>
                    </div>
                </a>
                <a class="sbox1" href="<?php echo U('Index/publish',array('type'=>outdoor));?>" ontouchstart="">
                    <div class="sbox_k">
                        <p class="sbox_k_pic"><img class="type_Pic" src="/Public/images/01458111537058_party0.png" alt="" style="height: 54px;"></p>
                        <h2 class="sbox_k_title">邀约户外</h2>
                        <p class="sbox_k_desc">约跑 徒步 骑行 登山</p>
                        <p class="sbox_k_draft ">[草稿]</p>
                    </div>
                </a>
                <a class="sbox1" href="<?php echo U('Index/publish',array('type'=>party));?>" ontouchstart="">
                    <div class="sbox_k">
                        <p class="sbox_k_pic"><img class="type_Pic" src="/Public/images/51450926571530_party5.png" alt="" style="height: 54px;"></p>
                        <h2 class="sbox_k_title">组织聚会</h2>
                        <p class="sbox_k_desc">聚餐 派对 K歌 相亲</p>
                        <p class="sbox_k_draft ">[草稿]</p>
                    </div>
                </a>
            </li>
            <li class="post_nav_li">
                <a class="sbox1" href="<?php echo U('Index/publish',array('type'=>salon));?>" ontouchstart="">
                    <div class="sbox_k">
                        <p class="sbox_k_pic"><img class="type_Pic" src="/Public/images/21450926416545_party2.png" alt="" style="height: 54px;"></p>
                        <h2 class="sbox_k_title">开办沙龙</h2>
                        <p class="sbox_k_desc">读书 品茶 戏剧 电影</p>
                        <p class="sbox_k_draft ">[草稿]</p>
                    </div>
                </a>
                <a class="sbox1" href="<?php echo U('Index/publish',array('type'=>promotion));?>" ontouchstart="">
                    <div class="sbox_k">
                        <p class="sbox_k_pic"><img class="type_Pic" src="/Public/images/31450926467234_party3.png" alt="" style="height: 54px;"></p>
                        <h2 class="sbox_k_title">开展促销</h2>
                        <p class="sbox_k_desc">折扣 微商 体验 试用 </p>
                        <p class="sbox_k_draft ">[草稿]</p>
                    </div>
                </a>
                <a class="sbox1" href="<?php echo U('Index/publish',array('type'=>meeting));?>" ontouchstart="">
                    <div class="sbox_k">
                        <p class="sbox_k_pic"><img class="type_Pic" src="/Public/images/61450926450084_party6.png" alt="" style="height: 54px;"></p>
                        <h2 class="sbox_k_title">举办会议</h2>
                        <p class="sbox_k_desc">峰会 论坛 路演 分享</p>
                        <p class="sbox_k_draft ">[草稿]</p>
                    </div>
                </a>
            </li>
            <li class="post_nav_li">
                <a class="sbox1" href="<?php echo U('Index/publish',array('type'=>'class'));?>" ontouchstart="">
                    <div class="sbox_k">
                        <p class="sbox_k_pic"><img class="type_Pic" src="/Public/images/21450926429457_party2.png" alt="" style="height: 54px;"></p>
                        <h2 class="sbox_k_title">开设课程</h2>
                        <p class="sbox_k_desc">创业 培训 讲座 文化</p>
                        <p class="sbox_k_draft ">[草稿]</p>
                    </div>
                </a>
                <a class="sbox1" href="<?php echo U('Index/publish',array('type'=>article));?>" ontouchstart="">
                    <div class="sbox_k">
                        <p class="sbox_k_pic"><img class="type_Pic" src="/Public/images/31450926440235_party3.png" alt="" style="height: 54px;"></p>
                        <h2 class="sbox_k_title">发表文章</h2>
                        <p class="sbox_k_desc">资讯 感悟 故事 评论 </p>
                        <p class="sbox_k_draft ">[草稿]</p>
                    </div>
                </a>
                <a class="sbox1" href="<?php echo U('Index/publish',array('type'=>fromvote));?>" ontouchstart="">
                    <div class="sbox_k">
                        <p class="sbox_k_pic"><img class="type_Pic" src="/Public/images/61450926458781_party6.png" alt="" style="height: 54px;"></p>
                        <h2 class="sbox_k_title">发起投票</h2>
                        <p class="sbox_k_desc">调研 测试 征集 选秀</p>
                        <p class="sbox_k_draft ">[草稿]</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="lookup_ts"><p>登录互动吧App，获取更多发布支持</p></div>
    <div class="lookup_btn">
        <a class="look_find" href="http://www.hdb.com/" ontouchstart=""><span>查看热门活动</span></a>
    </div>

    <div class="bottom_btn" id="post_page_unionstate">
        <a id="a_top_login" href="http://www.hdb.com/login" style="display: none;">登录</a>
        <a id="a_top_register" class="a_hui" href="http://www.hdb.com/register" style="display: none;">注册</a>
        <a id="a_login" class="yjfk" href="javascript:void(0)" onclick="_user._toLogout()" ontouchstart="">退出登录</a>
        <a class="yjfk" ontouchstart="" href="http://www.hdb.com/feedback?hdb_from=WapPost">意见反馈</a>
    </div>
</div>

<!--底部悬浮引导下载-->
<div class="guide_Download" id="guide_Download" style="display: ">
    <div class="guide_K">
        <a href="javascript:void(0)" onclick="_download(&#39;/download?from=wap_post&#39;);" class="down">
            <img class="icon_logo_mh3" src="/Public/images/icon_logo_mh3.png">
            <strong>立即下载 &gt;</strong>
        </a>
        <a href="javascript:void(0)" onclick="_guide_DownloadClose._init()" title="关闭" class="close"></a>
    </div>
</div>

<iframe id="post_upload_iframe" name="_upload"></iframe>
<div id="post_map">
    <iframe id="post_map_iframe"></iframe>
</div>

<div class="tc_c" id="moreGn">
    <h1 class="moregn_h1">下载App使用高级功能</h1>
    <div class="olOut">
        <ol id="moregn_ol_vote" class="moregn_ol"><li>设置投票邀请码，发布你的私密投票</li><li>即时收取投票、评论通知，随时关注投票进展</li><li>添加图片和表情，编辑字体颜色、尺寸</li></ol>
        <ol id="moregn_ol_party" class="moregn_ol"><li>添加更多报名项目，设置报名费用和报名人数</li><li>添加图片和视频，编辑字体颜色、大小</li><li>发布后管理报名人员，收集报名信息</li></ol>
        <ol id="moregn_ol_article" class="moregn_ol"><li>即时收取评论通知，随时了解文章关注度</li><li>添加图片和表情，编辑字体颜色、尺寸</li><li>其他高级发布功能，更多特色玩法</li></ol>
    </div>
    <div class="moregn_btn"><a onclick="_g(_postLink._appDownload);" href="javascript:void(0)" class="l">立即下载</a><a onclick="_moreGn._hide();" href="javascript:void(0)" class="r">稍后再说</a></div>
</div>

<div class="tc_c" id="tc_video">
    <div class="tc_c_close"><div><img title="关闭" onclick="_videoTc._hide()" ontouchstart="" src="/Public/images/share_qr_close3.png"></div></div>
    <div class="tc_c_title"><p>请粘贴视频地址到下面的输入框</p></div>
    <div class="tc_c_nr"><input name="" type="text" id="media_input"></div>
    <div class="tc_c_ts2"><p>目前仅支持腾讯和优酷视频</p></div>
    <div class="tc_c_btn" ontouchstart="" onclick="_richText._mov()"><a>插入</a></div>
</div>
<div class="loadingDiv" id="loadingDiv" style="display:none;"><p class="pImg"><img src="/Public/images/loading2.gif"></p><p class="pTxt"></p></div>
<div id="cover"></div>
<div id="cover2"></div>
<div id="toast" class="toast"></div>
<div id="loading_center" class="loading_center">
    <div><img src="/Public/images/loading2.gif"></div>
    <div id="loading_center_text"></div>
</div>
<div id="alert" class="alert">
    <div id="alert_title"></div>
    <div id="alert_text"></div>
    <div id="alert_button"><button id="alert_button_ok" class="button_3" ontouchstart=""></button></div>
    <div id="alert_cancel" class="alert_cancel" ontouchstart="" onclick="_alert._hide()"></div>
</div>
<div id="tc_bmSuccess" style="display: none; z-index: 9999; position: fixed; left: 50%; top: 50%; margin-top: -40px; margin-left: -125px;">
    <div class="baoSuccess"><img src="/Public/images/pop_remmind_yes.png" class="successDui"><p id="sucess_text"></p></div>
</div>
<div class="tc_c" id="appDownts">
    <h1 class="appDownts_h1">下载互动吧App</h1>
    <div class="appDownts_nr">
        <p>使用互动吧App，随身查看活动报名情况</p>
    </div>
    <div class="appDownts_btn"><a onclick="_g(_postLink._appDownload);" href="javascript:void(0)" class="l">立即下载</a><a onclick="_tc._hide(&#39;appDownts&#39;);" href="javascript:void(0)" class="r">稍后再说</a></div>
</div>
<div id="div_topbar_title" style="display:none;">发布活动</div>
<div id="share_weixin" onclick="_shareInWeixin._hide()">
    <div><img id="share_weixin_guide"></div>
    <div><button ontouchstart="" class="button_3">关闭提示</button></div>
</div>
<div id="share_qq" onclick="_shareInQq._hide()">
    <div><img id="share_qq_guide"></div>
    <div><button ontouchstart="" class="button_3">关闭提示</button></div>
</div>
<div class="tc_c" id="tc_2weima">
    <div class="tc_c_close"><div><img title="关闭" onclick="_joinQr._hide()" ontouchstart="" src="./发布活动_files/share_qr_close3.png"></div></div>
    <div class="tc_c_title"><p class="font02">报名凭证</p></div>
    <div class="tc_c_nr">
        <p class="tc_c_nr_txt font03" id="p_dt_title"></p>
        <div class="tc_c_nr_pic tc_c_nr_pic_2 tc_c_nr_pic_5"><strong><img class="weima2 weima2_2" id="join_qr_img" src="./发布活动_files/loading2.gif"></strong></div>
        <div class="tc_c_ts2 font04">
            <div class="tc_c_ts2 font04">长按二维码可将报名凭<br>证保存至您的手机相册</div>
            <p class="bmTs_c font03"><a href="http://www.hdb.com/find/">更多精彩活动 &gt;</a></p>
        </div>
        <div class="tc_c_btn" ontouchstart="" onclick="_joinQr._download()" style="margin-top:10px;"><a class="font02">保存</a></div>
        <div class="tc_c_btn_load" ontouchstart=""><p><span class="font02">正在保存</span><img class="tc_c_btn_loading" src="./发布活动_files/loading2.gif"></p></div>
    </div>
</div>

<div class="tc_c" id="share_qr" style="display:none;">
    <div class="tc_c_close"></div>
    <div class="tc_c_title"><p class="font02">发送给好友</p></div>
    <div class="tc_c_nr">
        <p class="tc_c_nr_txt font03 txtP">1. 使用微信/手机QQ/微博客户端扫描以下二维码</p>
        <div class="tc_c_nr_pic"><img class="weima2" id="share_qr_img" src="./发布活动_files/loading2.gif"></div>
        <p class="tc_c_nr_txt font03 txtP">2. 使用这些客户端的分享功能将信息发送给好友</p>
    </div>
    <div class="tc_c_btn" ontouchstart=""><a class="font02" onclick="_qr._hide()" ontouchstart="">关闭提示</a></div>
</div>
<div class="tc_c" id="share_qr_1">
    <div class="tc_c_close"><div><img title="关闭" onclick="_qr._hide()" ontouchstart="" src="./发布活动_files/share_qr_close3.png"></div></div>
    <div class="tc_c_title"><p class="font02">分享二维码</p></div>
    <div class="tc_c_nr">
        <p class="tc_c_nr_txt font03" id="p_dt_title"></p>
        <div class="tc_c_nr_pic"><img class="weima2" id="share_qr_1_img" src="./发布活动_files/loading2.gif"></div>
        <div class="tc_c_ts font04">长按图片保存</div>
        <p class="tc_c_nr_txt font03" id="p_dt_title">可用于印刷品、幻灯片等其他方式的宣传</p>
    </div>
    <div class="tc_c_btn" ontouchstart="" onclick="_qr._download()"><a class="font02">保存</a></div>
    <div class="tc_c_btn_load" ontouchstart=""><p><span class="font02">正在保存</span><img class="tc_c_btn_loading" src="./发布活动_files/loading2.gif"></p></div>
</div>
<div id="login">
    <div class="tc_c_close"><div><img title="关闭" onclick="_login._hide()" ontouchstart="" src="./发布活动_files/share_qr_close3.png"></div></div>
    <div class="login_title">离成功只差登录</div>
    <div id="login_button"></div>
    <div class="login_more"><a href="javascript:_g(_link._login)" class="gray">使用其它方式登录</a></div>
</div>
<div id="seo" style="height:1px;overflow:hidden;margin-top:-1px;">
    <a href="http://www.hdb.com/" style="color:#dddddd;font-size:1px">互动吧</a>
    <a href="http://www.hdb.com/showinfo/page/1" style="color:#dddddd;font-size:1px;">活动列表</a>
    <a href=".//Public/js/发布活动.html" style="color:#dddddd;font-size:1px">互动吧-发布首页</a>
    <a href="http://www.hdb.com/post/vote" style="color:#dddddd;font-size:1px">互动吧-发布投票</a>
    <a href="http://www.hdb.com/post/party" style="color:#dddddd;font-size:1px">互动吧-发布活动</a>
    <a href="http://www.hdb.com/post/article" style="color:#dddddd;font-size:1px">互动吧-发布文章</a>
    <a href="http://www.hdb.com/find" style="color:#dddddd;font-size:1px">互动吧-热门活动</a>
</div>
<script>
    var _post = {
        _type : "post",
        _shareTitle : "最新发现：互动吧可以在微信朋友圈、聊天群里组织各类活动。"
    };
</script>
<script src=".//Public/js/comm.20160322_190354.min.js"></script>
<script src=".//Public/js/post.20160322_190354.min.js"></script>


<div id="qq-sendUrl-btn"></div></body></html>