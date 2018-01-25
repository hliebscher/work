<?

class boolean{}; class bool{}; class integer{}; class int{}; class float{}; class string{};
class IPSTypeHintHandler {
	public static function CatchError($ErrLevel, $ErrMessage) {
		if ($ErrLevel == E_RECOVERABLE_ERROR) {
			return strpos($ErrMessage, 'must be an instance of string')
				|| strpos($ErrMessage, 'must be an instance of integer')
				|| strpos($ErrMessage, 'must be an instance of int')
				|| strpos($ErrMessage, 'must be an instance of float')
				|| strpos($ErrMessage, 'must be an instance of boolean')
				|| strpos($ErrMessage, 'must be an instance of bool');
		}
		return false;
	}
}

function UWZ_RequestInfo($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{E5AA629B-75BD-45C0-9BCB-845C102B0411}") {
		require_once('/var/lib/symcon/modules/SymconMisc/Unwetterzentrale/module.php');
		$result = (new Unwetterzentrale($InstanceID))->RequestInfo();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function AS_UpdateTargets($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{87F47896-DD54-442D-94FD-9990BD8D9F54}") {
		require_once('/var/lib/symcon/modules/SymconMisc/AnwesenheitsSimulation/module.php');
		$result = (new AnwesenheitsSimulation($InstanceID))->UpdateTargets();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function AS_GetNextSimulationData($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{87F47896-DD54-442D-94FD-9990BD8D9F54}") {
		require_once('/var/lib/symcon/modules/SymconMisc/AnwesenheitsSimulation/module.php');
		$result = (new AnwesenheitsSimulation($InstanceID))->GetNextSimulationData();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function AS_UpdateData($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{87F47896-DD54-442D-94FD-9990BD8D9F54}") {
		require_once('/var/lib/symcon/modules/SymconMisc/AnwesenheitsSimulation/module.php');
		$result = (new AnwesenheitsSimulation($InstanceID))->UpdateData();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WAA_CheckAlert($InstanceID, $ThresholdName, $BufferName)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{98F467A7-CD43-442D-95FD-AAA0CE8D9F65}") {
		require_once('/var/lib/symcon/modules/SymconMisc/WasserAlarm/module.php');
		$result = (new WasserAlarm($InstanceID))->CheckAlert($ThresholdName, $BufferName);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function THL_Stop($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{9D5546FA-CDB2-49BB-9B1D-F40F21E8219B}") {
		require_once('/var/lib/symcon/modules/SymconMisc/Treppenhauslichtsteuerung/module.php');
		$result = (new Treppenhauslichtsteuerung($InstanceID))->Stop();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function THL_SetActive($InstanceID, $Value)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{9D5546FA-CDB2-49BB-9B1D-F40F21E8219B}") {
		require_once('/var/lib/symcon/modules/SymconMisc/Treppenhauslichtsteuerung/module.php');
		$result = (new Treppenhauslichtsteuerung($InstanceID))->SetActive($Value);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function FM_SetActive($InstanceID, $Active)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{AB3467A7-CD43-442D-95FD-BCDBCF8D9A67}") {
		require_once('/var/lib/symcon/modules/SymconMisc/FertigMelder/module.php');
		$result = (new FertigMelder($InstanceID))->SetActive($Active);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function ARM_SetAlert($InstanceID, $Status)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{98612669-D883-4040-AB6E-2D8E3EAF61DF}") {
		require_once('/var/lib/symcon/modules/SymconMisc/Alarmierung/module.php');
		$result = (new Alarmierung($InstanceID))->SetAlert($Status);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function EZS_Update($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{89625B8F-7F45-4D21-9442-9EEC3CAC4A2D}") {
		require_once('/var/lib/symcon/modules/SymconMisc/EnergiezaehlerStrom/module.php');
		$result = (new EnergiezaehlerStrom($InstanceID))->Update();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function BA_AddImage($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{FC4367A7-3847-442D-95FD-ABCDEF8D9F65}") {
		require_once('/var/lib/symcon/modules/SymconMisc/BildArchiv/module.php');
		$result = (new BildArchiv($InstanceID))->AddImage();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function UMG_Calculate($InstanceID, $Value)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{D40D120A-C525-4DFC-9F44-ED6E43890C63}") {
		require_once('/var/lib/symcon/modules/SymconMisc/UmrechnenMultiGrenzen/module.php');
		$result = (new UmrechnenMultiGrenzen($InstanceID))->Calculate($Value);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function UMR_Calculate($InstanceID, $Value)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{D40C120A-C525-4DEC-9A44-ED6E43890C61}") {
		require_once('/var/lib/symcon/modules/SymconMisc/Umrechnen/module.php');
		$result = (new Umrechnen($InstanceID))->Calculate($Value);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WGW_UpdateWeatherData($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{EDF6BF77-0E16-4FCD-90E4-9E5C0F91B921}") {
		require_once('/var/lib/symcon/modules/SymconMisc/WundergroundWeather/module.php');
		$result = (new WundergroundWeather($InstanceID))->UpdateWeatherData();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function SZS_SaveScene($InstanceID, $SceneNumber)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{87F46796-CC43-442D-94FD-AAA0BD8D9F54}") {
		require_once('/var/lib/symcon/modules/SymconMisc/SzenenSteuerung/module.php');
		$result = (new SzenenSteuerung($InstanceID))->SaveScene($SceneNumber);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WD_GetAlertTargets($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{87F47896-4321-8756-94FD-9990BD8D9F54}") {
		require_once('/var/lib/symcon/modules/SymconMisc/Watchdog/module.php');
		$result = (new Watchdog($InstanceID))->GetAlertTargets();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function USBM_FixPorts($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{1D7367A7-1337-7331-95FD-1479EF8D9177}") {
		require_once('/var/lib/symcon/modules/SymconMisc/USBMapper/module.php');
		$result = (new USBMapper($InstanceID))->FixPorts();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function RM_Update($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{A7B0B43B-BEB0-4452-B55E-CD8A9A56B052}") {
		require_once('/var/lib/symcon/modules/SymconMisc/Rechenmodul/module.php');
		$result = (new Rechenmodul($InstanceID))->Update();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WD_SetActive($InstanceID, $SwitchOn)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{87F47896-4321-8756-94FD-9990BD8D9F54}") {
		require_once('/var/lib/symcon/modules/SymconMisc/Watchdog/module.php');
		$result = (new Watchdog($InstanceID))->SetActive($SwitchOn);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function ARM_ConvertToNewVersion($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{98612669-D883-4040-AB6E-2D8E3EAF61DF}") {
		require_once('/var/lib/symcon/modules/SymconMisc/Alarmierung/module.php');
		$result = (new Alarmierung($InstanceID))->ConvertToNewVersion();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function ARM_TriggerAlert($InstanceID, $SourceID, $SourceValue)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{98612669-D883-4040-AB6E-2D8E3EAF61DF}") {
		require_once('/var/lib/symcon/modules/SymconMisc/Alarmierung/module.php');
		$result = (new Alarmierung($InstanceID))->TriggerAlert($SourceID, $SourceValue);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function SZS_CallScene($InstanceID, $SceneNumber)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{87F46796-CC43-442D-94FD-AAA0BD8D9F54}") {
		require_once('/var/lib/symcon/modules/SymconMisc/SzenenSteuerung/module.php');
		$result = (new SzenenSteuerung($InstanceID))->CallScene($SceneNumber);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WD_CheckTargets($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{87F47896-4321-8756-94FD-9990BD8D9F54}") {
		require_once('/var/lib/symcon/modules/SymconMisc/Watchdog/module.php');
		$result = (new Watchdog($InstanceID))->CheckTargets();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function ARM_SetActive($InstanceID, $Value)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{98612669-D883-4040-AB6E-2D8E3EAF61DF}") {
		require_once('/var/lib/symcon/modules/SymconMisc/Alarmierung/module.php');
		$result = (new Alarmierung($InstanceID))->SetActive($Value);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WGW_UpdateStormWarningData($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{EDF6BF77-0E16-4FCD-90E4-9E5C0F91B921}") {
		require_once('/var/lib/symcon/modules/SymconMisc/WundergroundWeather/module.php');
		$result = (new WundergroundWeather($InstanceID))->UpdateStormWarningData();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function AS_SetSimulation($InstanceID, $SwitchOn)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{87F47896-DD54-442D-94FD-9990BD8D9F54}") {
		require_once('/var/lib/symcon/modules/SymconMisc/AnwesenheitsSimulation/module.php');
		$result = (new AnwesenheitsSimulation($InstanceID))->SetSimulation($SwitchOn);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function THL_Start($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{9D5546FA-CDB2-49BB-9B1D-F40F21E8219B}") {
		require_once('/var/lib/symcon/modules/SymconMisc/Treppenhauslichtsteuerung/module.php');
		$result = (new Treppenhauslichtsteuerung($InstanceID))->Start();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function FM_CheckEvent($InstanceID, $Eventtype)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{AB3467A7-CD43-442D-95FD-BCDBCF8D9A67}") {
		require_once('/var/lib/symcon/modules/SymconMisc/FertigMelder/module.php');
		$result = (new FertigMelder($InstanceID))->CheckEvent($Eventtype);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function ZUL_Update($InstanceID, $OldValue, $Value)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{57A84449-AA15-4423-80B0-3F98C54EAC03}") {
		require_once('/var/lib/symcon/modules/SymconMisc/ZaehlerUeberlauf/module.php');
		$result = (new ZaehlerUeberlauf($InstanceID))->Update($OldValue, $Value);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

