    <?php 
    if(isset($_POST['first_name'],$_POST['last_name'],$_POST['reservation_date'],$_POST['people_number'])){
$_POST['reservation_date']=$_POST['reservation_date']." ".$_POST['reservation_time'];


     
      
      $obj=(object)$_POST;


     
       $user->addReservation($obj);

    }
    ?>
    <div id="reservation" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Бронирование</h2>
     
            <div class="row">
                <div class="col-md-6">
                    <form class="form form-table" method="post" >
                        <div class="form-group">
                            <h4>Чтобы забронировать столик, пожалуйста, заполните все поля</h4>
                        </div>

                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="Имя"> 
                            Имя:</label>
		<span>Имя</span>
                            <input class="form-control hint" type="text" id="first_name1" name="first_name" placeholder="Имя" required="">
			
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="Фамилия">Фамилия:</label>
		<span>Фамилия</span>
                            <input class="form-control hint" type="text" id="last_name1" name="last_name" placeholder="Фамилия" required="">
					
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="E-mail">E-mail</label>
<span>Дата бронирования</span>	
                            <input class="form-control hint" type="date" id="email1" name="reservation_date"  required="">
					
                          </div>
				   
				<div class="col-md-6 col-lg-6 form-group">
					<span>Время бронирования</span>
				<input class="form-control hint" type="time" name="reservation_time" required=""/>
					
			</div>
    				 <div class="col-lg-6 col-md-6 form-group">
	<span>Количество гостей</span>
                      <input type="number" class="form-control hint" placeholder="Количество гостей" min="1" name="people_number">
						
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="Телефон">Телефон</label>
	<span>Телефон</span>	
                            <input class="form-control hint" type="text" id="phone1" name="phone" placeholder="Телефон" required="">
					
                          </div>
                        </div>
                   
                       
                        <div class="row">
                     
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
