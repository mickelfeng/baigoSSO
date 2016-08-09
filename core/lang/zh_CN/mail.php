<?php
/*-----------------------------------------------------------------
！！！！警告！！！！
以下为系统文件，请勿修改
-----------------------------------------------------------------*/

//不能非法包含或直接执行
if (!defined("IN_BAIGO")) {
    exit("Access Denied");
}


/*-------------------------邮件语言-------------------------*/
return array(
    /*------ 注册------*/
    "reg" => array(
        "subject"   => "请验证您的邮箱",
        "content"   => "<p>这封信是由 " . BG_SITE_NAME . " 自动发送的，请勿回复本邮件！</p>

                    <p>您收到这封邮件，是由于您在 " . BG_SITE_NAME . " 注册时使用了本地址。如果您并没有访问过 " . BG_SITE_NAME . "，或没有进行上述操作，请忽略这封邮件。您不需要退订或进行其他进一步的操作。</p>

                    <p>如果您注册时使用了本地址，我们需要对您的地址有效性进行验证以避免垃圾邮件或地址被滥用。</p>

                    <p>您的用户名：{user_name}</p>
                    <p>您的邮箱：{user_mail}</p>

                    <p>若要完成此流程，请点击下方链接：</p>

                    <p>{verify_url}</p>

                    <p>如果上面不是链接形式，请将该地址手工粘贴到浏览器地址栏再访问。</p>

                    <p>感谢您的访问，祝您使用愉快！</p>

                    <p>此致</p>
                    <p>" . BG_SITE_NAME . " 管理团队。</p>",
    ),


    /*------ 更换邮箱------*/
    "mailbox" => array(
        "subject"   => "请验证您的邮箱",
        "content"   => "<p>这封信是由 " . BG_SITE_NAME . " 自动发送的，请勿回复本邮件！</p>

                    <p>您收到这封邮件，是由于您在 " . BG_SITE_NAME . " 修改邮箱时使用了本地址。如果您并没有访问过 " . BG_SITE_NAME . "，或没有进行上述操作，请忽略这封邮件。您不需要退订或进行其他进一步的操作。</p>

                    <p>如果您修改邮箱时使用了本地址，我们需要对您的地址有效性进行验证以避免垃圾邮件或地址被滥用。</p>

                    <p>您的用户名：{user_name}</p>
                    <p>您的旧邮箱：{user_mail}</p>
                    <p>您的新邮箱：{user_mail_new}</p>

                    <p>若要完成此流程，请点击下方链接：</p>

                    <p>{verify_url}</p>

                    <p>如果上面不是链接形式，请将该地址手工粘贴到浏览器地址栏再访问。</p>

                    <p>如果您没有提出此请求或者您认为有人未经授权访问了您的帐户，您可以前往 " . BG_SITE_NAME . "，重设您的密码。</p>

                    <p>感谢您的访问，祝您使用愉快！</p>

                    <p>此致</p>
                    <p>" . BG_SITE_NAME . " 管理团队。</p>",
    ),

    /*------ 找回密码------*/
    "forgot" => array(
        "subject"   => "找回密码",
        "content"   => "<p>这封信是由 " . BG_SITE_NAME . " 自动发送的，请勿回复本邮件！</p>

                    <p>您收到这封邮件，是您由于您在 " . BG_SITE_NAME . " 进行了找回密码的操作。如果您并没有访问过 " . BG_SITE_NAME . "，或没有进行上述操作，请忽略这封邮件。您不需要退订或进行其他进一步的操作。</p>

                    <p>您的用户名：{user_name}</p>

                    <p>如果您进行了找回密码的操作，请点击下方链接：</p>

                    <p>{verify_url}</p>

                    <p>如果上面不是链接形式，请将该地址手工粘贴到浏览器地址栏再访问。</p>

                    <p>如果您没有提出此请求或者您认为有人未经授权访问了您的帐户，您可以前往 " . BG_SITE_NAME . "，重设您的密码。</p>

                    <p>感谢您的访问，祝您使用愉快！</p>

                    <p>此致</p>
                    <p>" . BG_SITE_NAME . " 管理团队。</p>",
    ),
);
