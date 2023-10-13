<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Geek's Gossip</title>
</head>

<body>
    <header>
    <div class="logo-container">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="header logo"></a>
        <h1>Geek's Gossip</h1>
    </div>
    <h2>Your geek news portal!</h2>

        <nav class="navbar navbar-dark bg-primary">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="view.php">View</a></li>
          </ul>
        </div>
      </div>
    </nav>

    </header>

    <main class="container">
        <section class="form-row row justify-content-center">
            <form method="post" action="form.php" class="form-horizontal col-md-6 col-md-offset-3">
                      <h3>Subscribe now!</h3>
                      <div class="form-group">
                          <label for="input1" class="col-sm-2 control-label">First Name</label>
                          <div class="col-sm-10">
                              <input type="text" name="fname" class="form-control" id="input1">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="input1" class="col-sm-2 control-label">Last Name</label>
                          <div class="col-sm-10">
                              <input type="text" name="lname" class="form-control" id="input1">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="input1" class="col-sm-2 control-label">Email</label>
                          <div class="col-sm-10">
                              <input type="email" name="email" class="form-control" id="input1">
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="birthday">Birthday:</label>
                        <input type="date" id="birthday" name="birthday">
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
