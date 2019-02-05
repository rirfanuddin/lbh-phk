@extends('admin.user')

@section('result')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table class="table  m-0">
                            <thead>
                            <tr>
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
                                        <span class="user-initials bg-success-light25 text-success">User</span>
                                    </td>
                                    <td class="align-middle">
                                        {{ $user->name }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $user->email  }}
                                    </td>
                                    <td class="align-middle text-center">{{ $user->phone_number }}</td>
                                    <td class="align-middle text-center">
                                        <a href="{{ url('admin/chat/' . $user->id) }}"><span class="nav-icon material-icons ">send</span></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="align-middle">
                                        <i>Tidak ada Data ...</i>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
