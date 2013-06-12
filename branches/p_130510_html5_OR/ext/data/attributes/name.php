<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>name 속성 : HTML5 Open Reference Guide</title>
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
<script>

</script>
</head>
<body>
<article id="content_desc">
	<!-- 태그 설명 -->
	<section>
		<h2 class="s_tit">name 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>name 속성은 폼 콘트롤에 이름을 부여합니다. 이 이름은 폼 제출 시에 사용되며, 폼 요소의 elements 객체에 포함됩니다. 속성이 명시되었다면, 값은 빈 문자열이 될 수 없습니다.</dd>
		<dd>iframe 요소, meta 요소, object 요소, param 요소, map 요소의 disabled 속성은 다른 의미를 포함하고 있습니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>비어 있지 않은 문자열은 무엇이든 허용되지만, 그러한 이름에 _charset_ 혹은 isindex 라는 문자열이 들어갈 경우 특별한 의미를 갖게 됩니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<form name="loginForm">
			<fieldset name="loginFiled">
			<legend>로그인</legend>
				<p><label>아이디 <input name="loginID"><label></p>
				<p><label>비밀번호 <input name="loginPW"><label></p>
				<p><input type="submit" value="로그인"></p>
			</fieldset>
			<form>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/association-of-controls-and-forms.html#attr-fe-name" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>