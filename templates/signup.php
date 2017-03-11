<div class="row">
  <div class="col-lg-4">
    <?php
      $args = array(
      'prepend' => '', 
      'showname' => false,
      'emailtxt' => '',
      'emailholder' => 'EMAIL ADDRESS...', 
      'showsubmit' => true, 
      'submittxt' => 'FIND OUT MORE', 
      'jsthanks' => false,
      'thankyou' => "THANKS, WE'LL EMAIL YOU WHEN PREORDERS ARE OPEN"
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
