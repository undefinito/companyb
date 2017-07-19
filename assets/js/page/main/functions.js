function hideLoadingDiv()
{
	// hide loading indicator
	$('.loading-div').addClass('hidden');
}

function updateList(btn_type)
{
	var btn_sel = '';

	if(btn_type)
	{
		switch(btn_type.toUpperCase())
		{
			case 'M':
			case 'F':
			case 'C':
			case 'ALL':
				btn_sel = 'li[data-nav-type] .btn[data-action=filter][data-show='+btn_type.toLowerCase()+']';
				break;
		}


		this.has_type = function(result)
		{
			// disable current type
			$(btn_sel)
				.prop('disabled',true)
					.siblings()
					.prop('disabled',false);

			var total_items = parseInt(result['total']);
			if(total_items > 0 && result['html'])
			{
				var $nav_li = $('.custom.items.container').find('li[data-nav-li]');

				// show next/prev btns
				$nav_li.removeClass('hidden');
				// toggle btns depending on availability of next/prev items
				$nav_li.find('.btn[data-action=prev]').prop('disabled', ! result['more_prev']);
				$nav_li.find('.btn[data-action=next]').prop('disabled', ! result['more_next']);

				if(result['more_prev'])
				{
					// calculate offset for previous
					$nav_li.find('.btn[data-action=prev]').data('offset', result['offset'] - result['limit']);
				}

				if(result['more_next'])
				{
					// set offset for next
					$nav_li.find('.btn[data-action=next]').data('offset', result['next_offset']);
				}

				// show product list html
				$('#products_content').html(result['html']);
			}
			else if(total_items==0 && result['html'])
			{
				$('#products_content').html(result['html']);
			}
			else
			{
				$('#products_content').html('<span class="label label-danger">No items found</span>');
			}
		};
	}

	this.generic = function(result)
	{
		$('li[data-nav-type] .btn[data-action=filter][data-show]')
			.prop('disabled',false);

		var total_items = parseInt(result['total']);

		if(total_items > 0 && result['html'])
		{
			var $nav_li = $('.custom.items.container').find('li[data-nav-li]');

			// show next/prev btns
			$nav_li.removeClass('hidden');
			// toggle btns depending on availability of next/prev items
			$nav_li.find('.btn[data-action=prev]').prop('disabled', ! result['more_prev']);
			$nav_li.find('.btn[data-action=next]').prop('disabled', ! result['more_next']);

			if(result['more_prev'])
			{
				// calculate offset for previous
				$nav_li.find('.btn[data-action=prev]').data('offset', result['offset'] - result['limit']);
			}

			if(result['more_next'])
			{
				// set offset for next
				$nav_li.find('.btn[data-action=next]').data('offset', result['next_offset']);
			}

			// show product list html
			$('#products_content').html(result['html']);
		}
		else if(total_items==0 && result['html'])
		{
			$('#products_content').html(result['html']);
		}
		else
		{
			$('#products_content').html('<span class="label label-danger">No items found</span>');
		}
	};
}