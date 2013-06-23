<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>hreflang 속성 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;a href="http://w3c.org" hreflang="ko"&gt;W3C.org&lt;/a&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/links.html#attr-hyperlink-hreflang" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'hreflang',
		item: [{
			desc:'hreflang 속성은 a 요소, area 요소에서 링크된 대상의 언어 코드를 지정합니다.'
		},{
			desc:'link 요소에서 사용되는 hreflang 속성도 같은 의미로 사용됩니다.'
		}],
		txt: '속성에 지정할 코드는 IETF BCP47 \'Matching of Language Tags\'를 따르며, 지금까지 사용한 언어 코드와 같으므로 특별히 신경 쓸 점은 없습니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>