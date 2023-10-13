<?php

use Carbon_Fields\Container;

class GeneralMeta
{
	public function __construct ()
	{
		add_action('carbon_fields_register_fields', [$this, 'generalOptionsMeta']);
		add_action('carbon_fields_register_fields', [$this, 'pageMeta']);
		add_action('carbon_fields_register_fields', [$this, 'postMeta']);
		// add_action('carbon_fields_theme_options_container_saved', [$this, 'generate_authors_xml']); // генерация sitemap авторов
	}

	public function generalOptionsMeta ()
	{
		Container::make('theme_options', __('Options'))
			->add_tab(__('Global Options'), CommonMeta::generalMeta())
		;
		Container::make('theme_options', __('FAQ'))
			->add_tab(__('FAQ'), CommonMeta::faqAccrdMeta())
		;
	}
	public function pageMeta ()
	{
		Container::make('post_meta', 'cf_page', 'Page Options')
			// ->set_context('carbon_fields_after_title')
			->where('post_type', '=', 'page')
			->add_tab(__('Switches'), CommonMeta::pageMeta())
			// ->add_tab(__('Meta'), CommonMeta::metaMeta())
			// ->add_tab(__('First Screen'), CommonMeta::firstMeta())
			// ->add_tab(__('FAQ'), CommonMeta::faqMeta())
			// ->add_tab(__('Accordion'), CommonMeta::accrdMeta())
			// ->add_tab(__('Content'), CommonMeta::contentMeta())
			// ->add_tab(__('SEO x2'), CommonMeta::seoMeta())
			// ->add_tab(__('Price'), CommonMeta::priceMeta())
			// ->add_tab(__('Rating bottom'), CommonMeta::rateMeta())
			// ->add_tab(__('Relink'), CommonMeta::relinkMeta())
		;
	}
	public function postMeta ()
	{
		Container::make('post_meta', 'cf_post', 'Post Options')
			// ->set_context('carbon_fields_after_title')
			// ->where('post_type', '=', 'post')
			// ->add_tab(__('Switches'), CommonMeta::switchMeta())
			// ->add_tab(__('First Screen'), CommonMeta::firstMeta())
			// ->add_tab(__('FAQ'), CommonMeta::faqMeta())
			// ->add_tab(__('Accordion'), CommonMeta::accrdMeta())
			// ->add_tab(__('Content'), CommonMeta::contentMeta())
			// ->add_tab(__('SEO x2'), CommonMeta::seoMeta())
		;
	}
}

new GeneralMeta();