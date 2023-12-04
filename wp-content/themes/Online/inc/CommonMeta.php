<?php

use Carbon_Fields\Field;

class CommonMeta
{
	public static function generalMeta (): array
	{
		return [
			Field::make('separator', 'cf_core', __('Основное')),
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
			Field::make('textarea', 'cf_warning', __('Предупреждение под первым экраном'))
				->set_width(50),
			Field::make('separator', 'cf_scripts', __('Встраиваемые скрипты')),
			Field::make("header_scripts", "cf_header_script", __('Head Meta')),
			Field::make("footer_scripts", "cf_footer_script", __('Body Meta')),
		];
	}
	public static function titleMeta (): array
	{
		return [
			Field::make('separator', 'cf_title_s1', __('Первый экран')),
			Field::make('text', 'cf_title_title', __('Заголовок страницы'))
				->set_width(50),
			Field::make('textarea', 'cf_title_sub', __('Подзаголовок страницы'))
				->set_width(50),

			Field::make('separator', 'cf_title_s2', __('Наша помощь')),
			Field::make('text', 'cf_title_ourhelp', __('Заголовок "кому нужна наша помощь"'))
				->set_width(50),

			Field::make('separator', 'cf_title_s3', __('Перелинковка')),
			Field::make('text', 'cf_title_relink', __('Заголовок перелинковки')),

			Field::make('separator', 'cf_title_s4', __('TTP1 (кампутерок)')),
			Field::make('text', 'cf_title_ttp1', __('Заголовок'))
				->set_width(40),
			Field::make('rich_text', 'cf_title_ttp1sub', __('Текст'))
				->set_width(60),

			Field::make('separator', 'cf_title_s5', __('TTP2 (калькуль)')),
			Field::make('text', 'cf_title_ttp2', __('Заголовок'))
				->set_width(40),
			Field::make('rich_text', 'cf_title_ttp2_sub', __('Текст'))
				->set_width(60),

			Field::make('separator', 'cf_title_s6', __('TTP3 (человеки)')),
			Field::make('text', 'cf_title_ttp3', __('Заголовок'))
				->set_width(40),
			Field::make('rich_text', 'cf_title_ttp3_sub', __('Текст'))
				->set_width(60),
		];
	}
	public static function faqMeta (): array
	{
		return [
			Field::make('text', 'cf_faq_title', __('Заголовок')),
			Field::make('text', 'cf_faq_sub', __('Подзаголовок')),
			Field::make('complex', 'cf_faq_accrd', __('Вкладки FAQ'))
				->set_layout('tabbed-vertical')
				->set_width(10)
				->add_fields(
					array(
						Field::make('textarea', 'cf_faq_t', __('Название вкладки')),
						Field::make('complex', 'cf_faq_qa', __('Вопрос - Ответ'))
							->set_layout('tabbed-horizontal')
							->add_fields(
								array(
									Field::make('textarea', 'cf_faq_quest', __('Вопрос'))
										->set_width(20),
									Field::make('rich_text', 'cf_faq_answer', __('Ответ'))
										->set_width(70),
								)
							)
					)
				)
				->set_header_template('
				<% if (cf_faq_t) { %>
					<%- cf_faq_t %>
			  	<% } else { %>
					<%- "Name" %>
				<% } %>
				')
		];
	}
	public static function stagesMeta (): array
	{
		return [
			Field::make('text', 'cf_stages_title', __('Заголовок')),
			Field::make('complex', 'cf_stages_accrd', __('Стадьи'))
				->set_layout('tabbed-vertical')
				->set_width(10)
				->add_fields(
					array(
						Field::make('text', 'cf_stages_t', __('Название')),
						Field::make('textarea', 'cf_stages_s', __('Описание'))
					)
				)
				->set_header_template('
				<% if (cf_stages_t) { %>
					<%- cf_stages_t %>
			  	<% } else { %>
					<%- "Name" %>
				<% } %>
				')
		];
	}
	public static function onlineTypesMeta (): array
	{
		return [
			Field::make('text', 'cf_onlinet_title', __('Заголовок')),
			Field::make('text', 'cf_onlinet_sub', __('Подзаголовок')),
			Field::make('complex', 'cf_onlinet_accrd', __('Онлайн типы работ (3шт)'))
				->set_layout('tabbed-vertical')
				->set_max(3)
				->set_width(10)
				->add_fields(
					array(
						Field::make('text', 'cf_onlinet_t', __('Название типа')),
						Field::make('textarea', 'cf_onlinet_s', __('Описание'))
					)
				)
				->set_header_template('
				<% if (cf_onlinet_t) { %>
					<%- cf_onlinet_t %>
			  	<% } else { %>
					<%- "Name" %>
				<% } %>
				')
		];
	}
	public static function betterMeta (): array
	{
		return [
			Field::make('text', 'cf_better_title', __('Заголовок')),
			Field::make('text', 'cf_better_sub', __('Подзаголовок')),
			Field::make('complex', 'cf_better_accrd', __('Почему мы лучше (6 карточек)'))
				->set_layout('tabbed-vertical')
				->set_max(6)
				->set_width(10)
				->add_fields(
					array(
						Field::make('text', 'cf_better_t', __('Название')),
						Field::make('textarea', 'cf_better_s', __('Описание'))
					)
				)
				->set_header_template('
				<% if (cf_better_t) { %>
					<%- cf_better_t %>
			  	<% } else { %>
					<%- "Name" %>
				<% } %>
				')
		];
	}
	public static function guaranteesMeta (): array
	{
		return [
			Field::make('text', 'cf_guarantees_title', __('Заголовок')),
			Field::make('text', 'cf_guarantees_sub', __('Подзаголовок')),
			Field::make('complex', 'cf_guarantees_accrd', __('Гарантии (6 карточек)'))
				->set_layout('tabbed-vertical')
				->set_max(6)
				->set_width(10)
				->add_fields(
					array(
						Field::make('text', 'cf_guarantees_t', __('Название')),
						Field::make('textarea', 'cf_guarantees_s', __('Описание'))
					)
				)
				->set_header_template('
				<% if (cf_guarantees_t) { %>
					<%- cf_guarantees_t %>
			  	<% } else { %>
					<%- "Name" %>
				<% } %>
				')
		];
	}
	public static function advantMeta (): array
	{
		return [
			Field::make('text', 'cf_advant_title', __('Заголовок')),
			Field::make('rich_text', 'cf_advant_plus', __('Плюсы')),
			Field::make('rich_text', 'cf_advant_minus', __('Минусы')),
		];
	}
	public static function chainMeta (): array
	{
		return [
			Field::make('text', 'cf_chain_title', __('Заголовок')),
			Field::make('complex', 'cf_chain_accrd', __('Цепочка как это работает'))
				->set_layout('tabbed-vertical')
				->set_max(4)
				->set_width(10)
				->add_fields(
					array(
						Field::make('text', 'cf_chain_t', __('Название')),
						Field::make('textarea', 'cf_chain_s', __('Описание'))
					)
				)
				->set_header_template('
				<% if (cf_chain_t) { %>
					<%- cf_chain_t %>
			  	<% } else { %>
					<%- "Name" %>
				<% } %>
				')
		];
	}
	public static function reviewMeta (): array
	{
		return [
			Field::make('text', 'cf_review_title', __('Заголовок')),
			Field::make('text', 'cf_review_sub', __('Подзаголовок')),
			Field::make('complex', 'cf_review_slider', __('Отзывы'))
				->set_layout('tabbed-horizontal')
				->set_width(10)
				->add_fields(
					array(
						Field::make('image', 'image', __('Картинка'))
							->set_type('image')
							->set_value_type('url'),
					)
				)
		];
	}
}