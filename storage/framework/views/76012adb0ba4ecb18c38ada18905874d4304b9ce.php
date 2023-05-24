<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title black">
      <h2><?php echo getcong_service('section_contact_title'); ?></h2>
      <hr>
    </div>
    <div class="col-md-6">
      <div class="col-md-12 contact"> <i class="fa fa-map-marker fa-2x"></i>
        <p class="dark"><?php echo getcong_service('section_contact_address'); ?></p>
      </div>
      <div class="col-md-12 contact"> <i class="fa fa-envelope-o fa-2x"></i>
        <p class="dark"><?php echo e(getcong_service('section_contact_email1')); ?> <br><?php echo e(getcong_service('section_contact_email2')); ?></p>
      </div>
      <div class="col-md-12 contact"> <i class="fa fa-phone fa-2x"></i>
        <p class="dark"><?php echo e(getcong_service('section_contact_phone1')); ?> <br><?php echo e(getcong_service('section_contact_phone2')); ?></p>
      </div>
      <hr>
      <div class="clearfix"></div>
    </div> 
  <div class="col-md-6"> 
    <script>
 
  $(function() {

    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var token = $("input[name=_token]").val();
            var name = $("input#name").val();
            var email = $("input#email").val();
            var message = $("textarea#message").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "./contact_send",
                type: "POST",
                data: {
                    _token: token,
                    name: name,
                    email: email,
                    message: message
                },                 
                cache: false,
                success: function() {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});

 </script> 
 

    <?php echo Form::open(array('url' => 'contact_send','class'=>'','name'=>'sentMessage','id'=>'contactForm','role'=>'form')); ?>

    <div class="row">
      <?php if(Session::has('flash_message')): ?>
            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
                <?php echo e(Session::get('flash_message')); ?>

            </div>
      <?php endif; ?>
      <div class="col-md-6">      
      <div class="form-group">
        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
        <p class="help-block text-danger"></p>
      </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
        <p class="help-block text-danger"></p>
      </div>
      </div>
    </div>
    <div class="form-group">
      <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message here..." required></textarea>
      <p class="help-block text-danger"></p>
    </div>
    <div id="success"></div>
    <button id="submit" value="Submit" class="btn-download-w">Send Message</button>
    <?php echo Form::close(); ?>

  </div>  
  </div>
</div>