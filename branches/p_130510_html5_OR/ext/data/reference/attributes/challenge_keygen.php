<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>challenge 속성 (keygen) : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 속성 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<!-- //속성 설명 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/forms.html#attr-keygen-challenge" target="_blank">최신 명세</a></li>
		<li><a href="http://www.thehtml5tutorials.com/keygen_tag_html5.html" target="_blank">The html5 tutorials - The &lt;keygen&gt; Tag</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'challenge',
		meaning: 'keygen',
		item: [{
			desc:'challenge 속성은 키와 함께 전달되는 문자열입니다.'
		}],
		txt: '속성을 사용하지 않는다면 빈 문자열을 값으로 갖습니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>