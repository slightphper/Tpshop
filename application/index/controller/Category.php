<?php
namespace app\index\controller;

class Category extends Base
{
    public function index()
    {
        return view('Category');
    }

    public function getCateInfo($id){
    	//获取二级三级子分类
    	$cateRes = model('Category')->getSonCates($id);
    	$data = array();
    	$cat = '';
    	foreach ($cateRes as $k => $v) {
    		$cat .= '<dl class="d1_fore1">
					<dt><a href="'.url('index/Category/index',['id'=>$v['id']]).'" target="_blank">'.$v['cate_name'].'</a></dt>';
			$cat .= '<dd>';		
			foreach ($v['children'] as $k1 => $v1) {
				$cat .=	'<a href="'.url('index/Category/index',['id'=>$v1['id']]).'" target="_blank">'.$v1['cate_name'].'</a>';
				}
			$cat .= '</dd>';
			$cat .='</dl>
					<div class="item-brands"><ul></ul></div>
					<div class="item-promotions"></div>';  			
    	}
        //获取该分类推荐分类     *:因为用户输入url可能导致分类跳转到别处，所以目前先把连接写死
        $cateRec = model('Category')->getCategoryRec($id);
        $channels = '';
        foreach ($cateRec as $k1 => $v1) {
            $channels .= '<a href="javascript:return false;">'.$v1['category_rec'].'</a>';
        }
        //获取该分类推荐品牌
        $brandRec = model('Category')->getBrandRec($id);
        $brandsContent = '';
        $brandsContent .= '<div class="cate-brand">';
            foreach ($brandRec['brands'] as $k2 => $v2) {
               $brandsContent .= 
                '<div class="img">
                    <a href="#" target="_blank" title="'.$v2['brand_name'].'">
                        <img src="'.config('view_replace_str.__uploads__').'/'.$v2['brand_img'].'">
                    </a>
                </div>';
            }
        $brandsContent .= '</div>';
        $brandsContent .= 
            '<div class="cate-promotion">
                <a href="'.$brandRec['promotion']['pro_img'].'">
                    <img src="'.config('view_replace_str.__uploads__').'/'.$brandRec['promotion']['pro_img'].'" width="199" height="97">
                </a>
            </div>';
    	$data['topic_content'] = $channels;
    	$data['cat_content'] = $cat;
    	$data['brands_ad_content'] = $brandsContent;
    	$data['cat_id'] = $id;
    	return json($data);

    }
}
