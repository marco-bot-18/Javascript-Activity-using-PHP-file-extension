<?php include 'includes/header.php'; ?>

<body>
    
<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" href="AcceptTwoNumbers.php">Accept Two Numbers</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="Temperature.php">Temperature Converter</a>
                </li>
                <li class="nav-item ">
                <a class="nav-link" href="MultiplicationTable.php">Multiplication</a>
                </li>
            </ul>
            <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
    <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <div class="jumbotron">
        <h1 class="display-3">Accept Two Numbers</h1>
        <p class="lead">Activity</p>
        <hr class="my-2">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="mb-3">
                    <label for="num1" class="form-label">1st Number</label>
                    <input type="number" placeholder="Input 1st Number" class="form-control" name="num1" id="num1" required>
                </div>
                <div class="mb-3">
                <label for="num1" class="form-label">2nd Number</label>
                    <input type="number" placeholder="Input 2nd Number" class="form-control" name="num2" id="num2" required>
                </div>
                <button type="button" onclick="Compute()" id="submit" class="btn btn-primary">Compute</button>
            </div>
            <div class="col-sm">
                <label class="form-label">Results: </label>
                <table class="table table-hover" cellpadding="10" cellspacing="30">
                    <tr>
                        <td><h style="margin-left: 0px; color: black">SUM</h></td>
                        <td><h style="color: white"></h></td>
                        <td><h style="margin-left: 0px; color: black" id="res1"> </h></td>
                    </tr>
                    <tr>
                        <td><h style="margin-left: 0px; color: black">DIFFERENCE</h></td>
                        <td><h style="margin-left: 0px; color: black"></td>
                        <td><h style="margin-left: 0px; color: black" id="res2"></h></td>
                    </tr>
                    <tr>
                        <td><h style="margin-left: 0px; color: black">PRODUCT</h></td>
                        <td><h style="margin-left: 0px; color: black"></td>
                        <td><h style="margin-left: 0px; color: black" id="res3"></h></td>
                    </tr>
                    <tr>
                        <td><h style="margin-left: 0px; color: black">QOUTIENT</h></td>
                        <td><h style="margin-left: 0px; color: black"></h></td>
                        <td><h style="margin-left: 0px; color: black" id="res4"></h></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script src="scripts/acceptTwoNums.js" type="text/javascript"></script>

</body>
</html>