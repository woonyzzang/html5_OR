<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>max 속성 (meter) : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @기본 마크업 -->
			&lt;p&gt;C 드라이브 현황 : &lt;meter min="0" max="1000" value="600"&gt;&lt;/p&gt;

			<!-- @max 속성을 지정하지 않을 경우 최대값은 1.0이 됩니다. -->
			&lt;p&gt;C 드라이브 현황 : &lt;meter value="0.6"&gt;&lt;/p&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-button-element.html#attr-meter-max" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'max',
		meaning: 'meter',
		item: [{
			desc:'max 속성은 meter 요소의 최대 값을 나타냅니다.'
		}],
		txt: '유효한 부동소수점 숫자를 사용하여야 합니다. 값을 명시하지 않으면 최소 값은 1이 됩니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>