
// define Themes
/*
var themes = [];
	themes['frog'] = ['vorlage','#000','#fff'];
	themes['sunny'] = ['chrome','#fff','#000'];
	themes['cupertino'] = ['chrome','#fff','#000'];
	themes['lightgray'] = ['chrome','#fff','#000'];
	themes['darkness'] = ['twilight','#000','#fff'];*/
	
var theme = ['chrome','#fff','#000'];//((parent&&parent.store&&parent.store['theme']&&themes[parent.store['theme']]) ? themes[parent.store['theme']] : themes['sunny']);

var fontSize = ((parent&&parent.store&&parent.store['fnts']) ? parent.store['fnts'] : 14);

function helpToggle() {
	var d = 'none', h = document.getElementById('helpdesk');
	if(h.style.display == 'none') {
		d = 'block';
		stats();
	}
	h.setAttribute('style','display:'+d);
}

function stats(){
	var str = editor.getSession().getValue();
	var ch = str.length;// get number of characters
	var ln = str.split("\n").length;// get total number of lines:
	document.getElementById('stats').innerHTML = 'Mode: '+mode+' / Char: '+ch+' / Line: '+(editor.getCursorPosition().row+1)+'/'+ln+' &nbsp;';
}
