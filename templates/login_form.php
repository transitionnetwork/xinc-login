<div id="login-form" class="xinc-form-container">
  <?php if (count($attributes['errors']) > 0) : ?>
    <div class="alert alert-danger">
      <ul>
        <?php foreach ($attributes['errors'] as $error) : ?>
          <li><?php echo $error; ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

    <!-- Show logged out message if user just logged out -->
  <?php if ($attributes['logged_out']) : ?>
      <div class="alert alert-info">
        <?php _e('You have signed out. Would you like to sign in again?', 'xinc-login'); ?>
      </div>
  <?php endif; ?>
  
  <?php if ($attributes['lost_password_sent']) : ?>
      <div class="alert alert-info">
        <?php _e('Check your email for a link to reset your password', 'xinc-login'); ?>
      </div>
  <?php endif; ?>
  
  <?php if ($attributes['password_updated']) : ?>
      <div class="alert alert-info">
        <?php _e('Your password has been updated', 'xinc-login'); ?>
      </div>
  <?php endif; ?>
  
  <?php if ($attributes['show_title']) : ?>
      <h2><?php _e('Sign In', 'xinc-login'); ?></h2>
  <?php endif; ?>

  <?php
  wp_login_form(
    array(
      'label_username' => __('Email', 'xinc-login'),
      'label_log_in' => __('Sign In', 'xinc-login'),
      'redirect' => $attributes['redirect']
    )
  );
  ?>
    
  <a href="<?php echo wp_lostpassword_url(); ?>">
      <p><?php _e('Register a new account', 'xinc-login'); ?></p>
  </a>
  
  <a href="<?php echo wp_lostpassword_url(); ?>">
      <p><?php _e('Forgot your password?', 'xinc-login'); ?></p>
  </a>
  
</div>
