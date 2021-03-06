<?php 
  if(BaseClass::GetSession('login') === ''){
    Header("location:/"._ROOT."/Admin/Login");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>ShopMayTinh</title>
	<base href="<?=BaseURI::getBaseURL()?>/Admin">
  <!-- JQUERY SCRIPTS -->

  <?php 
    PublicLoader::Load('Content/Scripts/Common.php');
    PublicLoader::Load("Content/Css/Common.php");
  ?>
    <!-- PAGE LEVEL STYLES -->
  <link href="Public/assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />
  <!-- BOOTSTRAP STYLES-->
  <link href="Public/assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="Public/assets/css/font-awesome.css" rel="stylesheet" />
  <!--CUSTOM BASIC STYLES-->
  <link href="Public/assets/css/basic.css" rel="stylesheet" />
  <!--CUSTOM MAIN STYLES-->
  <link href="Public/assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
</head>
<body style="background-color: #E2E2E2;">
  <div id="wrapper">

    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">MAY TINH THIEN AN</a>
      </div>

      <div class="header-right">

        <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
        <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
        <a href="Admin/Login/LogOut" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>
      </div>
    </nav>

    <?php ViewLoader::LoadNoneLayout('LeftMenu.php'); ?>
    <!--begin body -->
    <div id="page-wrapper">
        <div id="page-inner">
          <?php  require BaseClass::GetSession('_pageBody'); ?>
        </div>
    </div>
    <!--end body -->
  </div>
  <div id="footer-sec">
    © 2018 Nhóm 5 | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a> | Content By : Hạ Văn Lương & Ngô Thị Thắm
  </div>
  <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
  <!-- BOOTSTRAP SCRIPTS -->
  <script src="Public/assets/js/bootstrap.js"></script>
  <!-- METISMENU SCRIPTS -->
  <script src="Public/assets/js/jquery.metisMenu.js"></script>
  <!-- CUSTOM SCRIPTS -->
  <script src="Public/assets/js/custom.js"></script>
  <!-- PAGE LEVEL SCRIPTS -->
  <script src="Public/assets/js/bootstrap-fileupload.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {

    });
    function SendAjaxCommon(data, url, element) {
      $.ajax({
        url: url,
        type: 'POST',
        dataType: 'html',
        data: data,
        beforeSend: function (xhr) {
          $(".loading").show();
        },
        success: function(result){
          $(element).html(rerult);
        },
        error: function(error){
          console.log("error: " + error);
        },
        complete: function () {
          $(".loading").hide();
        }
      });
    }
  </script>
</body>
</html>
<?php exit(); ?>