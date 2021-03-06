<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>a 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @문서간 이동 -->
			&lt;a href="example.co.kr"&gt;
				&lt;span&gt;제목&lt;/span&gt;
				&lt;strong&gt;구문 컨텐츠&lt;/strong&gt;
			&lt;/a&gt;

			<!-- @문서내 이동 -->
			&lt;h3&gt;&lt;a name="header"&gt;header 영역&lt;/a&gt;&lt;/h3&gt; or &lt;h3 id="header"&gt;header 영역 &lt;/h3&gt;
			&lt;a href="#header"&gt;header 영역&lt;/a&gt;으로 이동한다.

			<!-- @문서간 특정위치로 이동 -->
			&lt;h3&gt;&lt;a name="header"&gt;header 영역&lt;/a&gt;&lt;/h3&gt;
			&lt;a href="manual.html#header"&gt;manual.html문서의 header영역&lt;/a&gt;으로 이동한다.

			<!-- @mail주소 지정 -->
			&lt;a href="#bookmark"&gt;책갈피&lt;/a&gt;
			&lt;a href="mailto:example.com"&gt;mail@example.com&lt;/a&gt;
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
		elem: 'a',
		meaning: 'anchor',
		item: [{
			desc:'a 요소는 현재 웹페이지에서 다른 웹페이지로 이동하거나 현재 웹페이지 내의 특정 위치 이동시에 문서들을 연결합니다.'
		}],
		level: 'Inline-Level',
		category: 'HTML Basic'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'../attributes/global.php'},
			{tit:'href', desc:'이동할 URL을 지정합니다.', href:'naver.com'},
			{tit:'target', desc:'이동시 사용되는 콘텍스트 이름이나 키워드를 지정합니다.', href:'naver.com'},
			{tit:'rel', desc:'링크 대상과의 관계를 지정합니다.', href:'naver.com'},
			{tit:'media', desc:'링크 대상을 출력하는 매체를 지정합니다.', href:'naver.com'},
			{tit:'hreflang', desc:'링크 대상의 언어 코드를 지정합니다.', href:'naver.com'},
			{tit:'type', desc:'링크 대상의 MIME 타입을 지정합니다.', href:'naver.com'}
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
			{header:'속성명', xtype: 'templatecolumn', tpl: '<a href="{href}">{tit}</a>'},
			{header:'설명', dataIndex:'desc', flex:1}
		],
		listeners : {
			itemclick : function($this, record, item, index, e, eOpts){
				//console.log(nav);
				//e.preventDefault();
			}
		}
	});
});
</script>
</body>
</html>