<?php

namespace Ibw\JobeetBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;

class CategoryAdmin extends Admin
{
    // setup the default sort column and order
    /**
     * 
     * @var unknown
     */
    protected $datagridValues = array(
        '_sort_order' => 'ASC',
        '_sort_by' => 'name'
    );
 
    /**
     * (non-PHPdoc)
     * @see \Sonata\AdminBundle\Admin\Admin::configureFormFields()
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('slug')
        ;
    }
 
    /**
     * (non-PHPdoc)
     * @see \Sonata\AdminBundle\Admin\Admin::configureDatagridFilters()
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
        ;
    }
 
    /**
     * (non-PHPdoc)
     * @see \Sonata\AdminBundle\Admin\Admin::configureListFields()
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('slug')
        ;
    }
}