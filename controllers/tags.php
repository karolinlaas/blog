<?php
/**
 * Created by PhpStorm.
 * User: karolin.laas
 * Date: 10.01.2019
 * Time: 9:32
 */

namespace App;


class tags extends Controller
{
    function index()
    {
        $this->tags = get_all("SELECT tag_name, COUNT(post_id) AS count FROM post_tags NATURAL JOIN tag GROUP BY tag_id");
    }

    function view() {
        $this->tags = get_all("SELECT tag_name, COUNT(post_id) AS count FROM post_tags NATURAL JOIN tag GROUP BY tag_id");

//        $this->posts = get_all("SELECT * FROM post_tags NATURAL JOIN post");
    }
}

