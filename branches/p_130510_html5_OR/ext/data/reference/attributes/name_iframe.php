<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>name 속성 (iframe) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;iframe src="intro.html" name="intro"&gt;&lt;/iframe&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-iframe-element.html#attr-iframe-name" target="_blank">최신 명세</a></li>
		<li><a href="http://www.w3.org/TR/2011/WD-html5-20110113/browsers.html#nested-browsing-context" target="_blank">nested browsing context</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'name',
		meaning: 'iframe',
		item: [{
			desc:'name 속성은 iframe 요소에 사용된 중첩된 문맥의 이름을 나타냅니다.'
		}],
		txt: '유효한 문맥 이름이어야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>