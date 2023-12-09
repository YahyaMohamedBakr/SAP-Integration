<?php 

/**
 * Jobs page
 * 
 * this is jobs page in frontend
 * 
 */

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
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link href="assets/style.css" rel="stylesheet" />

<div class="container mt-5 pt-4">
   
    <div class="row">

 <?php 
    foreach($data as $d) :

        if(!empty($d->jobTitle)):
 ?>

        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div class="card border-0 bg-light rounded shadow">
                <div class="card-body p-4">
                    <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0">Full time</span>
               
                    <h5><?=$d->jobTitle?></h5>
                    <p><?='external title is <strong>'. $d->externalTitle.'</strong>'?></p>
                    <div class="mt-3">
                        <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a href="#" target="_blank" class="text-muted"><?='type:'.$d->__metadata->type?></a></span>
                        <span class="text-muted d-block"><i class="fa fa-hashtag" aria-hidden="true"></i> <?php echo 'local id '."$d->jobReqLocalId"?></span>
                        <span class="text-muted d-block"><i class="fa fa-sort-numeric-desc" aria-hidden="true"></i> <?php echo 'req id '."$d->jobReqId"?></span>
                        
                    </div>
                    <div class="mt-3">
                            <span>
                        <?=
                         $d->jobDescription ? 'Job Description  : '.strip_tags(substr($d->jobDescription, 0, 30))  : 'Description not found';
                        //echo 'Job description: ' . $description;
                        ?>
                            </span>
                    </div>
                    <div class="mt-3">
                        <a  class="btn btn-primary" href="<?php echo 'https://career55.sapsf.eu/career?career_ns=job_listing&company=egyptexpre&navBarLevel=JOB_SEARCH&rcm_site_locale=en_GB&career_job_req_id='.$d->jobReqLocalId.'&selected_lang=en_US'?>"> Apply Job </a>
                       
                    </div>
                </div>
            </div>
        </div><!--end col-->
          
               
      
     <?php 
    endif;
     endforeach 
     ?>

       
  
    </div><!--end row-->
</div>



       
       
        



        
  