<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>multiple 속성 (input) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;p&gt;&lt;label&gt;받는사람: &lt;input type="email" name="to" multiple&gt;&lt;/label&gt;&lt;/p&gt;
			&lt;p&gt;&lt;label&gt;첨부파일: &lt;input type="file" name="att" multiple&gt;&lt;/label&gt;&lt;/p&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/common-input-element-attributes.html#the-multiple-attribute" target="_blank">최신 명세</a></li>
		<li><a href="http://www.w3.org/TR/2011/WD-html5-20110113/common-microsyntaxes.html#boolean-attribute" target="_blank">Boolean attributes</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'multiple',
		meaning: 'input',
		item: [{
			desc:'multiple 속성은 input 요소에서 여러개의 값을 입력하는 것을 허용합니다.'
		}],
		txt: '불리언 속성입니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>