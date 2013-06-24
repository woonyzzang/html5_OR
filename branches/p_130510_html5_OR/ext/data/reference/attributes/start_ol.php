<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>start 속성 (ol) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;p&gt;계속해서 한국인이 가장 좋아하는 음식 5위부터 보시겠습니다.&lt;/p&gt;
			&lt;ol start="5"&gt;
			&lt;li&gt;치킨&lt;/li&gt;
			&lt;li&gt;삼겹살&lt;/li&gt;
			&lt;li&gt;김치찜&lt;/li&gt;
			&lt;li&gt;부침개&lt;/li&gt;
			&lt;/ol&gt;

			<!-- @type 속성과 같이 사용 할 경우 -->
			&lt;p&gt;계속해서 한국인이 가장 좋아하는 음식 5위부터 보시겠습니다.&lt;/p&gt;
			&lt;ol start="5" type="i"&gt;
			&lt;li&gt;치킨&lt;/li&gt;
			&lt;li&gt;삼겹살&lt;/li&gt;
			&lt;li&gt;김치찜&lt;/li&gt;
			&lt;li&gt;부침개&lt;/li&gt;
			&lt;/ol&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/grouping-content.html#attr-ol-start" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'start',
		meaning: 'ol',
		item: [{
			desc:'start 속성은 목록이 시작하는 숫자를 지정할 수 있습니다.'
		}],
		txt: '유효한 정수여야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>