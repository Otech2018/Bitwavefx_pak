<?php session_start(); 

$site_name = "MAVENERS";
$site_min_amt = "500";
$site_max_amt = "Unlimited";

$site_email = "admin@maveners.com";

$site_phone = "+2347019240642";

class connect{

	public  $host = 'localhost';
		
	public  $username = 'root';
       public  $password = '';
	// public  $db = 'maveners_db';	
	 public  $db = 'maven';	
			

       
							
		
	}
	

	
		class run_query extends connect{
		
		public function __construct( $query_mlc){
			$this->connect_db = new PDO("mysql:host=$this->host;dbname=$this->db",$this->username,$this->password);

			$this->query_run = $this->connect_db ->query($query_mlc);
			$this->num_rows = $this->query_run->rowCount();
			
			
			}


			public	 function result(){
			$this->result =  $this->query_run ->fetch(PDO::FETCH_BOTH);
			
			return $this->result;
			}
		
	
	}


//site variables
$reg_Date = date('Y-m-d');
$deposite_exp_date = date('Y-m-d',strtotime('30 days') );


//Admin Permission starts here!


$site_rc = "3256641";

$start_date = "Dec 18, 2020";

$site_bank = "POLARIS BANK";
$site_acc_num = "6588831013";
$site_acc_name = "MAVENERS VENTURES";
$site_lowest_amt = 5000;

$link_telegram = "https://t.me/joinchat/Vb-k7kubEG7OpyahGTEIZQ";
$link_whatsapp = "https://chat.whatsapp.com/ITmwpbWLqWrJ8r5JWTzwFK";


//Admin permission ends here!!










//days online

$todays_date = date('Y-m-d H:i:s');


$start_date_c = '2020-12-18 00:00:00';


$t1 = strtotime($start_date_c);

$t2 = strtotime($todays_date);



$diff = $t2 -$t1;


$days_online_d =  $diff  /86400;
 
$days_online = round($days_online_d);



//login function

function loggedin(){
    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
        return true;
    }else{
     return false;
    }
}


function AdminLoggedin(){
  if(isset($_SESSION['Admin_id']) && !empty($_SESSION['Admin_id'])){
        return true;
    }else{
     return false;
    }
}



 $settings = new run_query( "select * from  settings " );
$settings_data =	$settings->result();
	extract($settings_data);
	
	

	
	$total_cashout = new run_query("select sum(trant_amt) as total_cash_out from transaction where  tran_desc ='CASH_OUT'  ");
								$total_cashout_data =	$total_cashout->result();
							extract($total_cashout_data );
				$all_cashout = 		$total_cash_out + $total_cashout_manipulation;			
			
			
			
				$total_deposit = new run_query("select sum(trant_amt) as total_deposit_ from transaction where  tran_desc ='DEPOSIT'  ");
								$total_deposit_data =	$total_deposit->result();
							extract($total_deposit_data );
			$all_deposit = 		$total_deposit_ + $total_deposit_manipulation;			
								
								
?>