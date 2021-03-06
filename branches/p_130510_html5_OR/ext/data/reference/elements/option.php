<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>option 요소 : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 태그 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<section>
		<h2 class="s_tit">option 요소: (option)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>option 요소는 select 요소의 옵션이나 datalist 요소가 나타내는 제시 목록의 부분을 나타냅니다.</dd>
		</dl>

		<h3 class="s_tit">요소 레벨</h3>
		<p>Inline-Level 엘리먼트</p>

		<h3 class="s_tit">요소 카테고리</h3>
		<p>From</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			&lt;label for="baseball_list"&gt;야구단&lt;/label&gt;
			&lt;select id="baseball_list"&gt;
			&lt;option value="lg" label="LG"&gt;LG 트윈스&lt;/option&gt;
			&lt;option value="doosan" label="두산"&gt;두산 베어스&lt;/option&gt;
			&lt;option value="kia" label="KIA" selected&gt;KIA 타이거즈&lt;/option&gt;
			&lt;option value="sk" label="SK"&gt;SK 와이번스&lt;/option&gt;
			&lt;option value="samsung" label="삼성"&gt;삼성 라이온스&lt;/option&gt;
			&lt;option value="hwanhaw" label="한화"&gt;한화 이글스&lt;/option&gt;
			&lt;option value="nexen" label="넥센"&gt;넥센 히어로즈&lt;/option&gt;
			&lt;option value="lotte" label="롯데"&gt;롯데 자이언츠&lt;/option&gt;
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
		elem: 'option',
		meaning: 'option',
		item: [{
			desc:'option 요소는 select 요소의 옵션이나 datalist 요소가 나타내는 제시 목록의 부분을 나타냅니다.'
		}],
		level: 'Block-Level',
		category: 'From'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'disabled', desc:'옵션을 비활성합니다.', href:'http://naver.com'},
			{tit:'selected', desc:'옵션이 선택되었는지를 나타냅니다.', href:'http://naver.com'},
			{tit:'label', desc:'요소의 레이블을 나타냅니다.', href:'http://naver.com'},
			{tit:'value', desc:'요소의 값을 나타냅니다.', href:'http://naver.com'}
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