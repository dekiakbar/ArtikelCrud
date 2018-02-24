function buatSlug(){
    var judul = $('#judul').val();
    $('#slug').val(slug(judul));
}

$('.ui.dropdown')
  	.dropdown({
  		on : 'hover'
});

$('.ui.fluid.dropdown')
  	.dropdown({
  		on : 'click'
});

function tampil(){
	$('.ui.longer.modal').
	modal({
		blurring: true,
		transition: 'fade in'
	}).
	modal('show');
}

function slug(judul){
  return judul.toString().toLowerCase()
    .replace(/\s+/g, '-')           
    .replace(/[^\w\-]+/g, '')      
    .replace(/\-\-+/g, '-')        
    .replace(/^-+/, '')           
    .replace(/-+$/, '');          
}

$("input:text").click(function() {
  $(this).parent().find("input:file").click();
});

$('input:file', '.ui.action.input')
  .on('change', function(e) {
    var Nfile = e.target.files[0].name;
    $('input:text', $(e.target).parent()).val(Nfile);
  });