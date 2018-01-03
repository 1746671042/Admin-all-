{extends file='layout.tpl'}
{block name=title}
    技能管理-修改
{/block} 

{block name=content}

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

								<a href="#">技能管理</a>

								<span class="icon-angle-right"></span>

							</li>

							<li><a href="#">英雄技能修改列表</a></li>

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
                                                                                            <input type="hidden" value="{$info.id}" name="id"/>
												<div class="control-group">
													<label class="control-label">名称：</label>
													<div class="controls">
														<input type="text" placeholder="请输入名称" class="m-wrap small"  name="name" value="{$info.name}"/>
													</div>
												</div>
                                                                                                <div class="control-group">
													<label class="control-label">类型：</label>
													<div class="controls">
                                                                                                            <select name="type" value="{$info.type}">
                                                                                                                <option value="0">全部</option>
                                                                                                                <option value="1">攻击</option>
                                                                                                                <option value="2">法术</option>
                                                                                                                <option value="3">防御</option>
                                                                                                                <option value="4">移动</option>
                                                                                                                <option value="5">打野</option>
                                                                                                                <option value="6">辅助</option> 
                                                                                                            </select>
														
													</div>
												</div>
                                                                                              <div class="control-group">
													<label class="control-label">售价：</label>
													<div class="controls">
														<input type="text" placeholder="请输入售价" class="m-wrap small" name="price" value="{$info.price}"/>
													</div>
												</div>
                                                                                              <div class="control-group">
													<label class="control-label">总价：</label>
													<div class="controls">
														<input type="text" placeholder="请输入总价" class="m-wrap small" name="total" value="{$info.total}"/>
													</div>
												</div>
                                                                                            <div class="control-group">
													<label class="control-label">属性：</label>
													<div class="controls">
														<input type="text" placeholder="请输入属性" class="m-wrap small" name="attribute" value="{$info.attribute}"/>
													</div>
												</div>
                                                                                            <div class="control-group">
													<label class="control-label">描述：</label>
													<div class="controls">
                                                                                                            <textarea placeholder="请输入描述" class="m-wrap small" name="decribe" style="height:150px;width: 300px !important;" value="{$info.decribe}"></textarea>
													</div>
												</div>
                                                                                                <div class="control-group">
													<label class="control-label">上传图片：</label>
													<div class="controls" >
                                                                                                            <img src="{$info.image}" width="100" id="upload_img"/>
												            <input type="file" value="" name="myfile" class="m-wrap small" style="display:none;"/>
                                                                                                            <input type="hidden" value="{$info.image}" id="upload_url" name="url"/>
													</div>
												</div>
												<div class="form-actions">
													<button type="button" class="btn blue" id="form_submit"><i class="icon-ok"></i> 修改</button>
													
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
 {/block}
 
 
 {block name=js}
     
     <script>
        {literal}
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
        
        
        //修改
        $("#form_submit").click(function(){
            var name = $("input[name='name']").val();
            var type = $("select[name='type']").val();
            var price = $("input[name='price']").val();
            var total = $("input[name = 'total']").val();
            var attribute = $("input[name = 'attribute']").val();
            var decribe = $("textarea[name = 'decribe']").val();
            var url = $("input[name='url']").val();
            var id = $("input[name='id']").val();
            $.ajax({
                type:"post",
                url:"index.php?class=Prop&action=updatas",
                data:{id:id,name:name,type:type,url:url,price:price,total:total,attribute:attribute,decribe:decribe},
                success:function(data){
                   data=$.parseJSON(data);
                   if(data.code==200){
                      alert(data.message);
                      window.location.href="index.php?class=Prop&action=propList";
                   }else{
                       alert(data.message);
                   }
                }
            })
        })
        
         
        {/literal}
     </script>
 
 {/block}