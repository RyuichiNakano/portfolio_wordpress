<?php get_header(); //header.phpを取得 ?>
    
    <main>
        <section>
        <div class="main_photo"><!--ここには写真が入る-->
        </div>
        <div class="main_container">
            
        
                <div class="about_page">
                
                <div class=myphoto>
                    <h2>ABOUT ME</h2>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/myphoto.png"></img>
                
                
                <div class="skill_graph"></div><!--グラフページ-->
                </div><!--自分の写真が入る-->
              </div>
                <div class="about_exposition">
                    <p>ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。
                    ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。
                    ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。
                    ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。
                    ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。
                    ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。
                    ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。</p><!--自己紹介部分-->
                    <p>ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。
                    ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。
                    ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。
                    ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。
                    ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。
                    ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。
                    ここには説明がはいります。ここには説明がはいります。ここには説明がはいります。</p><!--ここにはスキルの説明-->
                </div>
            
          </div>
            </section>
            <section>
            <div class="works_container">
                <div class="child_works">
                    <h2>WORKS</h2>
                    <div class="box1">
                        <!--画像がはいる-->
                        <h3>SHOPPING SITE<span>模写作品</span></h3>
                        <p>ここにはworksの説明が入ります。ここにはworksの説明が入ります。ここにはworksの説明が入ります。ここにはworksの説明が入ります。
                        ここにはworksの説明が入ります。ここにはworksの説明が入ります。ここにはworksの説明が入ります。ここにはworksの説明が入ります。
                        </p>
                    </div>
                    <div class="box2">
                        <!--画像がはいる-->
                        <h3>COMPANY SITE<span>模写作品</span></h3>
                        <p>ここにはworksの説明が入ります。ここにはworksの説明が入ります。ここにはworksの説明が入ります。ここにはworksの説明が入ります。
                        ここにはworksの説明が入ります。ここにはworksの説明が入ります。ここにはworksの説明が入ります。ここにはworksの説明が入ります。
                        </p>
                    </div>
                    <div class="box3">
                        <!--画像がはいる-->
                        <h3>WordPress SITE<span>模写作品</span></h3>
                        <p>ここにはworksの説明が入ります。ここにはworksの説明が入ります。ここにはworksの説明が入ります。ここにはworksの説明が入ります。
                        ここにはworksの説明が入ります。ここにはworksの説明が入ります。ここにはworksの説明が入ります。ここにはworksの説明が入ります。
                        </p>
                    </div>
                 </div><!--child_works-->
             </div><!--works_container-->
            </section>
            
            <section>
                <div class="contact_container">
                    <div class="contact_form">
                        <form action="confirm.php" method="post">
                            <input type="text" name="yourname" placeholder="お名前">
                            <input  type="email" name="mail" placeholder="メールアドレス">
                            <textarea  name="comment" placeholder="メッセージ内容"></textarea>
                            <input type="submit" value="SEND MAIL">
                        </form>
                    </div><!--contact_form-->
                </div><!--contact_container-->
            </section>
        </div><!--main_container-->
    </main>
    
    <footer>
        <div class="footer_container">
            <div class="footer_nav">
                <div class="nav1">
                    <h4>BLOG</h4>
                    <p>word press作成方法</p>
                    <p>勉強アウトプット</p>
                    <p>word press作成方法</p>
                    <p>勉強アウトプット</p>
                </div>
                <div class="nav1">
                    <h4>WORKS</h4>
                    <p>仕事紹介ページ</p>
                </div>
                <div class="nav1">
                    <h4>ABOUT</h4>
                    <p>自己紹介ページ</p>
                </div>
                <div class="nav1">
                    <h4>CONTACT</h4>
                    <p>お問い合わせ</p>
                </div>
            </div><!--fotter_nav-->
        </div><!--fotter_container-->
        <div class="footer_icon">
            <!--myicon-->
            <!--instaicon-->
            <!--twittericon-->
            <!--facebookicon-->
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

