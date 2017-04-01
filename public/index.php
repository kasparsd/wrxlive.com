<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>World Rallycross Championship Live Dashboard | #WorldRX 2017</title>
	<style>
		body { font:14px/1.4 sans-serif; margin:0; padding:0; background:#000; color:#fff; }
		a { color:#fff; }
		h1 { font-size:1em; margin:0 0 1em 0; padding:1em 0 1em 0; border-bottom:1px solid #333; }
		section { position:fixed; }
		section nav { padding:1em 0; }
		section nav a { border-radius:4px; text-decoration:none; padding:0.5em; background:#666; color:#fff; margin-right:0.1em; }
		section .tab { background:#000; position:absolute; top:2.75em; left:1em; right:0; bottom:0; overflow-y:scroll; display:none; }
		section .tab:target { display:block !important; }
		#stream { top:0; right:0; bottom:0; left:70%; float:right; overflow-y:scroll; border-left:1px solid #333; padding-left:1%; }
		#video { top:0; left:0; bottom:45%; width:69%; }
		#timing { width:69%; top:55%; bottom:0; left:0; }
		#stream-autocross-lv .blogdiv:hover { background:none !important; }
		#stream-autocross-lv .blogdiv { padding-left:0 !important; }
		#stream-twitter .twitter-timeline { background:#000; width:100% !important; height:100% !important; position:relative !important; display:block !important; }
		#stream-twitter { margin-left:-1em; }
	</style>
</head>
<body>
	<section id="video">
		<iframe width="100%" height="100%" src="https://www.youtube.com/embed/qHafaHSrZ-U" frameborder="0" allowfullscreen></iframe>
	</section>

	<section id="timing">
		<iframe src="http://livetiming.tsl-timing.com/WorldRX" width="100%" height="100%" frameborder="0"></iframe>
	</section>

	<section id="stream">
		<nav>
			<a href="#stream-autocross-lv">[A]utocross.lv</a>
			<a href="#stream-twitter">[T]witter</a>
		</nav>
		<div class="tab" id="stream-twitter">
			<a class="twitter-timeline" data-chrome="noheader nofooter noborders transparent" data-dnt="true" href="https://twitter.com/search?q=<?php echo urlencode( 'worldrx BarcelonaRX' ); ?>" data-widget-id="721640490525986816">#WorldRX</a>
		</div>
		<div class="tab" id="stream-autocross-lv">
			<p><em>Avots: <a href="http://www.autokross.lv">autocross.lv</a></em></p>
			<div id="24lb_thread" class="lb24 lb_1347948"></div>
			<script type="text/javascript">
			(function() {
			var lb24 = document.createElement('script'); lb24.type = 'text/javascript'; lb24.id = '24lbScript'; lb24.async = true; lb24.charset="utf-8";
			lb24.src = '//v.24liveblog.com/embed/24.js?id=1347948';
			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(lb24);})();
			</script>
		</div>
	</section>

	<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-178598-45', 'auto');
		ga('send', 'pageview');
	</script>
	<script>
		if ( window.location.hash == '' ) {
			window.location.hash = 'stream-twitter';
		}
		window.onkeyup = function(e) {
			var key = e.keyCode ? e.keyCode : e.which;
			switch (key) {
				case 65: // a
					window.location.hash = 'stream-autocross-lv';
					break;
				case 84: // t
					window.location.hash = 'stream-twitter';
					break;
			}
		}
	</script>
</body>
</html>
