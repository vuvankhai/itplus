<?php 
class TreeView{
	private static $menuTree = array();
 	
   	public static function getMenuTree() {
        if (empty(self::$menuTree)) {
            $rows = Course::model()->findAll('Parent_id = 0');
            foreach ($rows as $item) {
                self::$menuTree[] = self::getMenuItems($item);
            }
        }
        return self::$menuTree;
    }
 
    private static function getMenuItems($modelRow) {
 
        if (!$modelRow)
            return;

        $id = 0;
        if(isset($_GET['ID'])) $id = $_GET['ID'];
 
        if (isset($modelRow->Childs)) {
            $chump = self::getMenuItems($modelRow->Childs);
            $controller = Yii::app()->controller->id;
            $href = Yii::app()->createUrl($controller.'/index/', array('ID' => $modelRow->ID));

            $class = '';
            if($id == $modelRow->ID) $class = 'class="current-item"';
            
            if ($chump != null){
                $res = array('text' => '<a href="'.$href.'"'.$class.'>'.$modelRow->Name.'</a>', 'children' => $chump);
            } else {
                $res = array('text' => '<a href="'.$href.'"'.$class.'>'.$modelRow->Name.'</a>');//, 'url' => Yii::app()->createUrl('', array('ID' => $modelRow->ID));
            }
            return $res;
        } else {
            if (is_array($modelRow)) {
                $arr = array();
                foreach ($modelRow as $leaves) {
                    $arr[] = self::getMenuItems($leaves);
                }
                return $arr;
            } else {
                return array('text' => ($modelRow->Name), 'url' => Yii::app()->createUrl('', array('ID' => $modelRow->ID)));
            }
        }
    }
}

?>