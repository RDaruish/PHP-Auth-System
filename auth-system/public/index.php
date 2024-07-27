<?php
include __DIR__ . '/../config/database.php';
include __DIR__ . '/../src/Auth.php';

$auth = new Auth($pdo);

include __DIR__ . '/../templates/header.php';

if ($auth->isLoggedIn()) {
    echo "<p>Welcome! <a href='logout.php'>Logout</a></p>";
} else {
    notlogged();
}

function notlogged() {
    echo '
        <div class="card shadow w-50 d-flex align-items-center rounded p-2">
            <div class="d-flex flex-row gap-2 mt-2 align-items-center justify-content-center">
                <i class="fa-regular fa-face-sad-tear"></i> You are not logged in.
            </div>

            <p class="mt-2">
                <a class="btn btn-primary" href="login.php">Login</a>
                <a class="btn btn-success" href="register.php">Register</a>
            </p>
        </div>
    ';
}

include __DIR__ . '/../templates/footer.php';
