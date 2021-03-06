<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>type 속성 (command) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;command type="radio" checked="checked" label="왼쪽"&gt;
			&lt;command type="radio" label="오른쪽"&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/interactive-elements.html#attr-command-type" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'type',
		meaning: 'command',
		item: [{
			desc:'type 속성으로 행동에 관한 일반적 명령, 옵션과 같은 토글목록, 목록에서 하나의 아이템을 선택하는 명령의 종류를 지정합니다.'
		},{
			desc:'속성은 3개의 키워드 command 상태, checkbox 상태, radio 상태를 각각 나타냅니다. 속성을 생략하였다면 기본 값은 command가 됩니다.'
		}],
		grid: true
	};

	tpl2.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['keyword','desc'],
		data: {'items':[
			{keyword:'command', desc:'연결된 액션을 갖는 일반적인 명령을 나타냅니다.'},
			{keyword:'checkbox', desc:'요소는 토글 가능한 옵션 또는 상태를 나타냅니다.'},
			{keyword:'radio', desc:'목록중 하나의 아이템을 고르는 선택을 나타냅니다.'}
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
			{header:'설명', dataIndex:'desc', flex:1}
		]
	});
});
</script>
</body>
</html>