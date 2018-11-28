<?php


namespace App\Admin;



use App\Entity\DestinationCategory;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

use Symfony\Component\Form\Extension\Core\Type\TextType;

class DestinationCategoryAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper
            ->add('name',TextType::class,['label'=>'Category Name : '])
        ;

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('name')

        ;
    }

    public function toString($object)
    {
        return $object instanceof DestinationCategory
            ? $object->getName()
            : 'Destination'; // shown in the breadcrumb on the create view
    }
}