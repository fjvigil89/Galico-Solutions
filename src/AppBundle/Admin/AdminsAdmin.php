<?php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Entity\Localnumbers;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

final class AdminsAdmin extends AbstractAdmin
{

  
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('firstname', TextType::class);
        $formMapper->add('lastname', TextType::class);
        $formMapper->add('email', TextType::class);
        $formMapper->add('password', TextType::class);
        $formMapper->add('issuperadmin', TextType::class);
        $formMapper->add('adminid', TextType::class);        
        $formMapper->add('localnumber', EntityType::class, [
            'class' => Localnumbers::class,
            'choice_label' => 'city',
        ]);
        

        
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('firstname');
    }

    protected function configureListFields(ListMapper $listMapper)
    {        
        $listMapper
            ->addIdentifier('firstname')
            ->add('lastname')
            ->add('email')
            ->add('password')
            ->add('issuperadmin')
            ->add('adminid')
            ->add('localnumber')
            // add custom action links
            ->add('_action', 'actions', [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ]
            ])
        ;
    }
}