<?php

/**
 * 道具管理
 */
class skin extends common{
    /**
     * 职业管理列表
     */
    public function skinlist(){
        $list = $this->link->queryAll("select * from skin");
        $this->template->template_assign("list",$list);
        $this->template->template_display("Skin/skinList");
    }
    
       
    public function add(){
 
        $this->template->template_display("Skin/add");
    }
    //删除数据
    public function delete(){
        $deleteid = $this->get("deleteId","");
        if($deleteid ==""){
            $this->show(100,"数据不能为空","");
            
        }else{
            $sql = "delete from skin where id = {$deleteid}";
            $result = $this->link->delete($sql);
            if($result){
                $this->show(200, "删除成功", "");
                
            }else{
                $this->show(100,"删除失败","");
            }
        }
    }
    
    //修改
    public function updata(){
        $id = $this->get("id","");
        $sql = "select * from skin where id={$id}";
        $result = $this->link->query($sql);
        $this->template->template_assign("info",$result);
        
        $this->template->template_display("skin/updata");
    }
    
    //修改数据
    public function updatas(){
        $name = $this->post("name","");
        $decribe = $this->post("decribe","");
        $unlock_level = $this->post("unlock_level","");
        $img = $this->post("url","");
        $big_img = $this->post("big_image","");
        $id=$this->post("id",0);
       if($name=="" || $unlock_level=="" || $img=="" || $decribe =="" ||$big_img ==""){
            $this->show(100,"添加信息不完整","");
        }
        $sql = "update skin set name='{$name}',image='{$img}',big_image='{$big_img}',hero_id='{$decribe}',num='{$unlock_level}' where id = {$id}";
        $result = $this->link->update($sql);
        if($result){
            $this->show(200,"修改成功","");
        }else{
            $this->show(100,"修改失败","");
        }
    } 

    
    
    //增加数据
    public function insert(){
        $name = $this->post("name","");
        $decribe = $this->post("decribe","");
        $unlock_level = $this->post("unlock_level","");
        $img = $this->post("url","");
        $big_img = $this->post("big_image","");
        if($name=="" || $unlock_level=="" || $img=="" || $decribe =="" ||$big_img ==""){
            $this->show(100,"添加信息不完整1","");
        }
        $sql = "insert into skin (name,image,big_image,hero_id,num) values ('{$name}','{$img}','{$big_img}','{$decribe}','{$unlock_level}');";
        $result = $this->link->add($sql);
        if($result){
            $this->show(200,"添加成功","");
        }else{
            $this->show(100,"添加失败","");
        }
    }
}



