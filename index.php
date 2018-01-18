<!DOCTYPE html>
<html>
<head>
	<?php require "config.php"; ?>
	<title><?php echo $title; ?></title>
</head>
<body>
	<?php	
	if (!isset($_GET['p'])) $p=1;
	else $p = $_GET['p'];
	if (!isset($_GET['id'])) $id=-1;
	else $id = $_GET['id'];
	if (!isset($_GET['article'])) $article=-1;
	else $article = $_GET['article'];
	?>
	
	<nav>
		<?php include "topmenu.html"; ?>
	</nav>
	<main>
		<br><br><br><br><br>
		<table border=0 width=100%>
		<tr>
			<td style="vertical-align:top;" width=20%>
				<?php include "leftmenu.php"; ?>
			</td>
			<td valing=top>
				<?php include "articles_menu.php"; ?>
			</td>
		</tr>
		</table>
	</main>

	<footer>
		
	</footer>
	
</body>
</html>