<?php include 'views/partials/header.php'; ?>

<form action="/register" method="POST">
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Register">
    </div>
</form>

<?php include 'views/partials/footer.php'; ?>