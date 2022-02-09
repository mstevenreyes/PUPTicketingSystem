<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Yeseva+One&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
    <link rel="stylesheet" href="style-fDashboard.css">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <!-- PUP LOGO -->
            <div class="logo">
                <img src="puplogo.png" alt="">
                <h3>Dela Cruz, Juan M. </h3>
                <p>College of Computer and Information Sciences</p>
            </div>
            <!-- Menu Items -->
            <ul>
                <li><a href="fDashboard.php">
                    <span class="icon"><i class = "fas fa-home"> </i></span>
                    <span class="Item">Home</span></a></li>
                <li><a href="NewTicket.php">
                    <span class="icon"><i class = "far fa-bell"></i></span>
                    <span class="Item">New Tickets</span></a></li>
                <li><a href="History.php" class="active">
                    <span class="icon"><i class = "far fa-folder-open"> </i></span>
                    <span class="Item">View History</span></a></li>
            </ul>
            <div class="footnote">
                <div>&copy Polytechnic University of the Philippines <br> College of Computer Infomation and Sciences 2022</div>
            </div>
        </div>
            <div id="hist" class="section">
                <div class="nav">
                    <h1>View Ticket History</h1>
                </div>
            </div>
    </div>
</body>

</html>