<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Getting Started with IRC | LGBTeens</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="SmilingDevil">

    <!-- Le styles -->
    <link href="bin/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 30px;
            background: #eee;
        }

        .container {
            margin: 0 auto;
            width: 900px;
        }

        .container .wrap {
            width: 600px;
            margin: 0 auto;
        }

        .container .hero-unit h1 {
            padding: 0;
        }

        .container h1 {
            padding-left: 20px;
        }

        b h1, h1 b, h4 {
            font-weight: 400;
        }
    </style>
    <link href="bin/css/m-buttons.min.css" rel="stylesheet"/>
    <link href="bin/css/metro.css" rel="stylesheet"/>
    <link href="bin/css/m-icons.css" rel="stylesheet"/>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <div class="hero-unit blue">
        <h1>A Guide to IRC</h1>

        <p>By <a href="http://smilingdevil.com" target="_blank">SmilingDevil</a></p>
    </div>
    <div class="wrap">
        <div class="alert alert-info">If you're a lazy reader, feel free to read only the hilighted (bold) text.</div>
        <div id="connecting">
            <h4>Connecting</h4>

            <p><b>So, you want to get on the chat?</b><br><br>To do that, you might want to first know what you're
                connecting to. It's
                called <a rel="tooltip" class="tooltip-call" title="Internet Relay Chat">IRC</a>, and you can <a
                        target="_blank"
                        href="https://en.wikipedia.org/wiki/Internet_Relay_Chat">read
                    more
                    about it on Wikipedia</a>. <br><br><b>If you have no idea what IRC is and are a newbie, feel free to
                    click the
                    button below to open a new window to chat in.</b> Otherwise, if you have a client and know what
                you're
                doing, then feel free to
                connect
                with <a rel="tooltip" class="tooltip-call" title="#lgbteens @ irc.awfulnet.org">these details</a> and <a
                        href="#nickserv">skip
                    ahead to the next chapter</a>. <br><br>For those who aren't as familiar, you might've noticed the
                term
                "client." There exists a client for almost every OS existent, popular ones include <a
                        href="http://www.hexchat.org/home/downloads" target="_blank">Hexchat</a> (free) and <a
                        href="http://www.mirc.com/" target="_blank">mIRC</a> (paid),
                and if you become a regular to IRC,
                you'll eventually want to get a client.<br><br>
                <a href="http://webchat.awfulnet.org:9001/?channels=#lgbteens" target="_blank" class="m-btn black">Start
                    Chatting <i class="m-icon-swapright m-icon-white"></i></a>
                <br><br>
                <b>Once you've connected, you're going to want to change your nickname, to do this do
                    <code>/nick [username]</code>, of course removing the brackets and replacing "username" with your
                    desired username.</b>
            </p>
        </div>
        <br>

        <div id="etiquette">
            <h4>How to IRC</h4>

            <p>
                There are many accepted rules to being on IRC, one such courtesy is <b>when talking to somebody
                directly,
                to append their nickname at the beginning of the message.</b> <br><br><b>Most clients available have
                username
                auto-complete, so you should only need to type the first few letters then be able to hit the [tab] key
                and it should finish the username for you</b>, then when you send the message, they will receive a
                notification. <br><br>The
                same applies to you, if you are mentioned in a message, your client should beep or show a flashing
                notification.
                <br><br>
                If you would like to send a personal message, to your internet lover per se, that only that specific
                user
                can see, all you need to do is
                <br><code>/msg [username] Hey gurl</code>
            </p>
        </div>
        <br>

        <div id="nickserv">
            <h4>Registering with NickServ</h4>

            <p>
                So you're all happy on IRC, everything is sunshine and rainbows. Let's say your nick is John. You leave
                for an hour to go shopping with your besties, however when you come back, you try and join with the nick
                John, and oh noes! It's taken!
                <br><br>
                That's what <a rel="tooltip" class="tooltip-call" title="Nickname Services">NickServ</a> is for!
                <b>NickServ is a service provided by the IRC network (the people that run the
                    chat service), which helps user identify themselves, and keeps other people from stealing your
                    name.</b> <br><br>It
                does this by having you register your name with a password and an email, and any time somebody connects
                with your name (including you), it reqires them to enter your password to allow them to continue to use
                that nickname. <br><br><b>To register a nickname, all you need to do is:
                <br>
                <code>/msg nickserv register [password] [email]</code>
                <br>
                Replace password and email respectively, and remove the brackets... and you're done!</b><br><br>
                NickServ should now
                have sent an email asking you to verify the registration, all you
                need to do is follow the instructions in the email to finish the registration process. <br><br><b>Now,
                take note,
                from now on, once you connect with your name, you're going to need to enter your password, you can do
                this by doing:
                <br>
                <code>/msg nickserv identify [password]</code>
                <br>
            </b>Once again, remove the brackets and replace password with your password. And that's it! <br><br>You're
                logged
                in. Most clients have an option to automatically log you in with NickServ, including the web client,
                just click the services checkbox and enter your password.
            </p>
        </div>
        <br>

        <div id="info">
            <h4>SLAPASS (Tell us About Yourself)</h4>

            <p>
                SLAPASS stands for Sex, Location, Age, Picture, Aspirations or Goals, Sexuality, and Starsign. <br><br>
                What's
                this information used for? It's so that others in the chat can know who you are. <br><b>All they need to do
                is
                <code>!info [username]</code> and it gives them that user's SLAPASS information.</b> If you don't want
                to
                have one, and stay anonymous, that's fine. <br><br><b>But if you do want to, just do the following command
                in
                the
                chat:
                <br>
                <code>!add Sex / Location / Age / Picture / Aspirations / Sexuality / Starsign</code>
                <br></b>
                That will add your information and you should get a confirming message saying that the data was
                saved.<br><br>
                Note, <b>when adding your information, make sure the "/" have spaces around them.</b> This makes it
                easier for
                users to click your photo link.
            </p>
        </div>
        <br>

        <div style="text-align:center;">
            <h3><u>That's all folks!</u></h3>

            <p id="footer">Git revision id <?=exec("git rev-parse --short HEAD");?></p></div>
        <br><br>


    </div>
</div>
<!-- /container -->
</body>

<script src="bin/js/jquery-1.8.0.min.js"></script>
<script src="bin/js/bootstrap.min.js"></script>
<script src="bin/js/m-dropdown.min.js"></script>
<script>
    $(".tooltip-call").tooltip();
</script>
</html>
