<?php

namespace App\Form;

use App\Entity\Actor;
use App\Entity\Director;
use App\Entity\Film;
use App\Entity\Genre;
use App\Repository\ActorRepository;
use App\Repository\GenreRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;

class FilmType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class)
            ->add('description', TextareaType::class)
            ->add('duree', TextType::class)
            ->add('date', DateType::class)            
            
            ->add('acteurs', EntityType::class,[
                'mapped' => true,
                'class' => Actor::class,
                'choice_label' => 'nom',                
                'label' => 'Acteurs',
                'multiple' => true            

            ])
            ->add('director', EntityType::class, [
                'mapped' => true,
                'class' => Director::class,
                'choice_label' => 'nom',
                'placeholder' => 'Directeurs',
                'label' => 'Directeurs'               
            ])
            ->add('genre', EntityType::class, [
                'mapped' => true,
                'class' => Genre::class,
                'choice_label' => 'nom',
                'placeholder' => 'Genres',
                'label' => 'Genres'                             
            ])
            ->add('imageFile', VichFileType::class)           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Film::class,
        ]);
    }
}
