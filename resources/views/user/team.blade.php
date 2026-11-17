<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Reports</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header {
    position: relative;
    width: 100%;
    height: 50px;
    background-color: black;
    color: white;
    display: flex;
    justify-content: center; /* Center the text horizontally */
    align-items: center; /* Vertically center the text */
    padding: 0;
}

.back-link {
    position: absolute;
    left: 0;
    top: 0;
    display: flex;
    align-items: center;
    height: 100%;
}

.back-icon {
    height: 100%; /* Ensures the icon fills the header height */
    padding-left: 10px; /* Adds some space from the edge */
}

.header-title {
    margin: 0;
    font-size: 1.5rem;
    text-align: center;
}

        .header i {
            position: absolute;
            left: 10px;
            top: 10px;
            cursor: pointer;
        }
        .nav-tabs {
            justify-content: space-around;
            margin: 20px 0;
        }
        .card {
            margin: 20px 0;
        }
        .team-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .team-info span {
            font-size: 14px;
        }
        .list-group-item {
            cursor: pointer;
        }
        .team-item.active {
            background-color: blue;
            color: white;
        }
        .level-icon {
            display: flex;
            align-items: center;
            font-size: 14px;
            gap: 10px;
        }
        .team-right-text {
            text-align: right;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header class="header d-flex align-items-center p-0">
    <a href="dashboard" class="back-link">
        <img src="images/arrowleft.png" alt="Back" class="back-icon" height="50px">
    </a>
    <h4 class="header-title">Team Reports</h4>
</header>

<div class="container mt-3">
    <!-- Header -->


    <!-- Nav Pills -->
    <ul class="nav nav-pills nav-tabs">
        <li class="nav-item">
            <a class="nav-link" >All</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" >Today</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" >Yesterday</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" >Week</a>
        </li>
    </ul>

    <!-- Report Cards -->
    <div class="card">
        <div class="card-body">
            <div class="team-info">
                <h6>All Journey</h6>
                <h5>0</h5>
            </div>
            <div class="team-info">
                <span>Team size: 0</span>
                <span>Commission (Views): 0</span>
            </div>
        </div>
    </div>

    <ul class="list-group">
        <li class="list-group-item d-flex align-items-center justify-content-between team-item">
            <div class="d-flex align-items-center">
                <div class="level-icon circle">
                    <img src="{{ asset('images/vip.png') }}" alt="vip-img" width="50px" class="rounded-circle me-2">
                    <h6>Level 1</h6>
                </div>
            </div>
            <div class="team-right-text">
                <span class="d-block">Proportion 30%</span>
                <div style="border-bottom: solid 1px blue;"></div>
                <span>Team size: 0</span>
                <span>Commission (Views): 0</span>
            </div>
        </li>
    </ul>
</div>

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.querySelectorAll('.nav-link').forEach(function(navLink) {
        navLink.addEventListener('click', function() {
            document.querySelectorAll('.nav-link').forEach(function(link) {
                link.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
</script>

</body>
</html>
