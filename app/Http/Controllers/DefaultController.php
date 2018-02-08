<?php
/**
 * Created by PhpStorm.
 * User: caoquan
 * Date: 1/30/18
 * Time: 10:36 AM
 */

namespace App\Http\Controllers;


class DefaultController extends Controller
{
    protected $data;

    public function __construct()
    {
        $this->data = [];
    }

    public function index()
    {
        $this->data["tab"] = "index";
        return view('index', $this->data);
    }

    public function pricing()
    {
        $this->data["tab"] = "pricing";
        return view("pricing", $this->data);
    }
}