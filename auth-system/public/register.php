<?php
include __DIR__ . '/../config/database.php';
include __DIR__ . '/../src/Auth.php';

$auth = new Auth($pdo);

include __DIR__ . '/../templates/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($auth->register($username, $password)) {
        echo '
            <div class="alert alert-success w-50 fade show" role="alert">
                <strong>Registration successful.</strong> <a href="login.php">Log in </a> to continue.
            </div>
        ';
    } else {
        echo '
            <div class="alert alert-error w-50 fade show" role="alert">
                Registration failed.
            </div>
        ';
    }
}
?>

<div class="card shadow w-50 p-2 d-flex align-items-center rounded py-4 px-2">
    <div class="d-flex flex-row gap-2 mb-3 align-items-center justify-content-center">
        <i class="fa-regular fa-face-smile-beam"></i> Sign up and be happy!.
    </div>

    <form method="POST" class="w-75" action="">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="username" required>
            <label for="floatingInput">Username</label>
        </div>

        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingInput" name="password" required>
            <label for="floatingInput">Username</label>
        </div>

        <button class="btn w-100 btn-success" type="submit">Register</button>

        <div class="d-flex flex-row text-muted mt-3 align-items-center w-100 justify-content-end">
            Already have an account?
            <a class="btn btn-link" href="login.php">Access now!</a>
        </div>
    </form>

</div>

<?php
    include __DIR__ . '/../templates/footer.php';
?>