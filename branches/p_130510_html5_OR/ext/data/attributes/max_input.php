<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>max 속성 (input) : HTML5 Open Reference Guide</title>
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
<script>

</script>
</head>
<body>
<article id="content_desc">
	<!-- 태그 설명 -->
	<section>
		<h2 class="s_tit">max 속성 (input)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>max 속성은 요소에서 허용하는 최대 값을 정의합니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>속성 값은 유효한 국제적 날짜와 시간 문자열이어야 합니다. max 속성의 최대 값은 min 속성의 최소 값보다 작을 수 없습니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @날짜 콘트롤은 1991년대 이전으로 제한하고 있습니다. -->
			<p><label>생일: <input type="date" name="bday" max="1990-12-31"></label></p>

			<!-- @숫자 콘트롤은 0보다 큰 값을 입력하도록 제한하고 있습니다. -->
			<p><label>구매수량: <input type="number" name="num" min="1" value="1"></label></p>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/common-input-element-attributes.html#the-min-and-max-attributes" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>