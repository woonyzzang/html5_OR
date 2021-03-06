<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>title 속성 (command) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;command label="표" title="표를 삽입합니다. (기본 2행2열 형태)"&gt;
			&lt;command label="차트" title="차트를 삽입합니다."&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/interactive-elements.html#attr-command-title" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'title',
		meaning: 'command',
		item: [{
			desc:'command 요소에 사용 되는 title 속성으로 전역 속성의 title 속성과는 다른 특별한 의미가 있습니다.'
		},{
			desc:'사용자에게 도움이 될 만한, 커맨드를 설명하는 힌트를 제공합니다.'
		}],
		txt: 'title 속성은 약어의 축약되지 않은 텍스트를 값으로 가지며, 원형 이외의 다른 텍스트는 포함할 수 없습니다.',
		txt1: 'title 속성으로 약어에 대한 원형을 제공하더라도 동일 문서 내에 같은 내용을 가진 abbr 요소들에 대해서 동일 값을 가질 필요는 없습니다. 각각의 abbr 요소는 독립적이므로 각 abbr 요소의 title 속성 역시 다른 값을 가질 수 있습니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>