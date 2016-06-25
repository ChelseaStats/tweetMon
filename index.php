<html>
<head>
<meta charset="UTF-8" />
<style>
body { font: 12px/1.5 Calbri, Verdana, Tahoma; color: #030303; }
h1,h2,h3,h4,h5,h6 { color: 485AB9; }
a { color:#333389; text-decoration:none;}
a:hover { text-decoration:underline; }
ul {padding:1em; list-style-type:none;}
li {list-style-type:none; border-bottom:1px solid #EDEDED;  padding-bottom:1em; padding-top:1em;}
.date { font:10px; color:#9a9a9a; padding-right:4px; border-right:1px solid #9a9a9a;}
hr { height:0px; background:#9a9a9a;  border-bottom:1px solid #9a9a9a; clear:both; margin-top:2em;}
div.simpleTabs { padding:10px; }
ul.simpleTabsNavigation { margin:0 10px; padding:0; text-align:left; }
ul.simpleTabsNavigation li { list-style:none; display:inline; margin:0; padding:0;}
ul.simpleTabsNavigation li a { border:1px solid #9a9a9a; padding:2px 25px; background:#F0F0F0; font-size:12px; text-decoration:none; }
ul.simpleTabsNavigation li a:hover { background-color:#fff; }
ul.simpleTabsNavigation li a.current { background:#fff; color:#222; border-bottom:2px solid #fff; }
div.simpleTabsContent { border:1px solid #9a9a9a; padding:1em; display:none; }
div.simpleTabsContent.currentTab { display:block; }
</style>
</head>
<body>
<h2>Announcement stream for x</h2>
<p><a href="http://twitter.com/x">For user @x</a> 
<hr/>
<?php
	$lister = new lister();
	$lister->getTweets('news');
?>
</body>
</html>
