<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Form</title>
</head>

<body>
  <div class="container">
    <div class="row my-5">
      <div class="col-md-12">
        <h1 class="text-center text-primary">Form</h1>
        <form action="./data.php" method="POST">
          <div class="row gy-3">
            <div class="col-md-6">
              <label class="form-label">First name</label>
              <input type="text" name="fname" class="form-control" placeholder="First name" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Last name</label>
              <input type="text" name="lname" class="form-control" placeholder="Last name" required>
            </div>
            <div class="col-md-12">
              <label class="form-label">Address</label>
              <textarea name="address" class="form-control" cols="30" rows="10" required></textarea>
            </div>
            <div class="col-md-12">
              <label class="form-label">Country</label>
              <select name="country" class="form-select" required>
                <option value="">Select Country</option>
                <option value="egypt">Egypt</option>
                <option value="usa">USA</option>
                <option value="japn">Japan</option>
              </select>
            </div>
            <div class="col-md-12">
              <label class="form-label">Gender</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male" required>
                <label class="form-check-label" for="male">
                  Male
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female">
                <label class="form-check-label" for="female">
                  Female
                </label>
              </div>
            </div>
            <div class="col-md-12">
              <label class="form-label">Skills</label>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="skills[]" value="html" id="HTML">
                <label class="form-check-label" for="HTML">
                  HTML
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="skills[]" value="css" id="css">
                <label class="form-check-label" for="css">
                  CSS
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="skills[]" value="js" id="js">
                <label class="form-check-label" for="js">
                  JS
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="skills[]" value="php" id="php">
                <label class="form-check-label" for="php">
                  PHP
                </label>
              </div>
            </div>
            <div class="col-md-6">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Deparment</label>
              <input type="text" name="deparment" class="form-control" value="OS" placeholder="deparment" readonly required>
            </div>
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-danger">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>