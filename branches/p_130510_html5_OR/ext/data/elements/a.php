<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>a 요소 : HTML5 Open Reference Guide</title>
<script src="../../syntaxhighlighter_3.0.83/scripts/shCore.js"></script>
<script src="../../syntaxhighlighter_3.0.83/scripts/shAutoloader.js"></script>
<link rel="stylesheet" href="../../resources/css/base.css">
<link rel="stylesheet" href="../../syntaxhighlighter_3.0.83/styles/shCore.css">
<link rel="stylesheet" href="../../syntaxhighlighter_3.0.83/styles/shThemeFadeToGrey.css">
</head>
<body>
<article class="content_desc">
	<!-- 태그 설명 -->
	<section>
		<h2 class="s_tit">a 요소: (Anchor)</h2>

		<dl>
		<dt>정의</dt>
		<dd>a 태그는 현재 웹페이지에서 다른 웹페이지로 이동하거나 현재 웹페이지 내의 특정 부분 이동시에 사용되고 <a href="http://ko.wikipedia.org/wiki/테스트" target="new">하이퍼링크</a>라고 합니다.</dd>
		</dl>


		<h3 class="s_tit">마크업 규칙</h3>
		<ul>
		<li>플로우 컨텐츠이자 대화형 컨텐츠입니다. 그리고, 자손 요소로 구문 컨텐츠만 있다면 구문 컨텐츠에 속합니다.</li>
		<li>a 요소는 두 군데에 위치할 수 있습니다.
			<ul>
			<li>자식 요소에 구문 컨텐츠만 있으면 구문 컨텐츠의 위치에 올 수 있습니다.</li>
			<li>자식 요소에 구문 컨텐츠를 포함하지 않으면 플로우 컨텐츠의 위치에 올 수 있습니다.</li>
			</ul>
		</li>
		<li>자식 요소에 투명한 요소가 있으면 대화형 컨텐츠는 포함할 수 없습니다.</li>
		</ul>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<a href="@hyperlink">다른페이지로 이동</a>
			<a href="@hyperlink">
				<span>제목</span>
				<strong>구문 컨텐츠</strong>
			</a>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 속성 설명 -->
	<section>
		<h3 class="s_tit">속성</h3>
		<table>
		<caption>태그 속성 목록 표</caption>
		<thead>
		<tr>
		<th scope="col">속성명</th>
		<th scope="col">설명</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td><a href="#" title="html5:attribute:global">전역 속성</a></td>
		<td>공통 속성</td>
		</tr>
		<tr>
		<td><a href="#" title="html5:attribute:href_hyperlink">href</a></td>
		<td>이동할 URL을 지정합니다.</td>
		</tr>
		<tr>
		<td><a href="#" title="html5:attribute:target">target</a></td>
		<td>이동시 사용되는 콘텍스트 이름이나 키워드 지정합니다.</td>
		</tr>
		<tr>
		<td><a href="#" title="html5:attribute:rel">rel</a></td>
		<td>링크 대상과의 관계를 지정합니다.</td>
		</tr>
		<tr>
		<td><a href="#" title="html5:attribute:media_hyperlink">media</a></td>
		<td>링크 대상을 출력하는 매체를 지정합니다.</td>
		</tr>
		<tr>
		<td><a href="#" title="html5:attribute:hreflang">hreflang</a></td>
		<td>링크 대상의 언어 코드를 지정합니다.</td>
		</tr>
		<tr>
		<td><a href="#" title="html5:attribute:type_hyperlink">type</a></td>
		<td>링크 대상의 <abbr title="Multipurpose Internet Mail Extension">MIME</abbr> 타입을 지정합니다.</td>
		</tr>
		</tbody>
		</table>
	</section>
	<!-- //속성 설명 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>