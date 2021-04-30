<?php session_start(); ?>
<?php if (file_exists('./logicals/' . $keres['fajl'] . '.php')) {
    include("./logicals/{$keres['fajl']}.php");
} ?>
<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title><?= $ablakcim['cim'] . ((isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '') ?></title>
  <link rel="stylesheet" href="../styles/stilus.css" type="text/css">
    <?php if (file_exists('./styles/' . $keres['fajl'] . '.css')) { ?>
      <link rel="stylesheet" href="./styles/<?= $keres['fajl'] ?>.css" type="text/css">
    <?php } ?>
</head>
<body>
<img id="background-img" src="../images/szeged_latkep.jpg" alt="Szeged látképe"/>
<div id="foreground">
  <header>
    <img class="img-thumbnail" src="./images/<?= $fejlec['kepforras'] ?>" alt="<?= $fejlec['kepalt'] ?>" />
    <div id="headings">
      <h1><?= $fejlec['cim'] ?></h1>
      <h3><?= $fejlec['motto'] ?></h3>
        <?php if (isset($_SESSION['login'])) { ?>Bejlentkezve:
          <strong><?= $_SESSION['csn'] . " " . $_SESSION['un'] . " (" . $_SESSION['login'] . ")" ?></strong><?php } ?>
    </div>
  </header>
  <nav class="navbar navbar-dark navbar-expand-sm">
    <ul class="navbar-nav justify-content-center">
        <?php foreach ($oldalak as $url => $oldal) { ?>
            <?php if (!isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
            <li class="nav-item">
              <a class="nav-link<?= (($oldal == $keres) ? ' active' : '') ?>"
                 href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>"><?= $oldal['szoveg'] ?></a>
            </li>
            <?php } ?>
        <?php } ?>
    </ul>
  </nav>
  <main>
    <h1><?php foreach ($oldalak as $url => $oldal) { ?>
          <?= (($oldal == $keres) ? $oldal["szoveg"] : '') ?>
      <?php }?>
    </h1>
      <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
  </main>
  <footer>
      <?php if (isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
    &nbsp;
      <?php if (isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
    <a href="http://csakelore.hu/">Eredeti weboldal</a>
    <a href="http://www.csakelore.hu/belepesi_nyilatkozat.pdf">Belépési nyilatkozat</a>
  </footer>
</div>
</body>
</html>
