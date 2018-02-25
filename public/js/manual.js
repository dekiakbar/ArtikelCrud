//function tampil slug
function buatSlug(){
    var data = $('#dataSlug').val();
    $('#slug').val(slug(data));
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
function slug(data){
  return data.toString().toLowerCase()
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

//js konfirmasi delet kategori
function hapus(){
  var token = $('#hapus').data('token');
  var urlhapus = $('#hapus').data('slug'); 
  $('.ui.small.modal')
  .modal({
    onApprove: function (e) {
      if (e.hasClass('ya')) {
          $.ajax({
            url: urlhapus,
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
    },
    blurring: true,
    transition: 'fade in'
  })
  .modal('show');
}

//js klose nitifikasi
$(".close.icon").click(function(){
  $(this).parent().hide();
});


