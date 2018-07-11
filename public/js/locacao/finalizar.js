function lc_modal_fin(cod){

	$('#message3').empty();
	
	$.ajax({
		type: 'get',
		url: '/lc_get/'+cod,
		dataType: 'json',
		cache: false,
		success: function(rs){
			$('#fid').val(rs.id);
		}
	});

}
