<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Form\Type\Translation;

use BitBag\SyliusCmsPlugin\Entity\MediaInterface;
use BitBag\SyliusCmsPlugin\Form\Type\MediaAutocompleteChoiceType;
use BitBag\SyliusCmsPlugin\Form\Type\WysiwygType;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

final class PageTranslationType extends AbstractResourceType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'bitbag_sylius_cms_plugin.ui.name',
            ])
            ->add('slug', TextType::class, [
                'label' => 'bitbag_sylius_cms_plugin.ui.slug',
            ])
            ->add('breadcrumb', TextType::class, [
                'label' => 'bitbag_sylius_cms_plugin.ui.breadcrumb',
                'required' => false,
            ])
            ->add('nameWhenLinked', TextType::class, [
                'label' => 'bitbag_sylius_cms_plugin.ui.name_when_linked',
                'required' => false,
            ])
            ->add('descriptionWhenLinked', TextareaType::class, [
                'label' => 'bitbag_sylius_cms_plugin.ui.description_when_linked',
                'required' => false,
            ])
            ->add('image', MediaAutocompleteChoiceType::class, [
                'label' => 'bitbag_sylius_cms_plugin.ui.image',
                'required' => false,
                'media_type' => MediaInterface::IMAGE_TYPE,
            ])
            ->add('metaKeywords', TextareaType::class, [
                'label' => 'bitbag_sylius_cms_plugin.ui.meta_keywords',
                'required' => false,
            ])
            ->add('metaDescription', TextareaType::class, [
                'label' => 'bitbag_sylius_cms_plugin.ui.meta_description',
                'required' => false,
            ])
            ->add('content', WysiwygType::class)
            ->add('title', TextType::class, [
                'label' => 'bitbag_sylius_cms_plugin.ui.title',
                'required' => false,
            ])
        ;
    }

    public function getBlockPrefix(): string
    {
        return 'bitbag_sylius_cms_plugin_page_translation';
    }
}
