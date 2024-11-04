<?php

$files = scandir('./zp533_1');
echo '<xml version="1.0" encoding="UTF-8">
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:mobile="http://www.google.com/schemas/sitemap-mobile/1.0" xmlns:xhtml="http://www.w3.org/1999/xhtml">
<url>';

foreach($files as $val){
	if($val == '.' or $val == '..'){
		continue;
	}
	
	echo "<url>
<loc>https://fortyeighthats.github.io/zp533_1/{$val}</loc>
<lastmod>2024-11-04</lastmod>
</url>
<url>";
	
	
}



echo "</urlset>
</xml>";









?>