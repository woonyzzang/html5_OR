<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>name 속성 (map) : <?php echo TITLE_REFERENCE; ?></title>
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
		<li><a href="http://www.w3.org/TR/html5/the-map-element.html#attr-map-name" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'name',
		meaning: 'map',
		item: [{
			desc:'name 속성은 map 요소에서 맵을 참조할 수 있는 이름을 정의하며, 반드시 사용되야 합니다.'
		}],
		txt: '공백문자를 포함할 수 없고, 비어있지 않아야 합니다. 동일한 페이지 내에서 다른 map 요소와 같은 name 값을 가질 수 없습니다. map 요소에 id 속성이 있다면 name 속성과 같은 값이어야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>