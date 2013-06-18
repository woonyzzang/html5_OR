<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>dirname 속성 (input) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">dirname 속성 (input)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>dirname 속성은 폼 컨트롤의 dirname 속성을 나타냅니다.</dd>
		<dd>나열 속성에 속합니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>속성을 사용한 경우 빈 문자열은 사용할 수 없습니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			&lt;form action="addcomment.cgi" method="post"&gt;
			<p><label>내용: <input type="text" name="comment" dirname="comment.dir" required="required"></label></p>
			<p><button type="submit" value="add" name="mode">등록</button></p>
			&lt;/form&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/common-input-element-attributes.html#attr-input-dirname" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>