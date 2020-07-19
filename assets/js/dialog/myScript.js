var flashData = $('.flash-data').data('flashdata');

if (flashData) {
	swal({
		title: "Data Customer",
		text: flashData,
		type: "success"
	});
}

//tmbl-hapus
$('.tmbl-hapus').on('click', function(e){
	e.preventDefault();
	var address = $(this).attr('href');
	console.log(address);
	swal({   
		title: "Apakah Anda Yakin?",   
		text: "Data Customer akan Dihapus!",   
		type: "warning",   
		showCancelButton: true,   
		confirmButtonText: "Hapus Data!",
	}).then(function(){    
		document.location.href = address;   
	});
})