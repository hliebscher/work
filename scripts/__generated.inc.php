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

function SWD_SetSwitchMode($InstanceID, $val)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{F2FC0924-2CE9-4067-9DB5-D228F0CCF4AD}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/Switch/module.php');
		$result = (new SwitchDev($InstanceID))->SetSwitchMode($val);
	}
	elseif(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{F2FC0924-2CE9-4067-9DB5-D228F0CCF4AD}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/Switch/module.php');
		$result = (new SwitchDev($InstanceID))->SetSwitchMode($val);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function SWD_SetIntensity($InstanceID, $percent)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{F2FC0924-2CE9-4067-9DB5-D228F0CCF4AD}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/Switch/module.php');
		$result = (new SwitchDev($InstanceID))->SetIntensity($percent);
	}
	elseif(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{F2FC0924-2CE9-4067-9DB5-D228F0CCF4AD}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/Switch/module.php');
		$result = (new SwitchDev($InstanceID))->SetIntensity($percent);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function SWD_SendDataToParent($InstanceID, $Data)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{F2FC0924-2CE9-4067-9DB5-D228F0CCF4AD}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/Switch/module.php');
		$result = (new SwitchDev($InstanceID))->SendDataToParent($Data);
	}
	elseif(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{F2FC0924-2CE9-4067-9DB5-D228F0CCF4AD}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/Switch/module.php');
		$result = (new SwitchDev($InstanceID))->SendDataToParent($Data);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WUE_SendDataToParent($InstanceID, $Data)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{AA2544FC-0BF8-43C1-B84C-096B844AEACC}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/FS20WUE/module.php');
		$result = (new FS20WUE($InstanceID))->SendDataToParent($Data);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WUE_SetRainPerCount($InstanceID, $rainpercount)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{AA2544FC-0BF8-43C1-B84C-096B844AEACC}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/FS20WUE/module.php');
		$result = (new FS20WUE($InstanceID))->SetRainPerCount($rainpercount);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WDE1_ReadRecord($InstanceID, $inbuf)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{EE7F90DD-7668-459C-A233-8241C46864A5}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/WDE1/module.php');
		$result = (new WDE1($InstanceID))->ReadRecord($inbuf);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WDE1_SendDataToChildren($InstanceID, $Data)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{EE7F90DD-7668-459C-A233-8241C46864A5}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/WDE1/module.php');
		$result = (new WDE1($InstanceID))->SendDataToChildren($Data);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WDE1_ReInitEvent($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{EE7F90DD-7668-459C-A233-8241C46864A5}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/WDE1/module.php');
		$result = (new WDE1($InstanceID))->ReInitEvent();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function XS1_SwitchMode($InstanceID, $dev, $val)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{8B015BFA-3CDD-4D45-99C8-3F250AEF1E83}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/XS1/module.php');
		$result = (new XS1($InstanceID))->SwitchMode($dev, $val);
	}
	elseif(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{8B015BFA-3CDD-4D45-99C8-3F250AEF1E83}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/XS1/module.php');
		$result = (new XS1($InstanceID))->SwitchMode($dev, $val);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function XS1_UpdateEvent($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{8B015BFA-3CDD-4D45-99C8-3F250AEF1E83}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/XS1/module.php');
		$result = (new XS1($InstanceID))->UpdateEvent();
	}
	elseif(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{8B015BFA-3CDD-4D45-99C8-3F250AEF1E83}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/XS1/module.php');
		$result = (new XS1($InstanceID))->UpdateEvent();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function AHA_Query($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{0837AE77-B72A-4AA6-8680-D6DDCDAEFA39}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/AVMAHA/module.php');
		$result = (new AVMAHA($InstanceID))->Query();
	}
	elseif(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{0837AE77-B72A-4AA6-8680-D6DDCDAEFA39}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/AVMAHA/module.php');
		$result = (new AVMAHA($InstanceID))->Query();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function OWN_SendDataToChildren($InstanceID, $Data)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{A68F9DEC-A490-4E35-B500-B45FC5F4FF6A}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/OWNet/module.php');
		$result = (new OWN($InstanceID))->SendDataToChildren($Data);
	}
	elseif(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{A68F9DEC-A490-4E35-B500-B45FC5F4FF6A}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/OWNet/module.php');
		$result = (new OWN($InstanceID))->SendDataToChildren($Data);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function OWN_UpdateEvent($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{A68F9DEC-A490-4E35-B500-B45FC5F4FF6A}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/OWNet/module.php');
		$result = (new OWN($InstanceID))->UpdateEvent();
	}
	elseif(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{A68F9DEC-A490-4E35-B500-B45FC5F4FF6A}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/OWNet/module.php');
		$result = (new OWN($InstanceID))->UpdateEvent();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function CUL_Parse($InstanceID, $line)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{5B0BB3C6-C35A-4438-94E4-8A6CF9EF3A4A}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/CUL/module.php');
		$result = (new CUL($InstanceID))->Parse($line);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function CUL_ReInitEvent($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{5B0BB3C6-C35A-4438-94E4-8A6CF9EF3A4A}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/CUL/module.php');
		$result = (new CUL($InstanceID))->ReInitEvent();
	}
	elseif(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{5B0BB3C6-C35A-4438-94E4-8A6CF9EF3A4A}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/CUL/module.php');
		$result = (new CUL($InstanceID))->ReInitEvent();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WS300PC_ReadCurrentRecord($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{C790A7F2-2572-421F-901B-7F45C05BB062}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/WS300PC/module.php');
		$result = (new WS300PC($InstanceID))->ReadCurrentRecord();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WS300PC_SendDataToChildren($InstanceID, $Data)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{C790A7F2-2572-421F-901B-7F45C05BB062}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/WS300PC/module.php');
		$result = (new WS300PC($InstanceID))->SendDataToChildren($Data);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WS300PC_SetHistoryCount($InstanceID, $val)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{C790A7F2-2572-421F-901B-7F45C05BB062}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/WS300PC/module.php');
		$result = (new WS300PC($InstanceID))->SetHistoryCount($val);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WS300PC_GetHistoryCount($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{C790A7F2-2572-421F-901B-7F45C05BB062}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/WS300PC/module.php');
		$result = (new WS300PC($InstanceID))->GetHistoryCount();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WS2500PC_Query($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{90F68511-0628-4718-A7BF-EDBBC2BB55D4}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/WS2500PC/module.php');
		$result = (new WS2500PC($InstanceID))->Query();
	}
	elseif(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{90F68511-0628-4718-A7BF-EDBBC2BB55D4}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/WS2500PC/module.php');
		$result = (new WS2500PC($InstanceID))->Query();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WS2500PC_SendDataToChildren($InstanceID, $Data)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{90F68511-0628-4718-A7BF-EDBBC2BB55D4}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/WS2500PC/module.php');
		$result = (new WS2500PC($InstanceID))->SendDataToChildren($Data);
	}
	elseif(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{90F68511-0628-4718-A7BF-EDBBC2BB55D4}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/WS2500PC/module.php');
		$result = (new WS2500PC($InstanceID))->SendDataToChildren($Data);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WS2500PC_UpdateEvent($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{90F68511-0628-4718-A7BF-EDBBC2BB55D4}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/WS2500PC/module.php');
		$result = (new WS2500PC($InstanceID))->UpdateEvent();
	}
	elseif(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{90F68511-0628-4718-A7BF-EDBBC2BB55D4}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/WS2500PC/module.php');
		$result = (new WS2500PC($InstanceID))->UpdateEvent();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
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

function WUE_ReInitEvent($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{AA2544FC-0BF8-43C1-B84C-096B844AEACC}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/FS20WUE/module.php');
		$result = (new FS20WUE($InstanceID))->ReInitEvent();
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

function APCUPSD_Query($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{11437557-8091-4FAA-9C8B-B0AA993A1347}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/APCUPSD/module.php');
		$result = (new APCUPSD($InstanceID))->Query();
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

function SWD_SetDuration($InstanceID, $duration, $action)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{F2FC0924-2CE9-4067-9DB5-D228F0CCF4AD}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/Switch/module.php');
		$result = (new SwitchDev($InstanceID))->SetDuration($duration, $action);
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

function END_SendDataToParent($InstanceID, $Data)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{F0302960-A22D-40CC-8994-B7C40F045023}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/Energy/module.php');
		$result = (new EnergyDev($InstanceID))->SendDataToParent($Data);
	}
	elseif(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{F0302960-A22D-40CC-8994-B7C40F045023}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/Energy/module.php');
		$result = (new EnergyDev($InstanceID))->SendDataToParent($Data);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function SWD_TimerEvent($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{F2FC0924-2CE9-4067-9DB5-D228F0CCF4AD}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/Switch/module.php');
		$result = (new SwitchDev($InstanceID))->TimerEvent();
	}
	elseif(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{F2FC0924-2CE9-4067-9DB5-D228F0CCF4AD}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/Switch/module.php');
		$result = (new SwitchDev($InstanceID))->TimerEvent();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WDE1_SendDataToParent($InstanceID, $Data)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{EE7F90DD-7668-459C-A233-8241C46864A5}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/WDE1/module.php');
		$result = (new WDE1($InstanceID))->SendDataToParent($Data);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WS300PC_UpdateEvent($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{C790A7F2-2572-421F-901B-7F45C05BB062}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/WS300PC/module.php');
		$result = (new WS300PC($InstanceID))->UpdateEvent();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function OWN_Query($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{A68F9DEC-A490-4E35-B500-B45FC5F4FF6A}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/OWNet/module.php');
		$result = (new OWN($InstanceID))->Query();
	}
	elseif(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{A68F9DEC-A490-4E35-B500-B45FC5F4FF6A}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/OWNet/module.php');
		$result = (new OWN($InstanceID))->Query();
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

function TE923_SendDataToChildren($InstanceID, $Data)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{137511E0-F98B-49F3-9A6C-95234DF2E1FB}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/TE923/module.php');
		$result = (new TE923($InstanceID))->SendDataToChildren($Data);
	}
	elseif(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{137511E0-F98B-49F3-9A6C-95234DF2E1FB}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/TE923/module.php');
		$result = (new TE923($InstanceID))->SendDataToChildren($Data);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WS300PC_ReInitEvent($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{C790A7F2-2572-421F-901B-7F45C05BB062}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/WS300PC/module.php');
		$result = (new WS300PC($InstanceID))->ReInitEvent();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function AHA_SwitchMode($InstanceID, $ain, $val)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{0837AE77-B72A-4AA6-8680-D6DDCDAEFA39}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/AVMAHA/module.php');
		$result = (new AVMAHA($InstanceID))->SwitchMode($ain, $val);
	}
	elseif(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{0837AE77-B72A-4AA6-8680-D6DDCDAEFA39}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/AVMAHA/module.php');
		$result = (new AVMAHA($InstanceID))->SwitchMode($ain, $val);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function AHA_UpdateEvent($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{0837AE77-B72A-4AA6-8680-D6DDCDAEFA39}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/AVMAHA/module.php');
		$result = (new AVMAHA($InstanceID))->UpdateEvent();
	}
	elseif(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{0837AE77-B72A-4AA6-8680-D6DDCDAEFA39}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/AVMAHA/module.php');
		$result = (new AVMAHA($InstanceID))->UpdateEvent();
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

function WDE1_SetRainPerCount($InstanceID, $rainpercount)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{EE7F90DD-7668-459C-A233-8241C46864A5}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/WDE1/module.php');
		$result = (new WDE1($InstanceID))->SetRainPerCount($rainpercount);
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WS300PC_SendDataToParent($InstanceID, $Data)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{C790A7F2-2572-421F-901B-7F45C05BB062}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/WS300PC/module.php');
		$result = (new WS300PC($InstanceID))->SendDataToParent($Data);
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

function NUT_Query($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{431281F9-77DC-46A6-8AA9-A6E2C60A5FB2}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/NUT/module.php');
		$result = (new NUT($InstanceID))->Query();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function WS300PC_ReadNextRecord($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{C790A7F2-2572-421F-901B-7F45C05BB062}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/WS300PC/module.php');
		$result = (new WS300PC($InstanceID))->ReadNextRecord();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function TE923_UpdateEvent($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{137511E0-F98B-49F3-9A6C-95234DF2E1FB}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/TE923/module.php');
		$result = (new TE923($InstanceID))->UpdateEvent();
	}
	elseif(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{137511E0-F98B-49F3-9A6C-95234DF2E1FB}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/TE923/module.php');
		$result = (new TE923($InstanceID))->UpdateEvent();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function APCUPSD_SendDataToChildren($InstanceID, $Data)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{11437557-8091-4FAA-9C8B-B0AA993A1347}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/APCUPSD/module.php');
		$result = (new APCUPSD($InstanceID))->SendDataToChildren($Data);
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

function WS300PC_GetVersion($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{C790A7F2-2572-421F-901B-7F45C05BB062}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/WS300PC/module.php');
		$result = (new WS300PC($InstanceID))->GetVersion();
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

function TE923_Query($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{137511E0-F98B-49F3-9A6C-95234DF2E1FB}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/TE923/module.php');
		$result = (new TE923($InstanceID))->Query();
	}
	elseif(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{137511E0-F98B-49F3-9A6C-95234DF2E1FB}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/TE923/module.php');
		$result = (new TE923($InstanceID))->Query();
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

function NUT_SendDataToChildren($InstanceID, $Data)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{431281F9-77DC-46A6-8AA9-A6E2C60A5FB2}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/NUT/module.php');
		$result = (new NUT($InstanceID))->SendDataToChildren($Data);
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

function APCUPSD_UpdateEvent($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{11437557-8091-4FAA-9C8B-B0AA993A1347}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/APCUPSD/module.php');
		$result = (new APCUPSD($InstanceID))->UpdateEvent();
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

function WS300PC_WriteConfig($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{C790A7F2-2572-421F-901B-7F45C05BB062}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/WS300PC/module.php');
		$result = (new WS300PC($InstanceID))->WriteConfig();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function SWD_DimUp($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{F2FC0924-2CE9-4067-9DB5-D228F0CCF4AD}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/Switch/module.php');
		$result = (new SwitchDev($InstanceID))->DimUp();
	}
	elseif(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{F2FC0924-2CE9-4067-9DB5-D228F0CCF4AD}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/Switch/module.php');
		$result = (new SwitchDev($InstanceID))->DimUp();
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

function SWD_DimDown($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{F2FC0924-2CE9-4067-9DB5-D228F0CCF4AD}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/Switch/module.php');
		$result = (new SwitchDev($InstanceID))->DimDown();
	}
	elseif(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{F2FC0924-2CE9-4067-9DB5-D228F0CCF4AD}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/Switch/module.php');
		$result = (new SwitchDev($InstanceID))->DimDown();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

function NUT_UpdateEvent($InstanceID)
{
	$old_handler = set_error_handler('IPSTypeHintHandler::CatchError');
	if(IPS_GetInstance($InstanceID)["ModuleInfo"]["ModuleID"] == "{431281F9-77DC-46A6-8AA9-A6E2C60A5FB2}") {
		require_once('/var/lib/symcon/modules/ipsymcon-phpmodule-by-Tommi/NUT/module.php');
		$result = (new NUT($InstanceID))->UpdateEvent();
	}
	else {
		throw new Exception("Instance does not implement this function");
	}
	set_error_handler($old_handler);
	return $result;
}

