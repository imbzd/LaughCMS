<?php
/**
 * 用户角色模型 数据处理
 * by laucen 2012-9-6
 */
class Admin extends Base
{
	public function __construct()
	{
		parent::__construct();
	}

	//生成密码
	public function password_encrypt($password=null, $ukey=null)
	{
		if (!$password || !$ukey) return false;
		return md5(md5($password).$ukey);
	}

	/**
     * 获取管理员信息
	 */
	public function getAdmin($id=null,$start=0,$length=0)
	{
		$where = array();
		if ($id) $where['id'] = is_array($id) && !empty($id) ? array('in',$id) : $id;

		$total = T('admin')->where($where)->count();
		$obj = T('admin')->where($where);
		if ($length) $obj = $obj->limit($start,$length);
		$data = $obj->select();

		return array('total'=>$total, 'data'=>$data);
	}

	/**
	 * 修改管理员信息
	 * @param $id int 管理员id
	 * @param $data array() 管理员新信息
	 */
	public function upAdmin($id=null,$data=array())
	{
		if (!$id || !is_array($data) || empty($data)) return false;

		return T('admin')->where(array('id'=>$id))->update($data);
	}
}