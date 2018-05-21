<div>
    <?php if(isset($_SESSION['user_logged_in'])) : ?>
    <a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Share Something</a>
    <?php endif; ?>
    <?php
        foreach ($viewModel as $shares) {
            echo '<div class="well">';
            echo '<h3>' . $shares->title . '</h3>';
            echo '<small>' . $shares->create_date . '</small>';
            echo '<p>' . $shares->body . '</p>';
            echo '<a href="http://' . $shares->link . '" target="_blank" class="btn btn-primary">Link</a>';
            echo '</div>';
        }
    ?>
</div>
<?php
