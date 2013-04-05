<?php

//namespace Habari;

class Conquistador extends Theme
{
	const OPTION_NAME = 'Conquistador';
	const REWRITE_NAME = 'conquistador_archives';
	const ARCHIVES_CACHE_EXPIRE = 3600;

	private $social_media_icons = array(
		'twitter' => array('l', 'https://twitter.com/%s', 'Twitter'),
		'lastfm' => array('6', 'http://www.last.fm/user/%s', 'Last.fm'),
		'facebook' => array('f', 'http://facebook.com/%s', 'Facebook'),
		'flickr' => array('n', 'http://www.flickr.com/photos/%s', 'Flickr'),
		'vimeo' => array('v', 'https://vimeo.com/%s', 'Vimeo'),
		'googleplus' => array('1', 'https://plus.google.com/%s/posts', 'Google+'),
		'skype' => array('h', 'skype:%s', 'Skype'),
		'github' => array('(', 'https://github.com/%s', 'Github'),
		);

	/**
	* function constructor
	*/
	public function action_init_theme( $theme )
	{
		Format::apply( 'tag_and_list', 'post_tags_out' );
		Format::apply( 'nice_date', 'post_pubdate_out_short', 'd M Y' );
		Format::apply( 'nice_date', 'post_modified_out_short', 'd M Y' );
		Format::apply( 'nice_date', 'post_pubdate_out', 'l, F jS Y' );
		Format::apply( 'nice_date', 'post_modified_out', 'l, F jS Y' );
		Format::apply( 'nice_date', 'comment_date_out', 'l, F jS Y' );

		$this->set_title();
		$this->assign( 'tagline', Options::get('tagline') );

		Stack::dependent('template_header_javascript', 'template_footer_javascript');
		Stack::remove('template_header_javascript', 'jquery');
		Stack::remove('template_footer_javascript', 'jquery');
		$this->add_script( 'footer', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', 'jquery' );
		$this->add_style( 'header', array('http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic|Source+Code+Pro', 'screen'), 'conquistador_fonts');
		Stack::add('template_header_javascript', array('http://cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.js', null, '<!--[if lt IE 9]>%s<![endif]-->'), 'html5_shiv');

		if ( defined("DEBUG_THEME") && DEBUG_THEME == true ) {
			$this->add_script( 'footer', Site::get_url('theme') . '/js/site.js', 'conquistador', 'jquery' );
			$this->add_script( 'footer', Site::get_url('theme') . '/js/jquery.fancybox-1.3.4.js', 'fancybox', 'jquery' );
			$this->add_script( 'footer', Site::get_url('theme') . '/js/jquery.details.min.js', 'details', 'jquery' );
			$this->add_script( 'footer', Site::get_url('theme') . '/js/easteregg.js', 'conquistador_easteregg', 'conquistador' );

			$this->add_style( 'header', array(Site::get_url('theme') . '/css/screen.css', 'screen'), 'conquistador', 'conquistador_fonts');
			$this->add_style( 'header', array(Site::get_url('theme') . '/css/tables.css', 'screen'), 'conquistador-tables', 'conquistador');
			$this->add_style( 'header', array(Site::get_url('theme') . '/css/syntax.css', 'screen'), 'conquistador-syntax', 'conquistador');
			$this->add_style( 'header', array(Site::get_url('theme') . '/css/blocks.css', 'screen'), 'conquistador-blocks', 'conquistador');
			$this->add_style( 'header', array(Site::get_url('theme') . '/css/socialico.css', 'screen'), 'socialico', 'conquistador');
			$this->add_style( 'header', array(Site::get_url('theme') . '/css/handheld.css', 'screen'), 'conquistador-handheld', 'conquistador');
			$this->add_style( 'header', array(Site::get_url('theme') . '/css/jquery.fancybox-1.3.4.css', 'screen'), 'fancybox', 'conquistador');
		}
		else {
			$this->add_script( 'footer', Site::get_url('theme') . '/js/site-min.js', 'conquistador', 'jquery' );
			$this->add_style( 'header', array(Site::get_url('theme') . '/css/screen-min.css', 'screen'), 'conquistador');
		}
	}

	public function set_title( $value = null )
	{
		if ($value) {
			$this->assign( 'title', $value .' - '. Options::get('title') );
		}
		else {
			$this->assign( 'title', Options::get('title') );
		}
	}

	public function add_template_vars()
	{
		if ( URL::get_matched_rule() == null ) {
			$this->set_title('Page Not Found');
		}
		parent::add_template_vars();
	}

	/**
	 * Output the custom headers
	 */
	public function action_template_header( Theme $theme )
	{
	    echo Options::get(self::OPTION_NAME . '__custom_headers') . "\n";
	}

	public function act_display_post( $user_filters = array() )
	{
		if ( isset($this->post) ) {
			$this->set_title( $this->post->title );
		}
		return parent::act_display_post( $user_filters );
	}

	public function act_display_tag( $user_filters = array() )
	{
		$this->set_title( 'Posts Tagged With "' . Controller::get_var( 'tag' ) . '"' );
		$tags = Tags::get_by_frequency(null, Post::type('entry'));
		$this->assign( 'tags', Format::tag_and_list($tags) );
		return parent::act_display_tag( $user_filters );
	}

	public function act_display_date( $user_filters = array() )
	{
		$date = $format = '';
		$this->set_title( 'Posts By Date' );

		if ( $year = Controller::get_var('year') ) {
			$date = $year;
			$format = 'Y';
		}

		if ( $month = Controller::get_var('month') ) {
			$date .= "-$month";
			$format = 'M ' . $format;
		}
		else {
			$date .= '-01';
		}

		if ( $day = Controller::get_var('day') ) {
			$date .= "-$day";
			$format = 'd ' . $format;
		}
		else {
			$date .= '-01';
		}

		try {
			$date = new HabariDateTime($date);
			$this->assign('date', $date->format($format));
		}
		catch ( Exception $e ) {}
		parent::act_display_date($user_filters);
	}

	public function act_search( $user_filters = array() )
	{
		$this->set_title( 'Search Results For "' . Controller::get_var('criteria') . '"' );
		return parent::act_search($user_filters);
	}

	public function theme_paged_nav( $theme )
	{
		static $nav = null;
		if( $nav == null ) {
			$prev = implode( '', ( array ) $theme->prev_page_link_return( '&larr;' ) );
			$mid = implode( '', ( array ) $theme->page_selector_return( null, array( 'leftSide' => 2, 'rightSide' => 2, 'hideIfSinglePage' => true ) ) );
			$next = implode( '', ( array ) $theme->next_page_link_return( '&rarr;' ) );
			$nav = $mid ? "<nav>Pages: $prev $mid $next </nav>" : '';
		}
		return $nav;
	}

	public function action_theme_ui( $theme )
	{
		$ui = new FormUI( __CLASS__ );

		$head = $ui->append( 'fieldset', 'heads', 'Custom Headers');
		$head->append('textarea', "custom_headers", __CLASS__."__custom_headers", "Custom HTML Headers:", 'optionscontrol_textarea');
		$head->custom_headers->helptext = _t("custom HTML headers to appear in <head>");
		$head->custom_headers->raw = true;


		// Save
		$ui->append( 'submit', 'save', _t( 'Save' ) );
		$ui->set_option( 'success_message', _t( 'Options saved' ) );
		$ui->out();
	}

	public function action_jambo_form( FormUI $form, Plugin $plugin )
	{
		$form->jambo_name->caption = $form->jambo_name->caption . ' <span class="required">*Required</span>';
		$form->jambo_email->caption = $form->jambo_email->caption . ' <span class="required">*Required</span>';
		$form->jambo_message->caption = $form->jambo_message->caption . ' <span class="required">*Required</span>';
	}

	public function action_form_comment( FormUI $form, Post $post, $context )
	{
		if ( $context == 'public' ) {
			$form->cf_content->caption = $form->cf_content->caption . ' <span class="required">*Required</span>';
		}
	}

	public function filter_block_list( $block_list )
	{
		$block_list['conquistador_related'] = _t( 'Related Posts (Conquistador)' );
		$block_list['conquistador_navigation'] = _t( 'Post Navigation (Conquistador)' );
		$block_list['conquistador_tags'] = _t( 'Post Tag List (Conquistador)' );
		$block_list['conquistador_signature'] = _t( 'Signature Line With Media Icons (Conquistador)' );
		$block_list['conquistador_copyright'] = _t( 'Copyright Declaration (Conquistador)' );
		$block_list['conquistador_menu'] = _t( 'Basic Main Menu (Conquistador)' );
		$block_list['conquistador_post_list'] = _t( 'Post Listing for Homepage (Conquistador)' );
		return $block_list;
	}

	public function action_block_form_conquistador_signature( $ui, $block )
	{
		// This is a fudge as I only need to add a little bit of styling to make things look nice.
		$ui->append( 'static', 'style', '<style type="text/css">#conquistador .formcontrol { line-height: 2.5em; }</style>');
		$social = $ui->append( 'fieldset', 'social', 'Social Media Links');
		foreach ($this->social_media_icons as $media => $data) {
			$social->append('text', "{$media}_name", $block, "$media username:", 'optionscontrol_text');
			$social->{$media.'_name'}->helptext = _t("Set your $media username for social media icon link.");
		}

		$copy = $ui->append( 'fieldset', 'copy', 'Author Signature');
		$copy->append('text', "author_name",$block, "Author Name:", 'optionscontrol_text');
		$copy->author_name->helptext = _t("Author name to appear in signature.");
		$copy->append('text', "author_email", $block, "Author Email:", 'optionscontrol_text');
		$copy->author_email->helptext = _t("Author email to appear in signature.");
	}

	public function action_block_content_conquistador_signature( $block, $theme )
	{
		$social_media_icons = array();
		foreach ( $this->social_media_icons as $name => $media ) {
			list($key, $url, $label) = $media;
			if ( $option = $block->{"{$name}_name"} ) {
				$social_media_icons[$name] = array($key, sprintf($url, $option), $label );
			}
		}
		$block->social_media_icons = $social_media_icons;
	}

	public function action_block_form_conquistador_copyright( $ui, $block )
	{
		$copy = $ui->append( 'fieldset', 'copy', 'Copyright Holder');
		$copy->append('text', "copy_holder",$block, "Copyright Holder:", 'optionscontrol_text');
		$copy->copy_holder->helptext = _t("Copyright holder to appear in signature.");
		$copy->append('text', "copy_year", $block, "Copyright Year:", 'optionscontrol_text');
		$copy->copy_year->helptext = _t("Copyright year to appear in signature.");
	}

	public function action_block_content_conquistador_navigation( $block, $theme )
	{
		if ( isset($theme->post) && $theme->post->typename == 'entry' ) {
			$block->next = $theme->post->ascend();
			$block->previous = $theme->post->descend();
		}
	}

	public function action_block_content_conquistador_related( $block, $theme )
	{
		if ( isset($theme->post) && count($theme->post->tags) ) {
			$post = $theme->post;
			$related = Posts::get(array(
				'vocabulary' =>  array( 'any' => $post->tags),
				'content_type' => $post->content_type,
				'status' => Post::status('published'),
				'not:id' => $post->id,
				'limit' => 5,
				'orderby' => 'Rand()'
			));
			$block->posts = $related;
		}
		else {
			$block->posts = array();
		}
	}

	public function filter_get_scopes($scopes)
	{
		$scope = new stdClass();
		$scope->criteria = array(
			array('request', 'display_home'),
		);
		$scope->name = 'Homepage';
		$scope->id = 69;
		$scope->priority = 0;
		$scopes['conquistador_homepage'] = $scope;

		$scope = new stdClass();
		$scope->criteria = array(
			array('request', 'display_entry'),
			array('request', 'display_page'),
			'or',
			array('request', 'display_post'),
			'or'
		);
		$scope->name = 'Single Post';
		$scope->id = 68;
		$scope->priority = 0;
		$scopes['conquistador_single'] = $scope;

		$scope = new stdClass();
		$scope->criteria = array(
			array('request', self::REWRITE_NAME),
		);
		$scope->name = 'Archives';
		$scope->id = 67;
		$scope->priority = 0;
		$scopes['conquistador_archives'] = $scope;

		return $scopes;
	}

	/**
	* @TODO add block to appropriate scopes
	*/
	public function action_theme_activated($theme_name, $theme)
	{
		$blocks = $this->get_blocks( 'site_navigation', 0, $this );
		if( count( $blocks ) == 0 ) {
			$block = new Block( array(
				'title' => _t( 'Basic Main Menu' ),
				'type' => 'conquistador_menu',
			) );
			$block->add_to_area( 'site_navigation' );
			$block->add_to_area( 'site_navigation', null, 68 );
			$block->add_to_area( 'site_navigation', null, 69 );
			Session::notice( _t( 'Added Basic Main Menu block to site_navigation area.' ) );
		}
		$blocks = $this->get_blocks( 'head', 0, $this );
		if( count( $blocks ) == 0 ) {
			$block = new Block( array(
				'title' => _t( 'Blog Posts' ),
				'type' => 'conquistador_post_list',
			) );
			$block->add_to_area( 'head', null, 69 );
			Session::notice( _t( 'Added Posts List block to head area.' ) );
		}
		$blocks = $this->get_blocks( 'foot', 0, $this );
		if( count( $blocks ) == 0 ) {
			$block = new Block( array(
				'title' => _t( 'Realted Posts' ),
				'type' => 'conquistador_related',
			) );
			$block->add_to_area( 'foot', null, 68 );
			Session::notice( _t( 'Added Realted Posts block to foot area.' ) );
		}
		$blocks = $this->get_blocks( 'split', 0, $this );
		if( count( $blocks ) == 0 ) {
			$block = new Block( array(
				'title' => _t( 'Previous/Next Post Navigation' ),
				'type' => 'conquistador_navigation',
			) );
			$block->add_to_area( 'split', null, 68 );
			Session::notice( _t( 'Added Post Navigation block to split area.' ) );

			$block = new Block( array(
				'title' => _t( 'Post Tags list' ),
				'type' => 'conquistador_tags',
			) );
			$block->add_to_area( 'split', null, 68 );
			Session::notice( _t( 'Added Post Navigation block to split area.' ) );
		}
		$blocks = $this->get_blocks( 'site_footer', 0, $this );
		if( count( $blocks ) == 0 ) {
			$block = new Block( array(
				'title' => _t( 'Copyright Declaration' ),
				'type' => 'conquistador_copyright',
			) );
			$block->add_to_area( 'site_footer' );
			$block->add_to_area( 'site_footer', null, 68 );
			$block->add_to_area( 'site_footer', null, 69 );
			Session::notice( _t( 'Added Copyright Declaration block to footer area.' ) );
		}

		if ( !RewriteRules::by_name(self::REWRITE_NAME) ) {
			$base = Plugins::filter(self::REWRITE_NAME . '_rewriterule_base', '');
			$rule = new RewriteRule( array(
				'name' => self::REWRITE_NAME,
				'parse_regex' => '%' . $base . 'archives(?:/(?P<year>.*))?$%',
				'build_str' => $base . 'archives(/{$year})',
				'handler' => 'UserThemeHandler',
				'action' => 'display_archives',
				'priority' => 1,
				'is_active' => 1,
				'rule_class' => RewriteRule::RULE_THEME,
				'description' => 'Conquistador archives.',
			) );
			$rule->insert();
		}
	}

	public function act_display_archives()
	{
		if ( Cache::has(self::OPTION_NAME . '__archives') ) {
			$cache = Cache::get(self::OPTION_NAME . '__archives');
			$collections = $cache['collections'];
			$years = $cache['collection_years'];
			$max_year = $cache['max_year'];
			$min_year = $cache['min_year'];
		}
		else {
			$years = DB::get_results( 'SELECT DISTINCT YEAR(FROM_UNIXTIME(pubdate)) AS year from {posts} WHERE status = ? AND content_type = ? ORDER BY year DESC', array(Post::status('published'), Post::type('entry')), 'QueryRecord' );

			$max_year = $years[0]->year;
			$min_year = $years[count($years)-1]->year;

			$collections = array();
			foreach ( $years as $y ) {
				$year = $y->year;
				$startDate = new HabariDateTime;
				$startDate->set_date($year, 1, 1);
				$endDate = clone $startDate;
				$endDate->modify('+1 year -1 day');

				$posts = Posts::get(array(
					'after' => $startDate,
					'before'=> $endDate,
					'content_type' => Post::type('entry'),
					'status' => Post::status('published'),
					'nolimit' => 1
				));
				if ( !count($posts) ) continue;

				$collection = new \stdClass;
				$collection->posts = $posts;
				$collection->start_month = $startDate;
				$collection->end_month = $endDate;
				$collection->description = $startDate->format('F jS, Y') . ' to ' . $endDate->format('F jS, Y');
				$collection->name = $year;
				$collection->posts_count = count($collection->posts);

				$collections[$year] = $collection;
			}
			$cache = array();
			$cache['max_year'] = $max_year;
			$cache['min_year'] = $min_year;
			$cache['collection_years'] = $years;
			$cache['collections'] = $collections;
			Cache::set( self::OPTION_NAME . '__archives', $cache, self::ARCHIVES_CACHE_EXPIRE );
		}

		$this->assign( 'collections', $collections );
		$this->assign( 'collection_years', $years );
		$this->assign( 'max_year', $max_year );
		$this->assign( 'min_year', $min_year );

		$this->set_title('The Archives (' . $min_year . ' to ' . $max_year . ')');
		$this->add_template_vars();
		$this->display('entry.archives');
	}

}

?>
