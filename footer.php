    <footer>
        <section class=footer_section>
                <div class="contact_container">
                    <div class="contact_form">
                        <form action="confirm.php" method="post">
                            <h2>CONTACT</h2>
                            <div class="input_form">
                            <input type="text" name="yourname" placeholder="お名前">
                            <input  type="email" name="mail" placeholder="メールアドレス">
                            <textarea  name="comment" placeholder="メッセージ内容"></textarea>
                            <input type="submit" value="SEND MAIL">
                            </div>
                        </form>
                    </div><!--contact_form-->
                </div><!--contact_container-->
            </section>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--Chart.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>  
  <?php wp_footer(); ?>
  </body>
</html>