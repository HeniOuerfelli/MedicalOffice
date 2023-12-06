<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patient Interface</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="PatientInterface.css">

  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nom</a>
                    </li>
                </ul>
            </div>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </li>
        </div>
    </nav>

    <div class  = "input-group mb-3">
        <div class="input-group mb-3  ">
            <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search your doctor">
        </div>

        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Filter</label>
            <select class="form-select" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>
    <div class="d-grid gap-2 col-2 mx-auto">
        <button class="btn btn-primary" type="button">Search</button>
    </div>


       


    <div>
        <ul class="nav nav-pills nav-fill">
            <?php
                error_log("This is a message to the console");

                $servername = "localhost";
                $username = "root";
                $password = "";
                $db_name = "maindatabase";

                $conn = new mysqli($servername, $username, $password, $db_name);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }


                $sql2 = "SELECT * FROM test;";
                $result = $conn->query($sql2);
                
                

                /*if ($result->num_rows > 0) {
                    // Fetch and process results
                    while ($row = $result->fetch_assoc()) {
                        $name = $row["name"];
                        $show = "<li class=\"nav-item\"> <a class=\"nav-link active\" aria-current=\"page\" href=\"#\"> $name</a></li>";
                        echo $show;
                    }
                } 
                else 
                {
                    echo "No results found";
                    $sql1 = "INSERT INTO test VALUES('SAMI hachicha',20,'0000',0,1)";
                    $conn->query($sql1);
                }*/
                $conn->close();
            ?>
        </ul>
    </div>



  </body>
</html>