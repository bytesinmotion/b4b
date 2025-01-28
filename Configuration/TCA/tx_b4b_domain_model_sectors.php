<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:b4b/Resources/Private/Language/locallang_db.xlf:tx_b4b_domain_model_sectors',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'enablecolumns' => [
        ],
        'searchFields' => 'title',
        'iconfile' => 'EXT:b4b/Resources/Public/Icons/tx_b4b_domain_model_sectors.gif',
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
    ],
    'types' => [
        '1' => ['showitem' => 'title, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['label' => '', 'value' => 0],
                ],
                'foreign_table' => 'tx_b4b_domain_model_sectors',
                'foreign_table_where' => 'AND {#tx_b4b_domain_model_sectors}.{#pid}=###CURRENT_PID### AND {#tx_b4b_domain_model_sectors}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],

        'title' => [
            'exclude' => false,
            'label' => 'LLL:EXT:b4b/Resources/Private/Language/locallang_db.xlf:tx_b4b_domain_model_sectors.title',
            'description' => 'LLL:EXT:b4b/Resources/Private/Language/locallang_db.xlf:tx_b4b_domain_model_sectors.title.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
    
    ],
];
