<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Your Dashboard</title>
</head>
<body>

  <div class="container-fluid">
    <div class="row">

<!-- Sidebar -->
<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="#">
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          Reports
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          Analytics
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          Geographical Analytics
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          Sales
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          Users
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          Products
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          Inventory
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          Customer Feedback
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          Settings
        </a>
      </li>
      <!-- Add more items as needed -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          Orders
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          Messages
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          Support
        </a>
      </li>
    </ul>
  </div>
</nav>


      <!-- Main content -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
        </div>

        <!-- Content goes here -->
        <!-- Content goes here -->
<div class="row">
  <!-- Analysis Cards -->
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Users</h5>
        <p class="card-text">1,234</p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Revenue</h5>
        <p class="card-text">$50,000</p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Page Views</h5>
        <p class="card-text">100,000</p>
      </div>
    </div>
  </div>
</div>

<!-- Sales Progress -->
<div class="row mt-4">
  <div class="col-md-8">
    <h2>Sales Progress</h2>
    <div class="progress">
      <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
    </div>
  </div>
</div>

<!-- Geographical Analytics -->
<div class="row mt-4">
  <div class="col-md-12">
    <h2>Geographical Analytics</h2>
  </div>

  <!-- Card for USA -->
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">United States</h5>
        <p class="card-text">Sales: $20,000</p>
        <p class="card-text">Users: 500</p>
      </div>
    </div>
  </div>

  <!-- Card for Canada -->
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Canada</h5>
        <p class="card-text">Sales: $15,000</p>
        <p class="card-text">Users: 400</p>
      </div>
    </div>
  </div>

  <!-- Card for Germany -->
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Germany</h5>
        <p class="card-text">Sales: $25,000</p>
        <p class="card-text">Users: 600</p>
      </div>
    </div>
  </div>
</div>
<!-- Top Products Section -->
<div class="row mt-4">
  <div class="col-md-12">
    <h2>Top Products</h2>
  </div>

  <!-- Card for Product 1 -->
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Product 1</h5>
        <p class="card-text">Sales: $10,000</p>
        <p class="card-text">Units Sold: 200</p>
      </div>
    </div>
  </div>

  <!-- Card for Product 2 -->
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Product 2</h5>
        <p class="card-text">Sales: $8,000</p>
        <p class="card-text">Units Sold: 150</p>
      </div>
    </div>
  </div>

  <!-- Card for Product 3 -->
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Product 3</h5>
        <p class="card-text">Sales: $12,000</p>
        <p class="card-text">Units Sold: 250</p>
      </div>
    </div>
  </div>
</div>

<!-- Monthly Revenue Chart -->
<div class="row mt-4">
  <div class="col-md-12">
    <h2>Monthly Revenue Trend</h2>
    <canvas id="monthlyRevenueChart" width="400" height="200"></canvas>
  </div>
</div>


      </main>
    </div>
  </div>
  <script>
  document.addEventListener('DOMContentLoaded', function () {
    // Dummy data for monthly revenue
    var monthlyRevenueData = {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      datasets: [{
        label: 'Monthly Revenue',
        data: [5000, 8000, 12000, 10000, 15000, 18000, 20000, 22000, 18000, 16000, 20000, 25000],
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 2,
        fill: false
      }]
    };

    // Get the canvas element
    var ctx = document.getElementById('monthlyRevenueChart').getContext('2d');

    // Create the line chart
    var monthlyRevenueChart = new Chart(ctx, {
      type: 'line',
      data: monthlyRevenueData,
      options: {
        scales: {
          x: {
            type: 'category',
            labels: monthlyRevenueData.labels,
            display: true
          },
          y: {
            beginAtZero: true,
            display: true
          }
        }
      }
    });
  });
</script>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
