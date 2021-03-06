<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>preload 속성 : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @페이지가 로드되면 미디어를 다운로드 받기 시작하지만 재생은 되지 않습니다.
				#[브라우저 테스트]
				Safari	: seekbar를 통해서 preload 상황을 볼 수 있다. 하지만 다른 브라우저들은 preload 속성에 대한 반응을 확인하기 어렵다.
				Chrome	: 속성과 관계없이 버퍼링이 되고 있는 것으로 보이나 시각적으로는 반응을 나타내지 않는다.
				Firefox	: 속성과 관계없이 재생 준비 단계에서는 약간만 다운로드되고, 버퍼링하지 않는다.
				Opera	: Chrome과 동일하다. -->
			&lt;video src="opening.ogv" preload&gt;&lt;/video&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/video.html#attr-media-preload" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'preload',
		item: [{
			desc:'preload 속성은 페이지 저자가 미디어 자원을 전체를 다운로드할 것인지, 메타 정보만 다운로드 할 것인지 아니면 기능을 사용하지 않을 것인지를 결정합니다.'
		}],
		txt: '나열 속성으로 다음과 같은 키워드를 갖습니다.',
		grid: true,
		lst: [
			{item:'빈 문자열도 가능하며, 이 경우 Automatic 상태가 됩니다.'},
			{item:'속성 자체를 생략한 경우 명세는 Metadata 상태를 권장합니다. 단, 브라우저마다 다른 기본값을 가질 수 있습니다.'}
		]
	};

	tpl2.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['keyword','status','desc'],
		data: {'items':[
			{keyword:'none', status:'None', desc:'사용자가 미디어 자원의 필요성을 미리 예상하지 못한 경우로 다운로드 하지 않습니다.'},
			{keyword:'metadata', status:'Metadata', desc:'사용자가 미디어 자원의 필요성을 미리 예상하지 못했지만, 미디어의 크기, 첫 프레임, 트랙 리스트, 길이 등과 같은 메타 정보를 다운로드합니다.'},
			{keyword:'auto', status:'Automatic', desc:'서버에 위험을 초래하지 않으면서 미디어를 다운로드 합니다. 기본값입니다.'}
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
			{header:'설명', dataIndex:'desc', flex:1}
		]
	});
});
</script>
</body>
</html>