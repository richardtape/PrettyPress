<?php
/**
 * @package PrettyPress
 */

/*
The MIT License (MIT)

Copyright (c) 2013 evasivesoftware.com

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/


//Defend our stuff!
if ( ! defined('ABSPATH') ) { exit; }

//This is the edit post / page hooking page.
//Everything on this page will appear on the admin back end.

global $post;
?>

<div class="prettypress_warnings" id="prettypress_warnings"></div>

<div class="prettypress_wrapper" id="prettypress_wrapper">
	<div class="prettypress_resize" id="resize"><div class="border"></div></div>
	
	<a href="#" id="prettypress_exit">&#8592 Back to Wordpress</a>
	
	<div class="prettypress_preview_container" id="prettypress_preview_container">
		<iframe  id="prettypress_iframe" class="prettypress_iframe" src=""></iframe>
	</div>
</div>
<div id="prettypress_meta">
	<input type="hidden" id="prettypress_post_id" value="<?php echo $post->ID; ?>" />
	<input type="hidden" id="prettypress_post_permalink" value="<?php echo get_permalink( $post->ID ); ?>" />
</div>

<script src="<?php echo PRETTYPRESS_BASE_URL; ?>/assets/js/prettypress.js"></script>
<script src="<?php echo PRETTYPRESS_BASE_URL; ?>/assets/js/prettypress_hooks.js"></script>
<script src="<?php echo PRETTYPRESS_BASE_URL; ?>/assets/js/prettypress_resize.js"></script>