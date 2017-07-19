$(document).ready(
	function()
	{
		// smooth scroll
		$('a[href^=#]')
			.not(
				function(idx,el)
				{
					var href = $(el).attr('href');
					switch(href)
					{
						case '#':
						case '#0':
						case '#shoe_img_carousel':
							return true;

						default:
							return false;
					}
				})
			.on('click',
			function()
			{
				var target = $(this).attr('href');
				$('html, body').animate({
					scrollTop: $(target).parent().offset().top - 50
				},1000);
			});

		$.ajax({
			url: baseurl+'main/getProducts/all/4',
			method: 'POST',
			dataType: 'json',
			data: {html: true},
			beforeSend: function()
			{
				// show loading indicator
				$('.loading-div').removeClass('hidden');
			}
		})
		.always(hideLoadingDiv)
		.done(new updateList()['generic']);

		$('.custom.items.container')
			// category filter buttons
			.on('click','li[data-nav-type] .btn[data-action=filter][data-show]',
				function()
				{
					var filter_type = $(this).attr('data-show');

					$('li[data-nav-search]').find('input[name=search_item]').val('');

					$.ajax({
						url: baseurl+'main/getProducts/'+filter_type+'/4',
						method: 'POST',
						dataType: 'json',
						data: {html: true},
					})
					.always(hideLoadingDiv)
					.done(new updateList(filter_type).has_type);
				})
			// on press of enter in search
			.on('keyup','li[data-nav-search] input[name=search_item]',
				function(e)
				{
					var key = e.which;

					if(key===13)
					{
						$('.custom.items.container')
							.find('li[data-nav-search] .btn[data-action=search]')
							.trigger('click');
					}
				})
			// search btn
			.on('click','li[data-nav-search] .btn[data-action=search]',
				function()
				{
					var $input = $('li[data-nav-search]').find('input[name=search_item]');
					var term = $input.val();

					// show error indicator on blank
					// $input.parent()[ ! term.trim() ? 'addClass' : 'removeClass']('has-error');

					! term.trim() && console.warn('no search input');

					!!term.trim() &&
					$.ajax({
						url: baseurl+'main/getProducts/search/4',
						method: 'POST',
						dataType: 'json',
						data: {html: true,term:term},
						beforeSend: function()
						{
							// clear product list
							$('#products_content').empty();
							// show loading indicator
							$('.loading-div').removeClass('hidden');
						}
					})
					.always(hideLoadingDiv)
					.done(new updateList()['generic']);
				})
			// next/prev btn functionality
			.on('click','li[data-nav-li] .btn[data-action]',
				function()
				{
					var action = $(this).attr('data-action');
					var offset = $(this).data('offset');
					var type = $(this).data('type') || '';

					$('li[data-nav-search]').find('input[name=search_item]').val('');

					switch(type)
					{
						case 'F':
						case 'M':
						case 'C':
							break;
						case '':
							type = 'all';
							break;

						default:
							console.warn('invalid type: ',type);
							return false;
					}

					$.ajax({
							url: baseurl+'main/getProducts/'+type+'/4/'+offset,
							method: 'POST',
							dataType: 'json',
							data: {html: true},
							beforeSend: function()
							{
								// clear product list
								$('#products_content').empty();
								// show loading indicator
								$('.loading-div').removeClass('hidden');
							}
					})
					.always(hideLoadingDiv)
					.done(new updateList()['generic']);
				});

		$('#products_content')
			// more info btn
			.on('click','.btn[data-show=info][data-id]',
				function()
				{
					var id = parseInt($(this).attr('data-id'));

					if(!id)
					{
						return false;
					}

					$.ajax({
						url: baseurl+'main/getByID/'+id,
						method: 'POST',
						dataType: 'json',
						beforeSend: function()
						{
							// show loading indicator
							$('#item_info_modal')
								.find('.loading-modal')
								.removeClass('hidden');
						}
					})
					.done(
						function(result)
						{
							// hide loading indicator
							$('#item_info_modal')
								.find('.loading-modal')
								.addClass('hidden');

							if(!result['html'])
							{
								// show error
								$('#item_info_modal').find('.item-content').html('<span class="label label-danger">Item not found</span>');
							}
							else
							{
								// show thumbnail
								$('#item_info_modal').find('.item-content').html(result['html']);
							}
						});
				});
	});