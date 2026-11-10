<?php
$username = $_POST['email_address'];
$password = $_POST['password'];
$result = validate_credentials($username, $password);

if ($result) {
    ?>
<main class="container">
    <div class="bg-1 p-5 rounded">
        <h1>Login success</h1>
        <p class="fs-lg fw-light">Welcome to clickora </p>
    </div>
</main>
    <?php
} else {
    ?>
<main class="form-signin w-100 m-auto">
    <form method="post" action="login.php">
        <img class="mb-4" src="/clickora/image/logo2.png" alt="Bootstrap" width="180" height="100">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        <div class="form-floating">
            <label for="floatingInput">Email address</label>
            <input name="email_address" type="email" class="form-control" id="floatingInput"
                placeholder="name@example.com">
        </div>
        <div class="form-floating">
            <label for="floatingPassword">Password</label>
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        </div>
        <div class="form-field text-start my-3">
            <input type="checkbox" value="remember-me" id="checkDefault" class="check">
            <label for="checkDefault">Remember me</label>
        </div>
        <button class="btn-solid theme-primary w-100 py-2" type="submit">Sign in</button>
        <p class="mt-5 mb-3 fg-2">&copy; 2026</p>
    </form>
</main>

<?php } ?>

<?php
        $username = $_POST['email_address'];
$password = $_POST['password'];

// echo $username;


?>