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
		'<tpl if="this.isDisplay(child)">',
			'<dd>',
				'<ul>',
				'<tpl for="child">',
					'<li>{item}</li>',
				'</tpl>',
				'</ul>',
			'</dd>',
		'</tpl>',
	'</tpl>',
	'</dl>',
	'<h3 class="s_tit">속성 값</h3>',
	'<tpl if="this.isDisplay(txt)">', //속성 값(상단)
		'<p>{txt}</p>',
	'</tpl>',
	'<tpl if="this.isDisplay(txt1)">', //속성 값(중단)
		'<p>{txt1}</p>',
	'</tpl>',
	'<tpl if="this.isDisplay(grid)">', //데이터 테이블
		'<div id="gridAttr"></div>',
	'</tpl>',
	'<tpl if="this.isDisplay(lst)">', //리스트
		'<ul class="lst_type">',
		'<tpl for="lst">',
			'<li>{item}</li>',
		'</tpl>',
		'</ul>',
	'</tpl>',
	'<tpl if="this.isDisplay(ctgr)">', //카테고리
		'<dl class="category">',
		'<tpl for="ctgr">',
			'<dt>{tit}</dt>',
			'<dd>',
				'<ul>',
				'<tpl for="lst2">',
				'<li>{item}</li>',
				'</tpl>',
				'</ul>',
			'</dd>',
		'</tpl>',
		'</dl>',
	'</tpl>',
	'<tpl if="this.isDisplay(txt2)">', //속성 값(하단)
		'<p>{txt2}</p>',
	'</tpl>',
	{
		disableFormats: true,
		isDisplay: function(){
			if(arguments[0]) return true;
		}
	}
);

var tpl3 = new Ext.XTemplate(
	'<h2 class="s_tit">{attr} 속성</h2>',
	'<tpl for="item">',
	'<dl class="definition">',
	'<dt>{tit}</dt>',
	'<dd>',
		'<ul>',
		'<tpl for="child">',
			'<li><a href="{url}">{item}</a></li>',
		'</tpl>',
		'</ul>',
	'</dd>',
	'</dl>',
	'</tpl>',
	'<p><strong>{txt}</strong></p>'
);