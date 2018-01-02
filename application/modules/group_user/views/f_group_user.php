<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><?=($this->uri->segment(2) == 'add') ? 'Add ' : 'Edit '?>Users</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Group User</a></li>
            <li class="active"><?=($this->uri->segment(2) == 'add') ? 'Add ' : 'Edit '?> Group User</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?=($this->uri->segment(2) == 'add') ? 'Add ' : 'Edit '?>Group Users</h3>
            </div>
            <div class="box-body">
                <form class="form-horizontal" id="myForm">
                    
                    <?php if($this->uri->segment(2) == 'update'): ?>
                    <input type="hidden" name="id" value="<?=$this->uri->segment(3)?>">
                    <?php endif ?>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Group User <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="role" class="form-control" placeholder="Group User ..." 
                            value="<?=isset($role['role'])?$role['role']:set_value('role');?>" required>
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-2">
                            <a href="<?=base_url('group_user')?>">
                                <button type="button" class="btn btn-primary">Back</button>
                            </a>
                            <button type="submit" class="btn btn-success" id="save">Save</button>
                        </div>
                    </div>

                </form>
            </div>
            <!-- /.box-body -->

        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>

<?php $this->load->view('helper/ajax_form_add_update') ?>