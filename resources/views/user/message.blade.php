@extends('layouts.main-user')

@section('content')
    <div class="row page-tilte align-items-center">
        <div class="col-md-auto">
            <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
            <h1 class="weight-300 h3 title">Chat With</h1>
            <p class="text-muted m-0 desc">Let's get a quick overview</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card h-100">

                <div class="card-body">

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="messgaes" role="tabpanel"
                             aria-labelledby="messgaes-tab">
                            <div class="custom-scroll">
                                <div class="d-flex flex-column">

                                    <ul class="messgaes flex-fill mb-4">

                                        <li class="media">
                                            <div class="mr-4"><img src="{{ url('img/panel/avtar4.png')}}"
                                                                    class="user-thumb"></div>
                                            <div class="media-body messgae-bubble bg-warning-light25 ">
                                                <h6 class="mt-0 weight-400">kevin Dossey</h6>
                                                <small class="text-muted weight-300"> Cras sit amet nibh libero, in
                                                    gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                                    Cras purus odio, vestibulum in vulputate at, tempus viverra
                                                    turpis. Fusce condimentum nunc ac.
                                                </small>
                                            </div>
                                        </li>
                                        <li class="media flex-row-reverse">
                                            <div class="ml-4"><img src="{{ url('img/panel/avtar3.png')}}"
                                                                    class="user-thumb"></div>
                                            <div class="media-body from-you messgae-bubble bg-light ">
                                                <h6 class="mt-0 weight-400">kevin Dossey</h6>
                                                <small class="text-muted weight-300">Fusce condimentum nunc ac nisi
                                                    vulputate fringilla.
                                                </small>
                                            </div>
                                        </li>

                                        <li class="media">
                                            <div class="mr-4"><img src="{{ url('img/panel/avtar1.png')}}"
                                                                    class="user-thumb"></div>
                                            <div class="media-body messgae-bubble bg-warning-light25 ">
                                                <h6 class="mt-0 weight-400">kevin Dossey</h6>
                                                <small class="text-muted weight-300"> Sure. and Thanks !</small>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="mr-4"><img src="{{ url('img/panel/avtar4.png')}}"
                                                                    class="user-thumb"></div>
                                            <div class="media-body messgae-bubble bg-warning-light25 ">
                                                <h6 class="mt-0 weight-400">kevin Dossey</h6>
                                                <small class="text-muted weight-300"> Cras sit amet nibh libero, in
                                                    gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                                </small>
                                            </div>
                                        </li>
                                        <li class="media flex-row-reverse">
                                            <div class="ml-4"><img src="{{ url('img/panel/avtar3.png')}}"
                                                                    class="user-thumb"></div>
                                            <div class="media-body from-you messgae-bubble bg-light ">
                                                <h6 class="mt-0 weight-400">kevin Dossey</h6>
                                                <small class="text-muted weight-300">Cras purus odio, vestibulum in
                                                    vulputate at, tempus viverra turpis.
                                                </small>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div>
                                <hr class="dashed">
                            </div>

                            <div class="media align-items-center">

                                <a href="#" class="material-icons md-18 text-muted mr-2">attach_file</a>
                                <a href="#" class="material-icons md-18 text-muted mr-3">tag_faces</a>
                                <div class="media-body">
                                    <input type="text" name="" class="form-control border-0"
                                           placeholder="Reply Message">
                                </div>
                                <button class="btn btn-primary btn-sm">Send Message</button>

                            </div>

                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
@endsection
