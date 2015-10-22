<?php
/**
 * Created by PhpStorm.
 * User: huanghaitao
 * Date: 15/10/19
 * Time: 上午11:35
 */

class ApiYafControllerAbstract extends Yaf_Controller_Abstract {


    public $required_fields = array ();

    //public $db;

    public function init(){

        //$this->db = new PdoDb();
    }

    /**
     * 获取传入的数据
     * @return array 传入的数据
     */
    public function get_request_data() {


        $data = array();

        Common::globalLogRecord ( 'remote_ip', $_SERVER['REMOTE_ADDR'] );
       // Common::globalLogRecord ( 'request_url', 'http://'.$this->request->head['Host'].$this->request->meta['uri'] );
        Common::globalLogRecord ( 'request_args', http_build_query ( $data ) );

        if (! empty ( $this->required_fields )) {
            $this->check_required_fields ( $data, $this->required_fields );
        }

        //return $this->validate_sign ( $data );

        foreach ($_REQUEST as $key => $value){

            $data[$key] =  $value;
        }

        return $data;
    }

    /**
     * 验证签名是否正确
     * @param array $data  传入的数据
     * @return array 验证通过则返回数据
     */
//    private function validate_sign($data) {
//
//        if (! isset ( $data ['sign'] ) || $data ['sign'] != $this->private_key) {
//            $this->send_error ( NOT_AUTHORIZED, STATUS_UNAUTHORIZED );
//        } else {
//            unset ( $data ['sign'] );
//            return $data;
//        }
//    }

    /**
     * 验证必须项是否齐全
     * @param array $data   传入的数据
     * @param array $fields 必须项
     */
    private function check_required_fields($data, $fields) {
       // $fields [] = 'sign';

        foreach ( $fields as $field ) {
            if (! isset ( $data [$field] )) {
                $this->send_error ( NOT_ENOUGH_ARGS );
            }
        }
    }

    /**
     * 发送数据
     * @param array $data  数据
     */
    public function send($data = array(),$type='') {
        header('Content-type: application/json');
        $response = Common::getSuccessRes($data,$type='');
        echo $response;
    }

    /**
     * 发送错误信息
     * @param int $errorCode   错误码
     * @param int $errorStatus 状态码
     */
    public function send_error($errorCode, $errorStatus = STATUS_FAIL) {
        header('Content-type: application/json');
        $response = Common::getFailRes($errorCode, $errorStatus);
        echo $response;
        die();
    }

} 