    <?php 
    if(isset($_POST['first_name'],$_POST['message'])){
     
      
      $obj=(object)$_POST;
     
       $user->addMessage($obj);

    }
    ?>
    <div id="reservation" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Контакты</h2>
     
            <div class="row">
                <div class="col-md-6">
                    <form class="form form-table" method="post" >
                        <div class="form-group">
                            <h4>Запоните поля (все поля являются обязательными)</h4>
                        </div>

                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="Имя"> 
                            Имя</label>
                            <input class="form-control hint" type="text" id="first_name1" name="first_name" placeholder="Имя" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="Фамилия">Фамилия</label>
                            <input class="form-control hint" type="text" id="last_name1" name="last_name" placeholder="Фамилия" required="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="E-mail">E-mail</label>
                            <input class="form-control hint" type="email" id="email1" name="email" placeholder="Email@domain.com" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="Телефон">Телефон</label>
                            <input class="form-control hint" type="text" id="phone1" name="phone" placeholder="Телефон" required="">
                          </div>
                        </div>
                   
                        <div class="row">
                  
                        </div>
                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                          <textarea class="form-control hint" placeholder="Комментарий" name="message"></textarea>
                          </div>
                        </div><br/>
                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-danger btn-lg">Отправить</button>
                          </div>
                        </div>
                      </form>
                </div><!-- col-md-6 -->
                <div class="col-md-5 col-md-offset-1">
                    
              

                    <h3><i class="fa fa-map-marker fa-fw"></i>Как нас найти?</h3>
                    <p>г.Орел, Кромское шоссе, 4</p>

                    <h3><i class="fa fa-mobile fa-fw"></i>Контакты</h3>
                    <p>E-mail: <a href="mailto:meateater@gmail.com">meateater@gmail.com</a></p>
                    <p>Телфон: +7 (999)-100-88-88</p>

                </div><!-- col-md-6 -->
            </div>
            <!-- /.services --> 
        </div>
        <!-- /.container -->

    </div><!-- #reservation -->
