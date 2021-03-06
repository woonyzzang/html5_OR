<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>usemap 속성 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;p&gt;원하는 모양을 고르세요.
				&lt;img src="shapes.png" usemap="#shapes" alt="네개의 모양 중에서 하나를 고릅니다. 가운데가 비어 있는 붉은색 박스, 녹색 원, 남색 삼각형, 노란색 별 모양입니다"&gt;
				&lt;map name="shapes"&gt;
				&lt;area shape="rect" coords="50,50,100,100"&gt;
				&lt;area shape="rect" coords="25,25,125,125" href="red.html" alt="붉은색 박스."&gt;
				&lt;area shape="circle" coords="200,75,50" href="green.html" alt="녹색 원."&gt;
				&lt;area shape="poly" coords="325,25,262,125,388,125" href="blue.html" alt="남색 삼각형."&gt;
				&lt;area shape="poly" coords="450,25,435,60,400,75,435,90,450,125,465,90,500,75,465,60" href="yellow.html" alt="노란색 별."&gt;
				&lt;/map&gt;
			&lt;/p&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-map-element.html#attr-hyperlink-usemap" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'usemap',
		item: [{
			desc:'img 요소 또는 이미지를 나타내는 object 요소에 사용해서 요소와 연결된 이미지 맵을 나타냅니다.'
		}],
		txt: '유효한 해시명 참조여야 합니다. 이 해시 값은 map 요소의 name 속성의 값 앞에 #가 붙은 문자열입니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>