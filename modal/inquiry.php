<section class="py-7 position-relative">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto text-center">
        <h2>Inquiry Form</h2>
        <p class="lead">Any questions or remarks? Just write us a messaage!</p>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-10 mx-auto">
        <div class="card">
          <div class="row">
            <div class="col-lg-5 d-flex">
              <div class="bg-gradient-info my-lg-3 ms-lg-3 border-radius-md">
                <img src="https://bimash.com.np/Projects/Patan/assets/img/waves-white.svg" alt="pattern-lines" class="position-absolute start-0 top-0 h-100 opacity-6">
                <div class="card-body p-5 position-relative">
                  <h3 class="text-white">Contact Information</h3>
                  <p class="text-white opacity-8 mb-4">Fill up the form and our Team will get back to you within 24 hours.</p>
                  <div class="d-flex p-2 text-white">
                    <div>
                      <i class="fas fa-phone text-sm"></i>
                    </div>
                    <div class="ps-3">
                      <span class="text-sm opacity-8">(+977) 9890000000</span>
                    </div>
                  </div>
                  <div class="d-flex p-2 text-white">
                    <div>
                      <i class="fas fa-envelope text-sm"></i>
                    </div>
                    <div class="ps-3">
                      <span class="text-sm opacity-8">support@bimash.com.np</span>
                    </div>
                  </div>
                  <div class="d-flex p-2 text-white">
                    <div>
                      <i class="fas fa-map-marker-alt text-sm"></i>
                    </div>
                    <div class="ps-3">
                      <span class="text-sm opacity-8">Nepal - Bagmati <br> Patan, Lalitpur 44700</span>
                    </div>
                  </div>
                  <div class="mt-4">
                    <a href="https://www.facebook.com/bimash.maharjan" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Facebook">
                      <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://twitter.com/bimashmaharjan" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Twitter">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="http://bimash.com.np/" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Dribbble">
                      <i class="fas fa-globe"></i>
                    </a>
                    <a href="https://instagram.com/bimash.maharjan" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Instagram">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-7">
              <form id="contact-form" method="post" autocomplete="off">
                <div class="card-body position-relative p-3 ps-0">
                    <label>Email address</label>
                    <div class="input-group mb-4">
                      <input id="inquiry_email" type="email" class="form-control" placeholder="eg. youremail@youremail.com">
                    </div>
                 <label>Contact Number</label>
                    <div class="input-group mb-4">
                      <input id="inquiry_contact" type="number" class="form-control" placeholder="eg.98XXXXXXXX">
                    </div>
                    <input id="inquiry_course" type="hidden" value='<?php echo $name ?>'  class="form-control" >
                    <div class="form-group mt-4">
                        <label>Your message</label>
                        <textarea id="inquiry_message" name="message" class="form-control" id="message" placeholder="eg. Is this course hard ?" rows="6"></textarea>
                    </div>
                    <div id='inquiry_resp'>
                    </div>
                    <div class="text-end">
                        <button id="btn_inquiry" type="button" class="btn bg-gradient-dark mb-0">Send message</button>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"> </script>
<script>
  $('#btn_inquiry').click(function(){
    var token = 'cGF0YW5fYmNhZ3V5cw==';
    var email = $('#inquiry_email').val();
    var contact_no = $('#inquiry_contact').val();
    var code = $('#inquiry_course').val();
    var message= $('#inquiry_message').val();
    if(code!='' && email!='' && contact_no !='' && message !=''){
    $('#inquiry_resp').html(`<p class='bg-info text-white'>Sending Message</p>`);

    $.ajax({
      url : "https://api.bimash.com.np/patan/api/v1/post",
      method : "POST",
      data :  { inquiry: '', token  , contact_no , message , code , email },
      success : function(response){
          var rs_inq = JSON.parse(response);
        $('#inquiry_resp').html(`<p class='bg-success text-white'>${rs_inq.data.message}</p>`);
        setTimeout(() => {
          $('#inquiry_resp').html(``);
        }, 3000);
      }
    })
  }
    if(email==''){
      $('#inquiry_email').addClass('is-invalid');
    }
    if(contact_no==''){
      $('#inquiry_contact').addClass('is-invalid');
    }
    if(message==''){
      $('#inquiry_message').addClass('is-invalid');
    }
  })


</script>