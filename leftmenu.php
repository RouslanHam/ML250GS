<?php
	$page="";
		
	mysql_connect($dbhost,$dbuser,$dbpasswd);
	mysql_select_db($dbname);
	mysql_query("SET NAMES 'utf8'");
		
	$query = "select * from cats where root=$p";
	$result = mysql_query($query);
	while ($row=mysql_fetch_array($result))
		$page = $page . 
			"<a style=' text-decoration: none;
				color: #fff;
				padding: 5px;
				font-size: 22px;
				display: block;
				background: linear-gradient(to right, rgba(36,36,36,1) 0%,rgba(78,78,78,1) 100%);
				width: 200px;
				text-align: left'; href=?p=$p&id=$row[id]>$row[title]</a>";
			
	$page = "<nav>" . $page . "</nav>";
	echo "$page";
	?>