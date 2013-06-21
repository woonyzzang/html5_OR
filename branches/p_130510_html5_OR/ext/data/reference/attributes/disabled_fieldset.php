<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>disabled 속성 (fieldset) : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @fieldset 요소에 disabled 속성을 사용하여 포함된 폼 컨트롤 요소들은 비활성화 됩니다. -->
			&lt;fieldset disabled&gt;
			&lt;legend&gt;로그인&lt;/legend&gt;
				&lt;p&gt;&lt;label&gt;아이디 &lt;input name="id"&gt;&lt;label&gt;&lt;/p&gt;
				&lt;p&gt;&lt;label&gt;비밀번호 &lt;input name="pw"&gt;&lt;label&gt;&lt;/p&gt;
			&lt;/fieldset&gt;

			<!-- @fieldset 요소에 disabled 속성을 사용하여 포함된 폼 컨트롤 요소들은 비활성화가 되지만 legend 요소의 자식 요소는 활성화됩니다. -->
			&lt;fieldset disabled&gt;
			&lt;legend&gt;&lt;label&gt;&lt;input type="radio" name="login"&gt;로그인&lt;label&gt;&lt;/legend&gt;
				&lt;p&gt;&lt;label&gt;아이디 &lt;input name="id"&gt;&lt;label&gt;&lt;/p&gt;
				&lt;p&gt;&lt;label&gt;비밀번호 &lt;input name="pw"&gt;&lt;label&gt;&lt;/p&gt;
			&lt;/fieldset&gt;
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

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'disabled',
		meaning: 'fieldset',
		item: [{
			desc:'disabled 속성을 작성한 fieldset 요소의 모든 폼 컨트롤들이 비활성화됩니다. 다만, 첫번째 자식요소로 오는 legend 요소의 자식 요소는 제외됩니다.'
		}],
		txt: '불리언 속성입니다. disabled 속성은 disabled 속성 그 자체를 선언하거나 또는 disabled=\"disabled\" 로 선언하면 참, 속성이 선언되지 않을 경우 거짓으로 구분됩니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>