/*
* available buttons
*/

function cbutton(action, icon, title)
{
	return '<button title="'+title+'" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only" role="button" aria-disabled="false" '
			+ 'onclick="'+action+'"><span class="ui-button-icon-primary ui-icon fa-icon-'+icon+'"></span><span class="ui-button-text">&nbsp;</span></button>';
}

var buttons = [];
	
	buttons['markdown'] = [];
	buttons['markdown']['bold'] 	= cbutton('add2ace(\'_NAME_\',\'**S**\')', 'bold', '[[bold]]');//
	buttons['markdown']['italics'] 	= cbutton('add2ace(\'_NAME_\',\'*S*\')', 'italic', '[[italics]]');
	buttons['markdown']['bullets'] 	= cbutton('add2ace(\'_NAME_\',\'* S\')', 'list-bullet', '[[bullet_list]]');
	buttons['markdown']['numbers'] 	= cbutton('add2ace(\'_NAME_\',\'1. S\')', 'list-numbered', '[[numbered_list]]');
	buttons['markdown']['headline']	= cbutton('add2ace(\'_NAME_\',\'## S\')', 'bold', '[[headline]]');
	buttons['markdown']['hr'] 		= cbutton('add2ace(\'_NAME_\',\'\\n---\\nS\')', 'minus', '[[horizontal_rule]]');
	
	buttons['markdown']['image'] 	= cbutton('getACEFile(\'_NAME_\',\' ![S](###) \',\'[[insert_image_link]]\')', 'picture', '[[insert_image_link]]');
	buttons['markdown']['file'] 	= cbutton('getACEFile(\'_NAME_\',\' [S](###) \',\'[[insert_link_label]]\')', 'doc-text', '[[insert_file_link]]');
	buttons['markdown']['link'] 	= cbutton('addACEExternalLink(\'_NAME_\')', 'link', '[[insert_external_link]]');
	
	
	buttons['markdown']['help'] 	= cbutton('getFrame(\'admin/package_manager/showDoc.php?file=../../wizards/markup/doc/'+lang+'/markdown_reference.md\')', 'help-circled', '[[help_formatting_text]]');
	
	/*
	//'<button title="Bold" onclick="add2ace(\'_NAME_\',\'**S**\')" class="ui-button ui-widget ui-state-default ui-button-icon-only fa-icon-bold"  role="button" aria-disabled="false"></button>';
	buttons['markdown']['italics'] 	= '<button title="Italic" onclick="add2ace(\'_NAME_\',\'*S*\')" class="ui-button ui-widget ui-state-default ui-button-icon-only fa-icon-italic" role="button" aria-disabled="false"></button>';
	buttons['markdown']['bullets'] 	= '<button title="unordered List" onclick="add2ace(\'_NAME_\',\'* S\')" class="ui-button ui-widget ui-state-default ui-button-icon-only fa-icon-list-bullet" role="button" aria-disabled="false"></button>';
	buttons['markdown']['numbers'] 	= '<button title="ordered List" onclick="add2ace(\'_NAME_\',\'1. S\')" class="ui-button ui-widget ui-state-default ui-button-icon-only" style="font-weight:bold" role="button" aria-disabled="false"></a>';
	buttons['markdown']['headline']	= '<a title="Headline" onclick="add2ace(\'_NAME_\',\'\\n## S\\n\')" class="ui-button ui-widget ui-state-default ui-button-text-only" href="#" style="font-weight:bold" role="button" aria-disabled="false"><span class="ui-button-text">[A]</span></a>';
	buttons['markdown']['hr'] 		= '<a title="horizontal Rule" onclick="add2ace(\'_NAME_\',\'\\n---\\nS\')" class="ui-button ui-widget ui-state-default ui-button-icon-only" href="#" role="button" aria-disabled="false" style="display:inline-block"><span class="ui-button-icon-primary ui-icon ui-icon-minusthick"></span><span class="ui-button-text">HR</span></a>';
	
	buttons['markdown']['image'] 	= '<a title="insert Image" onclick="getACEFile(\'_NAME_\',\' ![S](###) \',\'Bildtitel eingeben\')" class="ui-button ui-widget ui-state-default ui-button-icon-only" href="#" role="button" aria-disabled="false" style="display:inline-block"><span class="ui-button-icon-primary ui-icon ui-icon-image"></span><span class="ui-button-text">Insert Image</span></a>';
	buttons['markdown']['file'] 	= '<a title="insert File-Link" onclick="getACEFile(\'_NAME_\',\' [S](###) \',\'Linktext eingeben\')" class="ui-button ui-widget ui-state-default ui-button-icon-only" href="#" role="button" aria-disabled="false" style="display:inline-block"><span class="ui-button-icon-primary ui-icon ui-icon-document"></span><span class="ui-button-text">Insert File-Link</span></a>';
	buttons['markdown']['link'] 	= '<a title="insert external Link" onclick="addACEExternalLink(\'_NAME_\')" class="ui-button ui-widget ui-state-default ui-button-icon-only" href="#" role="button" aria-disabled="false" style="display:inline-block"><span class="ui-button-icon-primary ui-icon ui-icon-link"></span><span class="ui-button-text">Insert external Link</span></a>';
	*/
