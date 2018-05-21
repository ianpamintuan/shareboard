<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Login</h3>
    </div>
    <div class="panel-body">
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <input type="submit" name="submit" class="btn btn-success" value="Login">
            <a href="<?php echo ROOT_PATH; ?>" class="btn btn-danger">Cancel</a>
        </form>
    </div>
</div>