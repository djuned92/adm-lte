<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><?=($this->uri->segment(2) == 'add') ? 'Add ' : 'Edit '?>Users</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">User</a></li>
            <li class="active"><?=($this->uri->segment(2) == 'add') ? 'Add ' : 'Edit '?> User</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?=($this->uri->segment(2) == 'add') ? 'Add ' : 'Edit '?>Users</h3>
            </div>
            <div class="box-body">
                <form class="form-horizontal" id="myForm">
                    
                    <?php if($this->uri->segment(2) == 'update'): ?>
                    <input type="hidden" name="id" value="<?=$this->uri->segment(3)?>">
                    <?php endif ?>

                    <h4>User Account</h4>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Username <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="username" class="form-control" placeholder="Username ..." value="<?=isset($user['username'])?$user['username']:set_value('username');?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Password <?=($this->uri->segment(2) == 'add') ? '<span class="required">*</span>':''?></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password ..." value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Confirm Password <?=($this->uri->segment(2) == 'add') ? '<span class="required">*</span>':''?></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password ..." value="">
                        </div>
                    </div>

                    <hr>
                    <h4>User Profile</h4>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Fullname <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="fullname" class="form-control" placeholder="Fullname ..." value="<?=isset($user['fullname'])?$user['fullname']:set_value('fullname');?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Address <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="address" rows="3" placeholder='Address ...'><?=isset($user['address'])?$user['address']:set_value('address');?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Phone <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon">+62 </span>
                                <input type="text" name="phone" class="form-control" placeholder="Phone ..." value="<?=isset($user['phone'])?$user['phone']:set_value('phone');?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Gender <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12 radio">
                            <label>
                                <input type="radio" name="gender" value="1" <?=(isset($user['gender']) == 1) ? 'checked':'';?>>
                                <i class="fa fa-male"></i> Male
                            </label>
                            <label>
                                <input type="radio" name="gender" value="2" <?=(isset($user['gender']) == 2) ? 'checked':'';?>>
                                <i class="fa fa-female"></i> Female
                            </label>                        
                        </div>
                    </div>

                    <hr>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-2">
                            <a href="<?=base_url('users')?>">
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

<!-- validator -->
<script src="http://localhost/simonpa/assets/vendors/jquery-validation/jquery.validate.min.js"></script>   
<script type="text/javascript">
    function readURL(input) {

      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#preview-image').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#image").change(function() {
      readURL(this);
    });

    $(document).ready(function() {
        // set validator
        $.validator.setDefaults({
            errorClass: 'help-block',
            highlight: function(element) {
                $(element)
                    .closest('.form-group')
                    .addClass('has-error');
            },
            unhighlight: function(element) {
                $(element)
                    .closest('.form-group')
                    .removeClass('has-error')
                    .addClass('has-success');
            }
        });

        $('#myForm').validate({
            rules: {
                username: {
                    required: true
                },
                <?php if($this->uri->segment(2) == 'add'): ?>
                    password: {
                        required: true,
                        minlength: 8,
                        maxlength: 12,
                    },
                    confirm_password: {
                        equalTo: "#password",
                    },
                <?php endif ?>
                fullname: {
                    required: true
                },
                address: {
                    required: true
                },
                phone: {
                    required: true
                },
                gender: {
                    required: true
                }
            },
            submitHandler: function(form) {
                // form.submit();
                var form = $('#myForm')[0],
                    data = new FormData(form);
                <?php if($this->uri->segment(2) == 'add') : ?>
                    var this_url = "<?=base_url('users/add')?>";
                <?php else : ?>
                    var this_url = "<?=base_url('users/update')?>";
                <?php endif ?> 
                $.ajax({
                    type: 'post',
                    enctype: 'multipart/form-data',
                    url: this_url,
                    dataType: "json",
                    data: data,
                    async: false,
                    processData: false,
                    contentType: false,
                    cache: false,
                    timeout: 600000,
                    beforeSend: function () {},
                    success: function(r) {
                        if(r.error == false) {
                            swal({
                              title: "<?=($this->uri->segment(2) == 'add') ? 'Add': 'Update';?>",
                              text: r.message,
                              type: "success",
                            });
                            setTimeout(function() {
                                window.location.href = "<?=base_url('users')?>";  
                            }, 2000);
                        }
                    }
                });
            }
        });
    })
</script>