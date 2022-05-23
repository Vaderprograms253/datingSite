<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">

</head>
<body>
<ul class="nav">
<li class="nav-item">
    <a class="nav-link" href="http://xdenson.greenriverdev.com/328/dating/">My Dating Site</a>
</li>
</ul>
<div class="container text-right">
    <h2 class="mt-3">Personal Information</h2>
    <div class="row">
        <div class="col-6">
            <form action="#" method="POST" class="date_form">

                <div class="form-group pt-3">
                    <label for="firstName"><b>First Name:</b> </label><br/>
                    <input class="mt-2" type="text" id="firstName" name="firstName">
                </div>
                <div class="form-group mt-4">
                    <label for="lastName"><b>Last Name:</b></label><br>
                    <input class="mt-2" type="text" id="lastName" name="lastName">
                    <!--Check for errors -->
                    <?php if (isset($errors['lastName'])): ?>
                        <span class="err"><?= ($errors['lastName']) ?></span>
                    <?php endif; ?>
                </div>

                <span class="border-bottom border-5 border-danger"></span>

                <div class="form-group mt-4">

                    <label for="age"><b>Age</b></label>
                    <input type="number" min="0" max="200" id="age" name="age" class="m-3 ">
                    <?php if (isset($errors['age'])): ?>
                        <span class="err"><?= ($errors['age']) ?></span>
                    <?php endif; ?>
                </div>


                <div class="form-group form-inline">
                    <h5>Gender</h5>
                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                    <label class="form-check-label" for="male">
                        Male
                    </label><br>
                    <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                    <label class="form-check-label" for="female">
                        Female
                    </label><br>
                    <input class="form-check-input" type="radio" name="gender" id="transgender" value="Transgender">
                    <label class="form-check-label" for="transgender">
                        Transgender
                    </label><br>
                    <input class="form-check-input" type="radio" name="gender" id="nonConforming" value="Non Conforming">
                    <label class="form-check-label" for="nonConforming">
                        Gender non-conforming
                    </label><br>
                    <input class="form-check-input" type="radio" name="gender" id="noSelection" value="No Selection">
                    <label class="form-check-label" for="noSelection">
                        Prefer not to say
                    </label><br>
                </div>
                <div class="form-group">
                    <label for="phone"><b>Phone Number</b></label>
                    <input class="m-3" type="text" id="phone" name="phone">
                    <?php if (isset($errors['phone'])): ?>
                        <span class="err"><?= ($errors['phone']) ?></span>
                    <?php endif; ?>
                </div>
                <input class="form-control m-3 btn btn-primary"
                       data-bs-toggle="tooltip" title="Did you fill everything out?" type="submit" value="Next">

            </form>
        </div>
        <div class="col-6"><img src="images/wine.jpg" class="rounded w-100" alt="date image">
        </div>
    </div>

</div>
<!--Form -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>