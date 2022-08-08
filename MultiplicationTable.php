<?php include 'includes/header.php'; ?>

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
                <a class="nav-link" href="AcceptTwoNumbers.php">Accept Two Numbers</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="Temperature.php">Temperature Converter</a>
                </li>
                <li class="nav-item active">
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
        <h1 class="display-3">Multiplication</h1>
        <p class="lead">Activity</p>
        <hr class="my-2">
        <!-- <p>More info</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
        </p> -->
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="numMultipy1" class="form-label">1st Number</label>
                    <input type="number" placeholder="Input 1st Number" class="form-control" name="numMultiply1" id="numMultiply1" required>
                </div>
                <div class="mb-3">
                <label for="numMultipy2" class="form-label">2nd Number</label>
                    <input type="number" placeholder="Input 2nd Number" class="form-control" name="numMultiply2" id="numMultiply2" required>
                </div>
                <button type="button" onclick="Multiply()" id="submit" class="btn btn-primary">Compute</button>
            </div>
            <div class="col">
                <label class="form-label">Results: </label>
                <textarea class="form-control" id="demo" rows="15" readonly>

                </textarea>
            </div>
        </div>
    </div>

    <script src="scripts/multiplication.js"></script>

</body>
</html>