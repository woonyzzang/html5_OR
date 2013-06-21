<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>for 속성 (output) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;input type="number" name="numA" id="firstNum"&gt; +
			&lt;input type="number" name="numB" id="secondNum"&gt; =
			&lt;output onforminput="value = numA.valueAsNumber + numB.valueAsNumber" for="firstNum secondNum"&gt;&lt;/output&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-button-element.html#attr-output-for" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'for',
		meaning: 'output',
		item: [{
			desc:'for 속성은 output 요소에서 계산에 사용된 요소들과 명시적으로 연결하는데 사용됩니다.'
		}],
		txt: '같은 문서 내에 있는 id 속성의 값을 가지며, 공백문자로 구분합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>