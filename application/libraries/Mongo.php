<?php

class CI_Mongo extends Mongo
{
    var $db;

    public function __construct() {
        // Fetch CodeIgniter instance
        $ci = & get_instance();
        // Load Mongo configuration file
        $ci->load->config('mongo');

        // Fetch Mongo server and database configuration
        $server = $ci->config->item('mongo_server');
        $dbname = $ci->config->item('mongo_dbname');

        // Initialise Mongo
        if ($server)
        {
            parent::__construct($server);
        }
        else
        {
            parent::__construct();
        }
        //$this->db = $this->$dbname;
        $ci->db = $this->$dbname;
    }

    /**
     * 创建索引：如索引已存在，则返回
     *
     * 参数：
     * $table_name:表名
     * $index:索引-array("id"=>1)-在id字段建立升序索引
     * $index_param:其它条件-是否唯一索引等
     *
     * 返回值：
     * 成功：true
     * 失败：false
     */
    function ensureIndex($table_name, $index, $index_param=array()) {
        $index_param['safe'] = 1;
        try {
            $this->db->$table_name->ensureIndex($index, $index_param);
            return true;
        }
        catch (MongoCursorException $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }

    /**
    * 插入记录
    *
    * 参数:
    * $table_name:表名
    * $record:记录
    *
    * 返回值：
    * 成功：true
    * 失败：false
    */
    function insert($table_name, $record){
        try {
            $this->db->$table_name->insert($record, array('safe'=>true));
            return true;
        }
        catch (MongoCursorException $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }

    /**
     * 查询表的记录数
     *
     * 参数：
     * $table_name:表名
     *
     * 返回值：表的记录数
     */
    function count($table_name) {
        return $this->db->$table_name->count();
    }

    /**
     * 更新记录
     *
     * 参数：
     * $table_name:表名
     * $condition:更新条件
     * $newdata:新的数据记录
     * $options:更新选择-upsert/multiple
     *
     * 返回值：
     * 成功：true
     * 失败：false
     */
    function update($table_name, $condition, $newdata, $options=array()) {
        $options['safe'] = 1;
        if (!isset($options['multiple'])) {
            $options['multiple'] = 0;
        }
        try {
            $this->db->$table_name->update($condition, $newdata, $options);
            return true;
        }
        catch (MongoCursorException $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }

    /**
     * 删除记录
     *
     * 参数：
     * $table_name:表名
     * $condition:删除条件
     * $options:删除选择-justOne
     *
     * 返回值：
     * 成功：true
     * 失败：false
     */
    function remove($table_name, $condition, $options=array()) {
        $options['safe'] = 1;
        try {
            $this->db->$table_name->remove($condition, $options);
            return true;
        }
        catch (MongoCursorException $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }

    /**
     * 查找记录
     *
     * 参数：
     * $table_name:表名
     * $query_condition:字段查找条件
     * $result_condition:查询结果限制条件skip, limit, sort等
     * $fields:获取字段
     *
     * 返回值:
     * 成功：记录集
     * 失败：false
     */
    function find($table_name, $query_condition, $result_condition=array(), $fields=array()) {
        $cursor = $this->db->$table_name->find($query_condition, $fields);

        // check result_condition
        foreach ($result_condition as $key => $value) {
            $cursor->$key($value);
        }

        $result = array();
        try {
            while ($cursor->hasNext()) {
                $result[] = $cursor->getNext();
            }
        }
        catch (MongoConnectionException $e) {
            $this->error = $e->getMessage();
            return false;
        }
        catch (MongoCursorTimeoutException $e) {
            $this->error = $e->getMessage();
            return false;
        }
        return $result;
    }

    /**
     * 查找一条记录
     *
     * 参数：
     * $table_name:表名
     * $condition:查找条件
     * $fields:获取字段
     *
     * 返回值：
     * 成功：一条记录
     * 失败：false
     */
    function findOne($table_name, $condition, $fields=array()) {
        return $this->db->$table_name->findOne($condition, $fields);
    }

    /**
     * 获取当前错误信息
     *
     * 参数：无
     *
     * 返回值：当前错误信息
     */
    function getError(){
        return $this->error;
    }
}
