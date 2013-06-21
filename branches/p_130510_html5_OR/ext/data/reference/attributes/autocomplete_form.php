<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>autocomplete 속성 (form) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;form action="demo_form.asp" method="get" autocomplete="on"&gt;
			First name: &lt;input type="text" name="fname"&gt;&lt;br&gt;
			Last name: &lt;input type="text" name="lname"&gt;&lt;br&gt;
			E-mail: &lt;input type="email" name="email" autocomplete="off"&gt;&lt;br&gt;
			&lt;input type="submit"&gt;
			&lt;/form&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/forms.html#attr-form-autocomplete" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'autocomplete',
		meaning: 'form',
		item: [{
			desc:'autocomplete 속성은 폼 내부 요소의 자동완성 기능을 설정하는 속성입니다.'
		}],
		txt: '두가지 상태값을 가집니다. 속성값 on은 자동완성 기능의 활성화 상태를 나타내며, 속성값 off는 자동완성 기능의 비활성화 상태를 나타냅니다.',
		grid: true
	};

	tpl2.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['keyword','desc'],
		data: {'items':[
			{keyword:'on', desc:'폼 내부 요소 자동완성 기능을 활성화시킵니다. (기본값)'},
			{keyword:'off', desc:'폼 내부 요소 자동완성 기능을 비활성화시킵니다.'}
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