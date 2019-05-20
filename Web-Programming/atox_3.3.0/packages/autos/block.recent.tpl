{if isset($car_blocks_data.recent)}
	<h2 class="page-header">{lang key='page_title_autos_index_latest'}</h2>
	
	<div class="ia-items recent-cars">
		{foreach $car_blocks_data.recent as $item}
			<div class="media ia-item ia-item-bordered">
				{assign var=allpictures value=$item.auto_pictures}
				{if $allpictures[0]['path']}
					<a href="{$item.link}" class="pull-left media-object thumbnail">{printImage imgfile=$allpictures[0]['path'] title=$item.model width='150'}</a>
				{/if}

				<div class="media-body">
					<h3 class="media-heading">
						<a href="{$item.link}">{$item.model}, {$item.release_year}</a>
					</h3>

					{if $item.price}
						<span class="label label-info">{$config.currency} {$item.price}</span>
					{/if}

					<ul class="ia-list-items">
						<li><span class="muted">{lang key='field_body_type'}</span>: <a href="{$packages.autos.url}body-style/{$item.body_type}/">{lang key="field_body_type_{$item.body_type}"}</a></li>
						<li><span class="muted">{lang key='field_interior_color'}</span>: {lang key="field_interior_color_{$item.interior_color}"}</li>
						<li><span class="muted">{lang key='field_engine'}</span>: {$item.engine_size} cc / {$item.horse_power} HP</li>
						{if $item.mileage}
							<li><span class="muted">{lang key='field_mileage'}</span>: {$item.mileage}</li>
						{/if}
					</ul>
				</div>
			</div>
		{/foreach}
	</div>
{/if}