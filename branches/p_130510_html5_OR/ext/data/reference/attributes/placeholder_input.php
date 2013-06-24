<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>placeholder 속성 (input) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;fieldset&gt;
			&lt;legend&gt;메일 보내기&lt;/legend&gt;
				&lt;p&gt;&lt;label&gt;이름: &lt;input type="text" name="fullName" placeholder="Joe Seung Woon"&gt;&lt;/label&gt;&lt;/p&gt;
				&lt;p&gt;&lt;label&gt;비밀번호: &lt;input type="password" name="pw"&gt;&lt;/label&gt;&lt;/p&gt;
				&lt;p&gt;&lt;label&gt;이메일: &lt;input type="email" name="mail" placeholder="woonyzzang@example.com"&gt;&lt;/label&gt;&lt;/p&gt;
				&lt;p&gt;&lt;label&gt;홈페이지: &lt;input type="url" name="hp" placeholder="http://example.com"&gt;&lt;/label&gt;&lt;/p&gt;
			&lt;/fieldset&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>긴 힌트나 조언 텍스트에는 title 속성이 좀 더 적절합니다.</p>
		<p>placeholder 속성을 label 요소를 대체할 목적으로 사용해서는 안됩니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/common-input-element-attributes.html#attr-input-placeholder" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'placeholder',
		meaning: 'input',
		item: [{
			desc:'placeholder 속성은 \'짧은\'힌트(한 단어나 짧은 구)를 나타냅니다. 이러한 힌트는 사용자가 데이터를 입력하는데 도움을 주는 목적입니다. 이것은 값의 예가 될수도 있고, 기대하는 형태의 짤막한 설명이 될 수도 있습니다.'
		}],
		txt: '속성 값은 줄바꿈 문자를 제외한 텍스트입니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>