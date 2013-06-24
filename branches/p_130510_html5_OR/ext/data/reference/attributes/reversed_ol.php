<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>reversed 속성 (ol) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;h4&gt;금주의 인기가요 - Top 5위부터 1위까지 확인하실 수 있습니다.&lt;/h4&gt;
			&lt;ol reversed&gt;
			&lt;li&gt;좋은날 - 아이유&lt;/li&gt;
			&lt;li&gt;바람이 분다 - 이소라&lt;/li&gt;
			&lt;li&gt;꿈에 - 박정현&lt;/li&gt;
			&lt;li&gt;왜 - 동방신기&lt;/li&gt;
			&lt;li&gt;아잉 - 오렌지캬라멜&lt;/li&gt;
			&lt;/ol&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>현재까지 reversed 속성을 지원하는 브라우저가 없습니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/grouping-content.html#attr-ol-reversed" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'required',
		meaning: 'ol',
		item: [{
			desc:'reversed 속성을 사용하면 리스트의 순서가 역순(…, 3, 2, 1)이 됩니다. 숫자를 역순으로 표현하는 것이지 리스트의 순서를 뒤부터 표현하는 것은 아닙니다. 속성을 사용하지 않으면 정순(1, 2, 3, …)으로 표시합니다.'
		}],
		txt: '불리언 속성입니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>