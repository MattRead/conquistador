<?php

class Conquistador extends Theme
{
	const OPTION_NAME = 'Conquistador';

	private $social_media_icons = array(
		'twitter' => array('l', 'https://twitter.com/%s', 'Twitter'),
		'lastfm' => array('6', 'http://www.last.fm/user/%s', 'Last.fm'),
		'facebook' => array('f', 'http://facebook.com/%s', 'Facebook'),
		'flickr' => array('n', 'http://www.flickr.com/photos/%s', 'Flickr'),
		'viddler' => array('v', 'http://www.viddler.com/channel/%s', 'Viddler'),
		'googleplus' => array('1', 'https://plus.google.com/%s/posts', 'Google+')
		);

	/**
	 * function constructor
	 */
	public function __construct( $themedata )
	{
		parent::__construct( $themedata );
		$this->assign( 'tagline', Options::get('tagline') );
		$this->apply_formatters();
		$this->set_title();
		$this->load_options();
	}

	private function load_options()
	{
		$social_media_icons = array();
		foreach ( $this->social_media_icons as $name => $media ) {
			list($key, $url, $label) = $media;
		    if ( $option = Options::get(self::OPTION_NAME . "__{$name}_name") ) {
				$social_media_icons[$name] = array($key, sprintf($url, $option), $label );
		    }
		}
		$this->assign('social_media_icons', $social_media_icons);
		$this->assign('author_name', Options::get(self::OPTION_NAME . '__author_name'));
		$this->assign('author_email', Options::get(self::OPTION_NAME . '__author_email', 'webmaster'));
		$this->assign('copy_year', Options::get(self::OPTION_NAME . '__copy_year', '2012'));
	}

	private function apply_formatters()
	{
		Format::apply( 'summarize', 'post_content_summary', 200, 2 );
		Format::apply( 'summarize', 'post_content_microsummary', 50, 1 );

		Format::apply( 'tabasamu', 'post_content_summary' );
		Format::apply( 'tabasamu', 'post_content_microsummary' );

		Format::apply( 'do_highlight', 'post_content_summary' );
		Format::apply( 'do_highlight', 'post_content_microsummary' );

		Format::apply( 'nice_date', 'post_pubdate_out_short', 'd M Y' );
		Format::apply( 'nice_date', 'post_modified_out_short', 'd M Y' );
		Format::apply( 'nice_date', 'post_pubdate_out', 'l, F jS Y' );
		Format::apply( 'nice_date', 'post_modified_out', 'l, F jS Y' );
		Format::apply( 'nice_date', 'comment_date_out', 'l, F jS Y' );

		Format::apply( 'autop', 'comment_content_out', 'l, F jS Y' );
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
		if ( isset($this->posts) && count($this->posts) ) {
			$post = $this->post instanceof Post ? $this->post : $this->posts[0];
			if ( $this->post instanceof Post && count($this->posts) == 1 ) {
				$this->set_title( $post->title );
				if ( $post->typename == 'entry' ) {
					$this->assign( 'next', $post->ascend() );
					$this->assign( 'previous', $post->descend() );
				}
				if ( count($post->tags) ) {
					$related = Posts::get(array(
						'vocabulary' =>  array( 'any' => $post->tags),
						'content_type' => $post->content_type,
						'status' => Post::status('published'),
						'not:id' => $post->id,
                        'limit' => 5,
                        'orderby' => 'Rand()'
    				));
					$this->assign( 'related_posts', $related );
				}
			}
		}
		elseif ( URL::get_matched_rule() == null ) {
			$this->set_title('Page Not Found');
		}
		parent::add_template_vars();
	}

	public function act_display_tag( $user_filters= array() )
	{
		$this->set_title( 'Posts Tagged With "' . Controller::get_var( 'tag' ) . '"' );
		return parent::act_display_tag( $user_filters );
	}

	public function act_display_date( $user_filters = array() )
	{
		$this->set_title( 'Posts By Date' );
		parent::act_display_date($user_filters);
	}

	public function act_search( $user_filters = array() )
	{
		$this->set_title( 'Search Results For "' . Controller::get_var('criteria') . '"' );
		return parent::act_search($user_filters);
	}

    public function act_display_blogroll() {
        $this->set_title('Blogroll');
        $this->display('blogroll.multiple');
    }

	public function theme_paged_nav( $theme )
	{
		static $nav = null;
		if( $nav == null ) {
				$prev = implode( '', ( array ) $theme->prev_page_link_return( '&larr;' ) );
				$mid = implode( '', ( array ) $theme->page_selector_return( null, array( 'leftSide' => 2, 'rightSide' => 2 ) ) );
				$next = implode( '', ( array ) $theme->next_page_link_return( '&rarr;' ) );
			$nav = "<nav>Pages: $prev $mid $next </nav>";
		}
		return $nav;
	}

    public function action_theme_ui( $theme )
    {
        $ui = new FormUI( __CLASS__ );
        // This is a fudge as I only need to add a little bit of styling to make things look nice.
        $ui->append( 'static', 'style', '<style type="text/css">#conquistador .formcontrol { line-height: 2.5em; }</style>');
        $social = $ui->append( 'fieldset', 'social', 'Social Media Links');
        foreach ($this->social_media_icons as $media => $data) {
            $social->append('text', "{$media}_name", __CLASS__."__{$media}_name", "$media username:", 'optionscontrol_text');
            $social->{$media.'_name'}->helptext = _t("Set your $media username for social media icon link.");
        }

        $copy = $ui->append( 'fieldset', 'copy', 'Author Copyright/Signature');
        $copy->append('text', "author_name", __CLASS__."__author_name", "Author Name:", 'optionscontrol_text');
        $copy->author_name->helptext = _t("Author name to appear in signature on site footer.");
        $copy->append('text', "author_email", __CLASS__."__author_email", "Author Email:", 'optionscontrol_text');
        $copy->author_email->helptext = _t("Author email to appear in signature on site footer.");
        $copy->append('text', "copy_year", __CLASS__."__copy_year", "Copyright Year:", 'optionscontrol_text');
        $copy->copy_year->helptext = _t("Copyright year to appear in signature on site footer.");

        // Save
        $ui->append( 'submit', 'save', _t( 'Save' ) );
        $ui->set_option( 'success_message', _t( 'Options saved' ) );
        $ui->out();
    }

    public function action_template_header_10()
    {
        $assets = $this->load_assets();
        foreach($assets['print'] as $print) {
            Stack::add('template_stylesheet', array($print , 'print', array('rel' => 'text/css')));
        }
    }
}

?>
