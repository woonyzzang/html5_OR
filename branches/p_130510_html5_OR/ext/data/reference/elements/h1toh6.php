<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>h1,h2,h3,h4,h5,h6 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;h1&gt;머릿글1&lt;/h1&gt;
			&lt;h2&gt;머릿글2&lt;/h2&gt;
			&lt;h3&gt;머릿글3&lt;/h3&gt;
			&lt;h4&gt;머릿글4&lt;/h4&gt;
			&lt;h5&gt;머릿글5&lt;/h5&gt;
			&lt;h6&gt;머릿글6&lt;/h6&gt;
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
		elem: 'h1, h2, h3, h4, h5, h6',
		meaning: 'header 1 to header 6',
		item: [{
			desc:'h1, h2, h3, h4, h5, h6 요소는 섹션의 제목을 나타냅니다.'
		},{
			desc:'이름에 있는 숫자가 제목의 등급입니다. h1 요소가 가장 높은 등급이고, h6 요소는 가장 낮은 등급입니다. 이름이 같으면 등급도 같습니다. 섹션 컨텐츠 요소의 첫 번째 제목 컨텐츠가 해당 섹션의 제목을 나타냅니다. 그 후에 나타나는 같거나 더 높은 등급의 제목은 새로운 섹션의 시작을 의미하며 더 낮은 등급의 제목은 이전 섹션의 하위 섹션이 시작됨을 암시합니다. 둘 모두, 해당 요소는 자신이 암시하고 있는 섹션의 제목을 나타냅니다.'
		}],
		level: 'Block-Level',
		category: 'Structural Elements'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'}
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