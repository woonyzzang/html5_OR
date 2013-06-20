<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>size 속성 (select) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">size 속성 (select)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>size 속성은 사용자에게 보여줄 select 요소 목록의 개수를 정의합니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>유효한 양의 정수를 사용합니다.</p>
		<p>multiple 속성 존재한다면, size 속성의 기본 값은 4입니다. 그렇지 않다면 기본 값은 1입니다.</p>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<form>
			<fieldset>
			<legend>size 예제</legend>
				<select size="2">
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
				</select>
				<select size="4">
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
				</select>
			</fieldset>
			</form>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>이 레퍼런스를 작성하는 시점에서 윈도우용 크롬은 두개의 select 요소 모두 4개를 보여주는 버그가 있으므로 주의하시기 바랍니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-button-element.html#attr-select-size" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>