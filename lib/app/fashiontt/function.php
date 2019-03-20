<?php 
function cate_parent($data, $parent = 0, $str = '--', $select = 0){
	foreach ($data as $value) {
		$id = $value['id'];
		$name = $value['name'];
		if ($value['parent_id'] == $parent) {
			if ($select != 0 && $id == $select) {
				echo "<option value = '$id' selected = 'selected'> $str $name </option> " ;
			} else {
				echo "<option value = '$id'> $str $name  </option>";
			}
		}
	}
}
			function menu($data,$level=0,$text='&nbsp;&nbsp;')
			{
// lặp $data lấy từ database
				foreach ($data as $k => $value) {
		// Nếu level id con = level id cha thì xuất ra tên con
					if ($value['parent_id']==$level) {
						if ($value['parent_id']==0) {
							echo '<b>'.$text.$value['name'].'</b><br />';
						}else{
							echo '<a href="'.route("list-search").'?cate='.$value['id'].'" title="">'.$text.$value['name'].'</a><br />';
						}

		// lưu id = với khóa 
						$id=$value['id'];
		// hủy mảng vừa lặp
						unset($data[$k]);
						menu($data,$id,$text.'&nbsp;&nbsp;');
					}
				}
			}
