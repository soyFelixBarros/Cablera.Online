<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CableraOnline
 */

?>
	</main><!-- .container -->

	<footer class="blog-footer" role="contentinfo">
		<p>Desarrollado por <a href="https://felixbarros.blog">Felix Barros</a>.</p>
	</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.5/jquery.timeago.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.5/locales/jquery.timeago.es.min.js"></script>
	<script>
	$( document ).ready(function() {
		$("time.timeago").timeago();
	});
	</script>
</body>
</html>
