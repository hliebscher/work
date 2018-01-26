<?php

	includeScript(34575) ;

function includeScript($scriptID)
{
    $s = IPS_GetScript($scriptID);
    include($s["ScriptFile"]);
}

?>	