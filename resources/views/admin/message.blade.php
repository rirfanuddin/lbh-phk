@extends('layouts.main')

@section('content')
    <div class="row page-tilte align-items-center">
        <div class="col-md-auto">
            <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
            <h1 class="weight-300 h3 title">Data Table With Controls </h1>
            <p class="text-muted m-0 desc">All controls are functional</p>
        </div>
        <div class="col controls-wrapper mt-3 mt-md-0 d-none d-md-block ">
            <div class="controls d-flex justify-content-center justify-content-md-end">
                <input type="search" class="form-control d-inline-block" placeholder="Search in tabel...">
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
                                <th scope="col" width="1" class="border-top-0">#</th>
                                <th scope="col" class="border-top-0">Full Name</th>

                                <th scope="col" class="border-top-0">Address</th>
                                <th scope="col" class="border-top-0">Avg. Session</th>
                                <th scope="col" class="border-top-0 text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class=" align-middle text-center">
                                    <span class="user-initials bg-success-light25 text-success">MD</span>
                                </td>
                                <td class="align-middle">
                                    <small class="text-muted weight-300">Mark Doessy</small>
                                    <div><a href="#" class="weight-400">mark.doessy@gmail.com</a></div>
                                </td>
                                <td class="align-middle">
                                    <small class="text-muted weight-300">New York</small>
                                    <div class="weight-400"> 591  Valley Drive, Philadelphia</div>
                                </td>
                                <td class="align-middle"><span class="material-icons align-middle md-18 text-danger">expand_more</span> 32 Sec</td>
                                <td class="align-middle text-right">@mdo</td>
                            </tr>
                            <tr>
                                <td class=" align-middle text-center">
                                    <span class="user-initials bg-danger-light25 text-danger">AK</span>
                                </td>
                                <td class="align-middle">
                                    <small class="text-muted weight-300">Akshay Kumar</small>
                                    <div><a href="#" class="weight-400">akshay.azaste@gmail.com</a></div>
                                </td>
                                <td class="align-middle">
                                    <small class="text-muted weight-300">Philadelphia</small>
                                    <div class="weight-400"> 3318 Lilac Lane</div>
                                </td>
                                <td class="align-middle"><span class="material-icons align-middle md-18 text-success">expand_less</span> 12 Sec</td>
                                <td class="align-middle text-right">@mdo</td>
                            </tr>
                            <tr>
                                <td class=" align-middle text-center">
                                    <span class="user-initials bg-warning-light25 text-warning">GT</span>
                                </td>
                                <td class="align-middle">
                                    <small class="text-muted weight-300">Giselle K Trivett</small>
                                    <div><a href="#" class="weight-400">willy_dicki@yahoo.com</a></div>
                                </td>
                                <td class="align-middle">
                                    <small class="text-muted weight-300">Indianapolis</small>
                                    <div class="weight-400"> 2961 Clay Street,</div>
                                </td>
                                <td class="align-middle"><span class="material-icons align-middle md-18 text-success">expand_less</span> 5.4 Mins</td>
                                <td class="align-middle text-right">@mdo</td>
                            </tr>
                            <tr>
                                <td class=" align-middle text-center">
                                    <span class="user-initials bg-primary-light25 text-primary">DG</span>
                                </td>
                                <td class="align-middle">
                                    <small class="text-muted weight-300">David Gonsalves</small>
                                    <div><a href="#" class="weight-400">wilburn.magg@yahoo.com</a></div>
                                </td>
                                <td class="align-middle">
                                    <small class="text-muted weight-300">London</small>
                                    <div class="weight-400"> 9009  Lorem Drive, Elphia</div>
                                </td>
                                <td class="align-middle"><span class="material-icons align-middle md-18 text-success">expand_less</span> 1.3 Mins</td>
                                <td class="align-middle text-right">@mdo</td>
                            </tr>
                            <tr>
                                <td class=" align-middle text-center">
                                    <span class="user-initials bg-info-light25 text-info">AR</span>
                                </td>
                                <td class="align-middle">
                                    <small class="text-muted weight-300">Annie Roughton</small>
                                    <div><a href="#" class="weight-400">manu.akshay@love.com</a></div>
                                </td>
                                <td class="align-middle">
                                    <small class="text-muted weight-300">Green Bay</small>
                                    <div class="weight-400"> 848 Tail Ends Road</div>
                                </td>
                                <td class="align-middle"><span class="material-icons align-middle md-18 text-success">expand_less</span> 45 Sec</td>
                                <td class="align-middle text-right">@mdo</td>
                            </tr>
                            <tr>
                                <td class=" align-middle text-center">
                                    <span class="user-initials bg-danger-light25 text-danger">LE</span>
                                </td>
                                <td class="align-middle">
                                    <small class="text-muted weight-300">LoriH Edenfield</small>
                                    <div><a href="#" class="weight-400">haan_dougla10@hotmail.com</a></div>
                                </td>
                                <td class="align-middle">
                                    <small class="text-muted weight-300">Newark</small>
                                    <div class="weight-400"> 49 Spring Haven Trail</div>
                                </td>
                                <td class="align-middle"><span class="material-icons align-middle md-18 text-danger">expand_more</span> 2.32 Mins</td>
                                <td class="align-middle text-right">@mdo</td>
                            </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>



    </div>


    <nav aria-label="Page navigation example">
        <form class="form-inline float-left">
            <label class="my-1 mr-2 d-none d-md-block" for="show-data">Showing 10 out of 478</label>
            <select class="form-control" id="show-data">
                <option selected>25</option>
                <option value="1">50</option>
                <option value="2">100</option>
                <option value="3">all</option>
            </select>
        </form>
        <ul class="pagination mt-3 justify-content-end">
            <li class="page-item">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
@endsection
