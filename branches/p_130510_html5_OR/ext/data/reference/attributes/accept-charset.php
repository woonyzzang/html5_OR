<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>aaccept-charset 속성 : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 속성 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			&lt;form action="form_action.psp" accept-charset="ISO-8859-1"&gt;
			&lt;label for="uid"&gt;First name:&lt;/label&gt; &lt;input type="text" name="uid" id="uid"&gt;&lt;br&gt;
			&lt;label for="pw"&gt;Last name:&lt;/label&gt; &lt;input type="password" name="pw" id="pw"&gt;&lt;br&gt;
			&lt;input type="submit" value="로그인"&gt;
			&lt;/form&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/forms.html#attr-form-accept-charset" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData2 = {
		attr: 'aaccept-charset',
		item: [{
			desc:'accept-charset 속성은 서식 제출시 사용할 문자 인코딩을 지정합니다. 문자 인코딩인코딩이 지정되었다면, 그 값은 스페이스로 구분된 순서 있는 예약어들이어야 하며, 각각의 예약어들은 ASCII 코드를 기준으로 대소문자를 구분합니다. 또한 이 값은 IANACharset에 제시된 아스키 호환 문자인코딩의 MIME name과 매치되어야 합니다.'
		}],
		txt: '문자 인코딩 입니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData2);
});
</script>
</body>
</html>