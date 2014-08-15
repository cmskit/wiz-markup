<?php
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Editor</title>
	
	<link href="inc/styles.css" rel="stylesheet" />
	<script src="inc/scripts.js" type="text/javascript" charset="utf-8"></script>
	
	<script src="../../../vendor/cmskit/lib-ace-editor/src-min/ace.js" type="text/javascript" charset="utf-8"></script>
	
	<style>
		body, #helpdesk{ font-size:12px;background-color:#fff;color:#000;border:1px solid #000;}
	</style>
</head>
<body>
	

<?php
echo '<img src="inc/img/save.png" id="bsave" onclick="save()" title="save" /> ';

echo '<img src="inc/img/help.png" id="bhelp" onclick="helpToggle()" title="help" /> ';

?>


<pre id="editor"></pre>

<div id="helpdesk" style="display:none">
	<div>
		<img style="float:right" src="inc/img/close.png" onclick="helpToggle()" />
		<span style="font-size:10px" id="stats"></span>
	</div>
	<?php echo file_get_contents('inc/help.html');?>
</div>

<script>
	
	var editor;
	var mode = parent.$('#'+parent.targetFieldId).data('mode');
	
	window.onload = function() {
		
		// see: https://github.com/ajaxorg/ace/wiki/Embedding---API
		
		
		editor = ace.edit('editor');
		editor.setTheme("ace/theme/chrome");
		
		editor.getSession().setMode("ace/mode/<?php echo $mode;?>");
		
		editor.getSession().setValue( parent.$('#'+parent.targetFieldId).val() );// set content
		
		document.getElementById('editor').style.fontSize = '14px';// Font size
		editor.getSession().setTabSize(4);// Tab size:
		editor.getSession().setUseSoftTabs(true);// Use soft tabs:
		
		// shortcut-saving
		var commands = editor.commands;
		commands.addCommand({
			name: "save",
			bindKey: {win: "Ctrl-S", mac: "Command-S"},
			exec: function() {save()}
		});
		
		//editor.getSession().setUseWrapMode(true);// Toggle Word Wrap
		//editor.setReadOnly(true);// Set to read-only: false for the editable
		//editor.setShowPrintMargin(true);// Set Print Margin Visibility
		
	};
	
	
	store = function() {
		var content = editor.getSession().getValue();
		parent.$('#'+parent.targetFieldId).val(content);
	};
	
	save = function() {
		store();
		parent.saveContent("<?php echo $_GET['objectId'];?>");
		parent.$('#dialog2').dialog('close');
	};

</script>

</body>
</html>
