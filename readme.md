# cms-kit Wizard Markup-Editor

Path: cms-kit/backend/wizards/markup

## Description

This is a Markup-Editor for several Syntax-Styles.

It is based on [ACE](http://ace.ajax.org), a sophisticated Code-Editor (Line-Numbering, Syntax-highlighting, Code-Folding and even Code-Check for some Languages).

## Installation

### manual Installation

1. download and extract this Folder into backend/wizards/

### Installation via package management

## Usage
* *Input-Type:* Textfield with Wizard (WIZARDTEXT) or Embedded Wizard (WIZARDTEXTEMB)
* *Include-Code:* wizard:markup:icon:label:syntax=[mimetype]
* *Input:* Code
* *Return:* Code
* *Credits:* [ACE](http://ace.ajax.org/) MPL / GPL / LGPL

Example to call a PHP-Editor
syntax:pencil:edit:syntax=php
