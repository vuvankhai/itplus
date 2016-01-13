<?php

class AttendanceController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view', 'getsubjectoptions', 'getsessionoptions', 'getstudentattendance', 'ajaxsave'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('*'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('*'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Attendance;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Attendance'])) {
            $model->attributes = $_POST['Attendance'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->ID));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Attendance'])) {
            $model->attributes = $_POST['Attendance'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->ID));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionAdmin() {
        $dataProvider = new CActiveDataProvider('Attendance');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionIndex() {
        $model = new Attendance('search');
        $classmanager = new Classmanager();

//		$model->unsetAttributes();  // clear any default values
//		if(isset($_GET['Attendance']))
//			$model->attributes=$_GET['Attendance'];

        $this->render('attendance', array(
            'model' => $model,
            'classmanager' => $classmanager,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Attendance the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Attendance::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Attendance $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'attendance-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGetSubjectOptions() {
        $_SESSION['idClass'] = $_POST['id'];
        $result = '';
        if ($_SESSION['idClass'] != 0) {
            $sql = "SELECT sj.ID, sj.Name FROM tbl_subject AS sj INNER JOIN tbl_class_subject AS csj ON csj.ID_Subject = sj.ID WHERE csj.ID_Class = :ID_Class AND csj.ID_Facuty = :ID_Facuty";
            $options = Subject::model()->findAllBySql($sql, array('ID_Class' => $_SESSION['idClass'], 'ID_Facuty' => Yii::app()->user->getState('idUser')));
            if (empty($options)) {
                $result .= '<option value="0">Không có lớp học</option>';
            } else {
                $result .= '<option value="0">Chọn lớp học</option>';
                foreach ($options as $option) {
                    $result .= '<option value="' . $option->ID . '">' . $option->Name . '</option>';
                }
            }
            echo $result;
        } else {
            echo '<option value="0">Không có lớp học</option>';
            ;
        }
    }

    public function actionGetSessionOptions() {
        $_SESSION['idSubject'] = $_POST['id'];
        $result = '';
        if ($_SESSION['idSubject'] != 0) {
            $sql_hour = "SELECT 
                        ssj.Hour
                        FROM tbl_classmanager AS cm 
                        INNER JOIN tbl_class_subject AS csj ON csj.ID_CLass = cm.ID 
                        INNER JOIN tbl_subject AS sj ON sj.ID = csj.ID_Subject 
                        INNER JOIN tbl_semester_subject AS ssj ON ssj.ID_Subject = sj.ID 
                        INNER JOIN tbl_hour AS h ON h.ID = csj.ID_Hour 
                        WHERE ssj.ID_Subject = :idSubject AND csj.ID_Class = :idClass AND csj.ID_Facuty = :idFacuty";

            $sql_type = "SELECT 
                        h.Type
                        FROM tbl_classmanager AS cm 
                        INNER JOIN tbl_class_subject AS csj ON csj.ID_CLass = cm.ID 
                        INNER JOIN tbl_subject AS sj ON sj.ID = csj.ID_Subject 
                        INNER JOIN tbl_semester_subject AS ssj ON ssj.ID_Subject = sj.ID 
                        INNER JOIN tbl_hour AS h ON h.ID = csj.ID_Hour 
                        WHERE ssj.ID_Subject = :idSubject AND csj.ID_Class = :idClass AND csj.ID_Facuty = :idFacuty";

            $total_hour = SemesterSubject::model()->findBySql($sql_hour, array('idSubject' => $_SESSION['idSubject'], 'idClass' => $_SESSION['idClass'], 'idFacuty' => Yii::app()->user->getState('idUser')));
            $hour_type = Hour::model()->findBySql($sql_type, array('idSubject' => $_SESSION['idSubject'], 'idClass' => $_SESSION['idClass'], 'idFacuty' => Yii::app()->user->getState('idUser')));

            $sessions = $this->getAttendanceSession(Yii::app()->user->getState('idUser'), $this->getIdClassSubject($_SESSION['idClass'], $_SESSION['idSubject'], Yii::app()->user->getState('idUser')));

            if (strtoupper($hour_type->Type) == 'E') {
                $session = $total_hour->Hour / 3;
            } else {
                $session = $total_hour->Hour / 2;
            }

            if ($session == 0) {
                $result .= '<option value="0">Không Session</option>';
            } else {
                $result .= '<option value="0">Chọn session</option>';
                for ($i = 0; $i < $session; $i++) {
                    $disabled = '';
                    foreach($sessions as $sess){
                        if($sess->Session == $i+1)
                            $disabled = ' class="disabled" ';
                    }
                    $result .= '<option value="' . ($i + 1) . '" '.$disabled.'> Session ' . ($i + 1) . '</option>';
                }
            }
            echo $result;
        } else {
            echo '<option value="0">Chưa chọn lớp học</option>';
            ;
        }
    }

    public function getAttendanceSession($idTeacher, $idClassSubject) {

        return Attendance::model()->findAll(array('select' => 't.Session',
                    'condition' => 'ID_Teacher = :idTeacher AND ID_Class_Subject = :idClassSubject',
                    'params' => array('idTeacher' => $idTeacher, 'idClassSubject' => $idClassSubject)));
    }

    public function getAttendance($session, $idTeacher, $idClassSubject) {

        return Attendance::model()->findAll('Session=:session AND ID_Teacher = :idTeacher AND ID_Class_Subject = :idClassSubject', array('session' => $session, 'idTeacher' => $idTeacher, 'idClassSubject' => $idClassSubject));
    }

    public function checkAttendanceSession($session, $attendanceSession) {

        $check = true;
        if (!empty($attendanceSession)) {
            foreach ($attendanceSession as $sess) {
                if ((int) $sess->Session == $session){
                    $check = false;
                    break;
                }
            }
            return $check;
        } else {
            return true;
        }
    }

    public function actionGetStudentAttendance() {
        $_SESSION['idSession'] = $_POST['id'];
        if ($_SESSION['idSession'] != 0) {
            $attendance_status = Domain::getAttendanceStatus();
            $students = Student::model()->findAll('ID_Class=:idClass', array('idClass' => $_SESSION['idClass']));
            $idClassSubject = $this->getIdClassSubject($_SESSION['idClass'], $_SESSION['idSubject'], Yii::app()->user->getState('idUser'));
            if ($this->checkAttendanceSession($_SESSION['idSession'], $this->getAttendanceSession(Yii::app()->user->getState('idUser'), $idClassSubject))) {
                echo $this->createTableAddtendance($attendance_status, $students);
            } else {
                $attendance = $this->getAttendance($_SESSION['idSession'], Yii::app()->user->getState('idUser'), $idClassSubject);
                $attendance_details = AttendanceDetail::model()->findAll('ID_Attendance=:idAttend', array('idAttend' => $attendance[0]->ID));
                $attend = array();
                foreach ($students as $student) {
                    foreach ($attendance_details as $detail) {
                        if ($student->ID == $detail->ID_Student) {
                            $attend['Status_' . $student->Code] = $detail->Status;
                            break;
                        }
                    }
                }
                echo $this->createTableAddtendance($attendance_status, $students, $attend, true);
            }
        } else {
            echo 'false';
        }
    }

    public function actionAjaxSave() {
        $attendance = array();
        $students = Student::model()->findAll('ID_Class=:idClass', array('idClass' => $_SESSION['idClass']));
        $attendance_status = Domain::getAttendanceStatus();
        $attendance = $_POST['Attendance'];
        $error = array();
        foreach ($students as $student) {
            if (!isset($attendance['Status_' . $student->Code])) {
                $error['Status_' . $student->Code] = 'error';
            }
        }

        if (empty($error)) {
            if ($this->checkAttendanceSession($_SESSION['idSession'], $this->getAttendanceSession(Yii::app()->user->getState('idUser'), $this->getIdClassSubject($_SESSION['idClass'], $_SESSION['idSubject'], Yii::app()->user->getState('idUser'))))) {
                $idAttendance = $this->saveAttendance($attendance, $students);
                $this->saveAttendanceDetails($idAttendance, $students, $attendance);
                echo '<p class="text-success pd-3-15">Điểm danh thành công</p>' . $this->createTableAddtendance($attendance_status, $students, $attendance);
            } else {
                $attendance = Attendance::model()->find('Session=:idSession AND ID_Teacher=:idTeacher AND ID_Class_Subject=:idClassSubject', array('idSession' => $_SESSION['idSession'],
                    'idTeacher' => Yii::app()->user->getState('idUser'),
                    'idClassSubject' => $this->getIdClassSubject($_SESSION['idClass'], $_SESSION['idSubject'], Yii::app()->user->getState('idUser'))));
                $this->createTableAddtendance($attendance_status, $students, $attendance, true);
            }
        } else {
            echo '<p class="text-danger pd-3-15">Chưa điểm danh hết học viên</p>' . $this->createTableAddtendance($attendance_status, $students, $attendance);
        }
    }

    public function createTableAddtendance($attendance_status = array(), $students = array(), $attendance = array(), $session = false) {

        $result = '';
        $result .= '<table id="tbl-attendance" class="table table-bordered">';
        $result .= '<thead>';
        $result .= '<tr>';
        $result .= '<th class="no">STT</th>';
        $result .= '<th class="code">Mã học viên</th>';
        $result .= '<th class="last-name">Họ</th>';
        $result .= '<th class="first-name">Tên</th>';
        foreach ($attendance_status as $key => $value) {
            $result .= '<th class="status">' . $value . '</th>';
        }
        $result .= '<th class="note">Ghi chú</th>';
        $result .= '</tr>';
        $result .= '</thead>';
        $result .= '</tbody>';
        $i = 1;
        foreach ($students as $student) {
            $result .= '<tr>';
            $result .= '<td>';
            $result .= $i++;
            $result .= '</td>';
            $result .= '<td>';
            $result .= $student->Code;
            $result .= '</td>';
            $result .= '<td>';
            $result .= $student->Lastname;
            $result .= '</td>';
            $result .= '<td>';
            $result .= $student->Firstname;
            $result .= '</td>';

            foreach ($attendance_status as $key => $value) {
                if (isset($attendance['Status_' . $student->Code]) && (int) $attendance['Status_' . $student->Code] == $key)
                    $checked = ' checked="checked" ';
                else
                    $checked = '';

                if (!$session) {
                    $result .= '<td class="status"><input type="radio" ' . $checked . ' value="' . $key . '" name="Attendance[Status_' . $student->Code . ']"/></td>';
                } else {
                    if ($checked != '') {
                        $result .= '<td class="status">x</td>';
                    } else {
                        $result .= '<td class="status"></td>';
                    }
                }
            }
            $result .= '<td class="note">';
            if (isset($attendance['Comment_' . $student->Code]) && $attendance['Comment_' . $student->Code] != '')
                $comment = $attendance['Status_' . $student->Code];
            else
                $comment = '';

                if (!$session) {
                    $result .= '<textarea name="Attendance[Comment_' . $student->Code . ']">' . $comment . '</textarea>';
                } else {
                    $result .= '<textarea disabled="disabled" name="Attendance[Comment_' . $student->Code . ']">' . $comment . '</textarea>';
                }
            $result .= '</td>';
            $result .= '</tr>';
        }

        $result .= '</tbody>';
        $result .= '</table>';

        return $result;
    }

    public function getIdClassSubject($idClass, $idSubject, $idFacuty) {
        $classSubject = ClassSubject::model()->find(
                'ID_Class=:idClass AND ID_Subject=:idSubject AND ID_Facuty=:idFacuty', array('idClass' => $idClass,
            'idSubject' => $idSubject,
            'idFacuty' => $idFacuty));
        return $classSubject->ID;
    }

    public function saveAttendance($attendance, $students) {
        $present = 0;
        $absent = 0;
        $legal = 0;
        foreach ($students as $student) {
            switch ($attendance['Status_' . $student->Code]) {
                case "1":
                    $present++;
                    break;
                case "2":
                    $absent++;
                    break;
                case "3":
                    $legal++;
                    break;
            }
        }

        $model = new Attendance;
        $model->Session = $_SESSION['idSession'];
        $model->Present = $present;
        $model->Absent = $absent;
        $model->Legal = $legal;
        $model->ID_Teacher = Yii::app()->user->getState('idUser');
        ;
        $model->ID_Class_Subject = $this->getIdClassSubject($_SESSION['idClass'], $_SESSION['idSubject'], Yii::app()->user->getState('idUser'));
        $model->Date_create = date('Y-m-d');
        if ($model->validate() && $model->save()) {
            return $model->ID;
        }
    }

    public function saveAttendanceDetails($idAttendance, $students, $attendance) {

        foreach ($students as $student) {
            $model = new AttendanceDetail;
            $model->ID_Attendance = $idAttendance;
            $model->ID_Student = $student->ID;
            $model->Note = $attendance['Comment_' . $student->Code];
            $model->Status = (int) $attendance['Status_' . $student->Code];
            $model->save();
        }
    }

}
