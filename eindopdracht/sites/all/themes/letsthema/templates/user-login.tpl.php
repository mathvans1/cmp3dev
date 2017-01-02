<div class="login-photo">
	<img src="<?php print base_path() . drupal_get_path('theme', 'letsthema') . '/images/student_login.png'; ?>"  alt="Login" title="Login" width='150' height='150' />
</div>
<?php

dpm($variables);

/* split the username and password from the submit button
   so we can put in links above */

print drupal_render($form['name']);
print drupal_render($form['pass']);
print drupal_render($form['form_build_id']);
print drupal_render($form['form_id']);
print drupal_render($form['actions']);