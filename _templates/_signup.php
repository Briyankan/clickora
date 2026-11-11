<?php

$signup = false;
if (isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email']) and isset($_POST['phone'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $result =  signup($user, $pass, $email, $phone);
    $signup = true;
}

?>

<?php
if ($signup) {
    ?>
<main class="container">
    <div class="bg-1 p-5 rounded">
        <h1>Signup success</h1>
        <p class="fs-lg fw-light">Now you can login from <a href="/login.php">here</a>.</p>
    </div>
</main>
    <?php
} else {
    ?>


<main class="form-signup w-100 m-auto">
    <form method="post" action="signup.php">
        <img class="mb-4" src="/clickora/image/logo2.png" alt="Bootstrap" width="180" height="100">
        <h1 class="h3 mb-3 fw-normal">Signup here</h1>
           <div class="form-floating">
            <label for="floatingInput">User name</label>
            <input name="username" type="text" class="form-control" id="floatingInput"
                placeholder="name@example.com">
        </div>
           <div class="form-floating">
            <label for="floatingInput">Phone</label>
            <input name="phone" type="text" class="form-control" id="floatingInput"
                placeholder="name@example.com">
        </div>
        <div class="form-floating">
            <label for="floatingInput">Email address</label>
            <input name="email_address" type="email" class="form-control" id="floatingInput"
                placeholder="name@example.com">
        </div>
        <div class="form-floating">
            <label for="floatingPassword">Password</label>
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        </div>
     
        <button class="btn-solid theme-primary w-100 py-2" type="submit">Sign up</button>
        <p class="mt-5 mb-3 fg-2">&copy; 2026</p>
    </form>
</main>
<?php }?>