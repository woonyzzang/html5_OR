<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>for 속성 (label) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">for 속성 (label)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>for 속성은 label 요소에서 Form 컨트롤을 나타내는 요소의 id 속성과 명시적으로 연결하는데 사용됩니다.</dd>
		<dd>
			<ul>
			<li>for 속성을 사용해서 폼 컨트롤을 캡션과 연결할 수 있습니다. 속성의 값은 레이블을 붙일 수 있는 폼 관련 요소의 ID여야 하고, label 요소와 같은 Document에 속해야 합니다.</li>
			<li>이 속성은 label 요소 안에 폼 컨트롤을 나타내는 input 요소 등을 넣지 않을 때에 사용합니다.</li>
			</ul>
		</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>같은 문서 내에 있는 id 속성의 값을 가지며, 공백문자로 구분합니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<p>
				<input type="radio" name="gender" value="1" id="gender1"><label for="gender1">남자</label>
				<input type="radio" name="gender" value="2" id="gender2"><label for="gender2">여자</label>
			</p>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/forms.html#attr-label-for" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>