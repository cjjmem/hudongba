<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    /*
     * 活动首页
     */
    public function index(){
        $this->display();
    }

    /*
     *发布活动类型页面
     */
    public function post(){
        $this->display();
    }

    /*
     *找活动页面
     */
    public function find(){
        $this->display();
    }

    /*
     *找活动详情页面
     */
    public function detail(){

        $this->display();
    }


    /*
    *发布各种东西
    */
    public function publish (){
        $type  = trim($_GET['type']);
        switch($type){
            //主题
            case 'theme':
                break;
            //户外
            case 'outdoor':
                break;
            //聚会
            case 'party':
                break;
            //沙龙
            case 'salon':
                break;
            //促销
            case 'promotion':
                break;
            //会议
            case 'meeting':
                break;
            //课程
            case 'class':
                break;
            //课程
            case 'article':
                $this->display('fromarticle');
                break;
            //投票
            case 'vote':
                $this->display('fromvote');
                break;
            default :
                echo "<h2>暂无开放此功能</h2>";
                break;

        }
    }

    /*
    *表单
    */
    public function onlined(){
        //接收表单信息
        if($_POST['submit']=='submit'&&IS_POST){
            $type = isset($_POST['type'])?$_POST['type']:'theme';
            switch($type){
                //主题
                case 'theme':
                    break;
                //户外
                case 'outdoor':
                    break;
                //聚会
                case 'party':
                    break;
                //沙龙
                case 'salon':
                    break;
                //促销
                case 'promotion':
                    break;
                //会议
                case 'meeting':
                    break;
                //课程
                case 'class':
                    break;
                //课程
                case 'article':
                    break;
                //投票
                case 'vote':
                    break;
                default :
                    break;
            }
            //公共信息
            $data['time'] = time();

        }
    }

    /*
     * 个人中心
     */
    public function space(){

        $this->display();
    }




}