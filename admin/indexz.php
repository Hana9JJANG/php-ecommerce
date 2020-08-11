<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ohnana management</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="indexz.php">Ohnana Management</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="indexz.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
   
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin-menu.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Products</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="admin-customer.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Customer</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin-order.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Orders</span></a>
      </li>
    
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Product</li>
        </ol>







        <!-- Icon Cards-->
        <div class="row">
         
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">New Orders</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="admin-order.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">New Products</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="admin-menu.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        <?php
require_once ('mysql_connect.php'); // Connect to the db.
$totalDays=date('t');
$year=date('Y');
$pyear=date("Y",strtotime("-1 year"));
$month=date('m');
$pmonth=date("m",strtotime("-1 month"));
$ptotalDays=date("t",strtotime("-1 month"));
$monthName=date("F");
$no=1;
$totalDaysinYear = date("z", mktime(0,0,0,12,31,$year)) + 1; 
$totalPast = 0;
$totalThis = 0;
  // Make the query.

	for($day=1; $day<=$totalDays; $day++) {  
    $query = "SELECT SUM(price) AS priceOrder FROM orders WHERE YEAR(ts)=$year AND MONTH(ts)=$month AND DAY(ts)=$day"; 
    $result = mysqli_query ($dbc, $query) or die(mysqli_error($dbc)); // Run the query.
    $num = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    $po = 0;
    if($row['priceOrder'] == null){
      $po = 0;
    }else{
      
      $po = $row['priceOrder'];
    }
		echo '<input type="hidden" id="ordercount'.$day.'" value="'.$po.'" />'; 
  }
  /*
  $dataOrder = array();
  if ($num > 0) { // If it ran OK, display the records.
  while () {
    $dataOrder[] = $row;
  }
}*/
mysqli_free_result ($result);
//print json_encode($dataOrder);
  ?>
        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Monthly Sales</div>
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
          <div class="card-footer small text-muted">Monthly Sales for <?=$monthName?></div>
        </div>

     
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Ohnana 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  </div>
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="index.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <!--<script src="js/demo/chart-area-demo.js"></script>-->
<script>
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

function gd(year, month, day) {
  return new Date(year, month - 1, day).getTime();
}
function daysInMonth (m) {
  var d3 = new Date();
  return new Date(d3.getFullYear(), m - 1, 0).getDate();
}
function daysInPreMonth (m) {
  var d3 = new Date();
  return new Date(d3.getFullYear(), m - 2, 0).getDate();
}
function days_of_a_year(year) {
  return isLeapYear(year) ? 366 : 365;
}
function isLeapYear(year) {
  return year % 400 === 0 || (year % 100 !== 0 && year % 4 === 0);
}
// Area Chart Example
var ctx = document.getElementById("myAreaChart");


var d2 = new Date;
var m = d2.getMonth();
var y = d2.getFullYear();
var dayC = daysInMonth(m);
var pdayC = daysInPreMonth(m);
var dayY = (days_of_a_year(y));
var count = 0;
var data = [];
var day = [];
var daily = [];
const monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];
for (let i = 1; i <= dayC; i++) {
					day.push([monthNames[m]+" "+i]);
        }
console.dir(day);
for (let i = 1; i <= dayC; i++) {
					daily.push([document.getElementById('ordercount'+i).value]);
				}
console.dir(daily);
/*
var dateOrder = [];
var priceOrder = [];
for(var i in data) {
        dateOrder.push(data[i].ts);
        priceOrder.push(data[i].price);
      }
      
console.dir(dateOrder);
console.dir(priceOrder);  
*/                     
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: day,
    datasets: [{
      label: "MYR",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: daily,
    }],
  },
  options: {
    scales: {
      xAxes: [{
        gridLines: {
          display: false
        }
      }],
      yAxes: [{
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});

</script>
</body>

</html>
