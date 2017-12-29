<!-- select2 -->
<link href="<?=base_url('assets/vendors/select2/dist/css/select2.min.css')?>" rel="stylesheet">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><?=($this->uri->segment(2) == 'add') ? 'Add ' : 'Edit '?>Menu</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Menu</a></li>
            <li class="active"><?=($this->uri->segment(2) == 'add') ? 'Add ' : 'Edit '?> Menu</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?=($this->uri->segment(2) == 'add') ? 'Add ' : 'Edit '?>Menu</h3>
            </div>
            <div class="box-body">
                <form class="form-horizontal" id="myForm">
                    
                    <?php if($this->uri->segment(2) == 'update'): ?>
                    <input type="hidden" name="id" value="<?=$this->uri->segment(3)?>">
                    <?php endif ?>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Menu <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="menu" class="form-control" placeholder="Menu ..." 
                            value="<?=isset($menu['menu'])?$menu['menu']:set_value('menu');?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">URL/Link </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="link" class="form-control" placeholder="URL/Link ..." 
                            value="<?=isset($menu['link'])?$menu['link']:set_value('link');?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Parent <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select class="form-control populate placeholder" name="parent" id="parent" style="width: 100%;" required></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Menu Order <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="number" name="menu_order" class="form-control" placeholder="Menu Order ..." 
                            value="<?=isset($menu['menu_order'])?$menu['menu_order']:set_value('menu_order');?>" required>
                        </div>
                    </div>

                    <div class="form-group" id="icon">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Icon <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="icon" class="form-control" id="fa_icon" placeholder="Icon ..." 
                            value="<?=isset($menu['icon'])?$menu['icon']:set_value('icon');?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-2">
                            <a href="<?=base_url('list_menus')?>">
                                <button type="button" class="btn btn-primary">Back</button>
                            </a>
                            <button type="submit" class="btn btn-success" id="save">Save</button>
                        </div>
                    </div>

                </form>     
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <?php $this->load->view('font-awesome') ?>
            </div>
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>

<!-- select2 -->
<script src="<?=base_url('assets/vendors/select2/dist/js/select2.min.js')?>"></script>
<script>
    $(document).ready(function() {
        $('#parent').select2({
            width: 'resolve',
            data: <?php echo $list_menus; ?>
        });

        $('#parent').on('change', function(e) {
            var value = $(this).val();
            if(value == 0) {
                $('#icon').fadeIn('slow');
            } else {
                $('#icon').fadeOut('slow');
            }
        });

        <?php if($this->uri->segment(2) == 'update'): ?>
            <?php $parent = isset($menu['parent']) ? $menu['parent'] : 0 ; ?>
            $('#parent').val(<?=$parent?>).trigger('change');
        <?php endif ?>

        $('.icon-click').on('click', function() {
            var icon = $(this).attr('href'),
                icon2 = 'fa-' + icon.replace(/#\//g, ''); 
            $('#fa_icon').val(icon2);
            $("html, body").animate({ scrollTop: 0 }, 1000);
            return false;
        })
    });
</script>
<?php $this->load->view('helper/ajax_form_add_update.php') ?>