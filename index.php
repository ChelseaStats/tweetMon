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

  <div class="simpleTabs">
		        <ul class="simpleTabsNavigation">
		            <li><a href="#">x x</a></li>
		            <li><a href="#">x x</a></li>
		            
		        </ul>
		        
		        <div class="simpleTabsContent">
		        	<p>Main:
					<?php getTweets('H','home'); ?>
		        </div>
		        <div class="simpleTabsContent">
					<p>List:
					<?php getTweets('L','list'); ?>
		        </div>

		    </div>	

<script>
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('3 4={O:"Z",P:"10",9:"11",w:"12",x:"13",r:"14",Q:o(){5(!s.t)y E;5(!s.F)y E;3 b=s.t("G");u(3 i=0;i<b.7;i++){5(b[i].6==4.O){b[i].H("8",4.r+[i]);3 c=b[i].v("8");3 d=b[i].t("15");u(3 j=0;j<d.7;j++){5(d[j].6==4.P){3 a=d[j].t("a");u(3 k=0;k<a.7;k++){a[k].H("8",c+"I"+k);5(4.z(\'A\')){3 e=4.z(\'A\').J("K");3 f=e[1];3 g=e[2];5(a[k].p.p.p.v("8")==4.r+f){5(a[k].v("8")==4.r+f+"I"+g){a[k].6=4.w}q{a[k].6=""}}q{a[0].6=4.w}}q{a[0].6=4.w}a[k].16=o(){4.R(B,\'A\');y E}}}}3 h=b[i].t("G");3 m=0;u(3 l=0;l<h.7;l++){5(h[l].6==4.9){h[l].H("8",c+"L"+[m]);5(4.z(\'A\')){3 e=4.z(\'A\').J("K");3 f=e[1];3 g=e[2];5(h[l].p.v("8")==4.r+f){5(h[l].v("8")==4.r+f+"L"+g){h[l].6=4.9+" "+4.x}q{h[l].6=4.9}}q{h[0].6=4.9+" "+4.x}}q{h[0].6=4.9+" "+4.x}m++}}}}},R:o(a,b){B.S(b);3 c=a.p.p.p.v("8");3 d=c+"I";3 e=a.v("8").T(d,"");3 f=a.p.p.t("a");u(3 n=0;n<f.7;n++){f[n].6=""}a.6=4.w;3 g=s.F(c).t("G");3 h=M U(4.9);u(3 i=0;i<g.7;i++){5(h.17(g[i].6)){g[i].6=4.9}}s.F(c+"L"+e).6=4.9+" "+4.x;3 j=M U(4.r);3 k=c.T(j,"");B.N(b,\'18\'+k+\'K\'+e,1)},N:o(a,b,c){5(c){3 d=M 19();d.1a(d.1b()+(c*1c*V*V*1d));3 e="; 1e="+d.1f()}q 3 e="";s.W=a+"="+b+e+"; 1g=/"},z:o(a){3 b=a+"=";3 d=s.W.J(\';\');u(3 i=0;i<d.7;i++){3 c=d[i];1h(c.1i(0)==\' \')c=c.X(1,c.7);5(c.1j(b)==0)y c.X(b.7,c.7)}y 1k},S:o(a){B.N(a,"",-1)},Y:o(a){3 b=C.D;5(1l C.D!=\'o\'){C.D=a}q{C.D=o(){5(b){b()}a()}}}};4.Y(4.Q);',62,84,'|||var|kmrSimpleTabs|if|className|length|id|sbContentClass|||||||||||||||function|parentNode|else|sbIdPrefix|document|getElementsByTagName|for|getAttribute|sbCurrentNavClass|sbCurrentTabClass|return|readCookie|simpleTabsCookie|this|window|onload|false|getElementById|div|setAttribute|_a_|split|_|_div_|new|createCookie|sbContainerClass|sbNavClass|init|setCurrent|eraseCookie|replace|RegExp|60|cookie|substring|addLoadEvent|simpleTabs|simpleTabsNavigation|simpleTabsContent|current|currentTab|tabber|ul|onclick|test|simpleTabsCookie_|Date|setTime|getTime|24|1000|expires|toGMTString|path|while|charAt|indexOf|null|typeof'.split('|'),0,{}))
</script>		    
		    
</body>
</html>





<?php
function writeLinks($tweet){
	
	//for http links
	$tweet = preg_replace('!http://([a-zA-Z0-9./-]+[a-zA-Z0-9/-])!i', ' <a href="\\0" target="_blank">\\0</a> ', $tweet);
	
	// for https links because my regex is lame.
	$tweet = preg_replace('!https://([a-zA-Z0-9./-]+[a-zA-Z0-9/-])!i', ' <a href="\\0" target="_blank">\\0</a> ', $tweet);
		
	//for hashtags
	$tweet = preg_replace("/#([a-z_0-9]+)/i", "<a href=\"http://twitter.com/search/$1\">$0</a>", $tweet);
	
	//for mentions
	$tweet = preg_replace("/\B[@]([a-zA-Z0-9_]{1,20})/i", ' <a target="_blank" class="twtr-atreply" href="http://twitter.com/$1">@$1</a> ',$tweet);
	

	// the order of the regexes is very imporant.
	return $tweet;
	
}

function debugger ($var) {
			
		print '<hr/>';
		print '<pre>';
		print_r($var);
		print '</pre>';
		print '<hr/>';
}


function fetchTweets($type,$filename) {
	
	require_once 'twitteroauth.php';
	$consumerKey 		= 'x';
	$consumerSecret 	= 'x';
	$accessToken 		= 'x-x';
	$accessTokenSecret  = 'x';	
	
	$connection = new TwitterOAuth($consumerKey,$consumerSecret,$accessToken,$accessTokenSecret);
	
	switch ($type) {
	case "H" :	
		$statuses = $connection->get('statuses/home_timeline', array('count' => 50, 'include_entities'=>'false', 'exclude_replies' => true) );
		break;
	case "L" :
		$statuses = $connection->get('lists/statuses', array('count' => 50, 'slug'=>'x', 'owner_screen_name'=>'x', 'include_rts' => false, 'include_entities'=>'false', 'exclude_replies' => true) );
 		break;
	default:
		$statuses = $connection->get('statuses/home_timeline', array('count' => 50, 'include_entities'=>'false', 'exclude_replies' => true) );
		break;	
 	}
	
	$tweet ='';

	// debugger($statuses);
	// Fri Nov 22 15:01:24 +0000 2013
	
	foreach($statuses as $status):
			$date = date('Y-m-d H:i:s', strtotime($status->created_at));
			$tweet .= '<li><span class="date">'. $date .'</span> @'. $status->user->screen_name .' :- <br/> '. $status->text .'</li>';
	endforeach;

	$file	= $filename.'.txt';
	$data = array ('tweet' => $tweet, 'timestamp' => time());
	file_put_contents($file, serialize($data));
	return $tweet;
}

function getTweets($type,$filename) {

	$file	=  $filename.'.txt';
		
	if (file_exists($file)) {
			
		$data = unserialize(file_get_contents($file));
			
		if ( ($data['timestamp'] - getTimecomp()) > 0 ) {

			// there is a cached tweet
			$tweet = '(cached for upto 10 minutes)</p>'. $data['tweet']  .'</ul>';
				
		} else {
			// tweet has expired or is missing
			$tweet = '(cache expired, these are fresh)</p><ul>'. fetchTweets($type,$filename) .'</ul>';

		}
	}
	else {
		// file does not exist
		$tweet = '(cache missing, these are new)</p><ul>'. fetchTweets($type,$filename) .'</ul>';
	}


	// $tweet = fetchTweets();
	print writeLinks($tweet);
}



function getTimecomp () {
	
 	return intval(time() - (10 * 60));
}


?>


















