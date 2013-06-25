<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>wrap 속성 (textarea) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;textarea wrap="hard"&gt;
				웹의 힘은 그것의 보편성에 있다. 장애에 구애없이 모든 사람이 접근할 수 있는 것이 필수적인 요소이다.
				(The power of the Web is in its universality, Access by everyone regardless of disability is an essential aspect.)
				팀 버너스 리 경 - 웹의 창시자 (Tim Berners - Lee , W3C Director and inventor of the World Wide Web)
			&lt;/textarea&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-button-element.html#attr-textarea-wrap" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'wrap',
		meaning: 'textarea',
		item: [{
			desc:'wrap 속성은 텍스트의 줄바꿈 여부를 결정합니다.'
		}],
		txt: '나열 속성입니다. 값을 명시하지 않는 경우 soft 상태가 기본입니다.',
		grid: true
	};

	tpl2.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['keyword','status','content'],
		data: {'items':[
			{keyword:'soft', status:'soft', content:'요소 내부의 텍스트가 폼 제출될 때 줄바꿈되지 않습니다.'},
			{keyword:'hard', status:'hard', content:'요소 내부의 텍스트가 폼 제출될 때 줄바꿈됩니다.(\\n값포함)'}
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
			{header:'키워드', dataIndex:'keyword'},
			{header:'상태', dataIndex:'status'},
			{header:'내용', dataIndex:'content', flex:1}
		]
	});
});
</script>
</body>
</html>