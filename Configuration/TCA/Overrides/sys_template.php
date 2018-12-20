<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'gsheinzrittervialia';

    /**
     * Default TypoScript for Heinz Ritter AG
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript/HeinzRitter',
        'Heinz Ritter AG'
    );

    /**
     * Default TypoScript for Vialia AG
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript/Vialia',
        'Vialia AG'
    );
});
