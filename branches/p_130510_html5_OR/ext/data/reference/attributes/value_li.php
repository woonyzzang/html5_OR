<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>value 속성 (li) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">value 속성 (li)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>value 속성은 li 요소를 ol 요소의 하위 요소로 사용할 경우에만 사용할 수 있는 속성입니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>목록의 순서를 지정할 수 있는 속성이기 때문에 반드시 정수형 값을 사용합니다.</p>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @value 속성이 사용되는 경우 -->
			<h4>인기 프로그래밍 언어 - Top 5위부터 1위까지 확인하실 수 있습니다.</h4>
			<ol>
			<li value="5">JavaScript</li>
			<li value="4">Java</li>
			<li value="3">PHP</li>
			<li value="2">Python</li>
			<li value="1">Ruby</li>
			</ol>

			<!-- @ ol 요소의 reversed 속성으로 동일한 결과를 표현하는 경우 -->
			<h4>인기 프로그래밍 언어 - Top 5위부터 1위까지 확인하실 수 있습니다.</h4>
			<ol reversed="reversed">
			<li>JavaScript</li>
			<li>Java</li>
			<li>PHP</li>
			<li>Python</li>
			<li>Ruby</li>
			</ol>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>현재까지 reversed 속성을 지원하는 브라우저가 없습니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/grouping-content.html#attr-li-value" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>