<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:49:"./application/admin/template/ad_position\edit.htm";i:1582786087;s:76:"D:\phpstudy_pro\WWW\lijunge.com\application\admin\template\public\layout.htm";i:1582786087;s:76:"D:\phpstudy_pro\WWW\lijunge.com\application\admin\template\public\footer.htm";i:1559181938;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="/public/plugins/layui/css/layui.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/main.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/page.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/font/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="/public/static/admin/font/css/font-awesome-ie7.min.css">
<![endif]-->
<script type="text/javascript">
    var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
    var module_name = "<?php echo MODULE_NAME; ?>";
    var GetUploadify_url = "<?php echo url('Uploadify/upload'); ?>";
    var __root_dir__ = "";
    var __lang__ = "<?php echo $admin_lang; ?>";
</script>  
<link href="/public/static/admin/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="/public/static/admin/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<style type="text/css">html, body { overflow: visible;}</style>
<script type="text/javascript" src="/public/static/admin/js/jquery.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/public/static/admin/js/admin.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="/public/static/admin/js/common.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/public/plugins/layui/layui.js"></script>
<script src="/public/static/admin/js/myFormValidate.js"></script>
<script src="/public/static/admin/js/myAjax2.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>
</head>
<body class="ad_postion bodystyle" style="overflow-y: scroll;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    <div class="fixed-bar">
        <div class="item-title"><a class="back" href="javascript:history.back();" title="返回列表"><i class="fa fa-chevron-left"></i></a>
            <div class="subject">
                <h3>编辑广告</h3>
                <h5></h5>
            </div>
        </div>
    </div>
    <form class="form-horizontal" id="post_form" action="<?php echo url('AdPosition/edit'); ?>" method="post">
        <div class="ncap-form-default">
            <dl class="row">
                <dt class="tit">
                    <label for="title"><em>*</em>广告名称</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="title" value="<?php echo $field['title']; ?>" id="title" class="input-txt">
                    <span class="err"></span>
                    <p class="notic">保持唯一性，不可重复</p>
                </dd>
            </dl>
           
            <dl class="row" style="z-index: 2">
                <dt class="tit">
                    <label>广告图集</label>
                </dt>
                <dd class="opt">          
                    <div class="tab-pane" id="tab_imgupload">
                        <?php if($main_lang == $admin_lang): ?>
                        <a href="javascript:void(0);" onClick="GetUploadify(30,'','allimg','imgupload_call_back');" class="imgupload">
                            <i class="fa fa-cloud-upload"></i>新增广告
                        </a>
                        <?php endif; ?>
                        <input type="hidden" id="ImagesId">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td class="sort-list">
                                    <?php if(is_array($ad_data) || $ad_data instanceof \think\Collection || $ad_data instanceof \think\Paginator): $k = 0; $__LIST__ = $ad_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                        <div class="images_upload">
                                            <div class="ic">
                                                <div class='upimg' title="拖动修改排序" >
                                                    <div class='icaction' style="display: none" >
                                                        <span class="load_images" onclick="Images('<?php echo $vo['litpic']; ?>', 900, 600);">
                                                            <a href="javascript:void(0);" style="color:white">
                                                                <i class='fa fa-search-plus'></i>查看大图
                                                            </a>
                                                        </span>
                                                        <span class="load_images mr5" onclick="LoadImagesId('<?php echo $vo['id']; ?>');">
                                                            <i class='fa fa-photo'></i>更换图片
                                                        </span>
                                                    </div>
                                                    <div class='cover-bg' style="display: none" ></div>
                                                    <img id="<?php echo $vo['id']; ?>_Id" src="<?php echo $vo['litpic']; ?>"/>
                                                </div>

                                                <input type="hidden" name="img_id[]" value="<?php echo $vo['id']; ?>"/>
                                                <span class="span_input">
                                                    <input type="hidden" id="<?php echo $vo['id']; ?>_Litpic" name="img_litpic[]" value="<?php echo $vo['litpic']; ?>"/>
                                                </span>
                                                <textarea name="img_title[]" placeholder="请输入标题..." style="height: 28px;"><?php echo $vo['title']; ?></textarea>
                                                <textarea name="img_links[]" placeholder="请输入链接网址..." style="height: 28px;"><?php echo $vo['links']; ?></textarea>
                                                <textarea name="img_intro[]" placeholder="广告注释：支持HTML代码" style="height: 64px;"><?php echo $vo['intro']; ?></textarea>

                                                <div class="operation">
                                                    <a href="javascript:void(0);">
                                                        <label>
                                                            <input type="checkbox" <?php if($vo['target'] == '1'): ?> checked="checked" <?php endif; ?> title="在新窗口打开" onclick="CheckedTarget(this)"/>新窗口
                                                            <input type="hidden" name="img_target[]" value="<?php echo $vo['target']; ?>">
                                                        </label>
                                                    </a>
                                                    <a href="javascript:void(0);" onclick="copyToClipBoard(<?php echo $vo['id']; ?>);">
                                                        <i class="fa fa-file-code-o"></i>标签调用
                                                    </a>
                                                    <?php if($main_lang == $admin_lang): ?>
                                                        <a href="javascript:void(0);" onclick="ClearPicArr(this,'<?php echo $vo['litpic']; ?>','<?php echo $vo['id']; ?>');">
                                                            <i class="fa fa-remove"></i>删除
                                                        </a>
                                                    <?php endif; ?>
                                                </div>

                                            </div>
                                        </div>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    <div class="images_upload">
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- 上传图片显示的样板 start -->
                    <div class="images_upload_tpl none">
                        <div class="images_upload ic">
                            <div class="ic">
                                <div class='upimg' title="拖动修改排序" >
                                    <div class='icaction' style="display: none">
                                        <span class="load_images" onclick="">
                                            <a href="javascript:void(0);" style="color: white">
                                                <i class='fa fa-search-plus'></i>查看大图
                                            </a>
                                        </span>
                                    </div>
                                    <div class='cover-bg' style="display: none"></div>
                                    <img src="/public/static/admin/images/add-button.jpg"/>
                                </div>
                                <input type="hidden"/>
                                <span class="span_input">
                                    <input type="hidden"/>
                                </span>
                                <textarea placeholder="请输入标题..." style="height: 28px;"></textarea>
                                <textarea placeholder="请输入链接网址..." style="height: 28px;"></textarea>
                                <textarea placeholder="广告注释：支持HTML代码" style="height: 64px;"></textarea>
                                <div class="operation">
                                    <a href="javascript:void(0)">&nbsp;&nbsp;</a>
                                    <a href="javascript:void(0)">&nbsp;&nbsp;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 上传图片显示的样板 end -->
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>备注信息</label>
                </dt>
                <dd class="opt">          
                    <textarea rows="5" cols="60" id="intro" name="intro" style="height:60px;"><?php echo $field['intro']; ?></textarea>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <div class="bot">
                <input type="hidden" name="id" value="<?php echo $field['id']; ?>">
                <a href="JavaScript:void(0);" onclick="checkForm();" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    // 勾选新窗口打开链接
    function CheckedTarget(t){
        if ($(t).is(':checked')) {
            $(t).parent().find('input[name="img_target[]"]').val(1);
        }else{
            $(t).parent().find('input[name="img_target[]"]').val(0);
        }
    }

    // 鼠标事件，加载查看大图和更新图片
    $(document).ready(function(){
       $(".upimg").live('mouseover', function(){
            $(this).find('div.icaction').show();
            $(this).find('div.cover-bg').show();
       }).live('mouseout', function(){
            $(this).find('div.icaction').hide();
            $(this).find('div.cover-bg').hide();
       });
    });

    // 判断输入框是否为空
    function checkForm(){
        if($('input[name=title]').val() == ''){
            layer.msg('广告位名称不能为空！', {icon: 2,time: 1000});
            return false;
        }
        layer_loading('正在处理');
        $('#post_form').submit();
    }

    // 获取点击更新图片的ID并加载隐藏域
    function LoadImagesId(id){
        // 加载ID到隐藏域
        $('#ImagesId').val(id);
        // 调用图片上传JS
        GetUploadify(1,'','allimg','UpdataImages');
    }

    // 更新图片
    function UpdataImages(path){
        // 获取点击的ID
        var id = $('#ImagesId').val();
        // 加载图片到显示层
        $("#"+id+"_Id").attr('src', path);
        // 加载图片到提交的隐藏域
        $("#"+id+"_Litpic").val(path);
    }

    // 上传图集相册回调函数
    function imgupload_call_back(paths){
        var last_div = $(".images_upload_tpl").html();
        var inputs   = $('.span_input input');
        // 图片数据处理
        for (var i=0;i<paths.length ;i++){
            $(".images_upload:eq(0)").before(last_div);  // 插入一个 新图片
            // 修改他的链接地址
            $(".images_upload:eq(0)").find('span:eq(0)').attr('onclick',"Images('"+paths[i]+"', 900, 600);");
            // 修改他的图片路径
            $(".images_upload:eq(0)").find('img').attr('src',paths[i]);
            // 处理图片路径及隐藏域
            if (inputs.length > '0') {
                // 修改隐藏域
                $(".images_upload:eq(0)").find('input:eq(0)').attr('name','img_id[]').attr('value','');
                $(".span_input:eq(0)").find('input:eq(0)').attr('name','img_litpic[]').attr('value',paths[i]);
                // 处理标题
                $(".images_upload:eq(0)").find('textarea:eq(0)').attr('name','img_title[]');
                // 处理跳转链接
                $(".images_upload:eq(0)").find('textarea:eq(1)').attr('name','img_links[]');
                // 处理内容描述
                $(".images_upload:eq(0)").find('textarea:eq(2)').attr('name','img_intro[]');
                // 提交新窗口选项
                $(".images_upload:eq(0)").find('div.operation a:eq(0)').html("<label><input type='checkbox' title='在新窗口打开' onclick='CheckedTarget(this);'/>新窗口<input type='hidden' name='img_target[]' value='0'></label>");
                // 删除按钮
                $(".images_upload:eq(0)").find('div.operation a:eq(1)').attr('onclick',"ClearPicArr(this,'"+paths[i]+"',0);").html("<i class='fa fa-remove'></i>删除");
            }
        }
    }

    // 上传之后删除组图input
    function ClearPicArr(obj,path,id)
    {
        // 删除数据库记录
        $.ajax({
            type:'POST',
            url:"<?php echo url('AdPosition/del_imgupload'); ?>",
            data:{del_id:id,_ajax:1},
            success:function(){
                $(obj).parent().parent().parent().remove(); // 删除完服务器的, 再删除 html上的图片
                $.ajax({
                    type:'POST',
                    url:"<?php echo url('Uploadify/delupload'); ?>",
                    data:{action:"del", filename:path,_ajax:1},
                    success:function(){}
                }); 
            }
        });
    }

    // 代码调用js
    function copyToClipBoard(id) {
        var adstr = "{eyou:ad aid='" + id + "'}\r\n   <a href='{$"+"field.links}' {$"+"field.target}><img src='{$"+"field.litpic}' alt='{$"+"field.title}' /></a>\r\n   广告注释：{$"+"field.intro}\r\n{/eyou:ad";
        var contentdiv = '<div class="dialog_content" style="margin: 0px; padding: 0px;"><dl style="padding:10px 30px;line-height:30px"><dd>标签 ad 调用:</dd>';
        contentdiv += '<textarea rows="4" cols="60" style="width:400px;height:100px;">' + adstr + '}</textarea>';
        contentdiv += '<dd style="border-top: dotted 1px #E7E7E7; color: #F60;">请将对应标签代码复制并粘贴到对应模板文件中！</dd></dl></div>';
        layer.open({
            title: '代码调用',
            type: 1,
            skin: 'layui-layer-demo',
            area: ['480px', '260px'], //宽高
            content: contentdiv
        });
    }

    // 图集相册的拖动排序相关 js
    $( ".sort-list" ).sortable({
        start: function( event, ui) {
        
        }
        ,stop: function( event, ui ) {

        }
    });
    //因为他们要拖动，所以尽量设置他们的文字不能选择。  
    $( ".sort-list" ).disableSelection();
</script>

<br/>
<div id="goTop">
    <a href="JavaScript:void(0);" id="btntop">
        <i class="fa fa-angle-up"></i>
    </a>
    <a href="JavaScript:void(0);" id="btnbottom">
        <i class="fa fa-angle-down"></i>
    </a>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#think_page_trace_open').css('z-index', 99999);
    });
</script>
</body>
</html>