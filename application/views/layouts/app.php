<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <title><?= $title ?? 'RAKIT' ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- RAKIT CSS -->
  <link rel="stylesheet" href="<?= base_url('public/assets/rakit/rakit.css') ?>">
</head>

<body>

  <?= $this->load->view($layout, [], true); ?>

  <!-- RAKIT Inline Script -->

  <script src="<?= base_url('public/assets/rakit/rakit.js') ?>"></script>

</body>

</html>