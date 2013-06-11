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
	<!-- 태그 설명 -->
	<section>
		<h2 class="s_tit">form 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>formnovalidate 속성은 폼 제출시 유효성 검사를 거치치 않습니다.</dd>
		<dd>제출 버튼이고 formnovalidate 속성을 갖고 있다면, novalidate 속성의 값이 아닌 formnovalidate 속성의 값으로 처리합니다. formnovalidate 속성이 명시 되지 않았다면, 폼 소유자의 novalidate 속성의 값으로 처리합니다.</dd>
		<dd>&#34;no-validate 상태&#34;는 요소가 제출 버튼이고 formnovalidate 속성을 갖고 있을 때, 혹은 폼 소유자의 novalidate 속성을 갖고 있을 때 참(ture)입니다. 아니라면 거짓(false)입니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>불리언 속성입니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @두개의 필수 작성 필드와 세개의 제출 버튼으로 '등록' 제출 버튼으로 폼을 제출시 input 요소의 required 속성 작성으로 필수 작성을 검사합니다.
				하지만, '임시저장' 제출 버튼과, '취소', 제출 버튼으로 폼 제출시 formnovalidate 속성으로 인한 'no-validate 상태'가 되어 필수 작성 필드를 다 채우지 않고 폼을 제출 할 수 있습니다.
				임시저장' 제출 버튼 처럼 나중에 방문하여 다시 필드를 입력할 수 있는 용도로 사용 될 수 있습니다. -->
			<form>
			<p><label>작성자: <input required="required" name="author"></label></p>
			<p><label>내용: <textarea required="required" name="contents"></textarea></label></p>
			<p><input type="submit" name="submit" value="등록"></p>
			<p><input type="submit" name="save" value="임시저장" formnovalidate="formnovalidate"></p>
			<p><input type="submit" name="cancel" value="취소" formnovalidate="formnovalidate"></p>
			</form>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/association-of-controls-and-forms.html#attr-fs-formnovalidate" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>