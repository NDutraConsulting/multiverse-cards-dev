<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Password Reset</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    </head>
    <body>

      Reset Password
      <div class="login-content">
        <div data-uia="password-reset-wrapper">
          <h1 data-uia="password-reset-header">Forgot Email/Password</h1>
          <p data-uia="password-reset-subheader">How would you like to reset your password?</p>
          <div class="reset-choice-container" data-uia="reset-choice-container">
            <div class="ui-binary-input">
              <input type="radio" class="reset-password-choice"
              name="resetPasswordChoice" id="bxid_resetPasswordChoice_email"
              value="email" tabindex="0" data-uia="email" checked="">
              <label for="bxid_resetPasswordChoice_email" data-uia="label+email">Email</label>
              <div class="helper"></div>
            </div>
            <div class="ui-binary-input">
              <input type="radio" class="reset-password-choice" name="resetPasswordChoice"
              id="bxid_resetPasswordChoice_text" value="text"
              tabindex="0" data-uia="text">
              <label for="bxid_resetPasswordChoice_text" data-uia="label+text">
                Text Message (SMS)</label>
                <div class="helper"></div>
              </div></div>
              <div>
                <p data-uia="email-description">
                  We will send you an email with instructions on how to reset your password.
                </p><div class="contact-input-wrapper">
                  <label class="contact-method-input ui-label ui-input-label"
                  id="lbl-forgot_password_input" placeholder="forgot_password_input">
                  <span class="ui-label-text"></span>
                  <input type="email" data-uia="forgot_password_input" class="ui-text-input" name="forgot_password_input" id="forgot_password_input" value="" placeholder="name@example.com" tabindex="0">
                </label>
              </div>
            </div>
            <button class="btn forgot-password-action-button btn-blue btn-large" type="button" autocomplete="off" tabindex="0" data-uia="action_forgot_password">Email Me</button>
            <a data-uia="action_forgot_password_mop" href="#" class="forgot-password-mop-link">I don't remember my email or phone.</a>
          </div>
        </div>

    </body>
</html>
