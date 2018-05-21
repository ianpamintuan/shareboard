<div class="panel panel-default">
    <?php Messages::display(); ?>
    <div class="panel-heading">
        <h3 class="panel-title">Register</h3>
    </div>
    <div class="panel-body">
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="title">Email</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <input type="submit" name="submit" class="btn btn-success" value="Register">
            <a href="<?php echo ROOT_PATH; ?>" class="btn btn-danger">Cancel</a>
        </form>
    </div>
</div>