<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>datetime 속성 (ins, del) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">datetime 속성 (ins, del)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>datetime 속성은 ins 요소, del 요소,time 요소의 변화와 관련하여 변경한 날짜와 시간을 표시할 수 있습니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>선택적으로 시간정보를 갖는 유효한 날짜 문자열이어야 합니다.</p>
		<p>이 속성을 사용했다면, 값은 반드시 있어야 합니다.</p>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<p><del datetime="2011-09-02T20:00:00+09:00">토마토는 야채이다.</del></p>

			<p><ins datetime="2011-09-02T21:00:00+09:00">토마토는 미국에서만 야채이다.</ins></p>

			<p><time class="dtend" datetime="2007-10-20">19</time></p>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/edits.html#attr-mod-datetime" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>