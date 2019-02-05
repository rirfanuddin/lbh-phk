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
        $page = $request->query('page');
        $perpage_query = $request->query('perpage');

        if($request->perpage == null){
            if($page != null && $perpage_query != null) return $this->pagination($page, 10);
            else return $this->pagination(1, 10);
        }
        else{
            $perpage_input = $request->perpage;
            if($page != null && $perpage_query != null) return $this->pagination($page, $perpage_input);
            else return $this->pagination(1, $perpage_input);
        }

    }

    public function pagination($page, $req_per_page){
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
        else{
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

        $data['first_page_url'] = $first_page_url;
        $data['last_page_url'] = $last_page_url;
        $data['last_page'] = $last_page;
        $data['total'] = $total;
        $data['page'] = $page;
        $data['per_page'] = $per_page;
        $data['current_page'] = $current_page;
        $data['from'] = $from;
        $data['to'] = $to;
        $data['next_page_url'] = $next_page_url;
        $data['prev_page_url'] = $prev_page_url;
        $data['result'] = $result;
        $data['dot'] = $dot;
        $data['url_pagination'] = $url_pagiation;
        $data['current_from'] = $current_from;
        $data['current_to'] = $current_to;

        return view('admin.user')->with($data);
    }

    public function message(){
        return view('admin.message');
    }

    public function chat(){
        return view('admin.chat');
    }
}
