<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= $title ?? 'RAKIT Test' ?></title>

  <!-- RAKIT CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/rakit/rakit.css') ?>">
</head>
<body style="padding:40px">

  <?= $this->load->view($page, [], true); ?>

</body>
</html>
