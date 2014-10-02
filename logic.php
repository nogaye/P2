
    <?php
    
    #print_r($_POST); 
    
    # Variables to hold the password settings
    $max_words   = 10; #the maximum number of words allowed
    $number_of_words   = 0;
    $add_a_number  = false;
    $add_a_symbol   = false;
    $add_uppercase = false;
    $word_separator = 'none';
    
    #an array of parameters returned by a get
    //$params = Array();    
    foreach($_GET as $key =>$value){    
        $number_of_words =  $_GET['number_of_words'];
        $word_separator = $_GET['word_separator'];
        $add_a_number = isset($_GET['add_a_number']) && $_GET['add_a_number']  ? true : false;
        $add_a_symbol = isset($_GET['add_a_symbol']) && $_GET['add_a_symbol']  ? true : false;
        $add_uppercase  = isset($_GET['add_uppercase']) && $_GET['add_uppercase']  ? true : false;
       
    }
    
   
    /**
     * Randomly generates a word from an array of words     * 
     */
    function get_word()
    {
        $words =array("hello","bmw","name", 'stores','the', 'for', 'loop', 'is', 'used', 'when', 'you', 'know', 'in', 'advance', 'how', 'many', 'times',  'script', 'should', 'run');
        #return random word
        
        $rand_keys = array_rand($words);        
        return $words[$rand_keys];
    }

    /**
     * Randomly generates a symbol from an array of symbols allowed for password use 
     */
    function get_symbol()
    {
        #get random symbol from a collection of allowed password symbols
        $rand_no = rand(0,20);
        $symbols = "][?/<~#!@$%^&*()+=}|:";       
        return $symbols[$rand_no];
    }
	
    /**
     * Uses the global setting variables to generate user password.
     */
    function get_password(){
        
        global $number_of_words,  $add_a_number ,    $add_a_symbol  ,     $add_uppercase,$max_words,$word_separator;
         $password = '';
         
        #if number of words is lass than  1 or more than 15, dont do anything
         if($number_of_words <=0 || $number_of_words >$max_words)
        {
        return $password;
        }
        
        #If add uppercase is enabled, pick a random word from the array and make it uppercase
        $rand_upper_number = rand(1, $number_of_words);
        
        #get words equivalent to the number of words
        $words =array();
        for ($i=1; $i<=$number_of_words; $i++) { 
            
            $my_word = get_word();
            
            #if add uppercase is enabled, make first letter of random word uppercase
            if($i == $rand_upper_number && $add_uppercase == true)
            {
                $my_word = ucfirst($my_word); 
            }
            
            array_push($words, $my_word);
        } 
              
        #If add number is enabled, add a number to the array
        if($add_a_number == true)
        {
            $rand_number = rand(0, 9);
            array_push($words, $rand_number);
        }
        
        #if add symbols is enabled, add symbol to the array
        if($add_a_symbol == true)
        {
            array_push($words, get_symbol());
        }
        
        
        
        #shuffle the array so that numbers are mixed with the words and symbols
        shuffle($words);
       
        foreach ($words as $word) {
            #only append the '-' between words
            if($password == '' && $word_separator != 'camelcase')
            {
                $password = $password  . $word;
            }
            else
            {
                switch ($word_separator) {
                    case "hyphen":
                        $password = $password  . '-' . $word;
                        break;
                    case "camelcase":
                        $password = $password .ucfirst($word) ;
                        break;
                    case "space":
                        $password = $password  . ' ' . $word;
                        break;
                    case "none":
                        $password = $password . $word;
                        break;
                    default:
                        $password = $password . $word;
                }
                
                
            }
        }
        
        
        return $password;
        
        
    }
    


?>