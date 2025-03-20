<?php

$page_title = 'Login';

include_once('public/includes/header/header.php');

?>

        <div class="shadow-sm bg-body p-2 col-md-12 mb-5">
            <div class="col-md-6 d-flex p-1">
                <div class="text-white">
                    <img src="resources/images/logo2.png" width="70px"/>
                </div>
                <div class="p-1">
                <h6 class="display-5" x-data="{ message: 'WEB-APP'}" x-text="message"></h6>
                </div>
            </div>
        </div>


    <div class="loginContainer container mt-4">
        <div class="d-flex justify-content-center p-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-4 shadow p-4"> <!-- Adjust width here -->
                        <form>
                            <h2 class="text-center display-5 mb-4" x-data="{message: 'Login'}" x-text="message"></h2>
                            <hr>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                <label for="floatingInput">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-success w-100 py-2" type="submit">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






<!-- <div class="container bg-dark">
    <div class="">
        <h1 x-data="{ message: 'LOGIN' }" x-text="message"></h1>
    </div>
</div> -->




<?php include_once('public/includes/footer/footer.php'); ?>
