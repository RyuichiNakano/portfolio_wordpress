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
      <script>
  (function(d) {
    var config = {
      kitId: 'ejv5oig',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
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
  