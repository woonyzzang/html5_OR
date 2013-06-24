<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>low 속성 (meter) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;p&gt;C 드라이브 현황 : &lt;meter min="0" max="1000" low="300" optimun="500" value="600"&gt;&lt;/p&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-button-element.html#attr-meter-low" target="_blank">meter 요소의 low 속성의 최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'low',
		meaning: 'meter',
		item: [{
			desc:'low 속성은 meter 요소의 \'낮음\' 범위의 값을 나타냅니다.'
		},{
			desc:'meter 요소는 게이지의 범위를 \'낮음\', \'중간\', \'높음\' 부분으로 분할하고 어떤 부분이 \'최적인\' 부분인지 지목할 수 있습니다.',
			child: [
				{item:'\'낮음\' 범위 : 최소값과 low 속성 사이 영역'},
				{item:'\'중간\' 범위 : low 속성과 high 속성 사이의 영역'},
				{item:'\'높음\' 범위 : high 속성과 최대값 사이 영역'},
				{item:'\'최적\' 범위 : optimum 속성을 사용'}
			]

		}],
		txt: '유효한 부동소수점 숫자를 사용하여야 합니다.',
		txt1: 'minimum ≤ low ≤ maximum 와 같은 부등호 관계를 지켜야 합니다.',
		txt2: 'high 속성과 low ≤ high 와 같은 부등호 관계를 지켜야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>