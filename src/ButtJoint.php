<?php
namespace AFaYuan;

class ButtJoint
{
    public $domain = 'http://shop100165.www2020043017.afayuan.com';
    public $header = array(
        "Content-Type: application/json",
        "Accept: application/json",
        "X-Ca-timestamp: 1602488579",
        "x-ca-nonce: 7a9c2925-aaf4-419b-a79a-9058b6379c13"
    );
//    public function __construct($domain, $token = [])
//    {
//        $this->domain = $domain;
//        if ($token) {
//            $tokenArr = ["Authorization: Bearer {$token}"];
//            $this->header = array_merge($tokenArr, $this->header);
//        }
//    }

    /**
     * 用户登陆
     * @param array $postData ['name' => 'xxxxxxx' , 'password' => 'xxxxxxx']
     * @return mixed
     */
    public function account($postData)
    {
        $httpUrl = $this->domain . '/api/login/account';
        return Request::postUrl($httpUrl, json_encode($postData), $this->header);
    }

    /**
     * @param string $id 商品ID
     * @return mixed
     */
    public function goods($id)
    {
        $httpUrl = $this->domain . "/api/goods/{$id}?group_buy_status=1";
        return Request::getUrl($httpUrl, $this->header);
    }

    /**
     * 获取商品列表
     * @param string $page 页数
     * @param string $limit 条数
     * @return mixed
     */
    public function goodsList($page, $limit)
    {
        $httpUrl = $this->domain . "/api/goods/?page={$page}&limit={$limit}";
        return Request::getUrl($httpUrl, $this->header);
    }

    /**
     * 获取用户信息
     * @return mixed
     */
    public function user()
    {
        $httpUrl = $this->domain . '/api/user';
        return Request::getUrl($httpUrl, $this->header);
    }

    /**
     * 下单
     * @param array $postData  {"goods_list":[{"parameters":{"url45010":"https://weibo.com/1873501632/JiNsL9LDH?ref=feedsdk&type=comment#_rnd1599097867401"},"goods_hash":"13dba4480bfde6ad905cb133ae16051c","goods_id":162,"sku_id":0,"qty":1}]}
     * @return mixed
     */
    public function placeAnOrder($postData)
    {
        $httpUrl = $this->domain . "/api/orders";
        return Request::postUrl($httpUrl, json_encode($postData) , $this->header);
    }

    /**
     * 获取订单详情
     * @param string $order_id 订单号
     * @return mixed
     */
    public function order($order_id)
    {
        $httpUrl = $this->domain . "/api/orders/{$order_id}";
        return Request::getUrl($httpUrl, $this->header);
    }

    /**
     * 获取订单列表
     * @param string $page  页数
     * @param string $limit 条数
     * @param string $status 状态 （-1=全部  0=团购  3=等待中  4=审核中  6=进行中  8=已完成  11=退款中  12=退款完成  13=异常单）
     * @return mixed
     */
    public function orderList($page, $limit, $status)
    {
        $httpUrl = $this->domain . "/api/orders?page={$page}&limit={$limit}&status={$status}";
        return Request::getUrl($httpUrl, $this->header);
    }

    /**
     * 申请退款
     * @param array $postData 订单号['id' => 'xxxxxxxxxxxxxxx']
     * @return mixed
     */
    public function ordersRefund($postData)
    {
        $httpUrl = $this->domain . "/api/orders/refund";
        return Request::postUrl($httpUrl, json_encode($postData) , $this->header);
    }

}
