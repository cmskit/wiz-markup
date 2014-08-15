<?php
$config = <<<EOD
{
	"info":  {
		"name": "Markup Editor",
		"description": {
			"en": "general Markup Editor",
			"de": "genereller Markup Editor"
		},
		"io":  [
			"string",
			"string"
		],
		"authors":  ["Christoph Taubmann"],
		"homepage": "http://cms-kit.org",
		"mail": "info@cms-kit.org",
		"copyright": "GPL",
		"credits":  [
			"[]() MIT / GPL licenses"
		]
	},
	"system":  {
		"version": 0.1,
		"inputs":  [
			"TEXT"
		],
		"include":  ["wizard:markup\\nmode:markdown\\nbar:bold,italics,bullet,numbers,headlines,hr,image"],
		"translations":  [
			"en"
		]
	}
}
EOD;
?>
