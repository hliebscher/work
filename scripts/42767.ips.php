<?
    // Repository
    $repository = 'https://raw.githubusercontent.com/brownson/IPSLibrary/Development/';
 
    // Download BaseLoader Script 
    $remoteFile = $repository.'IPSLibrary/install/BaseLoader/IPSLibrary_BaseLoader.ips.php';
    $localFile  = IPS_GetKernelDir().'scripts/IPSLibrary_BaseLoader.ips.php';
 
    $curl_handle=curl_init();
    curl_setopt($curl_handle, CURLOPT_URL,$remoteFile);
    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT,5);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl_handle, CURLOPT_FAILONERROR, true);
    $fileContent = curl_exec($curl_handle);
    curl_close($curl_handle);
    if ($fileContent===false) {
        throw new Exception('Download of File '.$remoteFile.' failed !!!');
    }
 
    if (!file_put_contents($localFile, $fileContent)) {
        throw new Exception('Create File '.$localFile.' failed!');
    }
 
    // Execute Baseloader Script
    include $localFile;
 
    // Load and Install IPSLogger
    IPSUtils_Include ("IPSModuleManager.class.php", "IPSLibrary::install::IPSModuleManager");
    $moduleManager = new IPSModuleManager('IPSLogger', $repository);
    $moduleManager->LoadModule();
    $moduleManager->InstallModule(true);
 
    // Load and Install IPSModuleManagerGUI
    IPSUtils_Include ("IPSModuleManager.class.php", "IPSLibrary::install::IPSModuleManager");
    $moduleManager = new IPSModuleManager('IPSModuleManagerGUI', $repository);
    $moduleManager->LoadModule();
    $moduleManager->InstallModule(true);
 
    // Load and Install IPSComponent
    IPSUtils_Include ("IPSModuleManager.class.php", "IPSLibrary::install::IPSModuleManager");
    $moduleManager = new IPSModuleManager('IPSComponent', $repository);
    $moduleManager->LoadModule();
    $moduleManager->InstallModule(true);
 
    // Load and Install IPSMessageHandler
    IPSUtils_Include ("IPSModuleManager.class.php", "IPSLibrary::install::IPSModuleManager");
    $moduleManager = new IPSModuleManager('IPSMessageHandler', $repository);
    $moduleManager->LoadModule();
    $moduleManager->InstallModule(true);
?>