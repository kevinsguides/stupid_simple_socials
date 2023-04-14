<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_stupidsimplesocials
 *
 * @copyright   (C) 2022 Kevin Olson <https://kevinsguides.com>
 * @license     MIT
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Factory;
use Joomla\CMS\Uri\Uri;

$document = Factory::getDocument();
if ($params->get('showpn')==1){
  $document->addScript('//assets.pinterest.com/js/pinit.js');
}



?>

<div id="sticky-socials">

<?php if ($params->get('showfb')==1) :?>

<span><div class="fb-share-button" 
data-href="<?php echo JUri::getInstance(); ?>" 
data-layout="button_count"
data-size="large">
</div></span>
<?php endif; ?>

<?php if ($params->get('showtw')==1) :?>
<span><a class="twitter-share-button"
  href="https://twitter.com/intent/tweet?text=<?php echo $params->get('twtext')?>"
  data-size="large">
Tweet</a></span>
<?php endif; ?>

<?php if ($params->get('showpn')==1) :?>
<span><a id="pinterest-save-button" href="https://www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" data-pin-tall="true"></a></span>
<?php endif; ?>

<?php if ($params->get('showln')==1) :?>
<span><a id="linkedin-share-button" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo JUri::getInstance(); ?>"
  target="popup" 
  onclick="window.open('https://www.linkedin.com/sharing/share-offsite/?url=<?php echo JUri::getInstance(); ?>','popup','width=600,height=600'); return false;">
  <i class="fab fa-linkedin"></i> Share
</a></span>
<?php endif; ?>
</div>

<script>
  <?php if ($params->get('showfb')==1) :?>
	(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
<?php endif; ?>
<?php if ($params->get('showtw')==1) :?>
window.twttr = (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0],
        t = window.twttr || {};
    if (d.getElementById(id)) return t;
    js = d.createElement(s);
    js.id = id;
    js.src = "https://platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js, fjs);

    t._e = [];
    t.ready = function(f) {
        t._e.push(f);
    };

    return t;
}(document, "script", "twitter-wjs"));
<?php endif;?>
</script>

<style>
#sticky-socials{
	display: flex;
	flex-wrap: wrap;
}

#sticky-socials > span {
  margin: 2px;
}

#linkedin-share-button{
	display: inline-block;
	border-radius: 3px;
	background: #036097;
	white-space: nowrap;
	color: white;
	padding: 2px;
	text-decoration: none;
}
</style>