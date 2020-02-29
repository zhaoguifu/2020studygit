<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:30:"./template/pc/view_product.htm";i:1559181938;s:54:"D:\phpstudy_pro\WWW\lijunge.com\template\pc\header.htm";i:1559181938;s:54:"D:\phpstudy_pro\WWW\lijunge.com\template\pc\footer.htm";i:1559181938;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $eyou['field']['seo_title']; ?></title>
<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" />
<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />

<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="yes" name="apple-touch-fullscreen">
<meta content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no, width=device-width" name="viewport" />
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/font-awesome.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/global.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/widget.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/variouscomponents.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/images.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/theme.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/color_0.css">
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.min.js"></script>
<!--[if !IE]><!-->
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/base.js"></script>
<!--<![endif]-->
<!--[if gte IE 9]>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/base.js"></script>
<![endif]-->
<!--[if lt IE 9]>
      <link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/font-awesome-ie7.min.css">
      <script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/selectivizr.js"></script>
      <script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/html5shiv.min.js"></script>
      <script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/respond.min.js"></script>
      <script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/modernizr.min.js"></script>
    <![endif]-->
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/lightbox.min.css" rel="stylesheet">
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.superslide.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/common.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/theme.js"></script>
<!-- feib -->
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/layer.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/language.js"></script>
<!-- plugins -->
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.formsvalidation.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.nodecommon.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/extend.js"></script>
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/animate.min.css">
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/animate.min.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/components.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.menu_style.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.init.js"></script>
<script type="text/javascript">
$(function(){
    dataAnimate();
    (function($,lanno){
        if(lanno === "" || lanno === "default"){
            return '';
        }
        $(".w-languege").each(function(){
            $(this).find("a").each(function(){
                if($(this).data("lanno") === lanno){
                    $(this).addClass("cur");
                }else{
                    if($(this).hasClass("cur")){
                        $(this).removeClass("cur");
                    }
                }
            });
        });
    })(jQuery,"cn");
});
</script>
</head>
<body>
<div class="body">
  <div class="w-container w-header w-header-common">
    <div class="topLogBox topLogBoxPc">
      <div class="topLogBox-in">
        <div class="clearfix"> </div>
      </div>
    </div>
    <div class="row clearfix">
      <div class="mobile-nav-toggle"><i class="fa fa-navicon fa-2x"></i></div>
      <div class="nav_right_mask"></div>
      <div class="row_top clearfix">
        <div class="column column3">
          <div class="col-logo">
            <div class="w-logo">
              <h1 style="display:none;"><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/"></a></h1>
              <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/" class="w-logo-img"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>"/> </a> </div>
          </div>
        </div>
        <div class="column column9 clearfix">
          <div class="w-nav g-active-add">
            <div class="w-nav-in">
              <ul class="nav_inner clearfix" id="g-web-ul-menu" style="display:none;">
                <li <?php if(CONTROLLER_NAME == 'Index'): ?>class="active"<?php endif; ?>><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/" >首页</a><i class="nav_simpline_cur"></i></li>
                <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 9; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "active", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <li class="<?php echo $field['currentstyle']; ?>"><a href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a><i class="nav_simpline_cur"></i></li>
                <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>    
                <div class="nav_moveBox"></div>
              </ul>
            </div>
          </div>
           
        </div>
      </div>
      <div class="col-right clearfix">
        <div class="w-nav g-active-add">
          <div class="w-nav-in">
            <ul class="nav_inner clearfix">
              <li <?php if(CONTROLLER_NAME == 'Index'): ?>class="active"<?php endif; ?>><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/" >首页</a><i class="nav_simpline_cur"></i></li>
              <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 9; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "active", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
              <li class="<?php echo $field['currentstyle']; ?>"><a href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a><i class="nav_simpline_cur"></i></li>
              <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>    
              <div class="nav_moveBox"></div>
            </ul>
          </div>
        </div>
        
        <div class="topLogBox topLogBoxTel">
          <div class="topLogBox-in">
            <div class="col-com"> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="w-container bannerBox ">
    <div class="banner"> <img src="<?php if(!(empty($eyou['field']['banner']) || (($eyou['field']['banner'] instanceof \think\Collection || $eyou['field']['banner'] instanceof \think\Paginator ) && $eyou['field']['banner']->isEmpty()))): ?><?php echo $eyou['field']['banner']; else: ?><?php echo gettoptype($eyou['field']['typeid'],'banner'); endif; ?>" alt="<?php echo $eyou['field']['typename']; ?>" title="<?php echo $eyou['field']['typename']; ?>" style=""  /> <a href="javascript:void(0);" target="_self"><span  style="display:none;">none</span></a> </div>
  </section>
  <div class="w-container w-main">
    <div class="row">
      <div class="wrap-content-in w-system w-productcom">
        <div class="w-system-in">
          <div class="product-detail-wrap">
            <div class="w-com-content">
              <div class="w-breadcrumbs">  <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagPosition = new \think\template\taglib\eyou\TagPosition; $__VALUE__ = $tagPosition->getPosition($typeid, "", "crumb"); echo $__VALUE__; ?> </div>
              <div class="product-detail-top2">
                <div class="product-title-top">
                  <h2><?php echo $eyou['field']['title']; ?></h2>
                </div>
                <div class="product-detail-images">
                  <ul class="bxslider">
                  <?php if(is_array($eyou['field']['image_list']) || $eyou['field']['image_list'] instanceof \think\Collection || $eyou['field']['image_list'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $eyou['field']['image_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                    <li onclick="showLightBox(<?php echo $i; ?>);" data-imageid="<?php echo $i; ?>"> <img class="g-cover" style="cursor:pointer;" src="<?php echo $field['image_url']; ?>" alt="<?php echo $eyou['field']['title']; ?>"> </li>
                  <?php echo isset($field["ey_1563185380"])?$field["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($field["ey_1563185376"]))?$field["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>  
                  </ul>
                  <script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.bxslider.js"></script>
                  <link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/jquery.bxslider.css">
                  <script type="text/javascript">
                $(function () {
                    $('.bxslider').bxSlider({
                        mode: 'horizontal',
                        pause: 5000
                    });
                });
        </script>
                  <div style="display:none;"> 
                  <?php if(is_array($eyou['field']['image_list']) || $eyou['field']['image_list'] instanceof \think\Collection || $eyou['field']['image_list'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $eyou['field']['image_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                  <a data-lightbox="image-<?php echo $i; ?>" href="<?php echo $field['image_url']; ?>"> <span id="imageid<?php echo $i; ?>"></span> </a>
                  <?php echo isset($field["ey_1563185380"])?$field["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($field["ey_1563185376"]))?$field["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>   
                  </div>
                </div>
                <div class="rotatePicbox-tel">
                  <div class="imgSlideMain clearfix">
                    <div id="imgSlide2" data-role="slide" class="imgSlide">
                      <ul>
                        <?php if(is_array($eyou['field']['image_list']) || $eyou['field']['image_list'] instanceof \think\Collection || $eyou['field']['image_list'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $eyou['field']['image_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                        <li><a href="javascript:void(0);"><img class="g-cover" src="<?php echo $field['image_url']; ?>"></a></li>
                        <?php echo isset($field["ey_1563185380"])?$field["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($field["ey_1563185376"]))?$field["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>   
                      </ul>
                    </div>
                    <div class="navSlideBox">
                      <ul class="navSlide">
                        <ul>
                          <?php if(is_array($eyou['field']['image_list']) || $eyou['field']['image_list'] instanceof \think\Collection || $eyou['field']['image_list'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $eyou['field']['image_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 20 ); ?>
                          <li class="i_point <?php if($mod == '1'): ?>active<?php endif; ?>"><?php echo $i; ?></li>
                          <?php echo isset($field["ey_1563185380"])?$field["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($field["ey_1563185376"]))?$field["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                        </ul>
                      </ul>
                    </div>
                  </div>
                  <script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/c_wap.js"></script> 
                  <script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/c_wap2.js"></script> 
                  <script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/slide.js"></script> 
                  <script>
        setTimeout(function () {
            imgSlideInit('#imgSlide2', 1000)
        }, 600);
    </script> 
                </div>
                <div class="product-detail-info">
                  <div class="product-detail-info-in">
                    <div class="prd_detInfo_con">
                      <div class="product-short-sum"><?php echo $eyou['field']['seo_description']; ?><br/>
                        <br/>
                        <br/>
                      </div>
                      <div class="product-grayBox clearfix">
                        <div class="product-prices">
                        <?php if(is_array($eyou['field']['attr_list']) || $eyou['field']['attr_list'] instanceof \think\Collection || $eyou['field']['attr_list'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $eyou['field']['attr_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                          <div class="price-sale"> <?php echo $field['attr_name']; ?>： <span class="num"> <?php echo $field['attr_value']; ?> </span> </div>
                        <?php echo isset($field["ey_1563185380"])?$field["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($field["ey_1563185376"]))?$field["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                        </div>
                        <div class="collect_share clearfix"> </div>
                      </div>
                    </div>
                  </div>
                  <div class="prd_detInfo_con">
                    <div class="product-properies-groups"> </div>
                  </div>
                </div>
                <div class="clear"></div>
              </div>
            </div>
            <div class="product-maincon">
              <div class="product-maincon-in">
                <style>
    .info_tab .cur_tab a{
        cursor:auto;
    }
</style>
                <div class="info_tab">
                  <div class="info_tab_in">
                    <ul class="clearfix">
                      <li class="cur_tab"><a href="javascript:void(0)">产品详细</a></li>
                    </ul>
                  </div>
                </div>
                <div class="product-descons">
                  <div class="descon_item" id="Tabitem537272">
                    <?php echo $eyou['field']['content']; ?> 
                  </div>
                </div>
                <div class="news-others">
                  <div class="pre-next" >
                  <div class="news-prev"> <?php  $tagPrenext = new \think\template\taglib\eyou\TagPrenext; $_result = $tagPrenext->getPrenext("pre");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( empty($__LIST__) ) : echo htmlspecialchars_decode("上一篇：&lt;a&gt;暂无&lt;/a&gt;");else: $field = $__LIST__;$field["title"] = text_msubstr($field["title"], 0, 100, false);?>
上一篇：<a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"> <?php echo $field['title']; ?> </a>
<?php endif; else: echo htmlspecialchars_decode("上一篇：&lt;a&gt;暂无&lt;/a&gt;");endif; $field = []; ?> </div>
                  <div class="news-next"> <?php  $tagPrenext = new \think\template\taglib\eyou\TagPrenext; $_result = $tagPrenext->getPrenext("next");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( empty($__LIST__) ) : echo htmlspecialchars_decode("下一篇：&lt;a&gt;暂无&lt;/a&gt;");else: $field = $__LIST__;$field["title"] = text_msubstr($field["title"], 0, 100, false);?>
下一篇：<a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"> <?php echo $field['title']; ?> </a>
<?php endif; else: echo htmlspecialchars_decode("下一篇：&lt;a&gt;暂无&lt;/a&gt;");endif; $field = []; ?> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="prddetail_foot_fixed" >
              <div class="prddetail_foot clearfix" style="width:100%;"> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="w-container w-footer">
    <div class="w-footer-section pdTop-default pdBottom-default" >
      <div class="w-footer-in" style="max-width:;">
        <div class="foot-mask" ></div>
        <div class="w-foot-content  pdTop-small pdBottom-small">
          <div class="li-div" data-comunique="f0b3a81e5ad8e414efd446da1355311e">
            <div class="w-space space-b noChoose"  style="height:40px;">
              <div class="stretch-b"></div>
            </div>
          </div>
          <div class="li-div">
            <div class="w-title w-title16"  style="">
              <div class="w-title-in">
                <div class="w-title-inner">
                  <div class="title-h-in">
                    <h2 class="color_main color_h" style="" data-type="title">联系方式</h2>
                    <span class="color_vice color_span" style="" data-type="subtitle">CONTACT US</span> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="li-div">
            <div class="w-space space-b noChoose"  style="height:35px;">
              <div class="stretch-b"></div>
            </div>
          </div>
          <div class="li-div col-li-div">
            <div class="col-table">
              <table class="div-table div-table-first" width="100%" cellspacing="0" data-pid="1101941" cellpadding="0" border="0">
                <tbody>
                  <tr>
                    <td class="td-w" width="46.271186440677965%"><div class="div-padding">
                        <div class="li-div">
                          <div class="w-text"  style=""> <font size="4" color="#444444"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></font> </div>
                        </div>
                        <div class="li-div">
                          <div class="w-space space-b noChoose"  style="height:20px;">
                            <div class="stretch-b"></div>
                          </div>
                        </div>
                        <div class="li-div" data-comunique="92c4d6d112b3c34a2d1e562b0ffeab02">
                          <div class="w-text"  style=""> 电话：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?><br/>
                              传真：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; ?><br/>
                              邮箱：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_3"); echo $__VALUE__; ?><br/>
                              Q Q：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_4"); echo $__VALUE__; ?><br/>
                              地址：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_5"); echo $__VALUE__; ?><br/>
                          </div>
                        </div>
                      </div></td>
                    <td class="td-w" width="4.23728813559322%"><div class="div-padding">
                        <div class="li-div">
                          <div class="w-space space-b noChoose"  style="height:40px;">
                            <div class="stretch-b"></div>
                          </div>
                        </div>
                      </div></td>
                    <td class="td-w" width="49.23728813559322%"><div class="div-padding">
                        <div class="li-div">
                          <div class="w-form"   style="">
                            <?php  $typeid = "5"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagGuestbookform = new \think\template\taglib\eyou\TagGuestbookform; $_result = $tagGuestbookform->getGuestbookform($typeid, "default", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                          <form method="POST" class="guest-form" enctype="multipart/form-data" action="<?php echo $field['action']; ?>" id="myform">
                            <div class="li-div">
                              <div class="w-form-section  w-form-UL clearfix" style="">
                                <div class="w-form-shartText">
                                  <label class="w-label-form"> <span><?php echo $field['itemname_1']; ?></span> </label>
                                  <div class="w-form-fr" style="">
                                    <input class="w-text-form" style="width:100%" type="text" name="<?php echo $field['attr_1']; ?>" id="attr_1"/>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="li-div">
                              <div class="w-form-section  w-form-UL clearfix" style="">
                                <div class="w-form-tel">
                                  <label class="w-label-form"> <span><?php echo $field['itemname_2']; ?></span> </label>
                                  <div class="w-form-fr" style="">
                                    <input class="w-text-form" style="width:100%" type="tel" name="<?php echo $field['attr_2']; ?>" id="attr_2">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="li-div">
                              <div class="w-form-section  w-form-UL clearfix" style="">
                                <div class="w-form-Email">
                                  <label class="w-label-form"> <span><?php echo $field['itemname_3']; ?></span> </label>
                                  <div class="w-form-fr" style="">
                                    <input class="w-text-form" style="width:100%" type="email" name="<?php echo $field['attr_3']; ?>" id="attr_3"/>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="li-div">
                              <div class="w-form-section w-form-UL clearfix"  style="">
                                <div class="w-form-largeText">
                                  <label class="w-label-form"> <?php echo $field['itemname_4']; ?> </label>
                                  <div class="w-form-fr" style="">
                                    <textarea class="w-textarea-form" style="width:100%;height:5em" name="<?php echo $field['attr_4']; ?>" id="attr_4"></textarea>
                                    <input class="w-text-form" type="hidden"/>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php echo $field['hidden']; ?>
                            </form>
						  <script type="text/javascript">
                            function checkForm()
                            {
                              if(document.getElementById('attr_1').value.length == 0)
                              {
                                alert('请输入<?php echo $field['itemname_1']; ?>');
                                return false;
                              }
                              if(document.getElementById('attr_2').value.length == 0)
                              {
                                alert('请输入<?php echo $field['itemname_2']; ?>');
                                return false;
                              }
                              document.getElementById('myform').submit();
                            }
                          </script>
                        <?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                            <div class="w-form-submit">
                              <div class="w-buttom" style="">
                                <div class="btn-default-w g-form-components" onclick="checkForm();"> <span class="btn-inner">提交</span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="li-div">
            <div class="w-space space-b noChoose"  style="height:40px;">
              <div class="stretch-b"></div>
            </div>
          </div>
          <div class="li-div">
            <div class="w-text"  style="">
              <div class="line" style="background:#E9E9E8; position:absolute; width:5000px;height:1px; left:-1500px;"></div>
              <div style="text-align:center; padding-top:1em; font-size:95%;"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; ?> &nbsp;&nbsp;<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_recordnum"); echo $__VALUE__; ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="w-service-fixed">
      <div class="service-item bg_s_default color_s_default aHoverbg_deepen aHovercolor_deepen service-item-top"> <i class="fa fa-caret-up"></i>
        <div class="top" onclick="$('body,html').animate({scrollTop: 0}, 'normal');">TOP</div>
      </div>
      <script type="text/javascript">
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 20) {
                    $('.w-service-fixed .service-item-top').show();
                } else {
                    $('.w-service-fixed .service-item-top').hide();
                }
            });
        });
    </script> 
    </div>
  </div>
   <?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_thirdcode_pc"); echo $__VALUE__; ?>
  <!-- 应用插件标签 start -->
   <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $__VALUE__ = $tagWeapp->getWeapp("default"); echo $__VALUE__; ?>
  <!-- 应用插件标签 end -->
</div>
<div class="topTel" onclick="$('body,html').animate({scrollTop: 0}, 500);"><i class="fa fa-arrow-up"></i></div>

<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.global.js"></script> 
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.form.js"></script> 
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/lightbox.min.js"></script> 
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.product_detail.js"></script> 
</body>
</html>