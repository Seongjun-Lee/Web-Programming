<!DOCTYPE html>
<html lang="{$core.language.iso}" dir="{$core.language.direction}">
	<head>
		{ia_hooker name='smartyFrontBeforeHeadSection'}

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<title>{ia_print_title}</title>
		<meta name="description" content="{$core.page['meta-description']}">
		<meta name="keywords" content="{$core.page['meta-keywords']}">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="generator" content="Subrion CMS {$config.version} - Open Source Content Management System">
		<meta name="robots" content="index">
		<meta name="robots" content="follow">
		<meta name="revisit-after" content="1 day">
		<base href="{$smarty.const.IA_URL}">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="{$core.page.nonProtocolUrl}js/utils/shiv.js"></script>
		<![endif]-->

		<link rel="shortcut icon" href="{$core.page.nonProtocolUrl}favicon.ico">

		{ia_add_media files='jquery, subrion, bootstrap, flexslider' order=0}
		{ia_print_js files='_IA_TPL_app' order=999}

		{ia_hooker name='smartyFrontAfterHeadSection'}

		{ia_print_css display='on'}

		{ia_add_js}
			intelli.pageName = '{$core.page.name}';

			{foreach $core.customConfig as $key => $value}
				intelli.config.{$key} = '{$value}';
			{/foreach}
		{/ia_add_js}
	</head>

	<body class="page-{$core.page.name}">
		<header>

			<section class="section section-narrow inventory">
				<div class="container">
					{ia_blocks block='inventory'}

					{include file='language-selector.tpl'}

					{if $config.atox_social}
						<div class="inventory__social">
							<a href="{$config.atox_social_t}">
								<span class="icon-stack">
									<i class="icon-circle icon-stack-base"></i>
									<i class="icon-twitter icon-light"></i>
								</span>
							</a>
							<a href="{$config.atox_social_f}">
								<span class="icon-stack">
									<i class="icon-circle icon-stack-base"></i>
									<i class="icon-facebook icon-light"></i>
								</span>
							</a>
							<a href="{$config.atox_social_g}">
								<span class="icon-stack">
									<i class="icon-circle icon-stack-base"></i>
									<i class="icon-google-plus icon-light"></i>
								</span>
							</a>
						</div>
					{/if}
				</div>
			</section>

			<section class="section section-dark navigation">
				<div class="container">
					<div class="nav-bar">
						<a class="brand" href="{$smarty.const.IA_URL}">
							{if !empty($config.site_logo)}
								<img src="{$core.page.nonProtocolUrl}uploads/{$config.site_logo}" alt="{$config.site}">
							{else}
								<img src="{$img}logo.png" alt="{$config.site}" class="brand__image">
								{assign var=name value=explode(' ', $config.atox_website_name)}
								<span class="brand__heading">
									{foreach $name as $value}
										{if $value@first}
											<b>{$value}</b>
										{else}
											{$value}
										{/if}
									{/foreach}
								</span>
								<span class="brand__slogan">{$config.atox_website_slogan}</span>
							{/if}
						</a>

						<a href="#" class="nav-toggle pull-left" data-toggle="collapse" data-target=".nav-bar-collapse"><i class="icon-reorder"></i></a>

						<div class="nav-bar-collapse">{ia_blocks block='mainmenu'}</div>
					</div>
				</div>
			</section>
		</header>

		{ia_blocks block='slider'}

		{if isset($iaBlocks.after_header_1) || 
			isset($iaBlocks.after_header_2)}
			<section id="after-header" class="section section-light top-headlines">
				<div class="container">
					<div class="row">
						<div class="{width section='after-header' position='after_header_1'}">
							{ia_blocks block='after_header_1'}
						</div>
						<div class="{width section='after-header' position='after_header_2'}">
							{ia_blocks block='after_header_2'}
						</div>
					</div>
				</div>
			</section>
		{/if}

		{if isset($iaBlocks.verytop)}
			<div class="section section-light">
				<div class="container">
					{ia_blocks block='verytop'}
				</div>
			</div>
		{/if}

		{ia_hooker name='smartyFrontBeforeBreadcrumb'}

		{include file='breadcrumb.tpl'}

		<section id="content" class="section">
			<div class="container">
				<div class="row">

					<div class="{width section='content' position='left'}">
						{ia_blocks block='left'}
					</div>

					<div class="{width section='content' position='center'}">
						<div class="content-wrap">

							{ia_blocks block='top'}

							<h1 class="page-header">{$core.page.title}</h1>

							{ia_hooker name='smartyFrontBeforeNotifications'}
							{include file='notification.tpl'}

							{ia_hooker name='smartyFrontBeforeMainContent'}

							{$_content_}

							{ia_hooker name='smartyFrontAfterMainContent'}

							{ia_blocks block='bottom'}

							{if isset($iaBlocks.user1) || isset($iaBlocks.user2)}
								<div class="row">
									<div class="{width section='user-blocks' position='user1'}">{ia_blocks block='user1'}</div>
									<div class="{width section='user-blocks' position='user2'}">{ia_blocks block='user2'}</div>
								</div>
							{/if}
						</div>
					</div>

					<div class="{width section='content' position='right'}">
						{ia_blocks block='right'}
					</div>

				</div>
			</div>
		</section>

		{if isset($iaBlocks.verybottom)}
			<div class="section">
				<div class="container">{ia_blocks block='verybottom'}</div>
			</div>
		{/if}

		<section class="section section-light">
			<div class="container">
				<div class="row">
					<div class="{width section='footer' position='footer1'}">{ia_blocks block='footer1'}</div>
					<div class="{width section='footer' position='footer2'}">{ia_blocks block='footer2'}</div>
					<div class="{width section='footer' position='footer3'}">{ia_blocks block='footer3'}</div>
					<div class="{width section='footer' position='footer4'}">{ia_blocks block='footer4'}</div>
				</div>
			</div>
		</section>

		<footer class="section section-dark">
			<div class="container">
				{ia_hooker name='smartyFrontBeforeFooterLinks'}
	
				<div class="row">
					<div class="span4">
						<p class="copyright">&copy; {$smarty.server.REQUEST_TIME|date_format:'%Y'} {lang key='powered_by_subrion'}</p>
					</div>
					<div class="span8">
						{ia_blocks block='copyright'}
					</div>
				</div>

				{ia_hooker name='smartyFrontAfterFooterLinks'}
			</div>
		</footer>

		<!-- SYSTEM STUFF -->

		{if $config.cron}
			<div style="display: none;">
				<img src="{$core.page.nonProtocolUrl}cron/?{randnum}" width="1" height="1" alt="">
			</div>
		{/if}

		{if isset($manageMode)}
			{include file='visual-mode.tpl'}
		{/if}

		{if isset($previewMode)}
			<p>{lang key='youre_in_preview_mode'}</p>
		{/if}

		{ia_print_js display='on'}

		{ia_hooker name='smartyFrontFinalize'}
	</body>
</html>