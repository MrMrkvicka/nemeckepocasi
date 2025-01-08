<!DOCTYPE html>
<html lang="en">
<head>
  <title>projekt</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="node_modules/flag-icons/css/flag-icons.min.css">
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href=" <?= base_url("home")?>"> home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('carousel')  ?>">carousel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('zapasy')  ?>">zápasy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('karty')  ?>">karty</a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>
</body>
</html>



