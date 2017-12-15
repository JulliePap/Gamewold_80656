<?php
require 'assets/php/functions.php';

if (isset($_SESSION['login'])) {
  header('Location: index.php');
}

$error = "";
if (isset($_POST['login'])) { // het is raar dat hij dit nii fired LOL
  // Check if username / pasword are not empty -> YOu can make this with javascript A LOT NICER!!!!
  if (empty($_POST['username']) || empty($_POST['password'])) {
    $error = "Username or Password is invalid";
  } else {    
    $conn = ConnectDatabase();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE password = '$password' AND username = '$username'";
    // echo $result;
   $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $_SESSION['login'] = $row['username'];
        echo $row["username"] . ' logged in succesfully!';
        header('Location: index.php');
      }
    } else {
      echo 'Username or password was incorrect';
    }
  }
}
?>

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Studio">
  <link rel="stylesheet" type="text/css" href="css/style-index.css">
  <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css" />
  <title>Studio</title>
</head>
<header>
      <div class='items'>
              <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="shop.php?catid=0">Webshop</a></li>
        </ul>
      </div>
      <div class='info'>
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
</header>
<form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
  <p class="name">
      <input type="text" name="username" id="username" placeholder="Username" />
  </p>
  <p class="email">
      <input type="password" name="password" id="password" placeholder="Password" />
  </p>
  <p class="submit">
      <input type="submit" name='login' value="Send" />
  </p>
  </form>