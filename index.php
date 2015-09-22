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
        new AdminerDatabaseHide(array("mysql", "information_schema", "performance_schema")),
        new AdminerLoginServers(array(filter_input(INPUT_SERVER, 'SERVER_NAME'))),
        new AdminerSimpleMenu(),
        new AdminerCollations(array("utf8_general_ci", "utf8mb4_general_ci")),
        new AdminerJsonPreview(),
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
