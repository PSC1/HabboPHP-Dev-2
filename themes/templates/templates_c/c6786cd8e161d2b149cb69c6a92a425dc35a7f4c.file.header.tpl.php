<?php /* Smarty version Smarty-3.1.8, created on 2012-12-30 00:09:05
         compiled from "/Users/robinherzog/github/local/HabboPHP-Dev2/themes/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79378549250df78114b8a33-22619943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6786cd8e161d2b149cb69c6a92a425dc35a7f4c' => 
    array (
      0 => '/Users/robinherzog/github/local/HabboPHP-Dev2/themes/templates/header.tpl',
      1 => 1355597781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79378549250df78114b8a33-22619943',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_dir' => 0,
    'lang' => 0,
    'config' => 0,
    'user' => 0,
    'groups' => 0,
    'url' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50df78117f8351_51461126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50df78117f8351_51461126')) {function content_50df78117f8351_51461126($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(($_smarty_tpl->tpl_vars['lang_dir']->value)."/".($_smarty_tpl->tpl_vars['lang']->value).".lang", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $_smarty_tpl->tpl_vars['config']->value->name;?>
: <?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
 </title>

<?php echo $_smarty_tpl->tpl_vars['config']->value->checkMaintenance();?>


<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>

<meta name="generator" content="HabboPHP"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/styles/common.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/styles/fr.css" type="text/css" />

<!--Start Javascript-->
<script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/js/libs2.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/js/visual.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/js/libs.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/js/common.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/js/fullcontent.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/js/lightweightmepage.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/js/moredata.js" type="text/javascript"></script>




<!--End Javascript-->

<!--Start Stylesheet-->
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/styles/other.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/styles/backgrounds.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/styles/stickers.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/styles/lightwindow.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/styles/group.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/styles/custom.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/styles/cbs2credits.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/styles/newcredits.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/styles/lightweightmepage.css" type="text/css" />
<!--End Stylesheet-->


<style type="text/css">

    #playground, #playground-outer {
	    width: 927px;
	    height: 1360px;
    }
    #column1 {
    	width: auto;
    }

</style>

<!--[if IE 8]>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/styles/ie8.css" type="text/css" />
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/styles/ie.css" type="text/css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/styles/ie6.css" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/js/pngfix.js" type="text/javascript"></script>
<script type="text/javascript">
try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
</script>

<style type="text/css">
body { behavior: url(/js/csshover.htc); }
</style>
<![endif]-->
<meta name="build" content="HABBOPHP 1.0" />
</head>
<body id="view mode" class="impor body_classic_width">
<div id="overlay"></div>
<div id="updated" style="position:fixed;width:150px;text-align:center;left:50%;right:50%;margin-left:-75px;font-size:19px;padding:5px;-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;text-shadow:0 1px 0 #fff;background:#feffba;color:#333;display:none;z-index:9999999;">Mis &agrave; jour</div>
<div id="header-container">
	<div id="header" class="clearfix">
		<h1><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/me.php"></a></h1>
<div id="subnavi" class="narrow">
    <div id="subnavi-search">
        <div id="subnavi-search-upper" >
        <ul id="subnavi-search-links" >
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/help" target="habbohelp" ><?php echo $_smarty_tpl->getConfigVariable('HelpMe');?>
</a></li>
                         <li>
                <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/logout.php" method="post">
                    <button type="submit" id="sign out" class="link"><span><?php echo $_smarty_tpl->getConfigVariable('Logout');?>
</span></button>
                </form>
            </li>
        </ul>
        </div>
    </div>
    <div id="to-hotel">
                <a href="client.php" class="new-button green-button" target="5582b925d39a3b57fc3e178ad726bd2798015099" onclick="HabboClient.openOrFocus(this); return false;"><b><?php echo $_smarty_tpl->getConfigVariable('Enterin');?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value->name;?>
</b><i></i></a>
    </div>
</div>
<ul id="navi">
        <li class="metab <?php if ($_smarty_tpl->tpl_vars['groups']->value=='index'){?>selected<?php }?>">
		<a   href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/me.php">
			<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
 <?php if (isset($_SESSION['FB'])){?>( <i style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/web-gallery/images/icon_facebook_connect_small.png)"> )</i><?php }?>
		</a>
<span></span>
</li>
		<li class="<?php if ($_smarty_tpl->tpl_vars['groups']->value=='community'){?>selected<?php }?>">
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/community.php"><?php echo $_smarty_tpl->getConfigVariable('Community');?>
</a>
			<span></span>
		</li>
		<li class="<?php if ($_smarty_tpl->tpl_vars['groups']->value=='shop'){?>selected<?php }?>">
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/shop.php"><?php echo $_smarty_tpl->getConfigVariable('Shop');?>
 (<?php echo $_smarty_tpl->tpl_vars['user']->value->jetons;?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value->moneyname;?>
)</a>
			<span></span>
		</li>
		<!--
		<li class="<?php if ($_smarty_tpl->tpl_vars['groups']->value=='respect'){?>selected<?php }?>">
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/s_attitude.php"><?php echo $_smarty_tpl->getConfigVariable('Securite');?>
</a>
			<span></span>
		</li>
		-->
		<?php if ($_smarty_tpl->tpl_vars['user']->value->rank==6||$_smarty_tpl->tpl_vars['user']->value->rank==7||$_smarty_tpl->tpl_vars['user']->value->rank==8){?><li id="tab-register-now" class="">
			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/admin">Housekeeping</a>
			<span></span><?php }?>
		</li>
</ul>

        <div id="habbos-online"><div class="rounded"><span style="color:#000;"><?php if (isset($_smarty_tpl->tpl_vars['config']->value->users_online)){?><?php echo $_smarty_tpl->tpl_vars['config']->value->users_online;?>
<?php }?><br/><?php echo $_smarty_tpl->getConfigVariable('online');?>
</span></div></div>
        
	</div>
</div>
<div id="content-container">
<div id="navi2-container" class="pngbg">
<?php if ($_smarty_tpl->tpl_vars['groups']->value=='index'){?>
    <div id="navi2" class="pngbg clearfix">
	<ul>
			<li class="<?php if ($_smarty_tpl->tpl_vars['url']->value=='me.php'){?>selected<?php }?>">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/me.php"><?php echo $_smarty_tpl->getConfigVariable('Home');?>
</a>
			</li>
    		<li class="<?php if ($_smarty_tpl->tpl_vars['url']->value=='home.php'){?>selected<?php }?>">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/home.php?username=<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
"><?php echo $_smarty_tpl->getConfigVariable('MyHomePage');?>
</a>
    		</li>
    		<li class="<?php if ($_smarty_tpl->tpl_vars['url']->value=='profile.php'){?>selected<?php }?> last">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/profile.php?page=index"><?php echo $_smarty_tpl->getConfigVariable('MyPreferences');?>
</a>
    		</li>
	</ul>
    </div>
 <?php }?>
 <?php if ($_smarty_tpl->tpl_vars['groups']->value=='community'){?>
    <div id="navi2" class="pngbg clearfix">
	<ul>
			<li class="<?php if ($_smarty_tpl->tpl_vars['url']->value=='community.php'){?>selected<?php }?>">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/community.php"><?php echo $_smarty_tpl->getConfigVariable('Community');?>
</a>
			</li>
    		<li class="<?php if ($_smarty_tpl->tpl_vars['url']->value=='events.php'){?>selected<?php }?>">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/events.php"><?php echo $_smarty_tpl->getConfigVariable('Events');?>
</a>
    		</li>
    		<li class="<?php if ($_smarty_tpl->tpl_vars['url']->value=='staff.php'){?>selected<?php }?> last">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/staff.php">Staff</a>
    		</li>
	</ul>
    </div>
 <?php }?>
 <?php if ($_smarty_tpl->tpl_vars['groups']->value=='shop'){?>
    <div id="navi2" class="pngbg clearfix">
	<ul>
			<li class="<?php if ($_smarty_tpl->tpl_vars['url']->value=='shop.php'){?>selected<?php }?>">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/shop.php"><?php echo $_smarty_tpl->getConfigVariable('Buy');?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value->moneyname;?>
</a>
    		</li>
			<li class="<?php if ($_smarty_tpl->tpl_vars['url']->value=='vip.php'){?>selected<?php }?>">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/vip.php">VIP</a>
			</li>
    		<li class="<?php if ($_smarty_tpl->tpl_vars['url']->value=='badges.php'){?>selected<?php }?>">
    			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/badges.php"><?php echo $_smarty_tpl->getConfigVariable('BuyBadges');?>
</a>
    		</li>
    		<li class="<?php if ($_smarty_tpl->tpl_vars['url']->value=='rares.php'){?>selected<?php }?>">
    			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/rares.php"><?php echo $_smarty_tpl->getConfigVariable('BuyRares');?>
</a>
    		</li>
    		<li class="<?php if ($_smarty_tpl->tpl_vars['url']->value=='winwin.php'){?>selected<?php }?>">
    			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/winwin.php"><?php echo $_smarty_tpl->getConfigVariable('BuyWinWins');?>
</a>
    		</li>
    		<li class="<?php if ($_smarty_tpl->tpl_vars['url']->value=='bots.php'){?>selected<?php }?> last">
    			<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/bots.php"><?php echo $_smarty_tpl->getConfigVariable('BuyBots');?>
</a>
    		</li>
    		
	</ul>
    </div>
 <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['groups']->value=='respect'){?>
    <div id="navi2" class="pngbg clearfix" style="display:none">
	<ul>
			<li class="<?php if ($_smarty_tpl->tpl_vars['url']->value=='s_attitude.php'){?>selected<?php }?>">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/s_attitude.php"><?php echo $_smarty_tpl->getConfigVariable('HabboAttitude');?>
</a>
			</li>
			<li class="<?php if ($_smarty_tpl->tpl_vars['url']->value=='s_security.php'){?>selected<?php }?>">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/s_security.php"><?php echo $_smarty_tpl->getConfigVariable('ConseilsSecurity');?>
</a>
			</li>
			<li class="<?php if ($_smarty_tpl->tpl_vars['url']->value=='s_cs.php'){?>selected<?php }?>">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/s_cs.php"><?php echo $_smarty_tpl->getConfigVariable('CentreSecurity');?>
</a>
			</li>
			<li class="<?php if ($_smarty_tpl->tpl_vars['url']->value=='s_repport.php'){?>selected<?php }?>">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->url_site;?>
/s_repport.php"><?php echo $_smarty_tpl->getConfigVariable('Signalerdesabus');?>
</a>
			</li>
	</ul>
    </div>
 <?php }?>
</div>
<!--Ne pas supprimer se input -->
<input type="hidden" value="<?php if (isset($_smarty_tpl->tpl_vars['token']->value)){?><?php echo $_smarty_tpl->tpl_vars['token']->value;?>
<?php }?>" id="token"/><?php }} ?>