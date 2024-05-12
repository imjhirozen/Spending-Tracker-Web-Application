<?php require('Views/partials/head.php'); ?>

<main id="log_wrapper">
    <form action="" method="POST">
        <div class="container rounded p-4" style="min-width: 360px; border: 1px solid white;">
            <div class="mb-4">
                <h1 class="text-center">Register</h1>
            </div>
            <div class="form-floating  mb-3">
                <input type="text" class="form-control" id="reg_name" name="user_name" placeholder="Password">
                <label for="reg_name">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="reg_email" name="email" placeholder="example@gmail.com">
                <label for="reg_email">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="reg_password" name="password" placeholder="Password">
                <label for="reg_password">Password</label>
            </div>
            <div class="row g-2 mt-4">
                <button class="btn btn-primary" type="submit">Register</button>
                <button class="btn btn-primary" id="reg_link_login" >Sign in</button>
            </div>
        </div>
    </form>
</main>

<?php require('Views/partials/footer.php'); ?>