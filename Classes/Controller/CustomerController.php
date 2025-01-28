<?php

declare(strict_types=1);

namespace bytesinmotion\B4b\Controller;


/**
 * This file is part of the "b4b" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2025
 */

/**
 * CustomerController
 */
class CustomerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * customerRepository
     *
     * @var \bytesinmotion\B4b\Domain\Repository\CustomerRepository
     */
    protected $customerRepository;


    /**
     * sectorsRepository
     *
     * @var \bytesinmotion\B4b\Domain\Repository\SectorsRepository
     */
    protected  $sectorsRepository;

    /**
     * moduleTemplate
     *
     * @var ModuleTemplate $moduleTemplate
     */
    protected $moduleTemplate;

    /**
     * moduleTemplateFactory
     *
     * @var ModuleTemplateFactory $moduleTemplateFactory
     */
    protected $moduleTemplateFactory;
    public function __construct()
    {
    }

    /**
     * @param \bytesinmotion\B4b\Domain\Repository\CustomerRepository $customerRepository
     */
    public function injectCustomerRepository(\bytesinmotion\B4b\Domain\Repository\CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }


    /**
     * @param \bytesinmotion\B4b\Domain\Repository\SectorsRepository $sectorsRepository
     */
    public function injectSectorsRepository(\bytesinmotion\B4b\Domain\Repository\SectorsRepository $sectorsRepository)
    {
        $this->sectorsRepository = $sectorsRepository;
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $customers = $this->customerRepository->findAll();
        $this->view->assign('customers', $customers);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \bytesinmotion\B4b\Domain\Model\Customer $customer
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\bytesinmotion\B4b\Domain\Model\Customer $customer): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('customer', $customer);
        return $this->htmlResponse();
    }

    /**
     * action new
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function newAction(): \Psr\Http\Message\ResponseInterface
    {
        $sectorss = $this->sectorsRepository->findAll();
        $this->view->assign('sectors', $sectorss);

        return $this->htmlResponse();
    }

    /**
     * action create
     *
     * @param \bytesinmotion\B4b\Domain\Model\Customer $newCustomer
     */
    public function createAction(\bytesinmotion\B4b\Domain\Model\Customer $newCustomer): \Psr\Http\Message\ResponseInterface
    {
//        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
//        $this->customerRepository->add($newCustomer);
        return $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \bytesinmotion\B4b\Domain\Model\Customer $customer
     * @TYPO3\CMS\Extbase\Annotation\IgnoreValidation("customer")
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function editAction(\bytesinmotion\B4b\Domain\Model\Customer $customer): \Psr\Http\Message\ResponseInterface
    {
        $sectorss = $this->sectorsRepository->findAll();
        $this->view->assign('sectors', $sectorss);
        $this->view->assign('customer', $customer);


        return $this->htmlResponse();
    }

    /**
     * action update
     *
     * @param \bytesinmotion\B4b\Domain\Model\Customer $customer
     */
    public function updateAction(\bytesinmotion\B4b\Domain\Model\Customer $customer): \Psr\Http\Message\ResponseInterface
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->customerRepository->update($customer);
        return $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \bytesinmotion\B4b\Domain\Model\Customer $customer
     */
    public function deleteAction(\bytesinmotion\B4b\Domain\Model\Customer $customer): \Psr\Http\Message\ResponseInterface
    {
//        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
//        $this->customerRepository->remove($customer);
        return $this->redirect('list');
    }

    /**
     * @return void
     */
    protected function initializeAction()
    {

    }
}
