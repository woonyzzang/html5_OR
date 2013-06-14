<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>HTML5 Open Reference Guide</title>
<link rel="stylesheet" href="ext/resources/css/ext-all.css">
<link rel="stylesheet" href="ext/resources/css/base.css">
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
<script src="ext/ext-all-debug.js"></script>
<script src="ext/locale/ext-lang-ko.js"></script>
</head>
<script>
Ext.onReady(function(){
	var toolbarConfig = {
		region: 'north',
		height: 27,
		xtype: 'toolbar',
		items: [{
			html: '<strong>HTML5 Open Reference Guide - BETA</strong>',
			handler: function(e){
				e.disable();
			}
		},'->',{
			xtype: 'button',
			text: '메뉴 버튼',
			menu: [{
				text: '나음'
			},{
				text: '좋음'
			},{
				text: '최고'
			}]
		},'-','검색', {
			xtype : 'combo',
			width: 80
		},'-',{
			xtype: 'textfield',
			emptyText: '검색어 입력',
			width: 150
		}]
	};

	var nav = {
		region: 'west',
		title: '요소 메뉴',
		collapsible: true,
		width: 220,
		layout: {
			type: 'hbox',
			align: 'stretch'
		},
		items: [{
			xtype: 'tabpanel',
			flex: 1,
			activeTab: 0,
			items: [{
				xtype: 'treepanel',
				title: 'Elements',
				store: Ext.create('Ext.data.TreeStore', {
					autoLoad: true,
					proxy: {
						type: 'ajax',
						url: 'ext/data/tree/nodes_elem.json',
						reader: {
							type: 'json',
							root: 'children'
						}
					}
				}),
				rootVisible: false,
				viewConfig: {
					plugins: {ptype: 'treeviewdragdrop'}
				},
				listeners : {
					itemclick : function($this, record, item, index, e, eOpts){
						var path = record.data.href;

						function ajaxLoad(con, idx){
							$('#' + con).load(path[1] + ' #' + idx);
						}

						if(path){
							Ext.get('detailDsc-innerCt').update('<iframe width=100% height=100% frameborder=0 src="' + path[0] + '"></iframe>');

							for(var i=0,len=aside.items.length; i<len; i++){
								var obj = aside.items[i],
									idx = obj.id.replace('Area','');

								ajaxLoad(obj.id + '-innerCt', idx);
							}
						}else{
							return false;
						}

						ajaxLoad('support-innerCt', 'browser');

						e.preventDefault();
					}
				}
			},{
				xtype: 'treepanel',
				title: 'Attributes',
				store: Ext.create('Ext.data.TreeStore', {
					autoLoad: true,
					proxy: {
						type: 'ajax',
						url: 'ext/data/tree/nodes_attr.json',
						reader: {
							type: 'json',
							root: 'children'
						}
					}
				}),
				rootVisible: false,
				listeners : {
					itemclick : function($this, record, item, index, e, eOpts){
						var path = record.data.href;

						if(path){
							Ext.get('detailDsc-innerCt').update('<iframe width=100% height=100% frameborder=0 src="' + path[0] + '"></iframe>');
						}else{
							return false;
						}

						e.preventDefault();
					}
				}
			},{
				title: 'Events',
				html: '내용3',
				border: false
			}],
			listeners: {
				tabchange: function(tabPanel, newCard, oldCard, eOpts){
					var textVal = '';

					function toggleEft(options){
						var $this = options,
							$selecter = $this.selecter,
							visible = $this.visible,
							len = $selecter.length,
							i = 0;

						while(i < len){
							if(visible == 'show'){
								Ext.getCmp($selecter[i]).show();
							}else{
								Ext.getCmp($selecter[i]).hide();
							}

							i++;
						}
					}

					switch(newCard.title){
						case 'Elements':
							textVal = '요소';

							toggleEft({selecter:['side','support'], visible:'show'});
							break;
						case 'Attributes':
							textVal = '속성';

							toggleEft({selecter:['side','support'], visible:'hide'});
							break;
						case 'Events':
							textVal = '이벤트';

							toggleEft({selecter:['side','support'], visible:'hide'});
							break;
						default:break;
					}

					Ext.DomQuery.selectNode('#detailDsc_header_hd-textEl').innerHTML = textVal + ' 설명';
				}
			}
		}]
	};

	var container = {
		region: 'center',
		title: '설명',
		id : 'detailDsc',
		html: '<h3>HTML5 오픈 레퍼런스 가이드 준비중...</h3>'
	};

	var aside = {
		region: 'east',
		title: '상세 설명',
		id: 'side',
		collapsible: true,
		hidden: true,
		width: 300,
		layout: {
			type: 'accordion',
			titleCollapse: false,
			animate: true,
			activeOnTop: true
		},
		items: [{
			title: '1. 스펙 명세',
			id: 'referArea',
			html: '테스트1',
			autoHeight: true,
			autoScroll: true
		},{
			title: '2. 콘텐츠 분류 타입 &frasl; 마크업 규칙',
			id: 'flowArea',
			html: '테스트2',
			autoHeight: true,
			autoScroll: true
		},{
			title: '3. 참조',
			id: 'memoArea',
			html: '테스트3',
			autoHeight: true,
			autoScroll: true
		},{
			title: '4. 관련 요소 레벨',
			id: 'relatedArea',
			html: '테스트4',
			autoHeight: true,
			autoScroll: true
		}]
	};

	var foot = {
		region: 'south',
		hidden: false,
		title: '브라우저 지원',
		id: 'support',
		collapsible: true,
		collapsed: true,
		hidden: true,
		html: 'Support Browser',
		height: 80,
		minHeight: 80
	};

	var viewport = Ext.create('Ext.Viewport', {
		layout: {
            type: 'border',
            padding: 3
        },
		defaults: {
            split: true
        },
		items: [toolbarConfig, nav, container, aside, foot]
	});
});
</script>
</body>
</html>