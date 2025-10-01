<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?? 'ETS Projek' ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

  <div class="mb-4">
    <h2 class="text-center"><?= $title ?? 'ETS Projek' ?></h2>
  </div>

  <?= $this->renderSection('content') ?>

</body>
</html>
