<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>colspan 속성 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">colspan 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>column group 상태는 헤더가 동일한 열 집합에 있는 다른 모든 셀에 적용됨을 의미합니다. 따라서 요소가 열 집합을 가리키는 경우에만 colspan 속성을 사용할 수 있습니다.</dd>
		<dd>td 요소요소, th 요소요소 모두 colspan 속성을 포함 할 수 으며, 이는 셀이 확장될 열의 숫자를 나타냅니다. 단, 셀을 오버랩하기 위해서 colspan 속성을 사용해서는 안됩니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>0보다 큰 유효한 양의 정수이어야 합니다.</p>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<table>
			<caption>과일 품목 지출 현황</caption>
			<tr>
			<th>과일이름</th>
			<th>가격</th>
			<th>갯수</th>
			</tr>
			<tr>
			<td>사과</td>
			<td>2,000원</td>
			<td>5개</td>
			</tr>
			<tr>
			<td colspan="3">오렌지 품절</td>
			</tr>
			</table>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/tabular-data.html#attr-tdth-colspan" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>