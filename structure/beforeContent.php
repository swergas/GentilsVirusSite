<!DOCTYPE html>
<html lang="<?php echo($lang);?>">
  <head>
    <meta charset="utf-8">
    <title><?php echo($title);?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo($description);?>">

    <link rel="icon" type="image/png" href="img/gentilsvirus_favicon.png">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/smoothness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <!--header-->
      <div class="masthead">
		<div style="text-align: center; margin-bottom: 10px;">
			<a href="index.html">
				<img src="img/logo.png" style="width: 30%; min-width: 150px; max-width: 250px;" alt="Logo Gentils Virus pour la démocratie" title="Les Gentils Virus pour la démocratie"/>
			</a>
		</div>
          
      <!--nav-->
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav pull-middle" role="navigation">
                <?php
                    foreach ($nav as $key => $nav_display)
                    {
                        if($key == $nav_active)
                            echo('
                                <li class="active">
                                    <a href="' . $nav_links[$key] . '">' . $nav_display . '</a>
                                </li>
                            ');
                        else
                            echo('
                                <li>
                                    <a href="' . $nav_links[$key] . '">' . $nav_display . '</a>
                                </li>
                            ');
                    }
                ?>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
    
      </div>

        <!--sub nav-->
        <?php if(isset($sub_nav) ){ ?>
        <div class="top_submenu">
          <ul class="nav nav-pills">
                <?php
                    foreach ($sub_nav as $key => $sub_nav_display)
                    {
                        if($key == $sub_nav_active)
                            echo('
                                <li class="active">
                                    <a href="' . $sub_nav_links[$key] . '">' . $sub_nav_display . '</a>
                                </li>
                            ');
                        else
                            echo('
                                <li>
                                    <a href="' . $sub_nav_links[$key] . '">' . $sub_nav_display . '</a>
                                </li>
                            ');
                    }
                ?>
          </ul>
        </div>
        <?php } ?>
      
      
      
      <!--contenu principal-->
      <div class="row-fluid show-grid">
        <div class="span<?php echo($span_size);?> niceblock">