<?php include "server/connection.php";
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "assets/components/header.php"
    ?>
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Document</title>
</head>

<body>
    <div class="d-md-flex h-md-100 align-items-center">

        <!-- First Half -->

        <div class="col-md-6 p-0 h-md-100" style="background-color: #E2E7FB">
            <div class="d-md-flex align-items-center h-100 p-5 text-center justify-content-center">
                <div class="logoarea pt-5 pb-5">
                    <img src="assets/img/login.svg" alt="" width="400px">
                </div>
            </div>
        </div>

        <!-- Second Half -->

        <div class="col-md-6 p-0 bg-white h-md-100 loginarea">
            <div class="d-md-flex align-items-center h-md-100 p-5 justify-content-center">
                <form action="server/login_process.php" method="POST" style="width: 300px;">
                    <img class="mb-3" src="assets/img/logo.svg" alt="" width="100px">
                    <h2 class="mb-5">Welcome to blala</h2>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="row my-2">
                        <div class="col-md-6 d-flex justify-content-start">
                            <!-- Checkbox -->
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="loginCheck" />
                                <label class="form-check-label" for="loginCheck"> Remember me </label>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex justify-content-end">
                            <a href="#!" class="text-body" style="text-decoration: none;">Forgot password?</a>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-grid">
                                <a href="register.php" class="btn btn-outline-primary">Register</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>

</html>