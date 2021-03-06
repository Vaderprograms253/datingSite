<!DOCTYPE html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">

    <meta charset="UTF-8">
    <title>Interests</title>
</head>
<body>
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="http://xdenson.greenriverdev.com/328/dating/">My Dating Site</a>
    </li>
</ul>
<div class="container text-right">
    <div class="row">
        <div class="col-6">
            <form action="summary" method="POST">
                <h4>Indoor Interests</h4>
                <div class="form-group">
                    <?php foreach (($indoorInterest?:[]) as $indoor): ?>
                        <div>
                            <label class="form-check-label"><input class="form-check-input" type="checkbox" name="interests[]" value="<?= ($indoor) ?>"><?= (ucfirst($indoor)) ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>



                <h4>Outdoor Interests</h4>
                <div class="form-group">
                <?php foreach (($outdoorInterest?:[]) as $outdoor): ?>
                    <div>
                        <label class="form-check-label"><input class="form-check-input" type="checkbox" name="interests[]" value="<?= ($outdoor) ?>"><?= (ucfirst($outdoor)) ?></label>
                    </div>
                <?php endforeach; ?>
                </div>
                <input class="form-control btn btn-primary"
                type="submit" value="Submit">
            </form>
        </div>
        <div class="col-6">
            <div class="col-6"><img src="images/puzzle2.jpg" class="rounded img" alt="puzzle image">
            </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>