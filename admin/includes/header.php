<style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #dashboard-menu {
            height: 100%;
        }
    </style>
<div class="container-fluid bg-dark text-light p-4 d-flex align-items-center justify-content-between">
        <h3 class="mb-0 h-font">ADMIN PANEL</h3>
        <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>

    <div class="row h-100">
        <div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid flex-lg-column align-items-stretch">
                    <h5 class="mt-2 text-light">ADMIN PANEL</h5>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminDrop" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDrop">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="dashboard.php">DASHBOARD</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="users.php">USERS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="rooms.php">ROOMS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="settings.php">SETTING</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>