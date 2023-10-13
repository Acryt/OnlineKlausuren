<?php

use Carbon_Fields\Field;

class CommonMeta
{
	public static function generalMeta (): array
	{
		return [
			Field::make('text', 'cf_phone', __('Телефон'))
				->help_text('Указывается глобально для всего сайта')
				->set_width(30),
			Field::make('text', 'cf_whatsapp', __('WhatsApp'))
				->help_text('Указывается глобально для всего сайта')
				->set_width(30),
			Field::make('text', 'cf_mail', __('Почта'))
				->help_text('Указывается глобально для всего сайта')
				->set_width(30),
			Field::make('text', 'cf_address', __('Адрес'))
				->set_width(30),
			Field::make('text', 'cf_work', __('Режим работы'))
				->set_width(30),
			Field::make('text', 'cf_copy', __('Копирайт'))
				->set_width(30),
			Field::make('text', 'cf_register', __('Ссылка на регистратор'))
				->set_width(30),
			Field::make('separator', 'cf_links', __('Социальные сети')),
			Field::make('text', 'cf_facebook', __('Facebook'))
				->set_width(30),
			Field::make('text', 'cf_skype', __('Skype'))
				->set_width(30),
			Field::make('text', 'cf_linkedin', __('LinkedIn'))
				->set_width(30),
			Field::make('text', 'cf_twitter', __('Twitter'))
				->set_width(30),
			Field::make('text', 'cf_instagram', __('Instagram'))
				->set_width(30),
			Field::make("header_scripts", "cf_header_script", __('Head Meta')),
			Field::make("footer_scripts", "cf_footer_script", __('Footer Meta')),
		];
	}
	public static function faqAccrdMeta (): array
	{
		return [
			Field::make('text', 'cf_afaq_title', __('Заголовок')),
			Field::make('complex', 'cf_afaq_accrd', __('Вкладки FAQ'))
				->set_layout('tabbed-vertical')
				->set_width(10)
				->add_fields(
					array(
						Field::make('textarea', 'cf_afaq_t', __('Название вкладки')),
						Field::make('complex', 'cf_afaq_qa', __('Вопрос - Ответ'))
							->set_layout('tabbed-horizontal')
							->add_fields(
								array(
									Field::make('textarea', 'cf_afaq_quest', __('Вопрос'))
										->set_width(20),
									Field::make('rich_text', 'cf_afaq_answer', __('Ответ'))
										->set_width(70),
								)
							)
					)
				)
				->set_header_template('
				<% if (cf_afaq_t) { %>
					<%- cf_afaq_t %>
			  	<% } else { %>
					<%- "Name" %>
				<% } %>
				')
		];
	}
	public static function pageMeta (): array
	{
		return [
			Field::make('text', 'cf_page_title', __('Заголовок')),
			Field::make('text', 'cf_page_subtitle', __('Подзаголовок')),
		];
	}
}