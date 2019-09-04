<?php


namespace Milestone\QMS\Helper;


class Customer
{

    public static function create($name,$phone,$email){
        $customer = new \Milestone\QMS\Model\Customer;
        if($name) $customer->name = $name;
        if($phone) $customer->phone = $phone;
        if($email) $customer->email = $email;
        $customer->save(); return $customer;
    }

}
