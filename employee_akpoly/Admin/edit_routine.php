<?php
include('../inc/topbar.php');
if(empty($_SESSION['admin-username']))
    {
      header("Location: login.php");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard |
        <?php echo $sitename ; ?>
    </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="shortcut icon" href="../<?php echo $logo ;  ?>" type="image/x-png" />


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/employee_akpoly/Admin" class="nav-link">Home</a>
                </li>

            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">


            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <!-- <img src="../<?php echo $logo2 ; ?>" alt=" Logo" width="150" height="130" style="opacity: .8"> -->
                <span class="brand-text font-weight-light"> &nbsp;&nbsp;&nbsp;&nbsp; </span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../<?php echo $admin_photo;    ?>" alt="User Image" width="140" height="141"
                            class="img-circle elevation-2">
                    </div>
                    <div class="info">
                        <a href="/employee_akpoly/Admin" class="d-block">
                            <?php echo $admin_fullname;  ?>
                        </a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <?php
			   include('sidebar.php');

			   ?>


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/employee_akpoly/Admin/">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard </li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <?php

    $query = "SELECT * FROM tblemployee ";
       $result = mysqli_query($conn, $query);
    if ($result)
    {
        // it return number of rows in the table.
        $row_no_employee = mysqli_num_rows($result);
    }
    ?>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h6><strong>
                                            <?php echo $row_no_employee;?>
                                        </strong></h6>

                                    <p><strong>No. of Employee </strong></p>
                                </div>
                                <div class="icon">
                                    <i class=""></i>
                                </div>
                                <a href="#" class="small-box-footer"></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <?php

    $query = "SELECT * FROM tblleave ";
       $result = mysqli_query($conn, $query);

    if ($result)
    {
        // it return number of rows in the table.
        $row_no_leave = mysqli_num_rows($result);

    }
    ?>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h6>
                                        <?php echo $row_no_leave; ?>
                                    </h6>

                                    <p><strong>No. of Leave Application(s) </strong></p>
                                </div>
                                <div class="icon">
                                    <i class=""></i>
                                </div>
                                <a href="#" class="small-box-footer"></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <?php

$query = "SELECT * FROM tblleave where status ='Approved' ";
   $result = mysqli_query($conn, $query);
if ($result)
{
    // it return number of rows in the table.
    $row_no_leave_approved = mysqli_num_rows($result);
}
?>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h6>
                                        <?php echo $row_no_leave_approved; ?>
                                    </h6>

                                    <p><strong>No. of Approved Leave </strong></p>
                                </div>
                                <div class="icon">
                                    <i class=""></i>
                                </div>
                                <a href="#" class="small-box-footer"></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <?php

$query = "SELECT * FROM tblleave where status ='Declined' ";
   $result = mysqli_query($conn, $query);
if ($result)
{
    // it return number of rows in the table.
    $row_no_leave_declined = mysqli_num_rows($result);
}
?>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h6>
                                        <?php echo $row_no_leave_declined; ?>
                                    </h6>

                                    <p><strong>No. of Declined Leave </strong></p>
                                </div>
                                <div class="icon">
                                    <i class=""></i>
                                </div>
                                <a href="#" class="small-box-footer"></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <?php
// Establish a connection to the database
$conn = mysqli_connect("localhost", "thienvu", "thienvu", "employee_akpoly");

// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

// Get the id from the URL parameter
$id = $_GET['employee_id'];

// Query the database to retrieve the employeeID
$query = "SELECT employeeID FROM tblemployee WHERE id = '$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$employeeID = $row['employeeID'];
$query = "SELECT placeid, monday, tuesday, wednesday,thursday,friday,saturday,sunday FROM tblroutines WHERE employeeid = '$employeeID'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$placeid = $row['placeid'];
$monday = $row['monday'];
$tuesday = $row['tuesday'];
$wednesday = $row['wednesday'];
$thursday = $row['thursday'];
$friday = $row['friday'];
$saturday = $row['saturday'];
$sunday = $row['sunday'];

// Check if query is successful
if (!$result) {
    die("Query failed: ". mysqli_error($conn));
}
?>
                        <style>
                            #routineForm {
                                width: 100%;

                            }

                            .btnSubmit {
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                gap: 10px;
                                /* Optional: add some space between the buttons */
                            }
                        </style>

                        <div id="routineForm" class="hidden">
                            <form class="requestRoutineForm" action="edit_routine.php" method="post">
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="date">Identity Number</label>
                                        <input type="text" class="form-control" id="validationCustom01" required
                                        value="<?php echo $employeeID;?>" name="employee_id">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="idNumber">Place Id</label>
                                        <input type="text" class="form-control" id="validationCustom02" required
                                        value="<?php echo $placeid;?>" name="placeid">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="monday">Monday :</label>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="selectTimeRequest">Select Time :</label>
                                        <select name="monday" id="">
                                            <option value="<?php echo $monday ?>"><?php echo $monday ?></option>
                                            <option value="OFF">OFF</option>
                                            <option value="6h-12h">6h-12h</option>
                                            <option value="12h-18h">12h-18h</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="tuesday">Tuesday :</label>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="selectTimeRequest">Select Time :</label>
                                        <select name="tuesday" id="">
                                            <option value="<?php echo $tuesday ?>"><?php echo $tuesday ?></option>
                                            <option value="OFF">OFF</option>
                                            <option value="6h-12h">6h-12h</option>
                                            <option value="12h-18h">12h-18h</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="wednesday">Wednesday :</label>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="selectTimeRequest">Select Time :</label>
                                        <select name="wednesday" id="">
                                            <option value="<?php echo $wednesday ?>"><?php echo $wednesday ?></option>
                                            <option value="OFF">OFF</option>
                                            <option value="6h-12h">6h-12h</option>
                                            <option value="12h-18h">12h-18h</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="thursday">Thursday :</label>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="selectTimeRequest">Select Time :</label>
                                        <select name="thursday" id="">
                                            <option value="<?php echo $thursday ?>"><?php echo $thursday ?></option>
                                            <option value="OFF">OFF</option>
                                            <option value="6h-12h">6h-12h</option>
                                            <option value="12h-18h">12h-18h</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="friday">Friday :</label>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="selectTimeRequest">Select Time :</label>
                                        <select name="friday" id="">
                                            <option value="<?php echo $friday ?>"><?php echo $friday ?></option>
                                            <option value="OFF">OFF</option>
                                            <option value="6h-12h">6h-12h</option>
                                            <option value="12h-18h">12h-18h</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="saturday">Saturday :</label>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="saturday">Select Time :</label>
                                        <select name="saturday" id="">
                                            <option value="<?php echo $saturday ?>"><?php echo $saturday ?></option>
                                            <option value="OFF">OFF</option>
                                            <option value="6h-12h">6h-12h</option>
                                            <option value="12h-18h">12h-18h</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="sunday">Sunday :</label>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="sunday">Select Time :</label>
                                        <select name="sunday" id="">
                                            <option value="<?php echo $sunday ?>"><?php echo $sunday ?></option>
                                            <option value="OFF">OFF</option>
                                            <option value="6h-12h">6h-12h</option>
                                            <option value="12h-18h">12h-18h</option>
                                        </select>
                                    </div>
                                </div>
        <div class="btnSubmit">
            <button class="btn btn-primary" id="create-btn" type="submit">Update Routine</button>
            <button onclick="window.location.href='index_editRoutine.php'" class="btn btn-primary">Close</button>
        </div>
    </form>
</div>
<?php

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $employeeid = $_POST['employee_id'];
    $placeid = $_POST['placeid'];
    $monday = $_POST['monday'];
    $tuesday = $_POST['tuesday'];
    $wednesday = $_POST['wednesday'];
    $thursday = $_POST['thursday'];
    $friday = $_POST['friday'];
    $saturday = $_POST['saturday'];
    $sunday = $_POST['sunday'];

    // Prepare and execute the query
    $sql = "UPDATE tblroutines SET placeid='$placeid',monday='$monday',tuesday='$tuesday',wednesday='$wednesday',thursday='$thursday',friday='$friday',saturday='$saturday',sunday='$sunday' WHERE employeeID='$employeeid'";

if ($conn->query($sql) === TRUE) {
//   echo "Record updated successfully";
    echo '<script>alert("Record updated successfully")</script>';
    exit;
    // header('Location: http://localhost/employee_akpoly/Admin/index.php');
} else {
  echo "Error updating record: " . $conn->error;
}
}

// Close connection
$conn->close();
?>

                            </form>


                        </div>
                    </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>