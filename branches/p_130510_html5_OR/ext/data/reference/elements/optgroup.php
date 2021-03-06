<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>optgroup 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;select&gt;
			&lt;optgroup label="에스프레소"&gt;
			&lt;option&gt;카페 아메리카노&lt;/option&gt;
			&lt;option&gt;카페 모카&lt;/option&gt;
			&lt;option&gt;카페 라떼&lt;/option&gt;
			&lt;option&gt;에스프레소&lt;/option&gt;
			&lt;option&gt;에스프레소 마키아또&lt;/option&gt;
			&lt;option&gt;카푸치노&lt;/option&gt;
			&lt;/optgroup&gt;
			&lt;optgroup label="프라푸치노"&gt;
			&lt;option&gt;커피 프라푸치노&lt;/option&gt;
			&lt;option&gt;모카 프라푸치노&lt;/option&gt;
			&lt;option&gt;에스프레소 프라푸치노&lt;/option&gt;
			&lt;option&gt;카라멜 프라푸치노&lt;/option&gt;
			&lt;/optgroup&gt;
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
		elem: 'optgroup',
		meaning: 'group of options',
		item: [{
			desc:'optgroup 요소는 레이블이 같은 select 요소에 포함된 option 요소의 그룹입니다. label 속성의 값으로 이름을 결정하며 사용자 인터페이스에서도 label 속성의 값을 씁니다.'
		}],
		level: 'Block-Level',
		category: 'Form'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'disabled', desc:'그룹 전체 비활성합니다.', href:'http://naver.com'},
			{tit:'label', desc:'그룹의 이름을 정의합니다.', href:'http://naver.com'}
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