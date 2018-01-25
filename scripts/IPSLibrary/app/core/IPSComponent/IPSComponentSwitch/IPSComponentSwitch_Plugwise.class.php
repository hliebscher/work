<?
/**@addtogroup ipscomponent
 * @{
 *
 *
 * @file          IPSComponentSwitch_Plugwise.class.php
 * @author        Juergen Gerharz      
 *
 *
 */

/**
 * @class IPSComponentSwitch_Plugwise
 *
 * Definiert ein IPSComponentSwitch_Plugwise Object, das ein IPSComponentSwitch Object f�r Plugwise implementiert.
 *
 * @author Juergen Gerharz
 * @author Dominik Zeiger
 * @version
 * Version 2.50.2, 06.02.2015<br/>
 */

IPSUtils_Include('IPSComponentSwitch.class.php', 'IPSLibrary::app::core::IPSComponent::IPSComponentSwitch');
IPSUtils_Include("Plugwise_Include.ips.php", "IPSLibrary::app::hardware::Plugwise");
IPSUtils_Include('IPSMessageHandler.class.php', 'IPSLibrary::app::core::IPSMessageHandler');

class IPSComponentSwitch_Plugwise extends IPSComponentSwitch
{
    
    private $instanceId;
    
    /**
     * @public
     *
     * Initialisierung eines IPSComponentSwitch_Plugwise Objektes
     *
     * @param integer $instanceId InstanceId des Plugwise Devices
     */
    public function __construct($instanceId)
    {
        // automatischen Einbinden/Konfiguration
        // wenn schon vorhanden dann ohne Einfluss
        $var = (int) $instanceId;
        
        $component = "IPSComponentSwitch_Plugwise," . $var;
        $module    = "IPSModuleSwitch_IPSLight";
        
        $messageHandler = new IPSMessageHandler();
        $messageHandler->RegisterOnChangeEvent($var, $component, $module);
        
        $this->instanceId = IPSUtil_ObjectIDByPath($instanceId);
    }
    
    /**
     * @public
     *
     * Funktion liefert String IPSComponent Constructor String.
     * String kann dazu ben�tzt werden, das Object mit der IPSComponent::CreateObjectByParams
     * wieder neu zu erzeugen.
     *
     * @return string Parameter String des IPSComponent Object
     */
    public function GetComponentParams()
    {
        return get_class($this) . ',' . $this->instanceId;
    }
    
    /**
     * @public
     *
     * Function um Events zu behandeln, diese Funktion wird vom IPSMessageHandler aufgerufen, um ein aufgetretenes Event 
     * an das entsprechende Module zu leiten.
     *
     * @param integer $variable ID der ausl�senden Variable
     * @param string $value Wert der Variable
     * @param IPSModuleSwitch $module Module Object an das das aufgetretene Event weitergeleitet werden soll
     */
    public function HandleEvent($variable, $value, IPSModuleSwitch $module)
    {
        $module->SyncState($value, $this);
        IPS_LogMessage(__File__, "Variable " . $variable . " sync");
    }
    
    /**
     * @public
     *
     * Zustand Setzen 
     *
     * @param boolean $value Wert f�r Schalter
     */
    public function SetState($value, $onTime = false)
    {
        // Gibt es die Variable ?
        $exist = IPS_VariableExists($this->instanceId);
        if (!$exist) {
            IPS_LogMessage(__File__, "Variable " . $this->instanceId . " existiert nicht");
            return;
        }
        $parent = @IPS_GetParent($this->instanceId);
        $obj    = @IPS_GetObject($parent);
        if (!$obj) {
            IPS_LogMessage(__File__, "ParentVariable " . $parent . " existiert nicht");
            return;
        }
        $ident = $obj['ObjectIdent'];
        
        $state = circle_on_off($ident, $value);
        return $state;
    }
    
    /**
     * @public
     *
     * Liefert aktuellen Zustand
     *
     * @return boolean aktueller Schaltzustand  
     */
    public function GetState()
    {
        $varId = @IPS_GetVariableIDByName("Status", $this->instanceId);
        if (!$varId) {
            IPS_LogMessage(__File__, "Variable Status von " . $this->instanceId . " existiert nicht");
            return;
        }
        
        return GetValue($varId);
    }
}

/** @}*/
?>