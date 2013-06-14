<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>usemap 속성 : HTML5 Open Reference Guide</title>
<link rel="stylesheet" href="../../resources/css/ext-all.css">
<link rel="stylesheet" href="../../resources/css/base.css">
<link rel="stylesheet" href="../../syntaxhighlighter_3.0.83/styles/shCore.css">
<link rel="stylesheet" href="../../syntaxhighlighter_3.0.83/styles/shThemeFadeToGrey.css">
<script src="../../syntaxhighlighter_3.0.83/scripts/shCore.js"></script>
<script src="../../syntaxhighlighter_3.0.83/scripts/shAutoloader.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
<script src="../../ext-all-debug.js"></script>
<script src="../../locale/ext-lang-ko.js"></script>
</head>
<body>
<article id="content_desc">
	<!-- 태그 설명 -->
	<section>
		<h2 class="s_tit">usemap 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>img 요소 또는 이미지를 나타내는 object 요소에 사용해서 요소와 연결된 이미지 맵을 나타냅니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>유효한 해시명 참조여야 합니다. 이 해시 값은 map 요소의 name 속성의 값 앞에 #가 붙은 문자열입니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<p>원하는 모양을 고르세요.
				<img src="shapes.png" usemap="#shapes" alt="네개의 모양 중에서 하나를 고릅니다. 가운데가 비어 있는 붉은색 박스, 녹색 원, 남색 삼각형, 노란색 별 모양입니다">
				<map name="shapes">
				<area shape="rect" coords="50,50,100,100">
				<area shape="rect" coords="25,25,125,125" href="red.html" alt="붉은색 박스.">
				<area shape="circle" coords="200,75,50" href="green.html" alt="녹색 원.">
				<area shape="poly" coords="325,25,262,125,388,125" href="blue.html" alt="남색 삼각형.">
				<area shape="poly" coords="450,25,435,60,400,75,435,90,450,125,465,90,500,75,465,60" href="yellow.html" alt="노란색 별.">
				</map>
			</p>
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

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>