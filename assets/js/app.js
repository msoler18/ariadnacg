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
        console.log(result)
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
 