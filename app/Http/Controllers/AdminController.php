<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{

    public function home(){
        return view('admin.home');
    }

    public function getListUser(Request $request){
        if($request->s != null){
            $param = $request->s;
            $query_sql = "SELECT * FROM users WHERE is_admin = 0 AND (name LIKE '%" . $param . "%' OR email LIKE '%" . $param . "%' OR phone_number LIKE '%" . $param . "%')";
            $result = DB::select($query_sql);
            $data = array(
                'result'    => $result,
                'param'     => $param
            );
            return view('admin.user_search')->with($data);
        }
        else {
            $page = $request->query('page');
            $perpage_query = $request->query('perpage');

            if($request->perpage == null){
                if($page != null && $perpage_query != null) return $this->pagination($page, 10, $request);
                else return $this->pagination(1, 10, $request);
            }
            else{
                $perpage_input = $request->perpage;
                if($page != null && $perpage_query != null) return $this->pagination($page, $perpage_input, $request);
                else return $this->pagination(1, $perpage_input, $request);
            }
        }

    }

    public function pagination($page, $req_per_page, Request $request){
        $url_pagiation = "/admin/user/";
        $per_page = $req_per_page;
        $first_page_url = url($url_pagiation . '?page=' . 1 . '&perpage=' . $per_page);
        $total = count(User::where('is_admin', '0')->get());
        $sum_of_page = floor($total/$per_page);
        ($total%$per_page==0) ? $sum_of_page : $sum_of_page + 1;
        $last_page = ($sum_of_page>0) ? ($sum_of_page+1) : $sum_of_page;
        $last_page_url = url($url_pagiation . '?page=' . $last_page . '&perpage=' . $per_page);
        $dot = 0;

        if($page==1){
            $current_page = 1;
            $from = 0;
            $to = $per_page;
            $prev_page_url = "";
            $next_page_url = url($url_pagiation . '?page=' . ($current_page+1) . '&perpage=' . $per_page);
        }
        else {
            $current_page = $page;
            $from = ($page*$per_page)-$per_page;
            $to = (($page+1)*$per_page)-$per_page;
            $prev_page_url = url($url_pagiation . '?page=' . ($current_page-1) . '&perpage=' . $per_page);
            if($page==$last_page) $next_page_url = "";
            else $next_page_url = url($url_pagiation . '?page=' . ($current_page+1) . '&perpage=' . $per_page);
        }

        $result = DB::select('select * from users where is_admin = "0" order by created_at limit ?, ?', [$from , $per_page]);
        $current_from = $from;
        $current_to = (count($result) < $per_page) ? count($result) : $per_page;
        $param = null;

        $data = array(
            'first_page_url'    => $first_page_url,
            'last_page_url'     => $last_page_url,
            'last_page'         => $last_page,
            'total'             => $total,
            'page'              => $page,
            'per_page'          => $per_page,
            'current_page'      => $current_page,
            'from'              => $from,
            'to'                => $to,
            'next_page_url'     => $next_page_url,
            'prev_page_url'     => $prev_page_url,
            'result'            => $result,
            'dot'               => $dot,
            'url_pagination'    => $url_pagiation,
            'current_from'      => $current_from,
            'current_to'        => $current_to,
            'param'             => $param
        );

        return view('admin.user_all')->with($data);
    }

    public function message(){
        return view('admin.message');
    }

}
