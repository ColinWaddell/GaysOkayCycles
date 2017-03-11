<div class="row">
  <div class="col-lg-4">
    <?php
      $args = array(
      'prepend' => '', 
      'showname' => false,
      'emailtxt' => '',
      'emailholder' => 'Email Address...', 
      'showsubmit' => true, 
      'submittxt' => 'Find Out More', 
      'jsthanks' => false,
      'thankyou' => "Thanks, we'll email you when preorders are open"
      );
      echo smlsubform($args);
    ?>
  </div>
</div>

<script>
  jQuery('input[name="submit"]').addClass('btn btn-warning');
  jQuery('input[name="sml_email"]').addClass('input form-control');
  if (jQuery('.sml_thankyou').length){
    jQuery('input[name="submit"]').hide();
    jQuery('input[name="sml_email"]').hide();
  }
</script>
