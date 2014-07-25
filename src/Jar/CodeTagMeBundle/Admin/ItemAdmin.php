<?php

namespace Jar\CodeTagMeBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Description of ItemAdmin
 *
 * @author Johan AR <j3valentin@gmail.com>
 */
class ItemAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('albumSection', 'entity', array(
                'class' => 'Jar\CodeTagMeBundle\Entity\AlbumSection'
            ))
            ->add('name')
            ->add('description')
            ->add('image')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('albumSection')
            ->add('name')
            ->add('description')
            ->add('image')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('albumSection')
            ->addIdentifier('name')
            ->add('description')
            ->add('image')
        ;
    }

}
