<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:b4b/Resources/Private/Language/locallang_db.xlf:tx_b4b_domain_model_customer',
        'label' => 'company',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'company',
        'iconfile' => 'EXT:b4b/Resources/Public/Icons/tx_b4b_domain_model_customer.gif',
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
    ],
    'types' => [
        '1' => ['showitem' => 'company, sector, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, '],
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
                'foreign_table' => 'tx_b4b_domain_model_customer',
                'foreign_table_where' => 'AND {#tx_b4b_domain_model_customer}.{#pid}=###CURRENT_PID### AND {#tx_b4b_domain_model_customer}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        'label' => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],

        'company' => [
            'exclude' => false,
            'label' => 'LLL:EXT:b4b/Resources/Private/Language/locallang_db.xlf:tx_b4b_domain_model_customer.company',
            'description' => 'LLL:EXT:b4b/Resources/Private/Language/locallang_db.xlf:tx_b4b_domain_model_customer.company.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'sector' => [
            'exclude' => false,
            'l10n_mode' => 'exclude',
            'label' => 'LLL:EXT:b4b/Resources/Private/Language/locallang_db.xlf:tx_b4b_domain_model_customer.sector',
            'description' => 'LLL:EXT:b4b/Resources/Private/Language/locallang_db.xlf:tx_b4b_domain_model_customer.sector.description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_b4b_domain_model_sectors',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],

        ],

    ],
];
