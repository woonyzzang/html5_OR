<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>radiogroup 속성 (command) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;command type="radio" radiogroup="groupA" label="선택 1" checked&gt;
			&lt;command type="radio" radiogroup="groupA" label="선택 2"&gt;
			&lt;command type="radio" radiogroup="groupA" label="선택 3"&gt;
			&lt;command type="radio" radiogroup="groupA" label="선택 4"&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/interactive-elements.html#attr-command-radiogroup" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'radiogroup',
		meaning: 'command',
		item: [{
			desc:'radiogroup 속성은 커맨드 자신이 토글되었을 때 토글될 커맨드 그룹 이름을 지정합니다. 이름의 초점은 부모 요소의 자손 목록입니다. 단, type 속성이 radio일 때에만 이 속성을 사용할 수 있습니다.'
		}],
		txt: '속성 값은 커맨드 자신이 토글되었을 때 토글될 커맨드 그룹 이름이 됩니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>