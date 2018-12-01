<?php
	include 'config.php';
	include SCRIPTS.'include/router.php';
	include SCRIPTS.'include/lang.php';
	include LANG.$setlang.'.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $setlang; ?>">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-patible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?php echo $lang['description-1'] ?> - <?php echo $lang['description-2'] ?>">
		<meta name="google-site-verification" content="pgX0DYrpT-JJegm5Ee6ZwZ6fKg4EBJ-_pROk1mDlxMk" />
		<meta name="msvalidate.01" content="F00234D61DC8FE03C808DDE8EFD8A7C4" />
		<meta name="referrer" content="no-referrer">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#ffffff">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo DIR_PREFIX ?>/assets/img/fav/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo DIR_PREFIX ?>/assets/img/fav/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo DIR_PREFIX ?>/assets/img/fav/favicon-16x16.png">
		<link rel="manifest" href="<?php echo DIR_PREFIX ?>/assets/img/fav/site.webmanifest">
		<link rel="mask-icon" href="<?php echo DIR_PREFIX ?>/assets/img/fav/safari-pinned-tab.svg" color="#5bbad5">
		<title><?php echo $lang['title'] ?></title>
		<link rel="stylesheet" href="<?php echo DIR_PREFIX ?>/assets/css/style.css">
		<link rel="stylesheet" href="<?php echo DIR_PREFIX ?>/assets/css/mobile.css">
		<script src="<?php echo DIR_PREFIX ?>/assets/js/clipboard.js"></script>
		<script src="<?php echo DIR_PREFIX ?>/assets/js/jquery.js"></script>
		<script src="<?php echo DIR_PREFIX ?>/assets/js/ajax.js"></script>
	</head>
	<body>
		<div class="container">
			<section class="header">
				<div class="logo divanim-slow">
					<a href="//snabby.me"><img src="<?php echo DIR_PREFIX ?>/assets/img/logo-small.png">NABBY<span>me</span></a>
				</div>
				<div class="nav-icons">
					<button type="button" id="nav-settings" class="nav-settings button-theme divanim-slow"><i id="button-nav-setting" class="icon-cog"></i></button>
				</div>
			</section>
				<?php include 'assets/scripts/views/'.$page; ?>
			<section class="footer">
				<ul>
					<li><?php foreach ($lang['footerlinks'] as $key => $val): ?><a href="<?php echo $val ?>" class="divanim-slow"><span><?php echo $key ?></span></a><?php endforeach ?></li>
					<li><span class="footer-copy">&copy; <?php echo date("Y"); ?> <?php echo $lang['copy'] ?></span></li>
				<ul>
			</section>
		</div>
		<script src="<?php echo DIR_PREFIX ?>/assets/js/script.js"></script>
	</body>
	<script type="text/javascript">
	  var _paq = _paq || [];
	  _paq.push(["setCookieDomain", "*.snabby.me"]);
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
	  (function() {
		var u="https://analytics.wl-lankin.de/";
		_paq.push(['setTrackerUrl', u+'piwik.php']);
		_paq.push(['setSiteId', '9']);
		var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
		g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
	  })();
	</script>
	<noscript><p><img src="https://analytics.wl-lankin.de/piwik.php?idsite=9&amp;rec=1" style="border:0;" alt="" /></p></noscript>
</html>
