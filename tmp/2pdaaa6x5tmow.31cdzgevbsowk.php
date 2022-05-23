<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">


    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="http://xdenson.greenriverdev.com/328/dating/">My Dating Site</a>
    </li>
</ul>
<div class="container text-right">
    <div class="row">
        <h2>Profile</h2>

        <form action="#" method="POST">
                <div class="form-group">
                    <label for="email"><b>Email</b></label>
                    <input type="email" id="email" name="email">
                    <?php if (isset($errors['email'])): ?>
                    <span class="err"><?= ($errors['email']) ?></span>
                    <?php endif; ?>
                </div>
                <div class="mt-3 mb-3 form-group">
                    <label for="state"><b>State</b></label>
                    <select class="form-control" id="state" name="state">
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AS">American Samoa</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="UM-81">Baker Island</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="GU">Guam</option>
                        <option value="HI">Hawaii</option>
                        <option value="UM-84">Howland Island</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="UM-86">Jarvis Island</option>
                        <option value="UM-67">Johnston Atoll</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="UM-89">Kingman Reef</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="UM-71">Midway Atoll</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="UM-76">Navassa Island</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="UM-95">Palmyra Atoll</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UM">United States Minor Outlying Islands</option>
                        <option value="VI">United States Virgin Islands</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="UM-79">Wake Island</option>
                        <option value="WA" selected>Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
                <div class="form-group">
                    <h6><b>Seeking</b></h6>
                    <input class="form-check-input" type="radio" name="seeking" id="male" value="Male">
                    <label class="form-check-label" for="male">
                        Male
                    </label><br>
                    <input class="form-check-input" type="radio" name="seeking" id="female" value="Female">
                    <label class="form-check-label" for="female">
                        Female
                    </label><br>
                    <input class="form-check-input" type="radio" name="seeking" id="transgender" value="Transgender">
                    <label class="form-check-label" for="transgender">
                        Transgender
                    </label><br>
                    <input class="form-check-input" type="radio" name="seeking" id="nonConforming" value="Non Conforming">
                    <label class="form-check-label" for="nonConforming">
                        Gender non-conforming
                    </label>
                </div>
                <div class=" mt-3 form-group">
                    <label for="aboutMe"><b>About Me</b></label>
                    <textarea class="mt-2 form-control" rows="5" id="aboutMe" name="aboutMe"></textarea>
                </div>
            <input class=" mt-4 form-control btn btn-primary"
                   type="submit" value="interests">
        </form>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>