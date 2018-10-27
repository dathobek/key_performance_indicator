<!-- SAVE user -->
	<script type="text/javascript">
		jQuery( document ).ready( function($){
			$("#save_product").submit( function(evt){
				evt.preventDefault();
				var url = $(this).attr('action');
				var formData = $(this).serialize();
				$.ajax({
					url: url,
					type: 'POST',
					data: formData,
					success: function(result){
						alert('Product Table Updated');
						window.location = 'product.php';
					}
				});
			});
		});
	</script>