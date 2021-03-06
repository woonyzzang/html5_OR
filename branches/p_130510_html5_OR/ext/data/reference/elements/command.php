<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>command 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;menu type="toolbar"&gt;
				&lt;command type="radio" radiogroup="alignment" checked="checked" label="왼쪽정렬" icon="icons/alL.png" onclick="setAlign('left')"&gt;
				&lt;command type="radio" radiogroup="alignment" label="가운데정렬" icon="icons/alC.png" onclick="setAlign('center')"&gt;
				&lt;command type="radio" radiogroup="alignment" label="오른쪽정렬" icon="icons/alR.png" onclick="setAlign('right')"&gt;
				&lt;command type="command" disabled="disabled" label="발행" icon="icons/pub.png" onclick="publish()"&gt;
			&lt;/menu&gt;
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

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		elem: 'command',
		meaning: 'command',
		item: [{
			desc:'command 요소는 사용자가 실행할 수 있는 명령(라디오 버튼, 체크 박스, 또는 명령 단추)을 나타냅니다.'
		}],
		level: 'Inline-Level',
		category: 'Structural Elements'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'type', desc:'명령의 종류를 정의합니다. radio, checkbox, command를 지정할 수 있습니다. 기본값은 command입니다.', href:'http://naver.com'},
			{tit:'label', desc:'command의 이름을 지정합니다. 값으로 빈 문자열을 쓸 수 없습니다.', href:'http://naver.com'},
			{tit:'title', desc:'사용자에게 도움이 될 만한 설명이나 힌트를 제공합니다.', href:'http://naver.com'},
			{tit:'icon', desc:'command 요소에 보일 아이콘을 지정합니다. 유효한 URL 값이여야 합니다.', href:'http://naver.com'},
			{tit:'disabled', desc:'이 속성이 선언되면 사용 불가능함을 나타냅니다.', href:'http://naver.com'},
			{tit:'checked', desc:'type 속성이 checkbox나 radio일 때 checked 속성을 선언하면 선택된 상태로 나타납니다.', href:'http://naver.com'},
			{tit:'radiogroup', desc:'type 속성이 radio 일 때 토글된 커맨드의 이름을 지정할 수있는 속성입니다.', href:'http://naver.com'}
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