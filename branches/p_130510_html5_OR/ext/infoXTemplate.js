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

var tpl2 = new Ext.XTemplate(
	'<h2 class="s_tit">',
		'{attr} 속성',
		'<tpl if="this.isDisplay(meaning)">',
			': ({meaning})',
		'</tpl>',
	'</h2>',
	'<dl class="definition">',
	'<dt>정의</dt>',
	'<tpl for="item">',
		'<dd>{desc}</dd>',
	'</tpl>',
	'</dl>',
	'<h3 class="s_tit">속성 값</h3>',
	'<tpl if="this.isDisplay(txt)">',
		'<p>{txt}</p>',
	'</tpl>',
	'<tpl if="this.isDisplay(grid)">',
		'<div id="gridAttr"></div>',
	'</tpl>',
	'<tpl if="this.isDisplay(lst)">',
		'<ul class="lst_type">',
		'<tpl for="lst">',
			'<li>{item}</li>',
		'</tpl>',
		'</ul>',
	'</tpl>',
	'<tpl if="this.isDisplay(txt2)">',
		'<p>{txt2}</p>',
	'</tpl>',
	{
		disableFormats: true,
		isDisplay: function(){
			if(arguments[0]) return true;
		}
	}
);