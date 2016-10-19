/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	
	// %REMOVE_START%
	// The configuration options below are needed when running CKEditor from source files.
	config.plugins = 'dialogui,dialog,about,a11yhelp,dialogadvtab,basicstyles,bidi,blockquote,clipboard,button,panelbutton,panel,floatpanel,colorbutton,colordialog,templates,menu,contextmenu,div,resize,toolbar,elementspath,enterkey,entities,popup,filebrowser,find,fakeobjects,flash,floatingspace,listblock,richcombo,font,forms,format,horizontalrule,htmlwriter,iframe,wysiwygarea,image,indent,indentblock,indentlist,smiley,justify,menubutton,language,link,list,liststyle,magicline,maximize,newpage,pagebreak,pastetext,pastefromword,preview,print,removeformat,save,selectall,showblocks,showborders,sourcearea,specialchar,scayt,stylescombo,tab,table,tabletools,undo,wsc,lineutils,widget,glyphicons,bt_table,basewidget,layoutmanager,widgetbootstrap,btgrid,bootstrapVisibility,bootstrapTabs,btbutton,image2,imgbrowse,imagebrowser,imageresize,imagepaste,insertpre,xdsoft_translater,filetools,notification,notificationaggregator,uploadwidget,uploadimage';
	config.skin = 'bootstrapck';
	// %REMOVE_END%

	// Define changes to default configuration here. For example:
	config.language = 'ru';
	// config.uiColor = '#AADC6E';
};
