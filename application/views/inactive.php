<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Dashboard - MVC Test</title>
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
                     <h1>Inactive Products</h1>
                  </div>
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
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
                     <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th>Name</th>
                                 <th>Type</th>
                                 <th>Options</th>
                                 <th>Cost</th>
                                 <th>Option Hours</th>
                                 <th>Weight</th>
                                 <th>Shopping Site Content</th>
                                 <th>Tech Talk</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              if (!empty($data)) {
                                 foreach ($data as $d) { ?>
                                    <tr>
                                       <td><?= $d->name; ?></td>
                                       <td><?= $d->type; ?></td>
                                       <td><?= $d->options_type; ?></td>
                                       <td><?= $d->cost; ?></td>
                                       <td><?= $d->option_hours; ?></td>
                                       <td><?= $d->weight; ?></td>
                                       <td><?= $d->shopping_site_content; ?></td>
                                       <td><?= $d->tech_talk; ?></td>
                                       <td>
                                          <a href="<?php echo base_url('products/active/') . $d->id; ?>" class="btn btn-sm btn-success">ACTIVE</a>
                                       </td>
                                    </tr>
                              <?php
                                 }
                              }
                              ?>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th>Name</th>
                                 <th>Type</th>
                                 <th>Options</th>
                                 <th>Cost</th>
                                 <th>Option Hours</th>
                                 <th>Weight</th>
                                 <th>Shopping Site Content</th>
                                 <th>Tech Talk</th>
                                 <th>Action</th>
                              </tr>
                           </tfoot>
                        </table>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
               </div>
               <!-- /.col -->
            </div>
            <!-- /.row -->
         </section>
         <!-- /.content -->
      </div>

      <footer class="main-footer"></footer>
   </div>

   <script src="<?= base_url('assets/plugins/'); ?>jquery/jquery.min.js"></script>
   <script src="<?= base_url('assets/plugins/'); ?>bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
   <script src="<?= base_url('assets/plugins/'); ?>slimScroll/jquery.slimscroll.min.js"></script>
   <script src="<?= base_url('assets/plugins/'); ?>fastclick/fastclick.js"></script>
   <script src="<?= base_url('assets/dist/'); ?>js/adminlte.js"></script>

   <script src="<?= base_url('assets/datatable/'); ?>jquery.dataTables.min.js"></script>
   <script src="<?= base_url('assets/datatable/'); ?>dataTables.bootstrap4.min.js"></script>
   <script src="<?= base_url('assets/datatable/'); ?>dataTables.responsive.min.js"></script>
   <script src="<?= base_url('assets/datatable/'); ?>responsive.bootstrap4.min.js"></script>
   <script>
      $(function() {
         $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
            buttons: [
               'pdf', 'print'
            ]
         });
      });
   </script>
</body>

</html>