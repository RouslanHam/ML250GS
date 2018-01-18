<?php
	$page = "";
	if ($p==1) 
		switch ($id) {
			case -1:
			case 1: include "/static/main.php"; break;
			case 2: include "/static/specifications.php"; break;
			case 3: include "/static/design.php"; break;
			case 4: include "/static/instrucion.php"; break;
		};
	if ($p>1) {
			if ($id==-1) {
				$qur = "select * from articles where (root_partition=$p) and (title='description')";
				$res = mysql_query($qur);
				$row = mysql_fetch_array($res);
				echo $row["content"];
			}
			if ($id>0 && $article == -1) {
				$qur = "select * from articles where root_partition=$id";
				$res = mysql_query($qur);
				while($row = mysql_fetch_array($res)) {
					$header_article = $row["title"];
					$id_article = $row["id"];
					include "articles_list.php";
				}
			}
			if ($id>0 && $article>0){
				$qur = "select * from articles where id=$article";
				$res = mysql_query($qur);
				$row = mysql_fetch_array($res);
				$header_article = $row["title"];
				$content_article = $row["content"];
				include "article.php";
			}
		}

?>