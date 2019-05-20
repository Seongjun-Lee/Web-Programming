{if isset($car_blocks_data.search)} 
	<form action="{$smarty.const.IA_URL}search/cars/" method="get" id="as_form" class="ia-form qs">
		<label class="control-label" for="as_body">{lang key='field_body_type'}:</label>
		<div class="controls">
			<select name="body" class="qs-body input-block-level">
				<option value="" {if !isset($smarty.get.body)}selected="selected"{/if}>{lang key='any'}</option>
				{foreach $car_blocks_data.search.body_types as $key => $title}
					<option value="{$key}" {if isset($smarty.get.body) && $smarty.get.body == $key}selected="selected"{/if}>{$title}</option>
				{/foreach}
			</select>
		</div>

		<label class="control-label">{lang key='make'}:</label>
		<div class="controls">
			<input type="hidden" name="mid" value="0">
			<select class="qs-make js-aqs">
				<option value="">{lang key='any'}</option>
				{foreach $car_blocks_data.search.categories as $item}
					<option value="{$item.id}" {if isset($smarty.get.make) && $smarty.get.make == $item.id}selected="selected"{/if}>{$item.name}</option>
				{/foreach}
			</select>
		</div>

		<label class="control-label">{lang key='field_transmission'}:</label>
		<div class="controls">
			<select name="transmission" class="qs-transmission input-block-level">
				<option value="" {if !isset($smarty.get.transmission)}selected="selected"{/if}>{lang key='any'}</option>
				{foreach $car_blocks_data.search.transmission as $key => $title}
					<option value="{$key}" {if isset($smarty.get.transmission) && $smarty.get.transmission == $key}selected="selected"{/if}>{$title}</option>
				{/foreach}
			</select>
		</div>

		<label class="control-label">{lang key='field_price'}:</label>
		<div class="controls">
			<input type="text" id="qs-price" value="0;{if $max_auto_price}{$max_auto_price}{else}150000{/if}" data-type="double" data-step="1000" style="display: none;" data-from="{if isset($smarty.get.price_from)}{$smarty.get.price_from}{else}0{/if}" data-to="{if isset($smarty.get.price_to)}{$smarty.get.price_to}{elseif $max_auto_price}{$max_auto_price}{else}150000{/if}">
			<input type="hidden" id="price_from" name="price_from" value="{if isset($smarty.get.price_from)}{$smarty.get.price_from}{else}0{/if}">
			<input type="hidden" id="price_to" name="price_to" value="{if isset($smarty.get.price_to)}{$smarty.get.price_to}{elseif $max_auto_price}{$max_auto_price}{else}150000{/if}">
		</div>

		<label class="control-label">{lang key='field_release_year'}:</label>
		<div class="controls">
			<input type="text" id="qs-year" value="{$smarty.now|date_format:'%Y' - 20};{$smarty.now|date_format:'%Y'}" data-type="double" style="display: none;" data-from="{if isset($smarty.get.year_from)}{$smarty.get.year_from}{else}{$smarty.now|date_format:'%Y' - 20}{/if}" data-to="{if isset($smarty.get.year_to)}{$smarty.get.year_to}{else}{$smarty.now|date_format:'%Y'}{/if}">
			<input type="hidden" id="year_from" name="year_from" value="{if isset($smarty.get.year_from)}{$smarty.get.year_from}{else}{$smarty.now|date_format:'%Y' - 20}{/if}">
			<input type="hidden" id="year_to" name="year_to" value="{if isset($smarty.get.year_to)}{$smarty.get.year_to}{else}{$smarty.now|date_format:'%Y'}{/if}">
		</div>

		<label class="control-label">{lang key='field_mileage'}:</label>
		<div class="controls">
			<input type="text" id="qs-mileage" value="0;{if $max_auto_mileage}{$max_auto_mileage}{else}100000{/if}" data-type="single" data-from="{if isset($smarty.get.mileage)}{$smarty.get.mileage}{else}0{/if}" data-step="10000" style="display: none;">

			<input type="hidden" id="qs-mileage-input" name="mileage" value="{if isset($smarty.get.mileage)}{$smarty.get.mileage}{else}0{/if}">
		</div>

		<div class="checkbox-group">
			<label for="qs-images" class="checkbox">
				<input type='checkbox' name="images" value="1" id="qs-images">
				{lang key='with_pictures_only'}
			</label>
			<label for="qs-sold" class="checkbox">
				<input type='checkbox' name="sold" value="1" id="qs-sold">
				{lang key='include_sold_listings'}
			</label>
		</div>

		<button type="submit" class="btn btn-primary btn-block">{lang key='search'}</button>
	</form>

	{ia_add_media files='js:jquery/plugins/jquery.ia-dropdown.min, js:_IA_URL_packages/autos/js/front/search, js:_IA_TPL_ion.rangeSlider.min'}

	{ia_add_js}
$(function()
{
	$('.qs-model').on('change', function()
	{
		var _this   = $(this);
		var thisVal = _this.val();
		var $parent  = _this.closest('form');

		$('input[name="model"]', $parent).val(thisVal);
	});

	$('#qs-price').ionRangeSlider({
		onChange: function(obj){
			$('#price_from').val(obj.fromNumber);
			$('#price_to').val(obj.toNumber);
		}
	});

	$('#qs-year').ionRangeSlider({
		prettify: false,
		onChange: function(obj){
			$('#year_from').val(obj.fromNumber);
			$('#year_to').val(obj.toNumber);
		}
	});

	$('#qs-mileage').ionRangeSlider({
		onChange: function(obj){
			$('#qs-mileage-input').val(obj.fromNumber);
		}
	});	
});
	{/ia_add_js}
{/if} 