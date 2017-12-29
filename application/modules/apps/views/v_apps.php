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
            <div class="box-header with-border">
                <h3 class="box-title">Apps</h3>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th width="25%">Apps Name</th>
                            <th width="25%">Apps Company</th>
                            <th width="15%">Apps Logo Large</th>
                            <th width="15%">Apps Logo Mini</th>
                            <th width="15%">Apps Theme</th>
                            <?php if($privileges[1] == 1 || $privileges[2] == 1): ?>
                            <th width="5%">Action</th>
                            <?php endif ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($apps as $key => $value):?>
                        <tr>
                            <td><?= $value['app_name'] ?></td>
                            <td><?= $value['app_company'] ?></td>
                            <td><?= $value['app_logo_lg'] ?></td>
                            <td><?= $value['app_logo_mini'] ?></td>
                            <td><?= $value['app_theme'] ?></td>
                            <?php if($privileges[1] == 1 || $privileges[2] == 1): ?>
                                <td>
                                    <ul style="list-style: none;padding-left: 0px;padding-right: 0px; text-align: center;">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-bars" style="font-size: large;"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-right" style="right: 0; left: auto;">
                                                <?php if($privileges[1] == 1): ?>
                                                    <li>
                                                        <a href="<?=base_url('apps/update/'.encode($value['id']))?>">
                                                            <i class="fa fa-pencil"></i> Edit
                                                        </a>
                                                    </li>
                                                <?php endif ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            <?php endif ?>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
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
        
    });
</script>
<?php $this->load->view('helper/ajax_form_delete') ?>