<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>select 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;select title="좋아하는 색상 선택"&gt;
			&lt;option value="red"&gt;빨간색&lt;/option&gt;
			&lt;option value="green"&gt;녹색&lt;/option&gt;
			&lt;option value="blue"&gt;파란색&lt;/option&gt;
			&lt;/select&gt;
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
		elem: 'select',
		meaning: 'option-selection form control',
		item: [{
			desc:'select 요소는 폼에서 사용자가 선택할 수 있는 옵션의 목록을 나타냅니다.'
		}],
		level: 'Inline-Level',
		category: 'From'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'autofocus', desc:'페이지가 로드될 때 요소가 자동으로 포커스를 받습니다.', href:'http://naver.com'},
			{tit:'disabled', desc:'화면에 표시되지만 조작할 수는 없게 합니다.', href:'http://naver.com'},
			{tit:'form', desc:'폼 소유자를 명시적으로 지정합니다.', href:'http://naver.com'},
			{tit:'multiple', desc:'option 요소를 여러 개 선택할 수 있습니다.', href:'http://naver.com'},
			{tit:'name', desc:'폼 제출 시에 사용되는 폼 컨트롤의 이름을 나타냅니다.', href:'http://naver.com'},
			{tit:'required', desc:'꼭 필요한 요소임을 나타냅니다. 요소에 값을 지정하지 않으면 폼을 제출할 수 없습니다.', href:'http://naver.com'},
			{tit:'size', desc:'기본적으로 화면에 몇 개의 option을 표시할지 정합니다. 기본값은 1이며, multiple 속성이 있으면 4가 기본값입니다.', href:'http://naver.com'}
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