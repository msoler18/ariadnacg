jQuery(function ($) {
 $(document).ready(function () {

  const dataFetch = (url) => {
    $.ajax({
      url : url, 
      type: 'POST',
      data: {
        action : 'retreive_products',
      },
      beforeSend: function(){
        console.log('sending')
      },
      success: function(result){
        let boxMessage = document.getElementById('connection-result');
        boxMessage.innerHTML = `
          <h4>Productos sincronizados con éxito</h4>
          <a style="margin:5% 0; display:block;" href="/ariadnacg/wp-admin/edit.php?post_type=productos">Ver productos</a>
        `
      },
      fail:function(error){
        console.log(error)
      }
    });
  }

  $('#check-con').on('click',function(e){
    e.preventDefault()
    dataFetch(ajax.ajaxurl)
  })
  



 }); 
});
 