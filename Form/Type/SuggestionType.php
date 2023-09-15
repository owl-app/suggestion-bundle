<?php

declare(strict_types=1);

namespace Owl\Bundle\SuggestionBundle\Form\Type;

use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

final class SuggestionType extends AbstractResourceType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'owl.form.common.name',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'owl.form.common.description',
            ]);
    }

    /**
     * @psalm-return 'owl_suggestion'
     */
    public function getBlockPrefix(): string
    {
        return 'owl_suggestion';
    }
}
