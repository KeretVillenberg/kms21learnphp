<?php include 'views/partials/header.php'; ?>

<form action="/articles" method="POST">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Some cool title...">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Content</label>
        <textarea class="form-control" id="body" name="body" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Create">
    </div>
</form>

<?php include 'views/partials/footer.php'; ?>