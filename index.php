<?php get_header(); //header.phpを取得 ?>
    
    <main>
        <section>
        <div class="main_photo"><!--ここには写真が入る-->
        </div>
        
        <div class="main_container">
            
            <div class="about_container">
                <div class="about_background"></div>
            
        
                <div class="about_page">
                    <div class=myphoto_img><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/myphoto.png"></img>
                    <div class="thenkyou_text">
                        <h3>お忙しい中、僕のホームページに来てくださりありがとうございます。
                        <br>このホームページは採用担当者様に少しでも僕のことを知って頂けたらと思い作成致しました。
                        <br>まだまだ未熟者ではありますが僕に少しでも興味を持って頂けると幸いです。
                        </h3>
                        </div><!--thenkyou_text-->
                    <h2>ABOUT ME</h2>
                    <div class="explanatory_text">
                    <P>出身：愛知県瀬戸市瀬戸物焼きが有名な場所。</p>
                    <br>
                    <p>学歴：工業高校情報化卒業<br>　　　京都外国語専門学校卒業</P>
                    <br>
                    <p>職歴：YUMEX株式会社 入社<br>　　　部署内で年間営業成績２５名中３位を獲得</P>
                    <br>
                    <p>　　：Culture Convenience Club 入社</p>
                    <p>　　　スターバックス事業部に配属。８年間で８店舗を経験。
                    現在店長としてお仕事しています。（２０２０年 5月）</P>
                    <br>
                    <p>夢 :  高校生の頃の夢はエンジニアでした。何を思ったのか外国語学校に進学。
                    新卒でIT企業に内定をもらうも辞退。エンジニアは敷居が高くて自分には
                    無理と思い込んでいた。しかし夢諦めきれず31歳からプログラミング学習
                    開始。人に喜んでもらうのが好きなのでアプリを通じて少しでも幸せになれるようなものを作りたい。</P>
                    <br>
                    <p>趣味特技：カメラ・動画編集・ランニング・服・お酒
		            インドにて象乗りの資格を習得（乗れば取れます）</p>
		            </div>
                 </div><!--myphoto_img-->
                    
                </div><!--about_page-->
              </div><!--about_container-->
            </div><!--main_container-->
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

