<div id="blurryscroll" aria-hidden="true"></div>
<!-- Static navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div>
    <a class="navbar-brand" href="home" style=" font-weight: bold;"><?php S('app_full_name') ?></a>


    <a class="navbar-brand active" id="nav_channel_btn" href="home" style="visibility:collapse; color :#FFFFFF; background-color: #000000; border-radius: 10px; padding-left: 4px ; padding-right: 4px; text-shadow: 1px;">Android Developers</a>

    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">




            </li>



        </ul>
        <ul class="navbar-nav">

            <?php
            if (!CheckLogin()){
               if(getActParameter() != "signin") echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"signin\">" .T('sign_in')."</a></li>";
            }else{
                echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"logout\">" .getUser()['name_2']."</a></li>";
            }  ?>

        <?php if (isDevelopmentServer()) echo " <li class=\"nav-item\"><a class=\"nav-link\" href=\"info\">Development Server</a></li>" ?>



        </ul>

        <?php if (getActParameter() != "write" && getActParameter() != "home") echo "<button type=\"nav-button\" class=\"btn btn-dark btn-lg\" onclick=\"location.href='write';  \">+</button>" ?>
    </div>
</nav>
