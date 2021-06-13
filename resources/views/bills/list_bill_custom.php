<body>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?page=bill&action=search">
                            <span data-feather="home"></span>
                            Search bill <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php?page=bill&action=list-today&day=1">
                            <span data-feather="file"></span>
                            Today
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php?page=bill&action=list-today&day=7">
                            <span data-feather="shopping-cart"></span>
                            This week
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php?page=bill&action=list-today&day=30">
                            <span data-feather="users"></span>
                            This month
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span>
                            Reports
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

            <!--            <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->
            <h2><?php echo $title ?></h2>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <!--                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>-->
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <!--                        <a class="page-link" href="#">Next</a>-->
                    </li>
                </ul>
            </nav>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Order Number</th>
                        <th>Time Order</th>
                        <th>Time Payment</th>
                        <th>Total</th>
                        <th>Table</th>
                        <th>Detail</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($bills as $key => $bill): ?>
                        <tr>
                            <td><?php echo $bill->id ?></td>
                            <td><?php echo $bill->timeOrder ?></td>
                            <td><?php echo $bill->timePayment ?></td>
                            <td><?php echo $bill->total ?></td>
                            <td><?php echo $bill->tableNumber ?></td>
                            <td><a href="./index.php?page=bill&action=detail&id=<?php echo $bill->id ?>">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../public/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>

<script src="../../../public/assets/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
<script src="../../../public/js/bill.js"></script>
</body>
