var tpl = new Ext.XTemplate(
	'<h2 class="s_tit">{elem} 요소: ({meaning})</h2>',
	'<dl class="definition">',
	'<dt>정의</dt>',
	'<tpl for="item">',
		'<dd>{desc}</dd>',
	'</tpl>',
	'</dl>',
	'<h3 class="s_tit">요소 레벨</h3>',
	'<p>{level} 엘리먼트</p>',
	'<h3 class="s_tit">요소 카테고리</h3>',
	'<p>{category}</p>'
);