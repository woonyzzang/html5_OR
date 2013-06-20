<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>autocomplete 속성 (input) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">autocomplete 속성 (input)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>사용자 에이전트는 사용자들의 입력을 도와주는 자동완성 기능을 갖추고 있습니다. autocomplete 속성은 이 기능의 컨트롤 속성으로</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>나열 속성입니다. 세가지 상태 - on, off, default 를 갖습니다. (기본 값은default 입니다.)</p>

		<dl class="category">
		<dt>off 상태</dt>
		<dd>
			<ul>
			<li>컨트롤의 입력 데이터가 부분적으로 민감한 경우(예를 들어 핵무기의 활성화 코드 등)</li>
			<li>은행 로그인을 위한 OTP처럼 똑같은 데이터를 재사용할 일이 전혀 없고 사용자가 사용자 에이전트의 도움없이 매번 그 데이터를 명시적으로 입력할 것이 분명한 경우</li>
			<li>문서가 그 나름대로 자동입력 방식을 갖추고 있어서 사용자 에이전트가 개입하는 것을 원치 않는 경우</li>
			</ul>
		</dd>
		<dt>on 상태</dt>
		<dd>
			<ul>
			<li>컨트롤의 입력 데이터가 부분적으로 민감하지 않으며, 사용자 에이전트가 그 값을 기억하길 원하는 경우</li>
			</ul>
		</dd>
		<dt>default</dt>
		<dd>
			<ul>
			<li>사용자 에이전트가 폼 소유자의 autocomplete 속성을 사용함을 표시(기본값으로 form 요소의 autocomplete 속성은 on 상태입니다.)</li>
			</ul>
		</dd>
		</dl>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<p><label>주민등록번호: <input type="text" name="id" autocomplete="off"></label></p>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/common-input-element-attributes.html#attr-input-autocomplete" target="_blank">최신 명세</a></li>
		<li><a href="http://www.w3.org/TR/html5/common-microsyntaxes.html#enumerated-attribute" target="_blank">enumerated attribute 최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>