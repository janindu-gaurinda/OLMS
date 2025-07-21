<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link href="./bootstrap_icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./DataTables/datatables.min.css">
    <link rel="stylesheet" href="./assets/co.css">
    <style>
        .bg_color {
            background-color: #635bce !important;
        }

        .bg_color22 {
            background-color: #221F1F;
        }

        .nav_hederdd_img {
            height: 80px;
        }

        .text_color {
            color: #635bce !important;
            display: block;
            /* Ensures they are on separate lines */
            text-align: center;
            /* Optional, centers text */
            font-weight: lighter;
        }

        .line {
            border-bottom: 5px solid black;
            margin-top: 5px;
            width: 100%;
            padding-top: 77px;
            position: fixed;
        }

        .text_size {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg_color fixed-top p-0">
        <div class="container-fluid p-0">
            <!-- Left-aligned brand image -->
            <!-- <a class="navbar-brand bg_color ps-3" href="./dashboard.php"> -->
            <a class="navbar-brand bg_color ps-3" href="./dashboard.php">
                <img src="./img/Leave Management Logo.png" class="nav_heder_img" alt="">
            </a>
            <!-- Right-aligned content -->
            <div class="d-flex align-items-center ms-auto bg_color22">
                <img src="./img/Header.png" class="nav_hederdd_img" alt="">
                <div class="row">
                    <div class="col-auto pt-1 pe-2" style="padding:0">
                        
                        <a href="./include/USER_GUIDE.pdf" target="_blank" class="link-offset-2 link-underline link-underline-opacity-0 text-center">
                            <h5 class="text-black mt-2 text_color">User Guide</h5>
                        </a>
                    </div>
                </div>
                <div class="vl bg-light mx-3" style="width: 1px; height: 60px;"></div>
                <div class="row">
                    <div class="col-auto pt-1">
                        <h5 class="text_color text-uppercase"><?php echo date('Y-m-d'); ?></h5>
                        <h5 class="text_color text-uppercase" id="current-time"></h5>
                    </div>
                </div>
                <div class="vl bg-light mx-3" style="width: 1px; height: 60px;"></div>
                <div class="row me-2">
                    <div class="col-auto pt-1 text-center">
                        <img src="./img/Admin.svg" alt="UN Icon" class="imgicon">
                        <a href="./logOut.php" class="" onclick="return logout();">
                            <img src="./img/Logout.svg" alt="UN Icon" class="imgicon">
                        </a>
                        <h4 class="text-white mx-2 pt-1 text_size text-center text-capitalize"> <?php echo isset($_SESSION['DISPLAYNAME']) ? $_SESSION['DISPLAYNAME'] : ''; ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="line"></div>



    <!-- Include jQuery and then Bootstrap Bundle JS (includes Popper.js) -->
    <script src="./bootstrap/jquery-3.7.1.min.js"></script>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./DataTables/datatables.min.js"></script>
    <!-- Initialize DataTables -->
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script>
        function logout() {
            return confirm("Are you sure you want to log out?");
        }
    </script>
    <script>
        // Function to update the time in real-time
        function updateTime() {
            const currentTimeElement = document.getElementById("current-time");
            const now = new Date();
            const hours = now.getHours() % 12 || 12; // Convert 24-hour time to 12-hour format
            const minutes = now.getMinutes().toString().padStart(2, '0'); // Add leading zero to minutes
            const ampm = now.getHours() >= 12 ? 'PM' : 'AM'; // Determine AM/PM
            currentTimeElement.textContent = `${hours}:${minutes} ${ampm}`;
        }

        // Update time immediately and then every second
        updateTime();
        setInterval(updateTime, 1000);
    </script>
</body>

</html>