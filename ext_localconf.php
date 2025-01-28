<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'B4b',
        'Feditor',
        [
            \bytesinmotion\B4b\Controller\CustomerController::class => 'list, show,edit, new, update, delete, create'
        ],
        [
            \bytesinmotion\B4b\Controller\CustomerController::class => 'edit, new, update, delete, create'
        ],
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.ext-b4b {
                header = b4b
                after = common
                elements {
                    feditor {
                        iconIdentifier = tx_b4b_feditor
                        title = LLL:EXT:b4b/Resources/Private/Language/locallang_db.xlf:tx_b4b_feditor.name
                        description = LLL:EXT:b4b/Resources/Private/Language/locallang_db.xlf:tx_b4b_feditor.description
                        tt_content_defValues {
                            CType = b4b_feditor
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
