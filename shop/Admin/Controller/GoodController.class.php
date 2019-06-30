<?php
namespace Admin\Controller;
use Tools\AdminController;

class GoodController extends AdminController {
    //商品展示
    public function show(){
        $good=new \Model\GoodModel();
        //$info=$good->order('good_id desc')->select();
        //dump($info);exit;
        //分页
        //1.得到总条目数量
        $total=$good->count();
        //2.获取分页数据定义
        $per=PAGE_PER;
        //3.实例化分页类对象
        $page_obj=new \Tools\Page($total,$per);
        //自定义SQL语句
        $sql="select * from sw_good order by good_id ".$page_obj->limit;
        //执行自定义SQL语句函数
        $info=$good->query($sql);
        //获得页码列表
        $pagelist=$page_obj->fpage(array(3,4,5,6,7,8));
        
        $this->assign('info',$info);
        $this->assign('pagelist',$pagelist);
    	$this->display();
    }
    //商品添加
    public function add(){
        $good=new \Model\GoodModel();
        //两种逻辑,显示和添加
        if (!empty($_POST)) {
        //AR方式添加
        $good->good_name=$_POST['good_name'];
        $good->good_price=$_POST['good_price'];
        $good->good_number=$_POST['good_number'];
        //处理上传图片附件
        if (!empty($_FILES)&&$_FILES['good_pic']['error']<4) {
            # code...
            $cfg=array(
                'rootPath'=>'./Public/uploads/',//保存到根目录
            );
            $up=new \Think\Upload($cfg);
            $z=$up->uploadOne($_FILES['good_pic']);
            $_POST['good_big_img']=$up->rootPath.$z['savepath'].$z['savename'];
            $_POST['good_small_img']=$up->rootPath.$z['savepath'].'small_'.$z['savename'];
            
            //对上传的文件图片制作缩略图
            $im=new \Think\Image();
            //打开
            $im->open($_POST['good_big_img']);
            //制作缩略图
            $im->thumb(100,100,6);
            //保存缩略图
            $im->save($_POST['good_small_img']);
            //将文件地址保存到数据库上
            $good->good_big_img=ltrim($_POST['good_big_img'],'./');
            $good->good_small_img=ltrim($_POST['good_small_img'],'./');

        }
        $info=$good->add();
        //dump($info);
        if ($info) {
            # code...
            $this->redirect('show',array(),1,添加成功);
        }else{
            $this->redirect('add',array(),3,添加失败);
        }
        }else
        //展示表单
    	$this->display();
    }
    //商品修改
    public function update($good_id,$good_name=''){
        $good=new \Model\GoodModel();
        //两种逻辑,展示和修改
        //修改
        if (!empty($_POST)){
            # code...
            $_POST['good_id']=$good_id;
            //dump($_POST);exit;
            //处理上传图片附件
        if (!empty($_FILES)&&$_FILES['good_pic']['error']<4) {
            # code...
            $cfg=array(
                'rootPath'=>'./Public/uploads/',//保存到根目录
            );
            $up=new \Think\Upload($cfg);
            $z=$up->uploadOne($_FILES['good_pic']);
            $_POST['good_big_img']=$up->rootPath.$z['savepath'].$z['savename'];
            $_POST['good_small_img']=$up->rootPath.$z['savepath'].'small_'.$z['savename'];
            
            //对上传的文件图片制作缩略图
            $im=new \Think\Image();
            //打开
            $im->open($_POST['good_big_img']);
            //制作缩略图
            $im->thumb(100,100,6);
            //保存缩略图
            $im->save($_POST['good_small_img']);
            //将文件地址保存到数据库上
            $_POST['good_big_img']=ltrim($_POST['good_big_img'],'./');
            $_POST['good_small_img']=ltrim($_POST['good_small_img'],'./');

            //删掉之前的图片,减少占用
            //dump("./".$_POST['old_big_pic']);exit;
            unlink("./".$_POST['old_big_pic']);
            unlink("./".$_POST['old_small_pic']);

        }
            $info=$good->save($_POST);
            //$info=0;
            if ($info) {
                # code...
                $this->redirect('show',array(),1,修改成功);
            }else{
                $this->redirect('update',array('good_id'=>$good_id),3,修改失败);
            }
        }else{
        //展示
        //$info=$good->where("good_id=$good_id")->select();//这是二维数组
        $info=$good->find($good_id);//一维数组
        $this->assign('info',$info);
        $this->display();
        }
    }
    //商品删除
    public function delete($good_id){
    	//$this->display();
       //echo "这是删除方法";
       $good=new \Model\GoodModel();
       $info=$good->delete($good_id);
       if ($info) {
                # code...
                $this->redirect('show',array(),1,删除成功);
            }else{
                $this->redirect('update',array(),1,删除失败);
            }
    }
    //商品分类
    public function category(){
        
    }
}