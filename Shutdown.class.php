<?php
//	License for all code of this FreePBX module can be found in the license file inside the module directory
//	Copyright 2013 Schmooze Com Inc.
namespace FreePBX\modules;
class Shutdown implements \BMO {
	public function __construct($freepbx = null) {
		if ($freepbx == null) {
			throw new Exception("Not given a FreePBX Object");
		}
		$this->FreePBX = $freepbx;
		$this->db = $freepbx->Database;
		$this->astman = $this->FreePBX->astman;

	}
	public function install() {}
	public function uninstall() {}
	public function backup() {}
	public function restore($backup) {}
	public function doConfigPageInit($page) {}
	public function showPage(){}

	public function ajaxRequest($req, &$setting) {
		if ($req == "runcommand") {
			return true;
		}
		return false;
	}
	public function ajaxHandler() {
		if ($_REQUEST['command'] == "runcommand") {
			$command = $_REQUEST['data'];
			switch ($command) {
				case 0:
					exec("sudo -u root /sbin/shutdown -h now");
					break;
				case 1: 
					exec("sudo -u root /sbin/shutdown -r now");
					break;
			}
			return;
		}
	}
}