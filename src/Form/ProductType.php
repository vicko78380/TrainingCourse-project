<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('reference')
            ->add('price')
            ->add('picture_one')
            ->add('picture_two')
            ->add('picture_three')
            ->add('materials')
            ->add('stock')
            ->add('description')
            ->add('artisan_company')
            ->add('artisan_name')
            ->add('artisan_picture')
            ->add('artisan')
            ->add('customer')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
