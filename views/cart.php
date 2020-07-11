<?php if(isset($_GET['action'])&&($_GET['action']=="empty")){
session_unset();
header("location:index.php?page=cart");
} 
if(isset($_POST['name'],$_POST['adress'],$_POST['phone'])) {
  $ordered_food=$_SESSION['foods'];
  $sum=$_SESSION['sum'];
  $order=new stdClass();
  $order->name=$_POST['name'];
  $order->adress=$_POST['adress'];
  $order->price=$sum;
  $order->phone=$_POST['phone'];
  $order->foods=$ordered_food;

 $user->addOrder($order);

}
?>
<div id="reservation" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Корзина</h2>
            <div class="row">
            <?php if(!empty($_SESSION['foods'])){ ?>
              <center><button data-toggle="modal" data-target="#confirmModal" class="btn-lg btn-success" >Подтвердить заказ</button></center><br/> <?php } ?>
              <table class="table table-bordered">
              <thead>
              <th>Название</th>
              <th>Изображение</th>
              <th>Количество</th>
              <th>Сумма:&nbsp;&nbsp;&nbsp; <?= $_SESSION['sum'] ?> р.</th>

              </thead>
              <tbody>
              <?php foreach($_SESSION['foods'] as $f){ ?>
                <tr>
                <td><?=$f->name ?></td>
                 <td><center><img  height="50" width="50" src="foods/<?php echo $f->image; ?>"></center></td>
                  <td><?=$f->quantity ?></td>
                   <td><?=$f->price ?> р.</td>
                   </tr>
                   <?php } ?>

              </tbody>
                
              </table>  
                 <center><a href="index.php?page=cart&action=empty"><button  class="btn-lg btn-danger" >Очистить корзину</button></a></center>
            </div>
     
            
            <!-- /.services --> 
        </div>
        <!-- /.container -->

    </div>
 <div class="modal fade " id="confirmModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
       <form method="post">
      <div class="modal-header active">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Подтвердить заказ</h4>
      </div>
      <div class="modal-body">
     
      <div class="form-group">
          <label> Имя</label>
          <input type="text" name="name" placeholder="Имя" class="form-control" required >
      </div>
      <div class="form-group">
          <label> Адрес</label>
          <input type="text" name="adress"placeholder="Адрес" class="form-control" required >
      </div>
      <div class="form-group">
          <label> Телефон</label>
          <input name="phone" type="tel" placeholder="Телефон" class="form-control" required>
      </div>
      <div class="form-group">  
      <input type="checkbox" class="" required="required" > Согласен на обработку персональных данных.
      </div>
     
      
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Закрыть</button>
        <input type="submit" class="btn btn-success" value="Подтвердить">
      </div>

      </form>
    </div><!-- /.modal-content -->
    
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

