<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>name 속성 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;form name="loginForm"&gt;
			&lt;fieldset name="loginFiled"&gt;
			&lt;legend&gt;로그인&lt;/legend&gt;
				&lt;p&gt;&lt;label&gt;이디 &lt;input name="loginID"&gt;&lt;label&gt;&lt;/p&gt;
				&lt;p&gt;&lt;label&gt;비밀번호 &lt;input name="loginPW"&gt;&lt;label&gt;&lt;/p&gt;
				&lt;p&gt;&lt;input type="submit" value="로그인"&gt;&lt;/p&gt;
			&lt;/fieldset&gt;
			&lt;form&gt;
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

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'name',
		item: [{
			desc:'name 속성은 폼 콘트롤에 이름을 부여합니다. 이 이름은 폼 제출 시에 사용되며, 폼 요소의 elements 객체에 포함됩니다. 속성이 명시되었다면, 값은 빈 문자열이 될 수 없습니다.'
		},{
			desc:'iframe 요소, meta 요소, object 요소, param 요소, map 요소의 disabled 속성은 다른 의미를 포함하고 있습니다.'
		}],
		txt: '비어 있지 않은 문자열은 무엇이든 허용되지만, 그러한 이름에 _charset_ 혹은 isindex 라는 문자열이 들어갈 경우 특별한 의미를 갖게 됩니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>