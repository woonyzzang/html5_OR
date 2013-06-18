<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>span 속성 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">span 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>span 속성은 col 요소에 사용되며, 테이블에서 colspan 속성을 사용했을 때처럼 속성을 지정할 수 있습니다. col 요소에서 span 속성이 사용될 때는 속성에서 지정한 모든 컬럼에 속성이 지정됩니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>0보다 큰 유요한 정수를 선언하여, 정수값만큼 테이블의 열을 지정할수 있습니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @colgroup 요소에 사용되는 예:
				colgroup 요소로 그룹핑된 컬럼들을 붉은색으로 지정하는 예제입니다. -->
			<table>
			<caption>참가 목록 표</caption>
			<colgroup span="2" style="color:#f00"></colgroup>
			<tr>
			<thead>
			<th>참가자 성명</th>
			<th>참가자 성명</th>
			<th>참가자 성명</th>
			<th>참가자 성명</th>
			</tr>
			</thead>
			<tbody>
			<tr>
			<td>CJH</td>
			<td>LDH</td>
			<td>HSY</td>
			<td>YGJ</td>
			</tr>
			</tbody>
			</table>

			<!-- @col 요소에 사용되는 예:
				첫번째부터 세번째의 컬럼의 글자색을 붉은색으로 지정하고, 네번째 컬럼의 글자색을 파랑색으로 지정하는 예제입니다. -->
			<table>
			<caption>참가 목록 표</caption>
			<col span="3" style="color:#f00">
			<col style="color:#00f">
			<thead>
			<tr>
			<th>참가자 성명</th>
			<th>참가자 성명</th>
			<th>참가자 성명</th>
			<th>참가자 성명</th>
			</tr>
			</thead>
			<tbody>
			<tr>
			<td>CJH</td>
			<td>LDH</td>
			<td>HSY</td>
			<td>YGJ</td>
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
		<li><a href="http://www.w3.org/TR/html5/tabular-data.html#attr-col-span" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>