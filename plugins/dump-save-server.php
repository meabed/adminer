<?php
/** Dump to file
* @author Jakub Kluvánek, kluvanek@gmail.com
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* 
*	USAGE:
*	For example when you want to do automated dumps of some databases with selenium. Selenium can't control the download dialog.
*	Just set the desired path where you want to save dump in constructor of this plugin.
*
*	BUGS:
*	#1 - other than sql formats shows the download dialog - FIXED
*/
class AdminerDumpSaveServer {
	/** @access protected */
	var $dir;
	var $fileName;
	
	function AdminerDumpSaveServer($dir = NULL)
	{
		$this->dir = $dir;
	}

	function dumpOutput() {
		return array('server' => 'Server');
	}

	function _save($string, $state) {
		if($_POST['output'] == 'server')
		{
			header('Content-Disposition:');
			header('Content-Type:');
			$file = $this->dir.$this->fileName;
			file_put_contents($file, $string);
			ob_end_clean();
			return "";
		}
	}
	
	function dumpHeaders($identifier, $multi_table = false) {
		if($_POST['output'] == 'server')
		{
			$this->fileName = "$identifier." . ($multi_table && ereg("[ct]sv", $_POST["format"]) ? 'tar' : $_POST["format"]);
			ob_start(array($this, '_save'));
		}
	}
}
