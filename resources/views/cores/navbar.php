<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Coffee Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="./home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./index.php?page=beverages">Beverage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./index.php?page=bill&pg=1">Bill</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=order&action=createOrder">Order</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./index.php?page=logout">Log out</a>
            </li>
<!--            <li class="nav-item dropdown">-->
<!--                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"-->
<!--                   aria-haspopup="true" aria-expanded="false">-->
<!--                    Dropdown-->
<!--                </a>-->
<!--                <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                    <a class="dropdown-item" href="./index.php?page=logout">Logout</a><a class="dropdown-item"-->
<!--                                                                                         href="index.php?page=bill&pg=1">Bill </a>-->
<!--                    <a class="dropdown-item" href="index.php?page=order&action=createOrder">Create New Order</a>-->
<!--                    <div class="dropdown-divider"></div>-->
<!--                    <a class="dropdown-item" href="index.php?page=bill&action=search">Search Bill</a>-->
<!--                </div>-->
<!--            </li>-->
        </ul>
        <form class="form-inline my-2 my-lg-0" method="post" action="index.php?page=beverages&action=search">
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="YYYY-MM-DD or HH:MM:SS" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>