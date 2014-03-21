<!doctype html>
<html lang="eng">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>GS</title>
   <link rel="stylesheet" href="/gs/css/gs.css">
   <link rel="stylesheet" href="/gs/css/theme.css">
</head>
<body>
<style>
   span {
      padding: 5px;
      margin: 5px 0;
      background: #00c;
      display: inline-block;
   }
</style>
<h1>Index</h1>
<a href="page2.php" data-no-instant>page2</a>

<?php $rnd = rand(9999, 59999); ?>
<p>Random number: <b><?= $rnd; ?></b></p>

<?php while ($rnd-- > 0): ?>
   <span>.</span>
<?php endwhile; ?>

<script src="/js/instant/instantclick.min.js" data-no-instant></script>
<script data-no-instant>
InstantClick.init();
</script>
</body>
</html>
