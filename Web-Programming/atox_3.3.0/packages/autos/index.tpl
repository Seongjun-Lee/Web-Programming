{if isset($category)}
	<div class="page-description">{$category.description}</div>
{/if}

{if 'autos_index_member' == $core.page.name}
	{include file='autos:listing-filters.tpl'}
{/if}

{if isset($models) && $models}
	{ia_block title={lang key='autos_models'} style='fixed' id='auto_categories'}
		<div class="ia-categories">
			{include file='ia-categories.tpl' categories=$models item='autos_models' show_amount=true num_columns=$config.autos_model_columns}
		</div>
	{/ia_block}
{/if}

{if isset($listings) && $listings}
	{if !isset($no_sorting)}
	<div class="btn-toolbar items-sorting text-center">
		<p class="btn-group">
			<span class="btn btn-small btn-inverse disabled">{lang key='sort_by'}:</span>
			{if $sorting.field == 'title'}<span class="btn btn-small btn-inverse disabled">{lang key='title'}</span>{else}<a class="btn btn-small btn-inverse" href="{$smarty.const.IA_SELF}?sort=title" rel="nofollow">{lang key='title'}</a>{/if}
			{if $sorting.field == 'price'}<span class="btn btn-small btn-inverse disabled">{lang key='price'}</span>{else}<a class="btn btn-small btn-inverse" href="{$smarty.const.IA_SELF}?sort=price" rel="nofollow">{lang key='price'}</a>{/if}
			{if $sorting.field == 'release_year'}<span class="btn btn-small btn-inverse disabled">{lang key='field_release_year'}</span>{else}<a class="btn btn-small btn-inverse" href="{$smarty.const.IA_SELF}?sort=year" rel="nofollow">{lang key='field_release_year'}</a>{/if}
			{if $sorting.field == 'date_added'}<span class="btn btn-small btn-inverse disabled">{lang key='date'}</span>{else}<a class="btn btn-small btn-inverse" href="{$smarty.const.IA_SELF}?sort=date" rel="nofollow">{lang key='date'}</a>{/if}
		</p>
		<p class="btn-group">
			{if $sorting.direction == 'ASC'}<span class="btn btn-small btn-inverse disabled">{lang key='asc'}</span>{else}<a class="btn btn-small btn-inverse" href="{$smarty.const.IA_SELF}?order=asc" rel="nofollow">{lang key='asc'}</a>{/if}
			{if $sorting.direction == 'DESC'}<span class="btn btn-small btn-inverse disabled">{lang key='desc'}</span>{else}<a class="btn btn-small btn-inverse" href="{$smarty.const.IA_SELF}?order=desc" rel="nofollow">{lang key='desc'}</a>{/if}
		</p>
	</div>
	{/if}

	{foreach $listings as $listing}
		{include file='autos:list.tpl'}
	{/foreach}

	{navigation aTotal=$pagination.total aTemplate=$pagination.url aItemsPerPage=$pagination.limit aIgnore=true}
{elseif isset($category.id) && $category.level}
	<div class="alert alert-info">
		{if 'autos_search' == $pageName}
			{lang key='nothing_found'}
		{else}
			{lang key='no_listings_to_show'}
		{/if}
	</div>
{elseif !isset($category.id)}
	<div class="alert alert-info">
		{lang key='no_listings_to_show'}
	</div>
{/if}