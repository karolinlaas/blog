

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="container">


     <div class="col-md-10 blogShort">
         <h1><?=$post['post_subject']?></h1>
            <h4 style="color:gray">by <?=$post['name']?></h4>
         <hr>
            <h5><?=$post['post_created']?></h5>
            <h5>Tags:</h5>
         <hr>
         <article>
             <p><?=$post['post_text']?></p>
         </article>
     </div>
    <hr>

	</div>
</div>

<style>

</style>
