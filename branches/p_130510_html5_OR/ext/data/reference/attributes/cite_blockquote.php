<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>cite 속성 (blockquote) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;blockquote cite="http://www.w3.org/community/webed/wiki/HTML/Training/What_is_HTML"&gt;
				&lt;p&gt;HTML stands for HyperText Markup Language. It is used to create Web pages. That is, Web pages all over the world consist of HTML.&lt;/p&gt;
			&lt;/blockquote&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/grouping-content.html#attr-blockquote-cite" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'cite',
		meaning: 'blockquote',
		item: [{
			desc:'blockquote 요소 사용 시 다른 소스의 주소를 알 수 있으면 cite 속성을 사용하여 주소를 명기할 수 있습니다.'
		}],
		txt: '유효한, 앞뒤로 공백을 허용하는 URL이어야 합니다.',
		txt1: '상대적으로 해석하고 링크를 따라갈 수 있어야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>