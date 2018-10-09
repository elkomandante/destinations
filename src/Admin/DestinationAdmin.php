<?php


namespace App\Admin;



use App\Entity\Destination;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DestinationAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper
            ->add('slug',TextType::class,['label'=>'Slug'])
            ->add('introtext',TextareaType::class,['required'=>false])
            ->add('file',FileType::class,['required'=>false ,'data_class'=>null,'label'=>'Cover Image'])

        ;

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('slug');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('slug')

        ;
    }

    public function toString($object)
    {
        return $object instanceof Destination
            ? $object->getSlug()
            : 'Destination'; // shown in the breadcrumb on the create view
    }
}