<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>disabled 속성 (fieldset) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">disabled 속성 (fieldset)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>disabled 속성을 작성한 fieldset 요소의 모든 폼 컨트롤들이 비활성화됩니다. 다만, 첫번째 자식요소로 오는 legend 요소의 자식 요소는 제외됩니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>불리언 속성입니다. disabled 속성은 disabled 속성 그 자체를 선언하거나 또는 disabled=“disabled” 로 선언하면 참, 속성이 선언되지 않을 경우 거짓으로 구분됩니다.</p>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @fieldset 요소에 disabled 속성을 사용하여 포함된 폼 컨트롤 요소들은 비활성화 됩니다. -->
			<fieldset disabled="disabled">
			<legend>로그인</legend>
				<p><label>아이디 <input name="id"><label></p>
				<p><label>비밀번호 <input name="pw"><label></p>
			</fieldset>

			<!-- @fieldset 요소에 disabled 속성을 사용하여 포함된 폼 컨트롤 요소들은 비활성화가 되지만 legend 요소의 자식 요소는 활성화됩니다. -->
			<fieldset disabled="disabled">
			<legend><label><input type="radio" name="login">로그인<label></legend>
				<p><label>아이디 <input name="id"><label></p>
				<p><label>비밀번호 <input name="pw"><label></p>
			</fieldset>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://dev.w3.org/html5/spec/forms.html#attr-fieldset-disabled" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>