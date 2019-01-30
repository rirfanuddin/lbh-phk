@extends('layouts.main')

@section('content')
    <div class="row page-tilte align-items-center">
        <div class="col-md-auto">
            <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
            <h1 class="weight-300 h3 title">Daftar User</h1>
            <p class="text-muted m-0 desc">User LBH - Payung Hitam Keadilan</p>
        </div>
        <div class="col controls-wrapper mt-3 mt-md-0 d-none d-md-block ">
            <div class="controls d-flex justify-content-center justify-content-md-end">
                <input type="search" class="form-control d-inline-block" placeholder="Cari berdasarkan nama...">
                <!--
                    <span class="dropdown">
                        <button type="button" id="downloadGrid" data-toggle="dropdown" class="btn btn-secondary py-1 px-2" ><span class="material-icons align-text-bottom">save_alt</span></button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="downloadGrid">
                          <a class="dropdown-item" href="#">Save as PDF</a>
                          <a class="dropdown-item" href="#">Save as Image</a>
                          <a class="dropdown-item" href="#">Save as Word</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Export Excel</a>
                        </div>
                        </span>
                    <button type="button" class="btn btn-secondary py-1 px-2" data-toggle="modal" data-target="#gridFilters" ><span class="material-icons align-text-bottom">filter_list</span></button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addGrid" >Add Somthing</button>
                -->
            </div>
        </div>
    </div>


    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table class="table  m-0">
                            <thead>
                            <tr>
                                <th scope="col" width="1" class="border-top-0 text-center">No.</th>
                                <th scope="col" width="1" class="border-top-0 text-center">#</th>
                                <th scope="col" class="border-top-0">Nama</th>
                                <th scope="col" class="border-top-0">Email</th>
                                <th scope="col" class="border-top-0 text-center">Nomor Telepon</th>
                                <th scope="col" class="border-top-0 text-center">Chat</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($result as $user)
                                    <tr>
                                        <td class=" align-middle text-center">
                                            {{ $from += 1 }}
                                        </td>
                                        <td class=" align-middle text-center">
                                            <span class="user-initials bg-success-light25 text-success">MRI</span>
                                        </td>
                                        <td class="align-middle">
                                            {{ $user->name }}
                                        </td>
                                        <td class="align-middle">
                                            {{ $user->email  }}
                                        </td>
                                        <td class="align-middle text-center">{{ $user->phone_number }}</td>
                                        <td class="align-middle text-center">@mdo</td>
                                    </tr>
                                @empty
                                    <p>tidak ada data</p>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <nav aria-label="Page navigation example">
        <form class="form-inline float-left" action="#" method="POST">
            {{ csrf_field() }}
            <label class="my-1 mr-2 d-none d-md-block" for="show-data">Showing 10 out of {{ $total }}</label>
            <select class="form-control" id="show-data" name="perpage" onchange="this.form.submit();">
                <option value="10" {{ $per_page == 10 ? "selected":"" }}>10</option>
                <option value="25" {{ $per_page == 25 ? "selected":"" }}>25</option>
                <option value="50" {{ $per_page == 50 ? "selected":"" }}>50</option>
                <option value="100" {{ $per_page == 100 ? "selected":"" }}>100</option>
            </select>
        </form>
        <ul class="pagination mt-3 justify-content-end">
            <li class="page-item">
                <a class="page-link" href="{{ $prev_page_url }}" tabindex="-1">Previous</a>
            </li>
            @for($i=1; $i <= $last_page; $i++)
                @if($i == 1)
                    <li class="page-item {{ $page == $i ? "active":"" }}"><a class="page-link" href="{{url('/admin/user/'.$i)}}">{{ $i }}</a></li>
                @elseif(($current_page + 1) == $i || ($current_page - 1) == $i || ($current_page) == $i)
                    <li class="page-item {{ $page == $i ? "active":"" }}"><a class="page-link" href="{{url('/admin/user/'.$i)}}">{{ $i }}</a></li>
                    @if($dot == 1)
                        @php
                            $dot -= 1;
                        @endphp
                    @endif
                @elseif($i == $last_page)
                    <li class="page-item {{ $page == $i ? "active":"" }}"><a class="page-link" href="{{url('/admin/user/'.$i)}}">{{ $i }}</a></li>
                @else
                    @if($dot == 0)
                        <li class="page-item {{ $page == $i ? "active":"" }}"><a class="page-link" href="{{url('/admin/user/#')}}">...</a></li>
                        @php
                            $dot +=1;
                        @endphp
                    @else
                        @continue
                    @endif
                @endif
            @endfor
            <li class="page-item">
                <a class="page-link" href="{{ $next_page_url }}">Next</a>
            </li>
        </ul>
    </nav>
@endsection
