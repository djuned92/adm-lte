<?php 
    $privileges = explode(',', $priv['privileges']);
?>
<!-- datatables -->
<link href="<?=base_url('assets/vendors/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Apps</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Settings</a></li>
            <li class="active">Apps</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-body">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab1" data-toggle="tab">
                        Settings Apps </a>
                    </li>
                    <li>
                        <a href="#tab2" data-toggle="tab">
                        Themes </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <br>
                        <form class="form-horizontal" id="myForm" method="post" action="<?=base_url('apps/update')?>">
                            <input type="hidden" name="id" value="1">
                            <input type="hidden" name="app_theme" value="<?=$apps['app_theme']?>">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Apps Name <span class="required">*</span></label>
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            <input type="text" name="app_name" class="form-control" placeholder="Apps Name ..." value="<?=isset($apps['app_name'])?$apps['app_name']:set_value('app_name');?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Company <span class="required">*</span></label>
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            <input type="text" name="app_company" class="form-control" placeholder="Company ..." value="<?=isset($apps['app_company'])?$apps['app_company']:set_value('app_company');?>">
                                        </div>
                                    </div>
                                </div>    
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-2">
                                    <button type="submit" class="btn btn-success" id="save">Save</button>
                                </div>
                            </div>
                        </form> 
                    </div>
                    <div class="tab-pane" id="tab2">
                        <br>
                        <form class="form-horizontal" id="formTheme" method="post" action="<?=base_url('apps/update')?>">
                            <input type="hidden" name="id" value="1">
                            <input type="hidden" name="app_name" value="<?=$apps['app_name']?>">
                            <input type="hidden" name="app_company" value="<?=$apps['app_company']?>">

                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Blue </label>
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            <ul class="list-unstyled clearfix">
                                                <li style="float:left; width: 33.33333%; padding: 5px;">
                                                    <input type="radio" name="app_theme" value="skin-blue" <?=$apps['app_theme']=='skin-blue'?'checked':'';?>>
                                                    <a href="javascript:void(0)" data-skin="skin-blue" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                                                        <div><span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9"></span><span class="bg-light-blue" style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                                        <div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>
                                                    </a>
                                                    <p class="text-center no-margin">Blue</p>
                                                </li>
                                                <li style="float:left; width: 33.33333%; padding: 5px;">
                                                    <input type="radio" name="app_theme" value="skin-blue-light" <?=$apps['app_theme']=='skin-blue-light'?'checked':'';?>>
                                                    <a href="javascript:void(0)" data-skin="skin-blue-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                                                        <div><span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9"></span><span class="bg-light-blue" style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                                        <div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>
                                                    </a>
                                                    <p class="text-center no-margin" style="font-size: 12px">Blue Light</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Black </label>
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            <ul class="list-unstyled clearfix">
                                                <li style="float:left; width: 33.33333%; padding: 5px;">
                                                    <input type="radio" name="app_theme" value="skin-black" <?=$apps['app_theme']=='skin-black'?'checked':'';?>>
                                                    <a href="javascript:void(0)" data-skin="skin-black" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                                                        <div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span style="display:block; width: 20%; float: left; height: 7px; background: #fefefe"></span><span style="display:block; width: 80%; float: left; height: 7px; background: #fefefe"></span></div>
                                                        <div><span style="display:block; width: 20%; float: left; height: 20px; background: #222"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>
                                                    </a>
                                                    <p class="text-center no-margin">Black</p>
                                                </li>
                                                <li style="float:left; width: 33.33333%; padding: 5px;">
                                                    <input type="radio" name="app_theme" value="skin-black-light" <?=$apps['app_theme']=='skin-black-light'?'checked':'';?>>
                                                    <a href="javascript:void(0)" data-skin="skin-black-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                                                        <div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span style="display:block; width: 20%; float: left; height: 7px; background: #fefefe"></span><span style="display:block; width: 80%; float: left; height: 7px; background: #fefefe"></span></div>
                                                        <div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>
                                                    </a>
                                                    <p class="text-center no-margin" style="font-size: 12px">Black Light</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Purple </label>
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            <ul class="list-unstyled clearfix">
                                                <li style="float:left; width: 33.33333%; padding: 5px;">
                                                    <input type="radio" name="app_theme" value="skin-purple" <?=$apps['app_theme']=='skin-purple'?'checked':'';?>>
                                                    <a href="javascript:void(0)" data-skin="skin-purple" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                                                        <div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-purple-active"></span><span class="bg-purple" style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                                        <div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>
                                                    </a>
                                                    <p class="text-center no-margin">Purple</p>
                                                </li>
                                                <li style="float:left; width: 33.33333%; padding: 5px;">
                                                    <input type="radio" name="app_theme" value="skin-purple-light" <?=$apps['app_theme']=='skin-purple-light'?'checked':'';?>>
                                                    <a href="javascript:void(0)" data-skin="skin-purple-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                                                        <div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-purple-active"></span><span class="bg-purple" style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                                        <div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>
                                                    </a>
                                                    <p class="text-center no-margin" style="font-size: 12px">Purple Light</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Green </label>
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            <ul class="list-unstyled clearfix">
                                                <li style="float:left; width: 33.33333%; padding: 5px;">
                                                    <input type="radio" name="app_theme" value="skin-green" <?=$apps['app_theme']=='skin-green'?'checked':'';?>>
                                                    <a href="javascript:void(0)" data-skin="skin-green" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                                                        <div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-green-active"></span><span class="bg-green" style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                                        <div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>
                                                    </a>
                                                    <p class="text-center no-margin">Green</p>
                                                </li>
                                                <li style="float:left; width: 33.33333%; padding: 5px;">
                                                    <input type="radio" name="app_theme" value="skin-green-light" <?=$apps['app_theme']=='skin-green-light'?'checked':'';?>>
                                                    <a href="javascript:void(0)" data-skin="skin-green-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                                                        <div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-green-active"></span><span class="bg-green" style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                                        <div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>
                                                    </a>
                                                    <p class="text-center no-margin" style="font-size: 12px">Green Light</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Red </label>
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            <ul class="list-unstyled clearfix">
                                                <li style="float:left; width: 33.33333%; padding: 5px;">
                                                    <input type="radio" name="app_theme" value="skin-red" <?=$apps['app_theme']=='skin-red'?'checked':'';?>>
                                                    <a href="javascript:void(0)" data-skin="skin-red" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                                                        <div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-red-active"></span><span class="bg-red" style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                                        <div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>
                                                    </a>
                                                    <p class="text-center no-margin">Red</p>
                                                </li>
                                                <li style="float:left; width: 33.33333%; padding: 5px;">
                                                    <input type="radio" name="app_theme" value="skin-red-light" <?=$apps['app_theme']=='skin-red-light'?'checked':'';?>>
                                                    <a href="javascript:void(0)" data-skin="skin-red-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                                                        <div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-red-active"></span><span class="bg-red" style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                                        <div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>
                                                    </a>
                                                    <p class="text-center no-margin" style="font-size: 12px">Red Light</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Yellow </label>
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            <ul class="list-unstyled clearfix">
                                                <li style="float:left; width: 33.33333%; padding: 5px;">
                                                    <input type="radio" name="app_theme" value="skin-yellow" <?=$apps['app_theme']=='skin-yellow'?'checked':'';?>>
                                                    <a href="javascript:void(0)" data-skin="skin-yellow" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                                                        <div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-yellow-active"></span><span class="bg-yellow" style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                                        <div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>
                                                    </a>
                                                    <p class="text-center no-margin">Yellow</p>
                                                </li>
                                                <li style="float:left; width: 33.33333%; padding: 5px;">
                                                    <input type="radio" name="app_theme" value="skin-yellow-light" <?=$apps['app_theme']=='skin-yellow-light'?'checked':'';?>>
                                                    <a href="javascript:void(0)" data-skin="skin-yellow-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">
                                                        <div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-yellow-active"></span><span class="bg-yellow" style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                                        <div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>
                                                    </a>
                                                    <p class="text-center no-margin" style="font-size: 12px">Yellow Light</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-2">
                                    <button type="submit" class="btn btn-success" id="save">Save</button>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- datatables -->
<script src="<?=base_url('assets/vendors/datatables/js/jquery.dataTables.js')?>"></script>
<script src="<?=base_url('assets/vendors/datatables/js/dataTables.bootstrap.js')?>"></script>

<script>
    $(document).ready(function() {
        $('#formTheme input').on('change', function() {
            var theme = $('input[name=app_theme]:checked','#formTheme').val();
            $('body').attr('class',' '+theme+' sidebar-mini');
        })
    });
</script>
<?php $this->load->view('helper/ajax_form_delete') ?>