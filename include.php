<?php
$LL = array();
@include_once 'locales/'.$_GET['lang'].'.php';
?>

// see http://ace.ajax.org
// load ace.js
var head = document.getElementsByTagName('head')[0]; 
var s = document.createElement('script'); 
s.src = '../vendor/cmskit/ace-editor/src-min/ace.js';
head.appendChild(s);

// global Editor-Object
if(!window.ACEs) ACEs = [];

function init_Ace(el)
{
	if (!window.ace)
	{
		window.setTimeout(function(){init_Ace(el)}, 500);
	}
	else // prepare the editor
	{
		var n = el.attr('id');
		
		ACEs[n] = ace.edit('ace__'+n);
		
		ACEs[n].setTheme("ace/theme/chrome");
		ACEs[n].getSession().setUseWorker(false);
		ACEs[n].getSession().setMode( 'ace/mode/'+ el.data('mode') );
		
		ACEs[n].getSession().setTabSize(4);// Tab size:
		ACEs[n].getSession().setUseWrapMode(true);// Text-Wrapping
		
		
		//ACEs[n].getSession().setUseSoftTabs(true);// Use soft tabs:
		
		ACEs[n].on('change', function(e) {
			el.val(ACEs[n].getSession().getValue());
			hasCanged = true;
		});
	}
}

// open filemanager and return 
function getACEFile(n, code, alt)
{
	// store what to do with the path
	currentACE_Editor_Params = [n, code, alt];
	// open filemanager
	//getWizard(false, 'filemanager', 'callback=addACEFilePath');
	getWizard(false, 'simple_filemanager', 'callback=addACEFilePath');
}

// get/parse/place filepath from filemanager
function addACEFilePath(p)
{
	var c = currentACE_Editor_Params[1].replace(/###/, p);
	var t = prompt(currentACE_Editor_Params[2], '');
	add2ace(currentACE_Editor_Params[0], c, t);
	var c = currentACE_Editor_Params[1].replace(/###/, p);
}

function addACEExternalLink(n)
{
	var l = prompt('Link eingeben', 'http://');
	var t = prompt('Link-Label eingeben', '');
	add2ace(n, '['+t+']('+l+')')
}

/** insert code snippet at cursor-position
 * 
 * @param n textarea-name
 * @param code snippet with Placeholder "S" (possible selected text)
 * @param alt alternative Text if nothing was selected
 */
function add2ace(n, code, alt)
{
	var range = ACEs[n].getSelection().getRange();
	var str = ACEs[n].getSession().getDocument().getTextRange(range);
	if(str.length==0) str = alt||'';
	ACEs[n].getSession().getDocument().replace(range, code.replace(/S/, str));
	
	ACEs[n].focus();
}

// main Function to call
(function( $ )
{
	$.fn.markup = function()
	{
		var n = this.attr('id');
		
		var id = 'ace__'+n;
		
		// Buttons
		<?php
		function replace_buttonlabels($s)
		{
			global $LL;
			return (isset($LL[$s[1]]) ? $LL[$s[1]] : str_replace('_',' ',$s[1]));
		}
		$buttons = file_get_contents('buttons.js');
		// translations
		$buttons = preg_replace_callback('/\[\[([a-z0-9_]+)\]\]/i', "replace_buttonlabels", $buttons);
		
		
		echo $buttons;
		?>
		
		// check for toolbar
		var bar = '';
		if (this.data('bar'))
		{
			bar += '<div class="ui-widget-header ui-corner-all" style="height:2.3em;padding:3px;clear:both">';
			var a = this.data('bar').split(',');
			var m = this.data('mode'); 
			for (var i=0,j=a.length; i<j; ++i)
			{
				if (buttons[m][a[i]]) {
					bar += buttons[m][a[i]].replace(/_NAME_/, n);
				}
			}
			bar += '</div>';
		}
		
		//
		var pre = $( bar + '<pre style="font-size:14px;position:relative !important;clear:both;width:100%;height:300px;" id="'+id+'">'+this.val().replace(/</g, '&lt;').replace(/>/g, '&gt;')+'</pre>');
		this.css({'position':'absolute','left':'-3000px'}).after(pre);//
		
		// run the init (check for loaded js)
		init_Ace(this);
	};
})( jQuery );
