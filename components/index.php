<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MarieTeam</title>
  <link rel="stylesheet" href="styles/output.css">
  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/reservation.scss">
</head>

<body>
  <?php
  require __DIR__ . '/components/appbar.php';

  $request = $_SERVER['REQUEST_URI'];

  switch ($request) {
    case '/':
      require __DIR__ . '/views/home.php';
      break;
    case '/conditions-utilisations':
      require __DIR__ . '/views/condition-utilisation.php';
      break;
    case '/reservation':
      require __DIR__ . '/views/reservation.php';
      break;
    case '/cookies':
      require __DIR__ . '/views/cookies.php';
      break;
    case '/donnees-personnelles':
      require __DIR__ . '/views/donnees-personnelles.php';
      break;
    default:
      require __DIR__ . '/views/404.php';
      break;
  }

  require __DIR__ . '/components/footer.php';
  ?>
</body>

</html>