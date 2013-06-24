<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>media 속성 (style) : <?php echo TITLE_REFERENCE; ?></title>
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
		<li><a href="http://www.w3.org/TR/html5/semantics.html#attr-style-media" target="_blank">최신 명세</a></li>
		<li><a href="http://www.w3.org/TR/2011/WD-html5-20110113/common-microsyntaxes.html#valid-media-query" target="_blank">valid media query</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'media',
		meaning: 'style',
		item: [{
			desc:'media 속성은 style 요소에서 스타일에 적용될 매체를 나타냅니다.'
		}],
		txt: '값은 유효한 미디어 쿼리여야 합니다. 속성이 생략되었다면, 기본값은 all입니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>