<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>max 속성 (input) : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @날짜 콘트롤은 1991년대 이전으로 제한하고 있습니다. -->
			&lt;p&gt;&lt;label&gt;생일: &lt;input type="date" name="bday" max="1990-12-31"&gt;&lt;/label&gt;&lt;/p&gt;

			<!-- @숫자 콘트롤은 0보다 큰 값을 입력하도록 제한하고 있습니다. -->
			&lt;p&gt;&lt;label&gt;구매수량: &lt;input type="number" name="num" min="1" value="1"&gt;&lt;/label&gt;&lt;/p&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/common-input-element-attributes.html#the-min-and-max-attributes" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'max',
		meaning: 'input',
		item: [{
			desc:'max 속성은 요소에서 허용하는 최대 값을 정의합니다.'
		}],
		txt: '속성 값은 유효한 국제적 날짜와 시간 문자열이어야 합니다. max 속성의 최대 값은 min 속성의 최소 값보다 작을 수 없습니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>