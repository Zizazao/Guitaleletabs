$(function(){
  $('body,html').hungryscroller({
    // slowSpeed: 25000,
    // medSpeed: 12000,
    // fastSpeed: 8000
  });
});

(function()	{
	$('form[data-remote]').on('submit', function(e)	{
	
		var form = $(this);
	
		var method = form.find('input[name="_method"]').val() || 'POST';
		
		var url = form.prop('action');
		
		$.ajax({
		
			type: method,
			url: url,
			data: form.serialize(),
			success: function() {
			
				alert('all done!');
			}
		
		});
		
		e.preventDefault();
	
	});
}();


