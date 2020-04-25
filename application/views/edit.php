<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Product - MVC Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/'); ?>font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/datatable/'); ?>dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/dist/'); ?>css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="<?= base_url('/'); ?>" class="brand-link">
                MVC - Application
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url('/'); ?>" class="nav-link active">
                                <i class="nav-icon fa fa-dashboard"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                    </ul>
                    </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>DataTables</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Product Info</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Products</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="col-md-6">
                                    <!-- general form elements -->
                                    <div class="box box-primary">
                                        <form role="form" action="<?= base_url('products/update/') . $data->id; ?>" method="POST">
                                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                            <div class="box-body">
                                                <?php if (validation_errors()) { ?>
                                                    <div class="alert alert-danger alert-dismissible">
                                                        <h5> Alert!</h5>
                                                        <?php echo validation_errors(); ?>
                                                    </div>
                                                <?php } ?>
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="name" class="form-control" id="name" name="name" value="<?= $data->name ?>" placeholder="Enter name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="text">Type</label>
                                                    <input type="text" class="form-control" id="type" name="type" value="<?= $data->type ?>" placeholder="Enter Type">
                                                </div>
                                                <div class="form-group">
                                                    <label for="options_type">Options Type</label>
                                                    <input type="text" class="form-control" id="options_type" name="options_type" value="<?= $data->options_type ?>" placeholder="Enter options type">
                                                </div>
                                                <div class="form-group">
                                                    <label for="cost">Cost</label>
                                                    <input type="number" class="form-control" id="cost" name="cost" value="<?= $data->cost ?>" placeholder="Enter Cost">
                                                </div>
                                                <div class="form-group">
                                                    <label for="text">Option Hours</label>
                                                    <input type="option_hours" class="form-control" id="option_hours" name="option_hours" value="<?= $data->option_hours ?>" placeholder="Enter option hours">
                                                </div>
                                                <div class="form-group">
                                                    <label for="weight">Weight</label>
                                                    <input type="weight" class="form-control" id="weight" value="<?= $data->weight ?>" placeholder="Enter weight">
                                                </div>

                                                <div class="form-group">
                                                    <label for="weight">Shopping Site Content</label>
                                                    <select class="form-control" id="shopping_site_content" name="shopping_site_content">
                                                        <option value="YES" <?= ($data->shopping_site_content == 'YES') ? 'selected' : ''; ?>>YES</option>
                                                        <option value="NO" <?= ($data->shopping_site_content == 'NO') ? 'selected' : ''; ?>>NO</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="weight">Tech talk</label>
                                                    <select class="form-control" id="tech_talk" name="tech_talk">
                                                        <option value="YES" <?= ($data->tech_talk == 'YES') ? 'selected' : ''; ?>>YES</option>
                                                        <option value="NO" <?= ($data->tech_talk == 'NO') ? 'selected' : ''; ?>>NO</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                                <button type="submit" class="btn btn-sm btn-success">Submit</button>
                                                <a href="<?= base_url() ?>" type="submit" class="btn btn-sm btn-success">Back</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>