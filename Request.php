<?php 
/**
 * Request page this class to feach API and get data
 */
class Request {
    public $data;

     function __construct($url, $username, $password) {
        
    
        $args = array(
            'headers' => array(
                'Authorization' => 'Basic ' . base64_encode( $username . ':' . $password )
                //'timeout' => 90,
            ),
        );
        $response = wp_remote_get($url, $args);
    
        if (is_wp_error($response)) {

            echo 'error';
            return ;
        }
    
        $body = wp_remote_retrieve_body($response);
      //  $data = simplexml_load_string($body);
        $d = json_decode($body);
        //$data =$d->EntitySets;
        $data =$d->d->results;

        
       
        $this->data= $data;
    
       
    }



}