<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">
    <meta charset="UTF-8">
    <title>Profile Summary</title>
</head>
<body>
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="http://xdenson.greenriverdev.com/328/dating/">My Dating Site</a>
    </li>
</ul>

<div class="container">
    <div class="row">
        <div class="col-6 pt-3">
            <h4>Name: <?= ($SESSION['firstName']) ?> <?= ($SESSION['lastName']) ?> </h4>
            <h4>Age: <?= ($SESSION['age']) ?></h4>
            <h4>Phone: <?= ($SESSION['phone']) ?> </h4>
            <h4>Email: <?= ($SESSION['email']) ?> </h4>
            <h4>State:  <?= ($SESSION['state']) ?></h4>
            <h4>Seeking: <?= ($SESSION['seeking']) ?> </h4>
            <h4>Interests:
                <?php foreach (($SESSION['interests']?:[]) as $interest): ?>
                    <li><?= ($interest) ?></li>
                <?php endforeach; ?>
            <h4>About Me: <?= ($SESSION['aboutMe']) ?></h4>
        </div>
            <div class="col-6"><img src="images/candies.jpg" class="rounded img" alt="puzzle image">
            </div>
        <div class="col">
            <button class="btn btn-primary">Contact Me!</button>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>