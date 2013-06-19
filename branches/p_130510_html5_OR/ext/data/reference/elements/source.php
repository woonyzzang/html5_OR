<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>source 요소 : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 태그 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			&lt;audio controls&gt;
				&lt;source src="@파일명ogg" type="audio/ogg"&gt;
				&lt;source src="@파일명mp3" type="audio/mpeg"&gt;
				모던 브라우저에서는 audio 요소를 지원하지 않습니다.
			&lt;/audio&gt;

			&lt;video&gt;
				&lt;source src="@파일명mp4" type="video/mp4;codecs='avc1.4D401E,mp4a.40.2'"&gt;
			&lt;video&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 속성 설명 -->
	<section>
		<h3 class="s_tit">속성</h3>
		<div id="gridAttr"></div>
	</section>
	<!-- //속성 설명 -->
</article>

<script src="<?php echo PATH ; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		elem: 'source',
		meaning: 'media source',
		item: [{
			desc:'source 요소는 미디어 요소에서 사용할 수 있는 대체 미디어 자원을 정의합니다.'
		}],
		level: 'Inline-Level',
		category: 'Image \& Media'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'src', desc:'미디어 자원 주소를 정의합니다.', href:'http://naver.com'},
			{tit:'type', desc:'사용할 수 있는 타입의 자원인지 확인합니다.', href:'http://naver.com'},
			{tit:'media', desc:'사용할 수 있는 미디어 자원인지 확인합니다.', href:'http://naver.com'}
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
		title: '요소 속성 목록',
		store: storeData,
		columns: [
			{header:'속성명', xtype:'templatecolumn', tpl:'<a href="{href}">{tit}</a>'},
			{header:'설명', dataIndex:'desc', flex:1}
		]
	});
});
</script>
</body>
</html>