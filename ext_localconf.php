<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Sup7.' . $_EXTKEY,
    'Registration',
    array(
        'Form' => 'index,register'
    ),
    array(
        'Form' => 'index,register'
    )
);