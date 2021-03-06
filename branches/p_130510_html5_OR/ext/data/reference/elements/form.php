<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>form 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;form action="#" target="_self" method="get"&gt;
				First name: &lt;input type="text" name="fname"&gt;
				Last name: &lt;input type="text" name="lname"&gt;
				&lt;input type="submit" value="Submit"&gt;
			&lt;/form&gt;
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
		elem: 'form',
		meaning: 'user-submittable form',
		item: [{
			desc:'form 요소는 폼과 관련된 요소의 집합을 나타냅니다. 그중 일부는 서버에 전송하여 처리할 변경 가능 한 값을 나타냅니다.'
		}],
		level: 'Block-Level',
		category: 'Form'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'accept-charset', desc:'폼을 전송할 때 사용할 문자 인코딩 방법입니다. utf-8, euc-kr… 등을 값을 가집니다.', href:'http://naver.com'},
			{tit:'name', desc:'폼 제출 시에 사용되는 폼 컨트롤의 이름을 나타냅니다.', href:'http://naver.com'},
			{tit:'autocomplete', desc:'폼 내부 요소의 자동완성 기능을 명시합니다.', href:'http://naver.com'},
			{tit:'action', desc:'폼을 전송할 URL을 입력합니다.', href:'http://naver.com'},
			{tit:'enctype', desc:'폼을 전송할 때 사용할 인코딩 방법을 정의합니다.', href:'http://naver.com'},
			{tit:'method', desc:'폼을 전송할 방식을 지정합니다.', href:'http://naver.com'},
			{tit:'novalidate', desc:'폼을 전송하기 전에 유효성검사를 할 것인지 명시합니다.', href:'http://naver.com'},
			{tit:'target', desc:'action 속성의 URL을 열 위치를 지정합니다.', href:'http://naver.com'}
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