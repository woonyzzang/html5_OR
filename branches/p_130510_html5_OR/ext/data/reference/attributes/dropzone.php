<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>dropzone 속성 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;div dropzone="copy f:image/png f:image/gif f:image/jpeg" ondrop="receive(event, this)"&gt;
				&lt;p&gt;Drop an image here to have it displayed.&lt;/p&gt;
			&lt;/div&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/dnd.html#the-draggable-attribute" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'dropzone',
		item: [{
			desc:'dropzone 속성은 드래그된 데이터를 드롭할 때 복사, 이동, 링크합니다.'
		}],
		txt: '속성값은 공백문자로 구분된 유일한 토큰 목록이며 순서는 상관 없습니다. 대소문자를구분하지 않는 아스키 값을 사용합니다.',
		grid: true,
		txt2: '값을 명시하지 않으면 copy로 간주합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['keyword','content'],
		data: {'items':[
			{keyword:'copy', content:'요소에 아이템을 드롭하는 것은 드래그된 데이터를 복사함을 의미합니다.'},
			{keyword:'move', content:'요소에 아이템을 드롭하는 것은 드래그된 데이터를 이동함을 의미합니다.'},
			{keyword:'link', content:'요소에 아이템을 드롭하는 것은 원래의 데이터로 링크함을 의미합니다.'}
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
			{header:'내용', dataIndex:'content', flex:1}
		]
	})
});
</script>
</body>
</html>