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
        <div style="text-align: center;">
            <h1>Geek's Gossip</h1>
        </div>
        <h2>Your geek news portal!</h2>
        <h3>Update Records</h3>
    </header>

    <?php
    include("connection.php");

    $res = $database->list_user();

    while ($r = mysqli_fetch_assoc($res)) {
        if ($_GET['id'] == $r['id']) {
            $userId = $r['id'];
        }
    ?>

    </div> <!-- Fechar o bloco if antes de iniciar a tag div.menu -->

    <div class="menu">
        <span class="menu-item"><a href="index.php">Home</a></span>
        <span class="menu-item"><a href="view.php">View</a></span>
    </div>

    <form method="post" action="update_script.php">
        <div class="form-group">
            <label for="fname<?php echo $userId; ?>">First Name</label>
            <input type="text" class="form-control" name="fname<?php echo $userId; ?>" value="<?php echo htmlspecialchars($r['fname']); ?>" required>
        </div>

        <div class="form-group">
            <label for="lname<?php echo $userId; ?>">Last Name</label>
            <input type="text" class="form-control" name="lname<?php echo $userId; ?>" value="<?php echo htmlspecialchars($r['lname']); ?>" required>
        </div>

        <div class="form-group">
            <label for="email<?php echo $userId; ?>">Email</label>
            <input type="text" class="form-control" name="email<?php echo $userId; ?>" value="<?php echo htmlspecialchars($r['email']); ?>" required>
        </div>

        <div class="form-group">
            <label for="birthday<?php echo $userId; ?>">Birthday</label>
            <input type="date" class="form-control" name="birthday<?php echo $userId; ?>" value="<?php echo htmlspecialchars($r['birthday']); ?>" required>
        </div>

        <button type="submit">Submit</button>
    </form>

    <?php
    }
    ?>

    <footer>
        Made by Andreia Dourado (2023)
    </footer>
</body>

</html>