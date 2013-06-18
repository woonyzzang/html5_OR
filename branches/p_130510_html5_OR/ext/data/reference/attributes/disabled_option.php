<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>disabled 속성 (option) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">disabled 속성 (option)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>disabled 속성은 option 요소의 레이블을 나타냅니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>disabled 속성을 사용하게 되면 그 값이 option 요소의 레이블이 되며, 없다면 요소내의 텍스트가 레이블이 됩니다. 둘 다 제공되는 경우 label 속성의 값이 표시됩니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<label for="baseball_list">야구단</label>
			<select id="baseball_list">
			<option value="lg" label="LG">LG 트윈스</option>
			<option value="doosan" label="두산">두산 베어스</option>
			<option value="kia" label="KIA" selected>KIA 타이거즈</option>
			<option value="sk" label="SK">SK 와이번스</option>
			<option value="samsung" label="삼성">삼성 라이온스</option>
			<option value="hwanhaw" label="한화">한화 이글스</option>
			<option value="nexen" label="넥센">넥센 히어로즈</option>
			<option value="lotte" label="롯데">롯데 자이언츠</option>
			</select>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-button-element.html#attr-option-disabled" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>