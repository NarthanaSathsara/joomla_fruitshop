<?php
/**
* @subpackage  ol_monter Template
*/

defined('_JEXEC') or die;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();//define path
$base_url = $this->baseurl;
$tpl_name = $this->template;
$css_urla = ''.$base_url.'/templates/'.$tpl_name.'/slider/';

$caption         = $this->params->get ('caption');
$menu            = $this->params->get ('menu');
$stylew	     = $this->params->get('stylew');
$styleh	     = $this->params->get('styleh');
$sliders_thumb1 	= $this->params->get('sliders_thumb1', '' );
$sliders_thumb2 	= $this->params->get('sliders_thumb2', '' );
$sliders_thumb3 	= $this->params->get('sliders_thumb3', '' );
$sliders_thumb4 	= $this->params->get('sliders_thumb4', '' );
$sliders_thumb5 	= $this->params->get('sliders_thumb5', '' );
$sliders_thumb6 	= $this->params->get('sliders_thumb6', '' );
$sliders_texts1 	= $this->params->get('sliders_texts1', '' );
$sliders_texts2 	= $this->params->get('sliders_texts2', '' );
$sliders_texts3 	= $this->params->get('sliders_texts3', '' );
$sliders_texts4 	= $this->params->get('sliders_texts4', '' );
$sliders_texts5 	= $this->params->get('sliders_texts5', '' );
$sliders_texts6 	= $this->params->get('sliders_texts6', '' );
$sliders_tex1 	= $this->params->get('sliders_tex1', '' );
$sliders_tex2 	= $this->params->get('sliders_tex2', '' );
$sliders_tex3 	= $this->params->get('sliders_tex3', '' );
$sliders_tex4 	= $this->params->get('sliders_tex4', '' );
$sliders_tex5 	= $this->params->get('sliders_tex5', '' );
$sliders_tex6 	= $this->params->get('sliders_tex6', '' );
$sliders_text1 	= $this->params->get('sliders_text1', '' );
$sliders_text2 	= $this->params->get('sliders_text2', '' );
$sliders_text3 	= $this->params->get('sliders_text3', '' );
$sliders_text4 	= $this->params->get('sliders_text4', '' );
$sliders_text5 	= $this->params->get('sliders_text5', '' );
$sliders_text6 	= $this->params->get('sliders_text6', '' );
$sestyle 	= $this->params->get('sestyle', '' );

$doc->addStyleSheet($css_urla.'assets/css/tabber.css');
$doc->addScript($css_urla.'assets/js/slideshow.js');
$doc->addScript($css_urla.'assets/js/tabber.js');
$js = '
<script type="text/javascript">
window.addEvent("domready",function()
{ new TCImageTabber("tc-tabber",{
autoplay: 1,
pause_autoplay: 1,
transition: Fx.Transitions.easeInOutQuint,
duration: 700,
delay: 6000,
slider_type: "fade",
desc_effect: "down",
width: 1218,
height: 580,
spacing: 10,
navi_margin: 0,
preload: 0,
tab_height: 100,
tab_indicator: 2
}) });
</script>';
//$doc->addScriptDeclaration($js);
echo $js;
?>

<div id="tc-tabber" class="tc-tabber">
<div class="tc-tabber-in tc-tabs-right">
<div class="tc-slides">
<?php if ($sliders_thumb1): ?>  
<div class="tc-slide">
<div class="tc-slide-in">
<?php if ($sliders_text1): ?><a href="<?php echo $sliders_text1; ?>" target="<?php echo $this->params->get('target1') ?>"><?php endif;?>
<img title="<?php echo $sliders_thumb1; ?>" alt="<?php echo $sliders_texts1; ?>" class="tc-image" />
<?php if ($sliders_text1): ?></a><?php endif;?>
</div>
</div>
<div class="tc-slide-desc">
<div class="tc-slide-desc-in">	
<div class="tc-slide-desc-bg"></div>
<div class="tc-slide-desc-text">

<h1><?php if ($sliders_text1): ?><a href="<?php echo $sliders_text1; ?>" target="<?php echo $this->params->get('target1') ?>"><?php endif;?>
<?php echo $sliders_texts1; ?>
<?php if ($sliders_text1): ?></a><?php endif;?>
</h1>

<div class="tc-slide-description">
<p><?php echo $sliders_tex1; ?></p>
</div>

<div style="clear: both"></div>
</div>
</div>
</div>
<?php endif;?>

<?php if ($sliders_thumb2): ?>  
<div class="tc-slide">
<div class="tc-slide-in">
<?php if ($sliders_text2): ?><a href="<?php echo $sliders_text2; ?>" target="<?php echo $this->params->get('target2') ?>"><?php endif;?>
<img title="<?php echo $sliders_thumb2; ?>" alt="<?php echo $sliders_texts2; ?>" class="tc-image" />
<?php if ($sliders_text2): ?></a><?php endif;?>
</div>
</div>
<div class="tc-slide-desc">
<div class="tc-slide-desc-in">	
<div class="tc-slide-desc-bg"></div>
<div class="tc-slide-desc-text">

<h1><?php if ($sliders_text2): ?><a href="<?php echo $sliders_text2; ?>" target="<?php echo $this->params->get('target2') ?>"><?php endif;?>
<?php echo $sliders_texts2; ?>
<?php if ($sliders_text2): ?></a><?php endif;?>
</h1>

<div class="tc-slide-description">
<p><?php echo $sliders_tex2; ?></p>
</div>

<div style="clear: both"></div>
</div>
</div>
</div>
<?php endif;?>

<?php if ($sliders_thumb3): ?>  
<div class="tc-slide">
<div class="tc-slide-in">
<?php if ($sliders_text3): ?><a href="<?php echo $sliders_text3; ?>" target="<?php echo $this->params->get('target3') ?>"><?php endif;?>
<img title="<?php echo $sliders_thumb3; ?>" alt="<?php echo $sliders_texts3; ?>" class="tc-image" />
<?php if ($sliders_text3): ?></a><?php endif;?>
</div>
</div>
<div class="tc-slide-desc">
<div class="tc-slide-desc-in">	
<div class="tc-slide-desc-bg"></div>
<div class="tc-slide-desc-text">

<h1><?php if ($sliders_text3): ?><a href="<?php echo $sliders_text3; ?>" target="<?php echo $this->params->get('target3') ?>"><?php endif;?>
<?php echo $sliders_texts3; ?>
<?php if ($sliders_text3): ?></a><?php endif;?>
</h1>

<div class="tc-slide-description">
<p><?php echo $sliders_tex3; ?></p>
</div>

<div style="clear: both"></div>
</div>
</div>
</div>
<?php endif;?>

<?php if ($sliders_thumb4): ?>  
<div class="tc-slide">
<div class="tc-slide-in">
<?php if ($sliders_text4): ?><a href="<?php echo $sliders_text4; ?>" target="<?php echo $this->params->get('target4') ?>"><?php endif;?>
<img title="<?php echo $sliders_thumb4; ?>" alt="<?php echo $sliders_texts4; ?>" class="tc-image" />
<?php if ($sliders_text4): ?></a><?php endif;?>
</div>
</div>
<div class="tc-slide-desc">
<div class="tc-slide-desc-in">	
<div class="tc-slide-desc-bg"></div>
<div class="tc-slide-desc-text">

<h1><?php if ($sliders_text4): ?><a href="<?php echo $sliders_text4; ?>" target="<?php echo $this->params->get('target4') ?>"><?php endif;?>
<?php echo $sliders_texts4; ?>
<?php if ($sliders_text4): ?></a><?php endif;?>
</h1>

<div class="tc-slide-description">
<p><?php echo $sliders_tex4; ?></p>
</div>

<div style="clear: both"></div>
</div>
</div>
</div>
<?php endif;?>

<?php if ($sliders_thumb5): ?>  
<div class="tc-slide">
<div class="tc-slide-in">
<?php if ($sliders_text5): ?><a href="<?php echo $sliders_text5; ?>" target="<?php echo $this->params->get('target5') ?>"><?php endif;?>
<img title="<?php echo $sliders_thumb5; ?>" alt="<?php echo $sliders_texts5; ?>" class="tc-image" />
<?php if ($sliders_text5): ?></a><?php endif;?>
</div>
</div>
<div class="tc-slide-desc">
<div class="tc-slide-desc-in">	
<div class="tc-slide-desc-bg"></div>
<div class="tc-slide-desc-text">

<h1><?php if ($sliders_text5): ?><a href="<?php echo $sliders_text5; ?>" target="<?php echo $this->params->get('target5') ?>"><?php endif;?>
<?php echo $sliders_texts5; ?>
<?php if ($sliders_text5): ?></a><?php endif;?>
</h1>

<div class="tc-slide-description">
<p><?php echo $sliders_tex5; ?></p>
</div>

<div style="clear: both"></div>
</div>
</div>
</div>
<?php endif;?>

<?php if ($sliders_thumb6): ?>  
<div class="tc-slide">
<div class="tc-slide-in">
<?php if ($sliders_text6): ?><a href="<?php echo $sliders_text6; ?>" target="<?php echo $this->params->get('target6') ?>"><?php endif;?>
<img title="<?php echo $sliders_thumb6; ?>" alt="<?php echo $sliders_texts6; ?>" class="tc-image" />
<?php if ($sliders_text6): ?></a><?php endif;?>
</div>
</div>
<div class="tc-slide-desc">
<div class="tc-slide-desc-in">	
<div class="tc-slide-desc-bg"></div>
<div class="tc-slide-desc-text">

<h1><?php if ($sliders_text6): ?><a href="<?php echo $sliders_text6; ?>" target="<?php echo $this->params->get('target6') ?>"><?php endif;?>
<?php echo $sliders_texts6; ?>
<?php if ($sliders_text6): ?></a><?php endif;?>
</h1>

<div class="tc-slide-description">
<p><?php echo $sliders_tex6; ?></p>
</div>

<div style="clear: both"></div>
</div>
</div>
</div>
<?php endif;?>
</div>

<div class="tc-navigation">
<div class="tc-navigation-in">
<img class="tc-prev showOnMouseOver" src="<?php echo $css_urla ?>assets/css/images/transparent.png" alt="Previous" />
<img class="tc-next showOnMouseOver" src="<?php echo $css_urla ?>assets/css/images/transparent.png" alt="Next" />
</div>
</div>

<div class="tc-tabs">
<div class="tc-tabs-in">
<?php if ($sliders_thumb1): ?> 
<div class="tc-tab">
<span class="tc-tab-in">						

<!--[if lte IE 7]>
<table cellpadding="0" cellspacing="0" border="0"><tr>
<td>
<img src="<?php echo $sliders_thumb1; ?>" alt="<?php echo $sliders_texts1; ?>" width="90" height="90"" />
</td>
<td width="100%"><?php echo $sliders_texts1; ?></td>
</tr></table>
<![endif]-->

<span>
<img src="<?php echo $sliders_thumb1; ?>" alt="<?php echo $sliders_texts1; ?>" width="90" height="90"" />
</span>
<span><?php echo $sliders_texts1; ?></span>
</span>
</div>
<?php endif;?>
<?php if ($sliders_thumb2): ?> 
<div class="tc-tab">
<span class="tc-tab-in">						

<!--[if lte IE 7]>
<table cellpadding="0" cellspacing="0" border="0"><tr>
<td>
<img src="<?php echo $sliders_thumb2; ?>" alt="<?php echo $sliders_texts2; ?>" width="90" height="90"" />
</td>
<td width="100%"><?php echo $sliders_texts2; ?></td>
</tr></table>
<![endif]-->

<span>
<img src="<?php echo $sliders_thumb2; ?>" alt="<?php echo $sliders_texts2; ?>" width="90" height="90"" />
</span>
<span><?php echo $sliders_texts2; ?></span>
</span>
</div>
<?php endif;?>
<?php if ($sliders_thumb3): ?> 
<div class="tc-tab">
<span class="tc-tab-in">						

<!--[if lte IE 7]>
<table cellpadding="0" cellspacing="0" border="0"><tr>
<td>
<img src="<?php echo $sliders_thumb3; ?>" alt="<?php echo $sliders_texts3; ?>" width="90" height="90"" />
</td>
<td width="100%"><?php echo $sliders_texts3; ?></td>
</tr></table>
<![endif]-->

<span>
<img src="<?php echo $sliders_thumb3; ?>" alt="<?php echo $sliders_texts3; ?>" width="90" height="90"" />
</span>
<span><?php echo $sliders_texts3; ?></span>
</span>
</div>
<?php endif;?>
<?php if ($sliders_thumb4): ?> 
<div class="tc-tab">
<span class="tc-tab-in">						

<!--[if lte IE 7]>
<table cellpadding="0" cellspacing="0" border="0"><tr>
<td>
<img src="<?php echo $sliders_thumb4; ?>" alt="<?php echo $sliders_texts4; ?>" width="90" height="90"" />
</td>
<td width="100%"><?php echo $sliders_texts4; ?></td>
</tr></table>
<![endif]-->

<span>
<img src="<?php echo $sliders_thumb4; ?>" alt="<?php echo $sliders_texts4; ?>" width="90" height="90"" />
</span>
<span><?php echo $sliders_texts4; ?></span>
</span>
</div>
<?php endif;?>
<?php if ($sliders_thumb5): ?> 
<div class="tc-tab">
<span class="tc-tab-in">						

<!--[if lte IE 7]>
<table cellpadding="0" cellspacing="0" border="0"><tr>
<td>
<img src="<?php echo $sliders_thumb5; ?>" alt="<?php echo $sliders_texts5; ?>" width="90" height="90"" />
</td>
<td width="100%"><?php echo $sliders_texts5; ?></td>
</tr></table>
<![endif]-->

<span>
<img src="<?php echo $sliders_thumb5; ?>" alt="<?php echo $sliders_texts5; ?>" width="90" height="90"" />
</span>
<span><?php echo $sliders_texts5; ?></span>
</span>
</div>
<?php endif;?>
<?php if ($sliders_thumb6): ?> 
<div class="tc-tab">
<span class="tc-tab-in">						

<!--[if lte IE 7]>
<table cellpadding="0" cellspacing="0" border="0"><tr>
<td>
<img src="<?php echo $sliders_thumb6; ?>" alt="<?php echo $sliders_texts6; ?>" width="90" height="90"" />
</td>
<td width="100%"><?php echo $sliders_texts6; ?></td>
</tr></table>
<![endif]-->

<span>
<img src="<?php echo $sliders_thumb6; ?>" alt="<?php echo $sliders_texts6; ?>" width="90" height="90"" />
</span>
<span><?php echo $sliders_texts6; ?></span>
</span>
</div>
<?php endif;?>

<div class="tc-tab-indicator  tc-tab-indicator-right"></div>
</div>
</div>
<div class="tc-loader"></div>
</div>
</div>



