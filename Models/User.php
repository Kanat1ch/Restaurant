<?php
class User{
	private $db;

	public function __construct(){
		try{
		$this->db=new PDO("mysql:host=std-mysql;port=3306;dbname=std_932;charset=UTF8","std_932","145rfyfn27");
		$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch(Exception $e){
		die($e->getMessage());
	}

	}
	public function addOrder($order){

		$conf=true;
		$this->db->beginTransaction();
		try{
		$query=$this->db->prepare("insert into orders (name,phone,price,adress,datetime,status) values(?,?,?,?,?,?)");
			if(!$query->execute([$order->name,$order->phone,$order->price,$order->adress,date("Y-m-d h:i:s"),0])){
				$conf=false;
			}
			$id=$this->db->lastInsertId();
			foreach($order->foods as $food){
			$query=$this->db->prepare("insert into orders_foods(food_id,order_id,quantity,price)values(?,?,?,?) ");
			if(!$query->execute([$food->id,$id,$food->quantity,$food->price])){
				$conf=false;
			}
			}
					$this->db->commit();

		}


		catch(Exception $e){
			die($e->getMessage());
			$this->db->rollback();
		}
		if($conf){
			session_unset();
			echo "<script> alert('Заказ успешно добавлен'); window.location.replace('index.php?page=cart');</script>";
		}
		else {
				echo "<script> alert('Проблема при добавлении заказа')</script>";

		}




	}

	public function getAllMenus(){
		$query=$this->db->query("select * from categories");
		$menus=$query->fetchAll(PDO::FETCH_OBJ);

		return $menus;
	}

	public function getAllFoods($id){
		$query=$this->db->prepare("select * from foods where category_id=?");
		$query->execute([$id]);
		$foods=$query->fetchAll(PDO::FETCH_OBJ);

		return $foods;
	}

	//********************************* CONTACTS *************************** //
	public function addMessage($message) {


	require 'phpmailer\PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP(); 
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);                                     
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'zzzz@gmail.com'; 
$mail->Password = '21760436';                         
$mail->SMTPSecure = 'tls'; 
$mail->From =$message->email; 
$mail->FromName = $message->first_name." ".$message->last_name;
$mail->addAddress("dabicata@gmail.com");                 

$mail->WordWrap = 50;                                 

$mail->Subject = 'From';
$mail->Body    = $message->message;

if(!$mail->send()) {
    
  die($mail->ErrorInfo);

} else {
    echo "<script> alert('Отправлено')</script>";
}




}

//***********************************RSERVATION**********************************//

	public function addReservation($obj) {
$q=$this->db->prepare("insert into reservations(first_name,last_name,reservation_date,people_number,phone)values(?,?,?,?,?)");

if($q->execute([$obj->first_name,$obj->last_name,$obj->reservation_date,$obj->people_number,$obj->phone] )) {
			echo "<script>alert('Стол успешно забронирован.')</script>";

		} else{
			echo "<script>alert('Проблема при бронировании стола.')</script>";
		}
	}

	





}
