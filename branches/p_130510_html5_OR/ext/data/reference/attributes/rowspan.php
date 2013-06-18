<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>rowspan 속성 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">rowspan 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>rowspan 속성은 확장될 행의 숫자를 정의합니다.
			<ul>
			<li>row group 상태는 헤더가 동일한 행 집합에 있는 다른 모든 셀에 적용됨을 의미합니다. 요소가 행 집합을 가리키는 경우에만 이 상태를 사용 할 수 있습니다.</li>
			<li>td 요소, th 요소 모두 rowspan 속성을 포함 할 수 있습니다.</li>
			<li>이러한 속성을 셀을 오버랩하기 위해서 사용해서는 안됩니다.</li>
			</ul>
		</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>rowspan 속성의 속성 값은 0보다 큰 유효한 양의 정수이어야 합니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<table>
			<tr>
			<th>과일이름</th>
			<th>가격</th>
			<th>갯수</th>
			</tr>
			<tr>
			<td rowspan="2">사과</td>
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
		<li><a href="http://www.w3.org/TR/html5/tabular-data.html#attr-tdth-rowspan" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>