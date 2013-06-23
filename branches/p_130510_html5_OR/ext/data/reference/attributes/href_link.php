<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>href 속성 (link) : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 속성 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<!-- //속성 설명 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/semantics.html#attr-link-href" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'href',
		meaning: 'link',
		item: [{
			desc:'href 속성은 다른 자원과 연결되는 링크의 목적지를 나타냅니다. 이 속성은 반드시 존재해야 됩니다.'
		},{
			desc:'이 속성이 없다면 link 요소는 링크를 정의 하지 않습니다.'
		}],
		txt: '유효한, 앞뒤로 공백을 허용하고 비어 있지 않은 URL을 사용해야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>