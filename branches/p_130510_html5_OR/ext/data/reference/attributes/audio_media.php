<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>audio 속성 (media) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;video src="opening.ogv" autoplay audio="muted"&gt;&lt;/video&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>현재 Explorer 9.0, Firefox 4.0, Safari 5.0.5, Opera 11.10에서 작동하지 않습니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/video.html#attr-media-audio" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData2 = {
		attr: 'audio',
		meaning: 'media',
		item: [{
			desc:'audio 속성은 미디어 자원의 오디오 채널 기본 상태를 제어합니다.'
		}],
		txt: '공백문자로 구분되고, 순서 없이 유일한 토큰(token) 목록이어야 합니다. (현재는 한 가지 토근만 정의 되어 있습니다.)',
		grid: true
	};

	tpl2.overwrite(Ext.get('info'), tplData2);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['token','desc'],
		data: {'items':[
			{token:'muted', desc:'사용자 선호가 있더라도 덮어쓰며, 항상 비디오의 기본값을 음소거 상태로 만듭니다.'}
		]},
		proxy : {
			type: 'memory',
			reader: {
				type: 'json',
				root: 'items'
			}
		}
	});

	var grid = Ext.create('Ext.grid.Panel', {
		renderTo: Ext.get('gridAttr'),
		title: '속성 정의 목록',
		store: storeData,
		columns: [
			{header:'토큰', dataIndex:'token'},
			{header:'설명', dataIndex:'desc', flex:1}
		]
	});
});
</script>
</body>
</html>