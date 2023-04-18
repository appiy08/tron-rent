<?php
// Include configuration file  
require('connection.php');

//Select query 
$select = "SELECT * FROM time_manage";
$result = $conn->query($select);
include('dashboard-head.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Time Manage</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <table class="table">
              <thead class="bg-primary text-center">
                <td>Name</td>
                <td>Time</td>
                <td>Status</td>
                <td>Action</td>
              </thead>
              <tbody class="text-center">
                <?php
                // Loop the employee data
                echo '<table class="table table-bordered">';
                while ($row = $result->fetch_object()) {
                  echo '<tr>'
                    . '<td>' . $row->name . '</td>'
                    . '<td>' . $row->time . '</td>'
                    . '<td>' . $row->status . '</td>'
                    . '</tr>';
                }
                echo '</table>';
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  include('dashboard-foot.php');
  ?>