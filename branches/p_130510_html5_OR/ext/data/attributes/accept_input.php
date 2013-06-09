<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>aaccept 속성 (input) : HTML5 Open Reference Guide</title>
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
		<div>
		<h2 class="s_tit">aaccept 속성 (input)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>type 속성이 File Upload state일 경우 accept 속성을 활용하여 서버에서 수용하는 파일의 타입에 대해 사용자 에이전트가힌트를 주도록 할 수 있습니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>콤마로 구분된 예약어 목록입니다. 각각의 예약어들은 다음 중 하나와 매칭되어야 합니다.(대소문자는 구분하지 않습니다.)</p>
		<ul>
		<li>audio&frasl;* : 사운드 파일을 허용함을 나타냅니다.</li>
		<li>video&frasl;* : 비디오 파일을 허용함을 나타냅니다.</li>
		<li>image&frasl;* : 이미지 파일을 허용함을 나타냅니다.</li>
		<li>매개변수 없는 유효한 마임 타입(valid MIME type with no parameters)</li>
		</ul>
		<p>예약어들은 중복될 수 없습니다. 이 중복을 체크할때는 대소문자를 구분하지 않습니다. (audio&frasl;* 와 Audio&frasl;* 는 중복입니다.)</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @모든 이미지 형태의 파일을 힌트로 보여줍니다. -->
			<p><label>프로필 사진: <input type="file" name="profile" accept="image/*"></label></p>

			<!-- @'mp4' 형식의 동영상 파일을 힌트로 보여줍니다. -->
			<p><label>동영상: <input type="file" name="profile" accept="video/mp4"></label></p>

			<!-- @MS Word 파일을 매개변수 없는 유효한 마임 타입(valid MIME type with no parameters) 지정함으로 해당 파일을 힌트로 보여줍니다. -->
			<p><label>지원서: <input type="file" name="profile" accept="application/msword"></label></p>
		</pre>
	</section>
	<!-- //샘플 코드 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>