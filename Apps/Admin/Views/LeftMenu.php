<?php 
$login = BaseClass::GetSession('login');
?>
<nav class="navbar-default navbar-side" role="navigation">
<div class="sidebar-collapse">
    <ul class="nav" id="main-menu">
        <li>
            <div class="user-img-div">
                <img src="<?=$login->Image?>" class="img-thumbnail">

                <div class="inner-text">
                    <?=$login->FullName?>
                </div>
            </div>

        </li>
        <li>
            <a class="active-menu" href="Admin/Login"><i class="fa fa-dashboard "></i>Dashboard</a>
        </li>
        <li>
            <a href="Admin/Computer"><i class="fa fa-inbox "></i>Quản lý máy tính</a>
        </li>
        <li>
            <a href="Admin/UserMger"><i class="fa fa-user "></i>Quản lý tài khoản</a>
        </li>
        
</ul>
</div>
</nav>
<script type="text/javascript">
jQuery(document).ready(function($) {
    LeftMenuAction();
    LeftMenuAction1();
});

function LeftMenuAction() {
    $(".nav a").click(function(event) {
        $('.nav a').removeClass('active-menu');
        if($(this).parent().parents('li')){
            $(this).parent().parents('li').children('a').addClass('active-menu-top'); 
        }
        $(this).addClass('active-menu');
    });
}
function LeftMenuAction1(){
    var url = window.location.pathname;
    var ele = ".nav a[href='"+url.replace("<?='/'._ROOT.'/'?>",'')+"']";
        $(ele).click();
}

</script>