<div class="card">
    <div class="card-body">
        <h3>Subscribe</h3>
        <p>Subscribe to our News Letter to notified abot latest News</p>
        <div class="input-group mb-4">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            <input id='newsletter_email' class="form-control" placeholder="Your Email..." type="text">
        </div>
         <div id='subs_resp'>
          </div>
        <div class=" mx-auto">
            <button id="btn_newsletter" type="button" class="btn bg-info w-100">Subscribe</button>
        </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.1.min.js"> </script>
<script>
  $('#btn_newsletter').click(function(){
    var token = 'cGF0YW5fYmNhZ3V5cw==';
    var email = $('#newsletter_email').val();
    $('#subs_resp').html(`<p class='bg-info text-white'>Subscribing..</p>`);

    if(email!=''){
      $.ajax({
        url : "https://api.bimash.com.np/patan/api/v1/post?news_letter",
        method : "GET",
        data :  { token, email  },
        success : function(response){
          var rs_cnt = JSON.parse(response);
            $('#subs_resp').html(`<p class='bg-success text-white'>${rs_cnt.data.message}</p>`);
            setTimeout(() => {
            $('#subs_resp').html(``);
          }, 3000);
          }
      })
    }
    if(email==''){
      $('#newsletter_email').addClass('is-invalid');
    }
  })

$('input[type=email]').keyup(function (event){
    event.preventDefault();
    var id = this.id;
    $('#'+id).removeClass('is-invalid');  
});


</script>