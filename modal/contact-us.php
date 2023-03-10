
<div class="modal fade" id="exampleModalSignup" tabindex="-1" aria-labelledby="exampleModalSignup" aria-hidden="true">
  <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="card card-plain">
          <div class="card-header pb-0 text-start">
              <h3 class="font-weight-bolder text-info text-gradient">Contact US</h3>
              <p class="mb-0"></p>
          </div>
          <div class="card-body pb-3">
            <form role="form text-start">
              <label>Name</label>
              <div class="input-group mb-3">
                <input id="contact_name" type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name-addon" >
              </div>
              <label>Email</label>
              <div class="input-group mb-3">
                <input id="contact_email" type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon" >
              </div>
              <label>Contact Number</label>
              <div class="input-group mb-3">
                <input id="contact_contact" type="text" class="form-control" placeholder="Contact Number" aria-label="Name" aria-describedby="name-addon" >
              </div>
              <label>address</label>
              <div class="input-group mb-3">
                <input id="contact_address" type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name-addon" >
              </div>
              <label>Message</label>
              <div class="input-group mb-3">
                <textarea id="contact_message"  class="form-control" rows="5" placeholder="Message" aria-label="Password" aria-describedby="password-addon" ></textarea>
              </div>
              <div id='contact_resp'>
              </div>
              <div class="text-center">
                <button id="btn_contactus" type="button" class="btn bg-gradient-info btn-lg btn-rounded w-100 mt-4 mb-0">Contact US</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"> </script>
<script>

  $('#btn_contactus').click(function(){
    var name = $('#contact_name').val();
    var email = $('#contact_email').val();
    var contact = $('#contact_contact').val();
    var address= $('#contact_address').val();
    var message= $('#contact_message').val();
    if(name!='' && email!='' && contact !='' && address !='' && message !=''){
      $('#contact_resp').html(`<p class='bg-info text-white'>Sending Message</p>`);
      $.ajax({
        url : "https://api.bimash.com.np/patan/api/v1/post?contact_us",
        method : "GET",
        data :  { token : 'cGF0YW5fYmNhZ3V5cw==' ,name,email,contact,address,message  },
        success : function(response){
          var rs_cnt = JSON.parse(response);
          $('#contact_resp').html(`<p class='bg-success text-white'>${rs_cnt.data.message}</p>`);
          setTimeout(() => {
            $('#contact_resp').html(``);
          }, 3000);
        }
      })
    }

    if(name==''){
      $('#contact_name').addClass('is-invalid');
    }
    if(email==''){
      $('#contact_email').addClass('is-invalid');
    }
    if(contact==''){
      $('#contact_contact').addClass('is-invalid');
    }
    if(address==''){
      $('#contact_address').addClass('is-invalid');
    }
    if(message==''){
      $('#contact_message').addClass('is-invalid');
    }
  })

  $('input[type=text]').keyup(function (event){
    event.preventDefault();
    var id = this.id;
    $('#'+id).removeClass('is-invalid');  
});


$('textarea').keyup(function (event){
    event.preventDefault();
    var id = this.id;
    $('#'+id).removeClass('is-invalid');  
});

$('input[type=email]').keyup(function (event){
    event.preventDefault();
    var id = this.id;
    $('#'+id).removeClass('is-invalid');  
});

</script>