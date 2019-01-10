<?php
$_tags = get_all("SELECT DISTINCT tag_name, tag_id FROM post_tags NATURAL JOIN tag");

foreach ($_tags as $tag) {
        $this->tags[$tag['post_id']][] = $tag['tag_name'];
        echo '<a href="http://karolinlaas.ikt.khk.ee/blog/tags/view" class="label"'.$tag['tag_name'].'</a>';
};
