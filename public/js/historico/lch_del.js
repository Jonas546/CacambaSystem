function lc_modal_del(cod){

	$('#message1').empty();
	
	$.ajax({
		type: 'get',
		url: '/lc_gets/'+cod,
		dataType: 'json',
		cache: false,
		success: function(rs){
			$('#id1').val(rs.id);
		}
	});

}
