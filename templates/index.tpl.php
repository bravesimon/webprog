<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $window_name['cim'] . ( (isset($window_name['mottó'])) ? ('|' . $window_name['mottó']) : '' ) ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./styles/main.css" type="text/css">
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
	<?php if(file_exists('./javascript/'.$keres['fajl'].'.js')) { ?> <script type="text/javascript" src="./javascript/<?= $keres['fajl']?>.js"></script> <?php } ?>
</head>
<body>
	<header>
		<img src="./images/<?=$header['kepforras']?>" alt="<?=$header['kepalt']?>">
		<h1><?= $header['cim'] ?></h1>
		<?php if (isset($header['motto'])) { ?><h2><?= $header['motto'] ?></h2><?php } ?>
		<?php if(isset($_SESSION['login'])) { ?>Bejlentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?>
	</header>

    <div id="wrapper">
        <div class="navbar">
			<?php foreach ($pages as $url => $oldal) { ?>
				<?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
					<a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
					<?= $oldal['szoveg'] ?></a>
				<?php } ?>
			<?php } ?>		
		</div>

        <div id="content">
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </div>
    </div>

    <footer>
        <?php if(isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?> <?php } ?>
		&nbsp;
        <?php if(isset($footer['ceg'])) { ?><?= $footer['ceg']; ?><?php } ?>
    </footer>
</body>
</html>
