<?php

$page_title = 'Login';

include_once('public/includes/header/header.php');

?>

<div class="container mb-5">
    <h4 class="display-5 text-black-50" x-data="{ message: 'Add user'}" x-text="message"></h4>
    <div class="bg-white d-flex justify-content-center">
        <form action="add_user/add_user.php" method="post">
            <div class="p-2 mb-1">
                <label for="username" x-data="{ message : 'Username' }" x-text="message" class="mb-1"></label>
                <input class="form-control" name="username" />
            </div>
            <div class="p-2 mb-1">
                <label for="Password" x-data="{ message : 'Password' }" x-text="message" class="mb-1"></label>
                <input class="form-control" name="password" />
            </div>
            <div class="p-2 mb-1">
                <label for="Name" x-data="{ message : 'Name' }" x-text="message" class="mb-1"></label>
                <input class="form-control" name="name" />
            </div>
            <div class="p-2 mb-1">
                <button type="submit" class="btn btn-primary btn-block" x-data="{message: 'Submit'}" x-text="message"></button>
            </div>
        </form>
    </div>
</div>


<?php include_once('public/includes/footer/footer.php'); ?>