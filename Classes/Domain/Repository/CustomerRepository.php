<?php

declare(strict_types=1);

namespace bytesinmotion\B4b\Domain\Repository;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\Generic\Storage\Typo3DbQueryParser;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
use TYPO3\CMS\Core\Context\LanguageAspect;
use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

use TYPO3\CMS\Extbase\Persistence\Generic\QuerySettingsInterface;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;
/**
 * This file is part of the "b4b" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2025
 */

/**
 * The repository for Customers
 */
class CustomerRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function initializeObject()
    {
        /** @var QuerySettingsInterface $querySettings */
        $querySettings = GeneralUtility::makeInstance(Typo3QuerySettings::class);
        // Show comments from all pages
        $querySettings->setRespectStoragePage(false);
        $this->setDefaultQuerySettings($querySettings);
    }


    public function findAllIgnoreEnableFields(): QueryResultInterface|array
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(false);

        $typo3DbQueryParser = GeneralUtility::makeInstance(Typo3DbQueryParser::class);
/*        $queryBuilder = $typo3DbQueryParser->convertQueryToDoctrineQueryBuilder($query);
        DebuggerUtility::var_dump($queryBuilder->getSQL());
        DebuggerUtility::var_dump($queryBuilder->getParameters());
*/
        return $query->execute();
    }
}
