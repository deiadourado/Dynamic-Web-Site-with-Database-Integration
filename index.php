<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Geek's Gossip</title>
</head>

<body>
  <?php
    $nameErr = "";
    $lnameErr = "";
    $emailErr = "";
    $birthdayErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["fname"])) {
          $nameErr = "Name is required";
          
      } else {
          $name = test_input($_POST["fname"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
              $nameErr = "Only letters and white space allowed";
          }
      }

      if (empty($_POST["lname"])) {
        $lnameErr = "Last Name is required";
        
      } else {
          $name = test_input($_POST["lname"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
              $lnameErr = "Only letters and white space allowed";
          }
      }

      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }

      if (empty($_POST["birthday"])) {
        $birthdayErr = "Birthday is required";
    } else {
        $birthday = test_input($_POST["birthday"]);
        // Validate the date format using a regular expression
        if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $birthday)) {
            $birthdayErr = "Invalid date format. Please use YYYY-MM-DD.";
        } else {
            // Check if the date is valid
            list($year, $month, $day) = explode("-", $birthday);
            if (!checkdate($month, $day, $year)) {
                $birthdayErr = "Invalid date";
            }
        }
    }

      if($nameErr == "" && $lnameErr == "" && $emailErr == "" && $birthdayErr == ""){

        if (session_status()!==PHP_SESSION_ACTIVE)session_start();
        $_SESSION['POST'] = $_POST;

        header('Location: form.php');
        exit();
    
      }
    }
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    // c
    
  ?>
    <header>
    <div class="logo-container">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="header logo"></a>
        <h1>Geek's Gossip</h1>
    </div>
    <h2>Your geek news portal!</h2>

    <div class="buttons">
                <a href="create_user.php" class="new-user-button">Create your user</a>
                <a href="view.php" class="view-button">View</a>
            </div>

    <!-- <div class="menu">
            <span class="menu-item"><a href="index.php">Home</a></span>
            <span class="menu-item"><a href="view.php">View</a></span>
            <span class="menu-item"><a href="create_user.php">Create User</a></span> <!-- Botão para a página de criação de usuário -->
    </div>

    </header>

    <main class="container">
        <section class="form-row row justify-content-center">
            <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
                      <h3>Subscribe now!</h3>
                      <div class="form-group">
                          <label for="input1" class="col-sm-2 control-label">First Name</label>
                          <div class="col-sm-3 col-md-6 col-lg-4">
                              <input type="text" name="fname" class="form-control" id="input1">
                              <span class="error">* <?php echo $nameErr;?></span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="input1" class="col-sm-2 control-label">Last Name</label>
                          <div class="col-sm-3 col-md-6 col-lg-4">
                              <input type="text" name="lname" class="form-control" id="input1">
                              <span class="error">* <?php echo $lnameErr;?></span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="input1" class="col-sm-2 control-label">Email</label>
                          <div class="col-sm-3 col-md-6 col-lg-4">
                              <input type="email" name="email" class="form-control" id="input1">
                              <span class="error">* <?php echo $emailErr;?></span>

                          </div>
                      </div>
                      <div class="form-group">
                        <label for="birthday">Birthday:</label>
                        <input type="date" id="birthday" name="birthday">
                        <span class="error">* <?php echo $birthdayErr;?></span>
                          </div>
                          <fieldset>
                            <legend>Check here the topics you would like to hear about</legend>
                                <div>
                                    <input type="checkbox" name="movies" id="movies" value="movies" />
                                    <label for="movies">Movies</label>
            
                                    <input type="checkbox" name="music" id="music" value="music" />
                                    <label for="music">Music</label>
            
                                    <input type="checkbox" name="animes" id="animes" value="animes" />
                                    <label for="animes">Animes</label>

                                    <input type="checkbox" name="series" id="series" value="series" />
                                    <label for="series">Series</label>

                                    <input type="checkbox" name="books" id="books" value="books" />
                                    <label for="books">Books</label>
                                </div>
                            </fieldset>
                      </div>
                      <div class="form-group">
                          <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Submit">
                      </div>
              </form>
          <div class="form-group submit-message">
         </div>
       </section>
      </main>

    <footer>
        Made by Andreia Dourado (2023)
    </footer>
</body>

</html>
