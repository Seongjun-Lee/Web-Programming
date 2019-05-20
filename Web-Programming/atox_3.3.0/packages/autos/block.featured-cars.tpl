{if isset($car_blocks_data.featured)}
	<div class="ia-items f-cars">
		{foreach $car_blocks_data.featured as $item}
			{assign var=allpictures value=$item.auto_pictures}
			{assign var=pic value=$allpictures[0]['path']}
			{if $pic}
				<div class="f-cars__item" style="background: url({printImage imgfile=$pic title=$item.model url=true}) 50% 50% no-repeat;">
			{else}
				<div class="f-cars__item f-cars__item--no-thumb">
			{/if}
				<div class="f-cars__item__info">
					<h5><a href="{$item.link}">{$item.model}, {$item.release_year}</a></h5>
					<p><i class="icon-tag"></i> {$item.price}</p>
				</div>
			</div>
		{/foreach}
	</div>
{/if}