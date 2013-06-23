<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>icon 속성 (command) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;command type="checkbox" label="굵게" icon="ico_bold.gif" onclick="setBold();"&gt;
			&lt;command type="checkbox" label="밑줄" icon="ico_underline.gif" onclick="setULine();"&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/interactive-elements.html#attr-command-icon" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'icon',
		meaning: 'command',
		item: [{
			desc:'icon 속성은 command 요소에 사용되며 커맨드를 나타내는 그림을 지정합니다.'
		},{
			desc:'속성을 사용 하였다면 값은 유요한 url이어야 합니다.'
		}],
		txt: '유효한 부동소수점 숫자를 사용하여야 합니다.',
		txt1: 'minimum ≤ high ≤ maximum 와 같은 부등호 관계를 지켜야 합니다.',
		txt2: 'low 속성과 low ≤ high 와 같은 부등호 관계를 지켜야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>