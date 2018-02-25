//function tampil slug
function buatSlug(){
    var judul = $('#judul').val();
    $('#slug').val(slug(judul));
}

//deopdown pada menu semantic
$('.ui.dropdown')
  	.dropdown({
  		on : 'hover'
});

$('.ui.fluid.dropdown')
  	.dropdown({
  		on : 'click'
});

//function menu mobile
function tampil(){
	$('.ui.longer.modal').
	modal({
		blurring: true,
		transition: 'fade in'
	}).
	modal('show');
}

//function slug
function slug(judul){
  return judul.toString().toLowerCase()
    .replace(/\s+/g, '-')           
    .replace(/[^\w\-]+/g, '')      
    .replace(/\-\-+/g, '-')        
    .replace(/^-+/, '')           
    .replace(/-+$/, '');          
}

//js input file form tambah artikel
$("input:text").click(function() {
  $(this).parent().find("input:file").click();
});

$('input:file', '.ui.action.input')
  .on('change', function(e) {
    var Nfile = e.target.files[0].name;
    $('input:text', $(e.target).parent()).val(Nfile);
});

//js konfirmasi delet
function konfirHapus(){
  var slug = $('#hapus').data('slug');
  var token = $('#hapus').data('token');
  $('.ui.basic.modal')
  .modal({
    onApprove: function (e) {
      if (e.hasClass('ya')) {
          $.ajax({
            url:'/kategori/'+slug,
            type: 'post',
            data: {_method: 'delete', _token :token, },
            success:function(msg){
              setTimeout(
                function() 
                  {
                     location.reload();
                  }, 0001);  
            }
          })
      }
    }
  })
  .modal('show');
}
