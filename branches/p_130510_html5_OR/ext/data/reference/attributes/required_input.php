<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>required 속성 (input) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;form&gt;
			&lt;fieldset&gt;
			&lt;legend&gt;required 예제&lt;/legend&gt;
				&lt;p&gt;
					&lt;input id="name" name="name" required&gt;
					&lt;label for="name"&gt;이름을 적어 주세요&lt;/label&gt;
				&lt;/p&gt;
				&lt;p&gt;&lt;input type="submit"&gt;&lt;/p&gt;
			&lt;/fieldset&gt;
			&lt;/form&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/common-input-element-attributes.html#attr-input-required" target="_blank">최신 명세</a></li>
		<li><a href="http://www.w3.org/TR/html5/forms.html#boolean-attribute" target="_blank">Boolean attributes</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'required',
		meaning: 'input',
		item: [{
			desc:'input 요소에서 사용되는 required 속성은 사용자의 입력이 반드시 필요한 것임을 명시적으로 나타냅니다.'
		}],
		txt: '불리언 속성입니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>