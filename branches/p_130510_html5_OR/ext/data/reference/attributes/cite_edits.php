<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>cite 속성 (ins, del) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">cite 속성 (ins, del)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>cite 속성은 ins 요소와 del 요소요소의 변화에 대해 설명하는 문서의 위치를 표시합니다. 문서가 길다면, &#34;#&#34; 식별자를 사용하여 변화에 대해 설명하는 정확한 부분을 가리키기를 권장합니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>유효한, 앞뒤로 공백을 허용하는 URL이어야 합니다. 대응하는 인용 링크를 얻기 위해, 속성의 값은 요소에 대해 상대적으로 해석되어야 합니다. 사용자 에이전트는 사용자가 그러한 인용 링크를 따라갈 수 있도록 해야 합니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @ins 요소에 cite 속성을 사용한 경우 -->
			<p><ins cite="http://ko.wikipedia.org/wiki/토마토">토마토는 미국에서만 야채이다.</ins></p>

			<!-- @del 요소에 cite 속성을 사용한 경우 -->
			<p><del cite="http://ko.wikipedia.org/wiki/토마토">토마토는 야채이다.</del></p>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/edits.html#attr-mod-cite" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>