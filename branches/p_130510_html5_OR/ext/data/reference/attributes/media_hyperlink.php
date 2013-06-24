<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>media 속성 (a, area) : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 속성 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<a href="att_a_media.asp?output=print" media="print and (resolution:300dpi)">프린터로 출력하기</a>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/links.html#attr-hyperlink-media" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'media',
		meaning: 'a, area',
		item: [{
			desc:'media 속성은 a 요소, area 요소가 가르키는 문서가 어떠한 매체를 가정하고 설계designed되었는지 나타냅니다.'
		},{
			desc:'media 속성은 참고 정도의 의미 밖에 없습니다.'
		}],
		txt: '유효한 미디어 쿼리여야 합니다.',
		txt1: '속성이 생략되었다면, 기본값은 all입니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>