<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>coords 속성 : HTML5 Open Reference Guide</title>
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
	<!-- 속성 설명 -->
	<section>
		<h2 class="s_tit">coords 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>coords 속성은 area 요소에서 사용되며, shape 속성이 설명하는 모양에 좌표를 제공합니다. shape 속성의 default상태를 제외한 모든 속성에 반드시 정수 목록을 정의하여야 합니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<dl class="category">
		<dt>circle 상태에서는 coords 속성에 3개의 정수를 선언해야하며, 마지막에 선언하는 정수는 음수가 될 수 없습니다.</dt>
		<dd>
			<ul>
			<li>첫번째 왼쪽 가장자리부터 원의중심을 픽셀단위로 표시</li>
			<li>위쪽부터 원의 중심의 거리를 픽셀단위로 표시</li>
			<li>마지막 수는 원의 반지름을 픽셀 단위로 표시</li>
			</ul>
		</dd>
		<dt>polygon 상태에서는 최소한 6개의 정수를 선언해야 하며, 숫자의 갯수는 반드시 짝수이어야 합니다.</dt>
		<dd>
			<ul>
			<li>짝수로 된 정수의 쌍은 이미지의 왼쪽상단 모서리부터 거리를 픽셀단위로 표시</li>
			<li>별, 마름모등 다각형의 꼭지점을 표시</li>
			</ul>
		</dd>
		<dt>rectangle 상태에서는 4개의 정소를 선언해야합니다.</dt>
		<dd>
			<ul>
			<li>첫번째 값은 세 번째의 값보다 작아야하며, 두번째 값은 네번째 값보다 작아야 합니다.</li>
			<li>네개의 값은 각각 모서리의 영역 사이의 거리를 픽셀단위로 표시합니다.</li>
			</ul>
		</dd>
		</dl>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			&lt;area shape="rect" coords="50,50,100,100" alt="@대체 텍스트" &gt;
			&lt;area shape="circle" coords="200,75,50" alt="@대체 텍스트" &gt;
			&lt;area shape="poly" coords="450,25,435,60,400,75,435,90,450,125,465,90,500,75,465,60" alt="@대체 텍스트" &gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-map-element.html#attr-area-coords" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>