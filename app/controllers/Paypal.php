<?php

class Paypal extends BaseController {

    public function __construct() {
        parent::__construct();
        //$this-beforeFilter('csrf' , array('on' , 'post'));
    }

    public function postSuccess() {

        return "تم الدفع بنجاح";
    }

    public function postIpn() {



        // Assign payment notification values to local variables
        @$item_name = $_POST['item_name'];
        @$item_number = $_POST['item_number'];
        @$payment_status = $_POST['payment_status'];
        @$payment_amount = $_POST['mc_gross'];
        @$payment_currency = $_POST['mc_currency'];
        @$txn_id = $_POST['txn_id'];
        @$receiver_email = $_POST['receiver_email'];
        @$payer_email = $_POST['payer_email'];

        //in case u want to see the array back from confirm the payment
        // echo '<pre>';
        //print_r($_POST);
        //echo '<pre>';
        // Build the required acknowledgement message out of the notification just received
        $req = 'cmd=_notify-validate';               // Add 'cmd=_notify-validate' to beginning of the acknowledgement

        foreach ($_POST as $key => $value) {         // Loop through the notification NV pairs
            $value = urlencode(stripslashes($value));  // Encode these values
            $req .= "&$key=$value";                   // Add the NV pairs to the acknowledgement
        }

        $url = "https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_notify-validate&param=value&param=value";

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //   for not have SSL      
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        //echo '<pre>';
        //print_r($result);
        //echo '<pre>';

        if ($payment_status == "Completed") {

            $cartcontent = Cart::contents();
            $carttotal = Cart::total();


            if ($cartcontent) {




                $order = new Order;
                $order->user_id = Auth::User()->id;
                $order->price = $carttotal;
                $order->type = ' بايبال';
                $order->finish = 0;
                $order->save();
                foreach ($cartcontent as $cartx) {

                    $orderx = new Orderproducts;
                    $orderx->order_id = $order->id;
                    $orderx->ads_id = $cartx->id;
                    $orderx->quantity = $cartx->quantity;
                    $orderx->save();
                }
                Cart::destroy();
            }
        }
    }

}
