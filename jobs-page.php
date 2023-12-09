<?php 

 require('Request.php');
 //$url = 'https://api55.sapsf.eu/odata/v2/JobRequisition?$format=json&$filter=Hot_Jobs eq "true"';
 //$url2="https://api55.sapsf.eu/odata/v2/JobRequisition(578L)/vTeam";
 //$url3= "https://api55.sapsf.eu/odata/v2/JobRequisition(990L)";
 $url4 = 'https://api55.sapsf.eu/odata/v2/JobRequisition?$format=json';
 $url5 = 'https://api55.sapsf.eu/odata/v2/?$format=json';
 $url6= 'https://api55.sapsf.eu/odata/v2/JobRequisitionLocale?$format=json';
 //$url =  'https://api55.sapsf.eu/odata/v2/JobRequisition?$format=json&$filter=Hot_Jobs eq "true"';
 $username = get_option('sap_integration_username');
 $password = get_option('sap_integration_password');

 $res= new Request($url6, $username, $password);
 $data=$res->data;

//  foreach($data as $object){
//     echo'<pre>';
//     var_dump($object);
//     echo'</pre>';
//  }
//  return;

//  echo'<pre>';
//  var_dump($data);
//  echo'</pre>';
//      return;
// $u = urldecode($url);
// echo $u;
?>


<head>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />

    <!-- <title>Document</title> -->
  </head>   

 <!-- <div class="card"> -->
 <div class="container mt-4">
    <div class="row">
       

   

 <?php 
    foreach($data as $d) :

        if(!empty($d->jobTitle)):
 ?>
    <div class="col-md-4">
        <div class="card">
            <div class="inner">
                <p class="title"><?php echo 'title is// '. $d->jobTitle?></p>
                <p class="title"><?php //echo  'external title is //'. $d->externalTitle?></p>
               
                <p class="title"><?php echo 'local id '."$d->jobReqLocalId"?></p>
                <p class="title"><?php echo 'req id '."$d->jobReqId"?></p>
                <p class="title"><?php  // echo 'discription //'."$d->jobDescription"?></p>
                <p class="title"><?php echo 'type //'.$d->__metadata->type?></p>

                <a class="button" href="<?php echo 'https://career55.sapsf.eu/career?career_ns=job_listing&company=egyptexpre&navBarLevel=JOB_SEARCH&rcm_site_locale=en_GB&career_job_req_id='.$d->jobReqLocalId.'&selected_lang=en_US'?>"> Apply Job </a>
              
                    <!-- <ul class="features">
                    <li>
                        <span
                        ><strong> <i class="bi bi-calendar3"></i></strong> April 11,
                        2023</span
                        >
                    </li>
                    <li>
                        <span>
                        <strong><i class="bi bi-geo-alt-fill"></i></strong> Egypt
                        Cairo</span
                        >
                    </li>
                    <li>
                        <span
                        ><strong> <i class="bi bi-alarm-fill"></i> </strong> Full
                        Time</span
                        >
                    </li>
                    </ul>
                    <div class="action">
                         <a class="button" href="#"> Apply Job </a>
                    </div> -->
                    
                </div>
            </div>
    </div>


      
     <?php 
    endif;
     endforeach 
     ?>

    </div>
</div>
    