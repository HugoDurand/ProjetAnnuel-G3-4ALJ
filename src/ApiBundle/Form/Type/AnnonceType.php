<?php

namespace ApiBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnnonceType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder->add('titre', TextType::class);
       $builder->add('description', TextareaType::class);
       $builder->add('iduser', IntegerType::class);
       $builder->add('photo', TextType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'dataclass' => 'AppBundle\Entity\Annonce',
            'csrf_protection' =>false,
            "allow_extra_fields" => true,
        ]);
    }

}