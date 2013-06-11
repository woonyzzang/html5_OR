<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>low 속성 (meter) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">low 속성 (meter)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>low 속성은 meter 요소의 '낮음' 범위의 값을 나타냅니다.</dd>
		<dd>meter 요소는 게이지의 범위를 '낮음', '중간', '높음' 부분으로 분할하고 어떤 부분이 '최적인' 부분인지 지목할 수 있습니다.
			<ul>
			<li>&#34;낮음&#34; 범위 : 최소값과 low 속성 사이 영역</li>
			<li>&#34;중간&#34; 범위 : low 속성과 high 속성 사이의 영역</li>
			<li>&#34;높음&#34; 범위 : high 속성과 최대값 사이 영역</li>
			<li>&#34;최적&#34; 범위 : optimum 속성을 사용</li>
			</ul>
		</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>유효한 부동소수점 숫자를 사용하여야 합니다.</p>
		<p>minimum ≤ low ≤ maximum 와 같은 부등호 관계를 지켜야 합니다.</p>
		<p>high 속성과 low ≤ high 와 같은 부등호 관계를 지켜야 합니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<p>C 드라이브 현황 : <meter min="0" max="1000" low="300" optimun="500" value="600"></p>
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

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>