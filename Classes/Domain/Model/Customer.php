<?php

declare(strict_types=1);

namespace bytesinmotion\B4b\Domain\Model;


/**
 * This file is part of the "b4b" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2025 
 */

/**
 * Customer
 */
class Customer extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * company
     *
     * @var string
     */
    protected $company;

    /**
     * sector
     *
     * @var \bytesinmotion\B4b\Domain\Model\Sectors
     */
    protected $sector;

    /**
     * Returns the company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Sets the company
     *
     * @param string $company
     * @return void
     */
    public function setCompany(string $company)
    {
        $this->company = $company;
    }

    /**
     * Returns the sector
     *
     * @return \bytesinmotion\B4b\Domain\Model\Sectors
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Sets the sector
     *
     * @param \bytesinmotion\B4b\Domain\Model\Sectors $sector
     * @return void
     */
    public function setSector(\bytesinmotion\B4b\Domain\Model\Sectors $sector)
    {
        $this->sector = $sector;
    }
}
