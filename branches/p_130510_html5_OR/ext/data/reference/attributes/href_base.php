<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>href 속성 (base) : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @html5_OR.co.kr/debug/index.html를 가르키게 됩니다. -->
			&lt;!DOCTYPE html&gt;
			&lt;html&gt;
			&lt;head&gt;
			&lt;title&gt;HTML5 Open Reference&lt;/title&gt;
			&lt;base href="html5_OR.co.kr/index.html" target="_self"&gt;
			&lt;/head&gt;
			&lt;body&gt;
			&lt;p&gt;오탈자나 내용 오류를 &lt;a href="/debug/index.html"&gt;신고&lt;/a&gt;해주세요.&lt;/p&gt;
			&lt;/body&gt;
			&lt;/html&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/semantics.html#attr-base-href" target="_blank">최신 명세</a></li>
		<li><a href="http://www.w3.org/TR/2011/WD-html5-20110113/urls.html#document-base-url" target="_blank">document base URL</a></li>
		<li><a href="http://www.w3.org/TR/2011/WD-html5-20110113/urls.html#resolve-a-url" target="_blank">resolving relative URLs</a></li>
		<li><a href="http://www.w3.org/TR/2011/WD-html5-20110113/urls.html#valid-url-potentially-surrounded-by-spaces" target="_blank">valid URL potentially surrounded by spaces</a></li>
		<li><a href="http://www.w3.org/TR/2011/WD-html5-20110113/urls.html#url" target="_blank">URL</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'href',
		meaning: 'base',
		item: [{
			desc:'href 속성은 base 요소에서 상대 URL을 해석할 수 있는 베이스 URL을 정의합니다.'
		},{
			desc:'base 요소에 href 속성을 사용 하였다면 속성으로 URL을 갖는 어떤 요소보다도 앞서서 위치해야 합니다. 단, html 요소는 예외(html 요소의 manifest 속성은 base 요소의 영향을 받지 않습니다.'
		}],
		txt: 'href 속성을 사용했다면 값은 반드시 유효한, 앞뒤로 공백을 허용하는 URL을 제공하여야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>