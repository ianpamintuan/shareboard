<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Add Share</h3>
    </div>
    <div class="panel-body">
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="title">Link</label>
                <input type="text" id="link" name="link" class="form-control">
            </div>
            <input type="submit" name="submit" class="btn btn-success" value="Add Share">
            <a href="<?php echo ROOT_PATH; ?>" class="btn btn-danger">Cancel</a>
        </form>
    </div>
</div>