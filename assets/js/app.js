jQuery(function ($) {
 $(document).ready(function () {


  const dataFetch = (url) => {
    return new Promise((resolve,reject) => {
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
        resolve(result) 
       },
       fail:function(error){
        reject(error)
       }
     });
    })
  }

  const drawResponse = () => {
    let boxMessage = document.getElementById('connection-result');
    boxMessage.innerHTML = `
      <h3 style="color:#4bb54b;">Productos sincronizados con éxito</h3>
      <a style="font-size:1.2rem;margin:5% 0; display:block;" href="/ariadnacg/wp-admin/edit.php?post_type=productos">Ver productos</a>
    `
  }

  $('#check-con').on('click',function(e){
    e.preventDefault()
    dataFetch(ajax.ajaxurl)
      .then(data => {
        drawResponse()
      })
    .catch(error => {return error})
  })


 }); 
});
 