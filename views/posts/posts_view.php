

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="container">


     <div class="col-md-10 blogShort">
         <h1><?=$post['post_subject']?></h1>
            <h2><?=$post['username']?></h2>
         <img src="http://joern-duwe.de/aquaristik/images/skalare00.jpg" alt="post img" class="pull-left img-responsive postImg img-thumbnail margin10">
         <article>
             <p><?=$post['post_text']?></p>
         </article>
     </div>

	</div>
</div>

<style>
    .blogShort{ border-bottom:1px solid #ddd;}
    .add{background: #333; padding: 10%; height: 300px;}

    .nav-sidebar {
        width: 100%;
        padding: 8px 0;
        border-right: 1px solid #ddd;
    }
    .nav-sidebar a {
        color: #333;
        -webkit-transition: all 0.08s linear;
        -moz-transition: all 0.08s linear;
        -o-transition: all 0.08s linear;
        transition: all 0.08s linear;
    }
    .nav-sidebar .active a {
        cursor: default;
        background-color: #34ca78;
        color: #fff;
    }
    .nav-sidebar .active a:hover {
        background-color: #37D980;
    }
    .nav-sidebar .text-overflow a,
    .nav-sidebar .text-overflow .media-body {
        white-space: nowrap;
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
    }

    .btn-blog {
        color: #ffffff;
        background-color: #37d980;
        border-color: #37d980;
        border-radius:0;
        margin-bottom:10px
    }
    .btn-blog:hover,
    .btn-blog:focus,
    .btn-blog:active,
    .btn-blog.active,
    .open .dropdown-toggle.btn-blog {
        color: white;
        background-color:#34ca78;
        border-color: #34ca78;
    }
    article h2{color:#333333;}
    h2{color:#34ca78;}
    .margin10{margin-bottom:10px; margin-right:10px;}
</style>
