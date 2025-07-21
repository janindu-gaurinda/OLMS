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
            background-color: #635bce;
        }

        .bg_color22 {
            background-color: #221F1F;
            /* height: 40px; */
        }

        .nav_hederdd_img {
            /* height: 46px; */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg_color navbar-dark fixed-top">
        <div class="container-fluid">
            <!-- Left-aligned brand image -->
            <a class="navbar-brand" href="./dashboard.php">
                <img src="./img/Leave Management Logo.png" class="nav_heder_img" alt="">
                <!-- home -->
            </a>

            <!-- Right-aligned content -->
            <div class="d-flex align-items-center ms-auto  bg_color22">
                <!-- <img src="./img/Header.png" class="nav_hederdd_img" alt=""> -->
                <h4 class="text-white mx-2"> <?php echo isset($_SESSION['DISPLAYNAME']) ? $_SESSION['DISPLAYNAME'] : ''; ?></h4>
                <div class="vl bg-light mx-2" style="width: 1px; height: 50px;"></div>
                <h4 class="text-white mx-2 text-uppercase"><?php echo date('Y-M-d'); ?></h4>
                <div class="vl bg-light mx-2" style="width: 1px; height: 50px;"></div>
                <img src="./img/person.svg" alt="UN Icon" class="imgicon">
                <a href="./logOut.php" class="" onclick="return logout();">
                    <img src="./img/box-arrow-right.svg" alt="UN Icon" class="imgicon">
                </a>
            </div>
        </div>
    </nav>

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
</body>

</html>