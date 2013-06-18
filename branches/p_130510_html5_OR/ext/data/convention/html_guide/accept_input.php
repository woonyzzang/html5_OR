<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>Intro : HTML Guide</title>
<link rel="stylesheet" href="../../../resources/css/ext-all.css">
<link rel="stylesheet" href="../../../resources/css/base.css">
<link rel="stylesheet" href="../../../syntaxhighlighter_3.0.83/styles/shCore.css">
<link rel="stylesheet" href="../../../syntaxhighlighter_3.0.83/styles/shThemeFadeToGrey.css">
<script src="../../../syntaxhighlighter_3.0.83/scripts/shCore.js"></script>
<script src="../../../syntaxhighlighter_3.0.83/scripts/shAutoloader.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
<script src="../../../ext-all-debug.js"></script>
<script src="../../../locale/ext-lang-ko.js"></script>
</head>
<body>
<article id="content_desc">
	<!-- 태그 설명 -->
	<section>
		<h2 class="s_tit">HTML Guide</h2>

		<dl class="definition">
		<dt>소개</dt>
		<dd>웹표준개발의 출발점인 HTML(Hyper Text Markup Language)에 대한 사용 가이드입니다. 여기서는 네 가지의 개별단위로 나뉘어지는데, 각 항목은 다음과 같습니다.</dd>
		</dl>

		<h3 class="s_tit">가이드 파일 정의</h3>
		<ul class="lst_type">
		<li>HTML Convention : Daum 웹표준 기술팀 & 개발팀의 개발 가이드를 모아놓은 부분입니다.</li>
		<li>HTML Grammar : 일반적이고 범용적인 HTML 사용문법들을 모아 정리하였습니다.</li>
		<li>(X)HTML Elements : (X)HTML HTML4.01/XHTML 1.0 의 각 Elements들에 대한 소개와 개별 문법, 사용 사례 등이 정리된 부분입니다.</li>
		<li>HTML5 Elements : HTML5를 구성하는 컨텐츠들에 대한 소개와, 새로 추가된 Elements들의 문법과 사용 사례들을 정리하였습니다.</li>
		</ul>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @문서간 이동 -->
			<a href="example.co.kr">
				<span>제목</span>
				<strong>구문 컨텐츠</strong>
			</a>

			<!-- @문서내 이동 -->
			<h3><a name="header">header 영역</a></h3> or <h3 id="header">header 영역 </h3>
			<a href="#header">header 영역</a>으로 이동한다.

			<!-- @문서간 특정위치로 이동 -->
			<h3><a name="header">header 영역</a></h3>
			<a href="manual.html#header">manual.html문서의 header영역</a>으로 이동한다.

			<!-- @mail주소 지정 -->
			<a href="#bookmark">책갈피</a>
			<a href="mailto:example.com">mail@example.com</a>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li>sd</li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>