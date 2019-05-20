{*if isset($tools)}
	<div class="tool-buttons view pull-right">
		<a href="{$tools.edit}" class="btn btn-small btn-info"><i class="icon-edit icon-white"></i> {lang key='edit'}</a>
		<a href="{$tools.delete}" class="btn btn-small btn-danger" onclick="return confirm(_t('do_you_really_want_to_delete_listing'));">
			<i class="icon-remove icon-white"></i>
			{lang key='delete'}
		</a>
	</div>
{/if*}

<div class="ia-item ia-item--car-view {$item.status}" id="tdcompany{$item.id}">
	{if !empty($item.auto_pictures)}
		<div class="car-slideshow-block">
			<div id="car-slider" class="flexslider">
				<ul class="slides">
					{if $item.auto_pictures}
						{assign var=allpictures value=$item.auto_pictures}
						{foreach $allpictures as $pic}
							<li>
								<a href="{printImage imgfile=$pic.path url=true fullimage=true}" rel="ia_lightbox[{$item.model}]">
									{printImage imgfile=$pic.path fullimage=true}
								</a>
							</li>
						{/foreach}
					{/if}
				</ul>
			</div>

			{if $allpictures|@count != 1}
				<div id="car-carousel" class="flexslider">
					<ul class="slides">
						{foreach $allpictures as $pic}
							<li><a href="#">{printImage imgfile=$pic.path}</a></li>
						{/foreach}
					</ul>
				</div>
			{/if}
		</div>
		
		{ia_add_js}
// The slider being synced must be initialized first
$('#car-carousel').flexslider({
	animation: "slide",
	controlNav: false,
	animationLoop: false,
	slideshow: false,
	itemWidth: 80,
	itemMargin: 5,
	asNavFor: '#car-slider',
	prevText: '',
	nextText: ''
});

$('#car-slider').flexslider({
	animation: "slide",
	controlNav: false,
	directionNav: false,
	animationLoop: false,
	slideshow: false,
	sync: "#car-carousel"
});
		{/ia_add_js}
	
		<hr>
	{/if}

	{assign var=exceptions value=['auto_pictures']}

	{if isset($sections) && $sections}
		<div class="tabbable">
			<ul class="nav nav-tabs">
				{foreach $sections as $section_name => $section}
					{if $section || isset($tabs_content.$section_name)}
						<li{if $section@first} class="active"{/if}><a data-toggle="tab" href="#tab-{$section_name}"><span>{lang key=$section_name}</span></a></li>
					{/if}
				{/foreach}
			</ul>

			<div class="tab-content ia-form">
				{foreach $sections as $section_name => $section}
					{if $section}
						<div id="tab-{$section_name}" class="tab-pane{if $section@first} active{/if}">
							{if isset($tabs_before[$section_name])}{$tabs_before.$section_name}{/if}

							{include file='field-type-content-fieldset.tpl' item_sections=$section exceptions=$exceptions isView=true}

							{if isset($tabs_after[$section_name])}{$tabs_after.$section_name}{/if}
						</div>
					{elseif isset($tabs_content[$section_name])}
						<div id="tab-{$section_name}" class="tab-pane">
							{$tabs_content[$section_name]}
						</div>
					{/if}
				{/foreach}
			</div>
		</div>
	{/if}

	{ia_hooker name='smartyViewListingBeforeFooter'}
</div>