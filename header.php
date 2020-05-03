<!doctype html>
<html <?php language_attributes(); //html要素のlang属性を出力 ?>>
  <head>
    <!-- Required meta tags -->
      <meta charset="<?php bloginfo( 'charset' ); //文字エンコーディング情報を出力 ?>">
      <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); //使用中テーマのスタイルシートURLを出力 ?>">
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); //ピングバックURLを出力 ?>">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <?php wp_head(); //wp_headはテーマの</head>タグ直前に必ず挿入します ?>
      
  </head>
  <body>
     <header>
        <div class="header_container">
            <nav class="wide navbar navbar-expand-sm navbar-light"><!--sm以上の時にexpand-->
                <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
                   <span class="navbar-toggler-icon"></span> 
                </button>
                <div id="menu" class="collapse navbar-collapse navbar-right"><!--sm以上の時のみ表示させる-->
                     <ul class="navbar-nav header_list">
                        <li class="nav-item"><a href="" class="nav-link">TOP</a></li>
                        <li class="nav-item"><a href="" class="nav-link">ABOUT</a></li>
                        <li class="nav-item"><a href="" class="nav-link">WORKS</a></li>
                        <li class="nav-item"><a href="" class="nav-link">BLOG</a></li>
                        <li class="nav-item"><a href="" class="nav-link">CONTACT</a></li>
                    </ul>
                </div>
           
            </nav>
        </div>
    </header
    
  