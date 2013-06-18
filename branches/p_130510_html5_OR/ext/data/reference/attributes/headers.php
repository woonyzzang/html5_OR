<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>headers 속성 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">headers 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>headers 속성은 th 요소, td 요소를 id를 갖는 th 요소와 연결합니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>속성 값은 공백문자로 구분되고 순서 없이 유일한 토큰의 목록이어야 하며 대소문자를 구분합니다. 토큰은 같은 테이블 안에 있는 th 요소의 id이어야 합니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @스크린리더에서 읽는 경우 '과일이름:사과'형태로 읽습니다. -->
			<table>
			<tr>
			<th id="fruit">과일이름</th>
			<th>가격</th>
			<th>갯수</th>
			</tr>
			<tr>
			<td headers="fruit">사과</td>
			<td>2,000원</td>
			<td>5개</td>
			</tr>
			<tr>
			<td>10,000원</td>
			<td>1box(특가)</td>
			</tr>
			</table>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/tabular-data.html#attr-tdth-headers" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>