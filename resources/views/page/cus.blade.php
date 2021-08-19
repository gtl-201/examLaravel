@extends('index')
@section('customer')
    <div class="p-xl-5">
        <div style="display: flex; justify-content: space-between" class="mt-xl-3 mb-xl-4">
            <a href="{{ URL::to('/customers/create') }}" type="button" class="btn btn-success">Thêm Khách hàng</a>
            <form action="" method="get">
                <div style="display: flex">
                    <input type="text" placeholder="Tên hoặc SĐT" style="margin-right: -2px" name="key">
                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                </div>

            </form>
        </div>

        <table id="table" class="table">
            <thead>
                <tr>
                    <th scope="col">Ma KH</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Full name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    {{-- <th scope="col">Action</th> --}}
                </tr>
            </thead>
            <div class="table-responsive-lg">
                <tbody style="overflow: scroll">
                    @forelse ($listCus as $cus)
                        <tr>
                            <th scope="row">{{ $cus->mkh }}</th>
                            <td><img src="{{ $cus->avatar }}" alt="" style="width: 80px; height: auto;"></td>
                            <td>{{ $cus->Fname }} {{ $cus->Lname }}</td>
                            <td>
                                @php
                                    if ($cus->gender === 1) {
                                        echo 'Nam';
                                    } else {
                                        echo 'Nữ';
                                    }
                                @endphp
                            </td>
                            <td>{{ $cus->phone }}</td>
                            <td>{{ $cus->email }}</td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </div>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
@endsection
