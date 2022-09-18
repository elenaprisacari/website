// Scripts
var _wrs_conf_createimagePath = _wrs_int_path + '/createimage.php';
var _wrs_conf_editorPath = _wrs_int_path + '/editor.php';       // Specifies where is the editor HTML code (for popup window)
var _wrs_conf_CASPath = _wrs_int_path + '/cas.php';             // Specifies where is the WIRIS cas HTML code (for popup window)
var _wrs_conf_createimagePath = _wrs_int_path + '/createimage.php';        // Specifies where is createimage script
var _wrs_conf_showimagePath = _wrs_int_path + '/showimage.php';        // Specifies where is showimage script
var _wrs_conf_createcasimagePath = _wrs_int_path + '/createcasimage.php';	// Specifies where is createcasimage script
var _wrs_conf_getmathmlPath = _wrs_int_path + '/getmathml.php'; // Specifies where is the getmathml script.
var _wrs_conf_servicePath = _wrs_int_path + '/service.php'; // Specifies where is the service script.
var _wrs_conf_editorEnabled = false; // Specifies if fomula editor is enabled
var _wrs_conf_imageMathmlAttribute = 'data-mathml'; // Specifies the image tag where we should save the formula editor mathml code
var _wrs_conf_saveMode = 'safeXml'; // This value can be 'xml', 'safeXml', 'image' or 'base64'
var _wrs_conf_editMode = 'default'; // This value can be 'default' or 'image'
var _wrs_conf_parseModes = ['latex']; // This value can contain 'latex' and 'xml)
var _wrs_conf_editorAttributes = 'width=570, height=450, scroll=no, resizable=yes'; // Specifies formula editor window options
var _wrs_conf_editorUrl = 'http://www.wiris.net/demo/editor/editor'; // WIRIS editor
var _wrs_conf_modalWindow = true; // Editor modal window
var _wrs_conf_CASEnabled = false; // Specifies if WIRIS cas is enabled
var _wrs_conf_CASMathmlAttribute = 'alt'; // Specifies the image tag where we should save the WIRIS cas mathml code
var _wrs_conf_CASAttributes = 'width=640, height=480, scroll=no, resizable=yes'; // Specifies WIRIS cas window options
var _wrs_conf_hostPlatform = 'Moodle'; // Specifies host platform
var _wrs_conf_versionPlatform = '2016052301'; // Specifies host version platform
var _wrs_conf_enableAccessibility = true; // Specifies whether accessibility is enabled
var _wrs_conf_setSize = false; // Specifies whether to set the size of the images at edition time
var _wrs_conf_editorToolbar = ''; // Toolbar definition
var _wrs_conf_chemEnabled = false; // Specifies if WIRIS chem editor is enabled
var _wrs_conf_imageFormat = 'svg'; // WIRIS Plugin image format
var _wrs_conf_editorParameters = {}; // Editor parameters
var _wrs_conf_wirisPluginPerformance = true; // Experimental settings to improve performance
var _wrs_conf_configuration_loaded = true;
if (typeof _wrs_conf_core_loaded != 'undefined') _wrs_conf_plugin_loaded = true;
var _wrs_conf_version = '4.1.2.1363';
