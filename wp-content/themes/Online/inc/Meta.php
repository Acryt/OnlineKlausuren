<?php

use Carbon_Fields\Container;

class GeneralMeta
{
	public function __construct ()
	{
		add_action('carbon_fields_register_fields', [$this, 'generalOptionsMeta']);
		add_action('carbon_fields_register_fields', [$this, 'pageMeta']);
		// add_action('carbon_fields_theme_options_container_saved', [$this, 'generate_authors_xml']); // генерация sitemap авторов
	}

	public function generalOptionsMeta ()
	{
		Container::make('theme_options', __('Options'))
			->add_tab(__('Global Options'), CommonMeta::generalMeta())
			->add_tab(__('Reviews'), CommonMeta::reviewMeta())
			->add_tab(__('Stages'), CommonMeta::stagesMeta())
			->add_tab(__('Types'), CommonMeta::onlineTypesMeta())
			->add_tab(__('Better'), CommonMeta::betterMeta())
			->add_tab(__('Guarantees'), CommonMeta::guaranteesMeta())
			->add_tab(__('Advantages'), CommonMeta::advantMeta())
			->add_tab(__('How it works'), CommonMeta::chainMeta())
		;
		Container::make('theme_options', __('FAQ'))
			->add_tab(__('FAQ'), CommonMeta::faqMeta())
		;
	}
	public function pageMeta ()
	{
		Container::make('post_meta', 'cf_page', 'Page Options')
			// ->set_context('carbon_fields_after_title')
			->where('post_type', '=', 'page' || 'post')
			->add_tab(__('Страничные Title'), CommonMeta::titleMeta())
			// ->add_tab(__('Forms'), CommonMeta::formsMeta())
			->add_tab(__('Страничный FAQ'), CommonMeta::faqMeta())
		;
	}
}

new GeneralMeta();