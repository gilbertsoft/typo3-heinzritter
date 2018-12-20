<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'gsheinzrittervialia';

    /**
     * Default PageTS for Heinz Ritter AG and Vialia AG
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/PageTS/All.txt',
        'Heinz Ritter / Vialia'
    );
});
