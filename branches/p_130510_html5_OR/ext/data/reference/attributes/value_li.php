<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>value 속성 (li) : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @value 속성이 사용되는 경우 -->
			&lt;h4&gt;인기 프로그래밍 언어 - Top 5위부터 1위까지 확인하실 수 있습니다.&lt;/h4&gt;
			&lt;ol&gt;
			&lt;li value="5"&gt;JavaScript&lt;/li&gt;
			&lt;li value="4"&gt;Java&lt;/li&gt;
			&lt;li value="3"&gt;PHP&lt;/li&gt;
			&lt;li value="2"&gt;Python&lt;/li&gt;
			&lt;li value="1"&gt;Ruby&lt;/li&gt;
			&lt;/ol&gt;

			<!-- @ ol 요소의 reversed 속성으로 동일한 결과를 표현하는 경우 -->
			&lt;h4&gt;인기 프로그래밍 언어 - Top 5위부터 1위까지 확인하실 수 있습니다.&lt;/h4&gt;
			&lt;ol reversed="reversed"&gt;
			&lt;li&gt;JavaScript&lt;/li&gt;
			&lt;li&gt;Java&lt;/li&gt;
			&lt;li&gt;PHP&lt;/li&gt;
			&lt;li&gt;Python&lt;/li&gt;
			&lt;li&gt;Ruby&lt;/li&gt;
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
		<li><a href="http://www.w3.org/TR/html5/grouping-content.html#attr-li-value" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'value',
		meaning: 'li',
		item: [{
			desc:'value 속성은 li 요소를 ol 요소의 하위 요소로 사용할 경우에만 사용할 수 있는 속성입니다.'
		}],
		txt: '목록의 순서를 지정할 수 있는 속성이기 때문에 반드시 정수형 값을 사용합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>