
<div class="col-md-10 blogShort">
<!--         <h1>--><?//=$post['post_subject']?><!--</h1>-->
<!--<h4 style="color:gray">by --><?//=$post['name']?><!--</h4>-->
<!--<h5>--><?//=$post['post_created']?><!--</h5>-->
<!--    -->
<h5>Tags:</h5>
<?foreach ($tags as $tag):?>
    <a href="#"><span class="label label-info"><?=$tag['tag_name']?></span></a>
<?endforeach?>

</div>