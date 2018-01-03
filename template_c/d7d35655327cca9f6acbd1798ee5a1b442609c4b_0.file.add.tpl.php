<?php
/* Smarty version 3.1.30, created on 2018-01-02 09:53:29
  from "D:\phpStudy\WWW\php\Admin\template\Skin\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4ae619eb2791_50394247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7d35655327cca9f6acbd1798ee5a1b442609c4b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\php\\Admin\\template\\Skin\\add.tpl',
      1 => 1514858002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a4ae619eb2791_50394247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_319265a4ae619e91342_78282967', 'title');
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157995a4ae619ea09e0_25665132', 'content');
?>

 
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146285a4ae619eaecf7_11099522', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_319265a4ae619e91342_78282967 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    皮肤管理-添加
<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_157995a4ae619ea09e0_25665132 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

    <div id="portlet-config" class="modal hide">

            <div class="modal-header">

                    <button data-dismiss="modal" class="close" type="button"></button>

                    <h3>portlet Settings</h3>

            </div>

            <div class="modal-body">

                    <p>Here will be a configuration form</p>

            </div>

    </div>

    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

    <!-- BEGIN PAGE CONTAINER-->

    <div class="container-fluid">

            <!-- BEGIN PAGE HEADER-->   

            <div class="row-fluid">

                    <div class="span12">

                            <!-- BEGIN STYLE CUSTOMIZER -->

                            <div class="color-panel hidden-phone">

                                    <div class="color-mode-icons icon-color"></div>

                                    <div class="color-mode-icons icon-color-close"></div>

                                    <div class="color-mode">

                                            <p>THEME COLOR</p>

                                            <ul class="inline">

                                                    <li class="color-black current color-default" data-style="default"></li>

                                                    <li class="color-blue" data-style="blue"></li>

                                                    <li class="color-brown" data-style="brown"></li>

                                                    <li class="color-purple" data-style="purple"></li>

                                                    <li class="color-grey" data-style="grey"></li>

                                                    <li class="color-white color-light" data-style="light"></li>

                                            </ul>

                                            <label>

                                                    <span>Layout</span>

                                                    <select class="layout-option m-wrap small">

                                                            <option value="fluid" selected>Fluid</option>

                                                            <option value="boxed">Boxed</option>

                                                    </select>

                                            </label>

                                            <label>

                                                    <span>Header</span>

                                                    <select class="header-option m-wrap small">

                                                            <option value="fixed" selected>Fixed</option>

                                                            <option value="default">Default</option>

                                                    </select>

                                            </label>

                                            <label>

                                                    <span>Sidebar</span>

                                                    <select class="sidebar-option m-wrap small">

                                                            <option value="fixed">Fixed</option>

                                                            <option value="default" selected>Default</option>

                                                    </select>

                                            </label>

                                            <label>

                                                    <span>Footer</span>

                                                    <select class="footer-option m-wrap small">

                                                            <option value="fixed">Fixed</option>

                                                            <option value="default" selected>Default</option>

                                                    </select>

                                            </label>

                                    </div>

                            </div>

                            <!-- END BEGIN STYLE CUSTOMIZER -->  

                            <h3 class="page-title">
                                    英雄
                                     <small>英雄职业添加</small>

                            </h3>

                            <ul class="breadcrumb">

                                    <li>

                                            <i class="icon-home"></i>

                                            <a href="index.html">后台管理</a> 

                                            <span class="icon-angle-right"></span>

                                    </li>

                                    <li>

                                            <a href="#">道具管理</a>

                                            <span class="icon-angle-right"></span>

                                    </li>

                                    <li><a href="#">英雄道具管理列表</a></li>

                            </ul>

                    </div>

            </div>

            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->

            <div class="row-fluid">

                    <div class="span12">

                            <!-- BEGIN SAMPLE FORM PORTLET-->   

                            <div class="portlet box blue tabbable">

                                    <div class="portlet-title">

                                            <div class="caption">

                                                    <i class="icon-reorder"></i>

                                                    <span class="hidden-480">General Layouts</span>

                                            </div>

                                    </div>

                                    <div class="portlet-body form">

                                            <div class="tabbable portlet-tabs">

                                                    <ul class="nav nav-tabs">
                                                            <li><a href="#portlet_tab3" data-toggle="tab">Inline</a></li>
                                                    </ul>
                                                    <div class="tab-content">

                                                            <div class="tab-pane active" id="portlet_tab1">
                                                                    <!-- BEGIN FORM-->
                                                                    <form action="#" class="form-horizontal">

                                                                            <div class="control-group">
                                                                                    <label class="control-label">名称：</label>
                                                                                    <div class="controls">
                                                                                         <input type="text" placeholder="请输入名称" class="m-wrap small"  name="name"/>
                                                                                    </div>
                                                                            </div>
                                                                          <div class="control-group">
                                                                                    <label class="control-label">英雄：</label>
                                                                                    <div class="controls">
                                                                                            <input type="text" placeholder="请输入描述" class="m-wrap small"  name="decribe"/>
                                                                                    </div>
                                                                            </div>
                                                                        <div class="control-group">
                                                                                    <label class="control-label">排序：</label>
                                                                                    <div class="controls">
                                                                                            <input type="text" placeholder="请输入等级" class="m-wrap small"  name="unlock_level"/>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="control-group">
                                                                                    <label class="control-label">上传图片：</label>
                                                                                    <div class="controls" >
                                                                                        <img src="" width="100" style="display:none" id="upload_img"/>
                                                                                        <button type="button" id="upload">上传图片</button>
                                                                                        <input type="file" value="" name="myfile" class="m-wrap small" style="display:none;"/>
                                                                                        <input type="hidden" value="" id="upload_url" name="url"/>
                                                                                    </div>
                                                                            </div>
                                                                            

                                                                           <div class="control-group  big_img">
                                                                                    <label class="control-label">上传图片：</label>
                                                                                    <div class="controls" >
                                                                                        <img src="" width="100" style="display:none" id="upload_imgs"/>
                                                                                        <button type="button" id="uploads">上传大图</button>
                                                                                        <input type="file" value="" name="myfiles" class="m-wrap small" style="display:none;"/>
                                                                                        <input type="hidden" value="" id="upload_urls" name="urls"/>
                                                                                    </div>
                                                                            </div>
                                                                        
                                                                            <div class="form-actions">
                                                                                    <button type="button" class="btn blue" id="form_submit"><i class="icon-ok"></i> 添加</button>

                                                                            </div>

                                                                    </form>

                                                                    <!-- END FORM-->  

                                                            </div>


                                                    </div>

                                            </div>

                                    </div>

                            </div>

                            <!-- END SAMPLE FORM PORTLET-->

                    </div>

            </div>

            <!-- END PAGE CONTENT-->         

    </div>

    <!-- END PAGE CONTAINER-->
 <?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_146285a4ae619eaecf7_11099522 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
     <?php echo '<script'; ?>
>
        
        $("#upload").click(function(){
            $("input[type='file']").click();
        })
        $("#upload_img").click(function(){
            $("input[type='file']").click();
        })
        
        $("input[type='file']").change(function(){
            var fd = new FormData();
            fd.append("myfile",$("input[type='file']").get(0).files[0]);
            $.ajax({
                type:"post",
                url:"index.php?class=index&action=upload",
                data:fd,
                processData:false,
                contentType:false,
                success:function(e){
                    
                    e=$.parseJSON(e);
                    if(e.code ==100){
                        alert("上传失败");
                    }else{
                        $("#upload_img").attr("src",e.data);
                        $("#upload_url").val(e.data);
                        $("#upload").hide();
                        $("#upload_img").show();
                    }
                }
            })
        })
        
        
        
        //添加大图
        
        $("#uploads").click(function(){
            $(".big_img input[type='file']").click();
        })
        $("#upload_imgs").click(function(){
            $(".big_img input[type='file']").click();
        })
        
        $(".big_img input[type='file']").change(function(){
            var fd = new FormData();
            fd.append("myfiles",$(".big_img input[type='file']").get(0).files[0]);
            $.ajax({
                type:"post",
                url:"index.php?class=index&action=uploads",
                data:fd,
                processData:false,
                contentType:false,
                success:function(e){
                    
                    e=$.parseJSON(e);
                    if(e.code ==100){
                        alert("上传失败");
                    }else{
                        $(".big_img #upload_imgs").attr("src",e.data);
                        $(".big_img #upload_urls").val(e.data);
                        $(".big_img #uploads").hide();
                        $(".big_img #upload_imgs").show();
                    }
                }
            })
        })
        
        
        
        
        
        
        
        $("#form_submit").click(function(){
            var name = $("input[name='name']").val();
            var decribe = $("input[name='decribe']").val();
            var unlock_level = $("input[name = 'unlock_level']").val();
            var url = $("input[name='url']").val();
            var big_image = $("input[name='urls']").val();
            console.log(big_image);
            $.ajax({
                type:"post",
                url:"index.php?class=skin&action=insert",
                data:{name:name,decribe:decribe,unlock_level:unlock_level,url:url,big_image:big_image},
                success:function(data){
                   data=$.parseJSON(data);
                   if(data.code==200){
                       window.location.href="index.php?class=skin&action=skinList"
                   }else{
                       alert(data.message);
                   }
                }
            })
        })
        
         
        
     <?php echo '</script'; ?>
>
 
 <?php
}
}
/* {/block 'js'} */
}
