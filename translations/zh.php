<?php

/**
 * Please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
 * in the application's header (in views/_header.php). To add new languages simply copy this file,
 * and create a language switch in your root files.
 */

// login & registration classes
define("MESSAGE_ACCOUNT_NOT_ACTIVATED", "你的帳號仍然未被激活。請閣下按下確認信件的激活鏈結。");
define("MESSAGE_CAPTCHA_WRONG", "驗證碼錯誤！");
define("MESSAGE_COOKIE_INVALID", "非法cookie");
define("MESSAGE_DATABASE_ERROR", "資料庫連線問題。");
define("MESSAGE_EMAIL_ALREADY_EXISTS", "此電子郵件地址已被用作註冊。如果你忘記了你的密碼，請使用“我忘記了我的密碼”頁面。");
define("MESSAGE_EMAIL_CHANGE_FAILED", "抱歉，電子郵件地址更改失敗。");
define("MESSAGE_EMAIL_CHANGED_SUCCESSFULLY", "Your email address has been changed successfully. New email address is ");
define("MESSAGE_EMAIL_EMPTY", "Email cannot be empty");
define("MESSAGE_EMAIL_INVALID", "Your email address is not in a valid email format");
define("MESSAGE_EMAIL_SAME_LIKE_OLD_ONE", "Sorry, that email address is the same as your current one. Please choose another one.");
define("MESSAGE_EMAIL_TOO_LONG", "電子郵件地址不能超過64個字符");
define("MESSAGE_LINK_PARAMETER_EMPTY", "Empty link parameter data.");
define("MESSAGE_LOGGED_OUT", "你已經登出。");
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
define("MESSAGE_LOGIN_FAILED", "Login failed.");
define("MESSAGE_OLD_PASSWORD_WRONG", "Your OLD password was wrong.");
define("MESSAGE_PASSWORD_BAD_CONFIRM", "Password and password repeat are not the same");
define("MESSAGE_PASSWORD_CHANGE_FAILED", "Sorry, your password changing failed.");
define("MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY", "Password successfully changed!");
define("MESSAGE_PASSWORD_EMPTY", "Password field was empty");
define("MESSAGE_PASSWORD_RESET_MAIL_FAILED", "Password reset mail NOT successfully sent! Error: ");
define("MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT", "Password reset mail successfully sent!");
define("MESSAGE_PASSWORD_TOO_SHORT", "Password has a minimum length of 6 characters");
define("MESSAGE_PASSWORD_WRONG", "Wrong password. Try again.");
define("MESSAGE_PASSWORD_WRONG_3_TIMES", "You have entered an incorrect password 3 or more times already. Please wait 30 seconds to try again.");
define("MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL", "Sorry, no such id/verification code combination here...");
define("MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL", "Activation was successful! You can now log in!");
define("MESSAGE_REGISTRATION_FAILED", "Sorry, your registration failed. Please go back and try again.");
define("MESSAGE_RESET_LINK_HAS_EXPIRED", "Your reset link has expired. Please use the reset link within one hour.");
define("MESSAGE_VERIFICATION_MAIL_ERROR", "Sorry, we could not send you an verification mail. Your account has NOT been created.");
define("MESSAGE_VERIFICATION_MAIL_NOT_SENT", "Verification Mail NOT successfully sent! Error: ");
define("MESSAGE_VERIFICATION_MAIL_SENT", "Your account has been created successfully and we have sent you an email. Please click the VERIFICATION LINK within that mail.");
define("MESSAGE_USER_DOES_NOT_EXIST", "This user does not exist");
define("MESSAGE_USERNAME_BAD_LENGTH", "Username cannot be shorter than 2 or longer than 64 characters");
define("MESSAGE_USERNAME_CHANGE_FAILED", "Sorry, your chosen username renaming failed");
define("MESSAGE_USERNAME_CHANGED_SUCCESSFULLY", "Your username has been changed successfully. New username is ");
define("MESSAGE_USERNAME_EMPTY", "Username field was empty");
define("MESSAGE_USERNAME_EXISTS", "Sorry, that username is already taken. Please choose another one.");
define("MESSAGE_USERNAME_INVALID", "Username does not fit the name scheme: only a-Z and numbers are allowed, 2 to 64 characters");
define("MESSAGE_USERNAME_SAME_LIKE_OLD_ONE", "Sorry, that username is the same as your current one. Please choose another one.");

// views
define("WORDING_BACK_TO_LOGIN", "返回登入頁面");
define("WORDING_CHANGE_EMAIL", "改變電子郵件地址");
define("WORDING_CHANGE_PASSWORD", "改變密碼");
define("WORDING_CHANGE_USERNAME", "改變使用者名稱");
define("WORDING_CURRENTLY", "現在");
define("WORDING_EDIT_USER_DATA", "修改使用者資料");
define("WORDING_EDIT_YOUR_CREDENTIALS", "You are logged in and can edit your credentials here");
define("WORDING_FORGOT_MY_PASSWORD", "我忘記了我的密碼");
define("WORDING_LOGIN", "登入");
define("WORDING_LOGOUT", "登出");
define("WORDING_NEW_EMAIL", "新電子郵件地址");
define("WORDING_NEW_PASSWORD", "新密碼");
define("WORDING_NEW_PASSWORD_REPEAT", "重新輸入新密碼");
define("WORDING_NEW_USERNAME", "New username (username cannot be empty and must be azAZ09 and 2-64 characters)");
define("WORDING_OLD_PASSWORD", "舊密碼");
define("WORDING_PASSWORD", "密碼");
define("WORDING_PROFILE_PICTURE", "你的用戶圖片（從gravatar取得）：");
define("WORDING_REGISTER", "登記");
define("WORDING_REGISTER_NEW_ACCOUNT", "登記新帳戶");
define("WORDING_REGISTRATION_CAPTCHA", "請輸入這些字符");
define("WORDING_REGISTRATION_EMAIL", "電子郵件地址 (please provide a real email address, you'll get a verification mail with an activation link)");
define("WORDING_REGISTRATION_PASSWORD", "密碼（至少六個字符）");
define("WORDING_REGISTRATION_PASSWORD_REPEAT", "重新輸入密碼");
define("WORDING_REGISTRATION_USERNAME", "使用者名稱 (only letters and numbers, 2 to 64 characters)");
define("WORDING_REMEMBER_ME", "保持登入狀態（兩個星期）");
define("WORDING_REQUEST_PASSWORD_RESET", "Request a password reset. Enter your username and you'll get a mail with instructions:");
define("WORDING_RESET_PASSWORD", "重設密碼");
define("WORDING_SUBMIT_NEW_PASSWORD", "提交新密碼");
define("WORDING_USERNAME", "使用者名稱");
define("WORDING_YOU_ARE_LOGGED_IN_AS", "你已經登入了，");
