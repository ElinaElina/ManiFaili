<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />

    <link href="Css/main.css" rel="stylesheet" type="text/css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </head>

  <body>
    

    <div class="container">
      <h4>Register</h4>

      <form class="needs-validation">
        <div class="form-row">
          <div class="col">
            <label for="username">Username</label>
            <input
              type="text"
              class="form-control"
              placeholder="Username:"
              required
            />
            <div class="invalid-tooltip">
              Please choose a unique and valid username.
            </div>
          </div>
          
        </div>

        <div class="form-row">
          <div class="col">
            <label for="e-mail">E-mail</label>
            <input
              type="email"
              class="form-control"
              placeholder="Email: "
              required
            />
            <div class="invalid-tooltip">Please choose a valid E-mail.</div>
          </div>

          

        <div class="form-row">
          <div class="col">
            <label for="password">Password</label>
            <input
              type="password"
              id="password"
              class="form-control"
              name="password"
              placeholder="Password: "
              required
            />
            <div class="invalid-tooltip">
              Please choose a unique and valid password.
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col">
            <label for="repeat-password">Repeat password</label>
            <input
              type="password"
              id="confirm-password"
              class="form-control"
              name="confirm-password"
              placeholder="Repeat password: "
              required
            />
            <span id="message"></span>
          </div>
        </div>

        <div class="col">
          <input type="checkbox" id="terms" class="form-check-input" required />
          <div class="invalid-tooltip">Please agree with terms.</div>
          <label for="terms">Agree with terms</label> <br />

          <button type="submit" id="submitBtn" class="btn ">Register</button>
        </div>
      </form>
    </div>
    <hr />
    <script>
        $('#password, #confirm-password').on('keyup', function () {
          if ($('#password').val() == $('#confirm-password').val()) {
            $('#message').html('Matching').css('color', 'green');
          } else 
            $('#message').html('Not Matching').css('color', 'red');
        });
        </script>
  

    

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
