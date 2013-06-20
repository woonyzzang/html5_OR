<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>form 속성 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">form 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>form 속성은 폼 관련 요소를 form 요소에 명시적으로 연결합니다. 기본적으로는 가장 가까운 조상인 form 요소와 연결됩니다.</dd>
		<dd>폼 관련 요소는 form 요소와의 연결을 갖고 있습니다. 이 form 요소를 해당 요소의 폼 소유자라고 부릅니다. 폼 관련 요소가 form 요소와 연결되어 있지 않다면 폼 소유자가 null 이라고 합니다.</dd>
		<dd>form 속성을 사용 함으로 폼 관련 요소는 form 요소안에 반드시 작성하지 않아도 됩니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>같은 문서 상에 존재하는 form 요소의 id 속성 값이어야 합니다.</p>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<fieldset form="login">
			<legend>로그인</legend>
				<p><label>아이디 <input type="text" name="id"><label></p>
				<p><label>비밀번호 <input type="password" name="pw"><label></p>
			</fieldset>
			<form name="login">
			<p><input type="submit" value="로그인"></p>
			</form>

			<p><label form="frm">닉네임 : <input type="text" name="nickname"></label></p>
			<form method="get" action="#" id="frm">
			<input type="submit" value="전송">
			</form>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/association-of-controls-and-forms.html#attr-fae-form" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>