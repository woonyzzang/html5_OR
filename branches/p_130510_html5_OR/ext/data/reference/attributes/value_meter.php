<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>value 속성 (meter) : <?php echo TITLE_REFERENCE; ?></title>
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

			<!-- @최소 값, 최대 값이 없을 경우 (잘못 작성된 마크업) -->
			&lt;p&gt;C 드라이브 현황 : &lt;meter value="600"&gt;&lt;/p&gt;

			<!-- @최소값, 최대값이 없을 경우 (올바른 마크업) -->
			&lt;p&gt;C 드라이브 현황 : &lt;meter value="0.6"&gt;&lt;/p&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-button-element.html#attr-meter-value" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'value',
		meaning: 'meter',
		item: [{
			desc:'meter 요소의 게이지에 표시되는 \'측정\'값 입니다.'
		}],
		txt: '반드시 명시해야 하며, 유효한 부동소수점 숫자를 사용하여야 합니다.',
		txt1: 'min 속성, max 속성을 지정하지 않으면 meter 요소의 기본 최소 값은 0, 최대 값은 1이 설정되며, 0 에서 1 사이의 값을 지정하여야 합니다.',
		txt2: 'minimum ≤ value ≤ maximum 와 같은 부등호 관계를 지켜야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>