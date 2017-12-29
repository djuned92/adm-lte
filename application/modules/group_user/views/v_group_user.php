<?php 
    $privileges = explode(',', $priv['privileges']);
?>
<!-- datatables -->
<link href="<?=base_url('assets/vendors/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Group User</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">User</a></li>
            <li class="active">Group User</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Group User</h3>
                <?php if($privileges[0] == 1): ?>
                    <div class="box-tools pull-right">
                        <a href="<?=base_url('group_user/add')?>">
                            <button type="button" class="btn btn-sm btn-primary">
                                <i class="fa fa-plus"></i> Add
                            </button>
                        </a>
                    </div>
                <?php endif ?>   
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th width="80%">Group User</th>
                            <th width="15%">Created At</th>
                            <?php if($privileges[1] == 1 || $privileges[2] == 1): ?>
                            <th width="5%">Action</th>
                            <?php endif ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($group_user as $key => $value):?>
                        <tr>
                            <td><?= $value['role'] ?></td>
                            <td><?= $value['created_at'] ?></td>
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
                                                        <a href="<?=base_url('group_user/update/'.encode($value['id']))?>">
                                                            <i class="fa fa-pencil"></i> Edit
                                                        </a>
                                                    </li>
                                                <?php endif ?>
                                                <?php if($privileges[1] == 1 && $privileges[2] == 1): ?>
                                                    <li class="divider"></li>
                                                <?php endif ?>
                                                <?php if($privileges[2] == 1): ?>
                                                    <li>
                                                        <a href="#" class="btn-delete" data-id="<?=encode($value['id'])?>">
                                                            <i class="fa fa-trash"></i> Delete
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
        $('#myTable').DataTable({
            "order": [[ 1, "asc" ]]
        });
    });
</script>
<?php $this->load->view('helper/ajax_form_delete') ?>