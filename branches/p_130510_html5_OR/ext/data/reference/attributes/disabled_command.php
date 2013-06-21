<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>disabled 속성 (command) : <?php echo TITLE_REFERENCE; ?></title>
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
			<command type="command" disabled="disabled" label="발행">
			<command type="radio" disabled="disabled" radiogroup="alignment" label="오른쪽정렬">
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/interactive-elements.html#attr-command-disabled" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'disabled',
		meaning: 'command',
		item: [{
			desc:'disabled 속성은 참과 거짓의 불리언 속성입니다. 따라서 이 속성이 존재한다면 커맨드가 현재 상태에서 사용 불가능함을 나타냅니다.'
		}],
		txt: 'disabled 속성은 disabled 속성 그 자체를 선언하거나 또는 disabled=\"disabled\" 로 선언하면 참, 속성이 선언되지 않을 경우 거짓으로 구분됩니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>