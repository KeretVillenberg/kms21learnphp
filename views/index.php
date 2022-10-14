
    <?php include 'partials/header.php'; ?>
    <h1>Hello, world!</h1>
    <form action="/page1" method="GET">
     <div class="mb-3">
     <label for="exampleFormControlInput1" class="form-label">Email address</label>
     <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="sisesta midagi" name="name">
     </div>
     <input type="submit" class="btn btn-primary">
    </form>


    <ul>
        <?php for($i=0; $i<100; $i++): ?>
        <li>Item <?= $i ?></li>
        <?php endfor; ?>         
    </ul>
    <?php include 'partials/footer.php'; ?>