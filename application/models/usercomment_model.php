<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class usercomment_model extends CI_Model
{
    public function create($user,$movie,$comment)
    {
        $data=array("user" => $user,"movie" => $movie,"comment" => $comment);
        $query=$this->db->insert( "movie_usercomment", $data );
        $id=$this->db->insert_id();
        if(!$query)
            return  0;
        else
            return  $id;
    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("movie_usercomment")->row();
        return $query;
    }
    function getsingleusercomment($user)
    {
       $query['usercomment']=$this->db->query("SELECT (UNIX_TIMESTAMP(timestamp)*1000) as `timestamp`,`user`,`movie`,`comment` FROM `movie_usercomment` WHERE `user`='$user'")->result();
		return $query;
    }
    public function edit($id,$user,$movie,$comment,$timestamp)
    {
        $data=array("user" => $user,"movie" => $movie,"comment" => $comment,"timestamp" => $timestamp);
        $this->db->where( "id", $id );
        $query=$this->db->update( "movie_usercomment", $data );
        return 1;
    }
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `movie_usercomment` WHERE `id`='$id'");
        return $query;
    }
}
?>
