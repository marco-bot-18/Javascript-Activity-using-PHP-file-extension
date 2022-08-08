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
              <a class="nav-link" href="AcceptTwoNumbers.php">Accept Two Numbers</a>
              </li>
              <li class="nav-item">
              <a class="nav-link active" href="Temperature.php">Temperature Converter</a>
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
      <h1 class="display-3">Temperature Converter</h1>
      <p class="lead">Activity</p>
      <hr class="my-2">
  </div>

  <div class="container">
        <div class="row">
            <div class="col-sm">
                <form>
                    <div class="mb-3">
                        <label for="num1" class="form-label">Temperature</label>
                        <input type="number" class="form-control" placeholder="Input Temperature" name="numTemp" id="numTemp" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Convert in:</label>
                        <select class="form-select form-select-xs mb-3" onchange="Update()" name="converter" id="converter">
                            <option value="celToFah">Celcius to Fahrenheit</option>
                            <option value="fahToCel">Fahrenheit to Celcius</option>
                            <option value="celToKelv">Celcius to Kelvin</option>
                        </select>
                        <input type="text" id="getTextConvert" name="getTextConvert" hidden>
                    </div>
                    <button type="button" onclick="Convert()" id="submit" class="btn btn-primary">Convert</button>
                </form>
            </div>
            <div class="col-sm">
                <div class="mb-3">
                    <label for="textarea" class="form-label">Result: </label>
                    <textarea style="background-color: ghostwhite;" id="textRes" name="textRes" readonly class="form-control " rows="8"></textarea>
                </div>
            </div>
        </div>
    </div>

    <script src="scripts/temperature.js" type="text/javascript"></script>

</body>
</html>