<?php

/*

class Vift 

created by cxevan7

author website :http://www.international-webdesign.com

author email admin@international-webdesign.com

*/


class Vift {
	public $id;
  public $name;
  public $email;
  
  public $carrier;
  public $tracking_number;
  public $delivered;

  public $price;
  
  private $uri = 'https://api.vift.com/orders'; 
  
  function Vift($id){
  	$this->id = $id;
  }
  
  function post(){
  	ob_start();
    $fields = array(
    						'id' => urlencode($this->id),
    						'name' => urlencode($this->name),
    						'email' => urlencode($this->email)
      				);

    //url-ify the data for the POST
    foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
    rtrim($fields_string, '&');
    
    //open connection
    $ch = curl_init();
    
    //set the url, number of POST vars, POST data
    curl_setopt($ch,CURLOPT_URL, $this->uri);
    curl_setopt($ch,CURLOPT_POST, count($fields));
		curl_setopt($ch, CURLOPT_USERPWD, "5EmKKwa8Xm:sk_live_f2ada7781b6e451480a2454d37278733");
    curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    //execute post
    $result = curl_exec($ch);
    
    //close connection
    curl_close($ch);
    
    $result = json_decode($result);
    
    ob_clean();
    return $result;
  }
  
  function get(){
  	ob_start();
    $fields = array( 'id' => urlencode($this->id) );

    //url-ify the data for the POST
    foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
    rtrim($fields_string, '&');
    
    //open connection
    $ch = curl_init();
    
    //set the url, number of POST vars, POST data
    curl_setopt($ch,CURLOPT_URL, $this->uri.'/'.$this->id);
    curl_setopt($ch,CURLOPT_POST, count($fields));
		curl_setopt($ch, CURLOPT_USERPWD, "5EmKKwa8Xm:sk_live_f2ada7781b6e451480a2454d37278733");
    curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    //execute post
    $result = curl_exec($ch);
    
    
    //close connection
    curl_close($ch);
    
    $r = json_decode($result,true);
    ob_clean();
    return $r;
  }
  
  function delete(){
  	ob_start();
    $fields = array( 'id' => urlencode($this->id) );

    //url-ify the data for the POST
    foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
    rtrim($fields_string, '&');
    
    //open connection
    $ch = curl_init();
    
    //set the url, number of POST vars, POST data
    curl_setopt($ch,CURLOPT_URL, $this->uri.'/'.$this->id);
    curl_setopt($ch,CURLOPT_POST, count($fields));
		curl_setopt($ch, CURLOPT_USERPWD, "5EmKKwa8Xm:sk_live_f2ada7781b6e451480a2454d37278733");
    curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    //execute post
    $result = curl_exec($ch);
    
    //close connection
    curl_close($ch);
    
    $result = json_decode($result);
    
    ob_clean();
    return $result;
  }
  
  function put(){
  	ob_start();
    $fields = array();
    
    $fields['id'] = urlencode($this->id);
    if($this->name) $fields['name'] = urlencode($this->name);
    if($this->email) $fields['email'] = urlencode($this->email);
    if($this->carrier) $fields['carrier'] = urlencode($this->carrier);
    if($this->tracking_number) $fields['tracking_number'] = urlencode($this->tracking_number);
    if($this->delivered) $fields['delivered'] = urlencode($this->delivered);
    if($this->price) $fields['price'] = urlencode($this->price);

    //url-ify the data for the POST
    foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
    rtrim($fields_string, '&');
    
    //open connection
    $ch = curl_init();
    
    //set the url, number of POST vars, POST data
    curl_setopt($ch,CURLOPT_URL, $this->uri.'/'.$this->id);
    curl_setopt($ch,CURLOPT_POST, count($fields));
		curl_setopt($ch, CURLOPT_USERPWD, "5EmKKwa8Xm:sk_live_f2ada7781b6e451480a2454d37278733");
    curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    //execute post
    $result = curl_exec($ch);
    
    //close connection
    curl_close($ch);
    
    $result = json_decode($result);
    ob_clean();
    return $result;
  }
}

