
    <?php
    
    #print_r($_POST); 
    
    # Variables to hold the password settings
    $number_of_words   = 1;
    $add_a_number  = false;
    $add_a_symbol   = false;
    $add_uppercase = false;
    
    #an array of parameters returned by a get
    $params = Array();    
    foreach($_GET as $key =>$value){    
        $number_of_words = $value;//  $params[$key];
        
        $number_of_words =  $_GET['number_of_words'];
        $add_a_number = isset($_GET['add_a_number']) && $_GET['add_a_number']  ? true : false;
        $add_a_symbol = isset($_GET['add_a_symbol']) && $_GET['add_a_symbol']  ? true : false;
        $add_uppercase  = isset($_GET['add_uppercase ']) && $_GET['add_uppercase ']  ? true : false;
       
    }
    
   

	
    function get_password(){
        return 'XXXX XXXXX XXXXX XXXXXX';
        
        
    }
    
    
	function calculate_total($subtotal, $discount, $shipping_method) {

    if($shipping_method == 'priority') {
        $shipping_rate = 5;
    }
    elseif($shipping_method == 'express') {
        $shipping_rate = 15;
    }

    $tax = .09 * $subtotal;

    $total = $subtotal + $shipping_rate - $discount;

    return $total;

}

?>