<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>type 속성 (button) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">type 속성 (button)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>type 속성은 버튼이 활성화되었을 때의 동작을 제어합니다.</dd>
		<dd>Submit Button state가 아니라면 button 요소에 formaction 속성, formenctype 속성, formmethod 속성, formnovalidate 속성, formtarget 속성를 사용 할 수 없습니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>나열 속성으로 submit, reset, button 세가지 키워드를 사용합니다. 기본값은 submit 입니다.</p>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @Submit Button state:
				폼을 제출합니다.
				키워드로는 'submit'를 사용 합니다.
				이 경우 요소는 제출 버튼이 됩니다. -->
			<p><button type="submit">메일 보내기</button></p>

			<!-- @Reset Button state:
				폼을 리셋합니다.
				키워드로는 'reset'를 사용 합니다. -->
			<p><button type="reset">다시 작성하기</button></p>

			<!-- @Button state:
				아무것도 하지 않습니다.
				키워드로는 'button'를 사용 합니다. -->
			<p><button type="button">중복확인</button></p>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-button-element.html#attr-button-type" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>