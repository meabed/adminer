<?php
function adminer_object() {
    // required to run any plugin
    include_once "plugins/plugin.php";
    
    // autoloader
    foreach (glob("plugins/*.php") as $filename) {
        include_once "./$filename";
    }
    
    $plugins = array(
        // specify enabled plugins here
        new AdminerLinksDirect,
        new AdminerDumpXml,
        new AdminerDumpZip,
		new AdminerEditForeign,
		new AdminerDumpSaveServer,
		new AdminerForeignSystem,
		new AdminerEnumOption,
		new AdminerEditTextarea,
		new AdminerDumpAlter,
		new AdminerTablesFilter,
		new AdminerSqlLog,
	    new AdminerTheme,
	    new AdminerLimit,
		//new AdminerTablesFilter,
    );
    
    /* It is possible to combine customization and plugins:
    class AdminerCustomization extends AdminerPlugin {
    }
    return new AdminerCustomization($plugins);
    */
    
    return new AdminerPlugin($plugins);
}
// include original Adminer or Adminer Editor
include "adminer.php";
