<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>scope 속성 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">scope 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>scope 속성은 셀의 범위를 정합니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>나열 속성인 scope 속성은 다섯개의 상태를 가집니다. 그 중 네개는 명시적인 키워드입니다.</p>
		<ul class="lst_type">
		<li>row 상태는 헤더가 같은 행에 있는 그 다음 셀들 중 일부에 적용됨을 의미합니다.</li>
		<li>col 상태는 해더가 같은 열에 있는 그 다음 셀들 중 일부에 적용됨을 의미합니다.</li>
		<li>row group 상태는 헤더가 동일한 행 집합에 있는 다른 모든 셀에 적용됨을 의미합니다. 요소가 행 집합을 가리킬 때만 사용할 수 있습니다.</li>
		<li>col group 상태는 헤더가 동일한 열 집합에 있는 다른 모든 셀에 적용됨을 의미합니다. 요소가 열 집합을 가리킬 때만 사용할 수 있습니다.</li>
		<li>속성을 사용하지 않을 경우 기본 값은 auto 상태이며 셀 집합을 문맥에 기초하여 선택하게 됩니다.</li>
		</ul>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<table>
			<thead>
			<tr>
			<th>과일명</th>
			<th>수확량 평균</th>
			<th>수확량 최고</th>
			<tbody>
			<tr>
			<td></td>
			<th scope="rowgroup">사과</th>
			<td></td>
			<td></td>
			</tr>
			<tr>
			<td>01</td>
			<th>지역1<th>
			<td>25</td>
			<td>40</td>
			</tr>
			<tr>
			<td></td>
			<th scope="rowgroup">배</th>
			<td></td>
			<td></td>
			</tr>
			<tr>
			<td>01</td>
			<th>지역1<th>
			<td>15</td>
			<td>40</td>
			</tr>
			</tbody>
			</table>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/tabular-data.html#attr-th-scope" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>