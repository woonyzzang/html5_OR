<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>dfn 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @dfn 요소에 title 속성이 없으면 textContent인 'HTML'이 정의되는 개념(단어)이 됩니다. -->
			&lt;p&gt;&lt;dfn&gt;HTML&lt;/dfn&gt;는 웹 페이지를 위한 마크업 언어입니다.&lt;/p&gt;

			<!-- @텍스트 노드가 없으며 자식 요소로 title 속성이 있는 abbr 요소를 사용 하면 abbr 요소의 title 속성값인 'HyperText Markup Language'이 정의되는 개념(단어)입니다. -->
			&lt;p&gt;&lt;dfn&gt;&lt;abbr title="HyperText Markup Language"&gt;HTML&lt;/abbr&gt;&lt;/dfn&gt;은 웹 페이지를 위한 마크업 언어입니다.&lt;/p&gt;

			<!-- @dfn 요소에 title 속성이 있으면 title 속성 값인 'HyperText Markup Language'이 정의되는 개념(단어)입니다. -->
			&lt;p&gt;&lt;dfn title="HyperText Markup Language"&gt;HTML&lt;/dfn&gt;은 웹 페이지를 위한 마크업 언어입니다.&lt;/p&gt;
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
		elem: 'dfn',
		meaning: 'defining instance',
		item: [{
			desc:'dfn 요소는 문서내에서 개념(단어)의 대한 용어 정의를 나타내는 요소입니다. dfn 요소의 가장 가까운 조상 요소(문단, 정의 목록 그룹, 섹션)는 dfn 요소를 사용한 개념(단어)에 대한 설명을 포함해야 됩니다.'
		},{
			desc:'\'정의되는 개념(단어)\'은 마크업에 따라 결정됩니다. (title 속성이 없고 자식 노드로 텍스트 노드가 없으며 자식 요소로 abbr 요소를 사용할 경우 : abbr 요소의 title 속성의 값)'
		}],
		level: 'Inline-Level',
		category: 'Text formatting'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'title', desc:'dfn 태그로 마크업된 요소의 개념을 정의합니다.', href:'http://naver.com'}
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