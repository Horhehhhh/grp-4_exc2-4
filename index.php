<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="groupmate1.html">Our Team</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <h1>Welcome to Our Team Portfolio</h1>
        <p>Meet our talented team!</p>

        <html>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['fname']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>

    </section>

    <section id="team">
        <h2>Our Team</h2>
        <?php
          
        $team_members = [
            ['name' => 'jonalyn', 'img' => 'jonalyn.jpg', 'link' => 'jonalyn.html'],
            ['name' => 'Manlangit', 'img' => 'jabby.jpg', 'link' => 'manlangit.html'],
            ['name' => 'galgana', 'img' => 'vincent.jpg', 'link' => 'vincent.html'],
            ['name' => 'Conchada', 'img' => 'allen.jpg', 'link' => 'allen.html'],
            ['name' => 'Carmelina', 'img' => 'cromwell.png', 'link' => 'carmelina.html']
        ];

        
        foreach ($team_members as $member) {
            echo '<div class="team-member">';
            echo '<a href="' . htmlspecialchars($member['link']) . '">';
            echo '<img src="' . htmlspecialchars($member['img']) . '" alt="' . htmlspecialchars($member['name']) . '">';
            echo '</a>';
            echo '<p>' . htmlspecialchars($member['name']) . '</p>';
            echo '</div>';
        }
        ?>

    <h2>GET Method</h2>
    <form action="manlangit.html" method="jabby">
        <label for="nameGet">Name:</label>
        <input type="jabby" id="jabby" name="jabby">
        <input type="submit" value="Submit GET">
    </form>


    <h2>POST Method</h2>
    <form action="groupmates.html" method="post">
        <label for="namePost">Name:</label>
        <input type="text" id="namePost" name="namePost">
        <input type="submit" value="Submit POST">
    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['nameGet'])) {
        $nameGet = htmlspecialchars($_GET['nameGet']); // Sanitize the input
        echo "<h2>GET Method Result</h2>";
        echo "Name from GET request: " . $nameGet;
    } else {
        echo "No data received via GET.";
    }
}

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['namePost'])) {
        $namePost = htmlspecialchars($_POST['namePost']); // Sanitize the input
        echo "<h2>POST Method Result</h2>";
        echo "Name from POST request: " . $namePost;
    } else {
        echo "No data received via POST.";
    }
}
?>
        
    </section>

    <section id="contact">
       
    </section>

    <footer>
        <p>&copy; <?php echo date("D/M/Y"); ?> Click the Profile for more info.</p>
    </footer>

    <script src="main.js"></script>
</body>
</html>