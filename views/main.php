<html>
<head>
    <title>Shareboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/assets/css/style.css">
</head>
<body>

    <!-- Static navbar -->
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Shareboard</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo ROOT_URL; ?>">Home</a></li>
                    <li><a href="<?php echo ROOT_URL; ?>shares">Shares</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if(isset($_SESSION['user_logged_in'])) : ?>
                    <li class="active"><a href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['first_name'] . ' ' . $_SESSION['user_data']['last_name']; ?></span></a></li>
                    <li><a href="<?php echo ROOT_URL; ?>users/logout">Logout</a></li>
                    <?php else : ?>
                    <li class="active"><a href="<?php echo ROOT_URL; ?>users/login">Login <span class="sr-only">(current)</span></a></li>
                    <li><a href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
                    <?php endif; ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

    <div class="container">

        <div class="row">
            <?php Messages::display(); ?>
            <?php require_once($view); ?>
        </div>

    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>