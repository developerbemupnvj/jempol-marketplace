@extends('layouts.admin')
@section('header')
    Data Kategori Merchandise
@endsection

@section('content')
    <a href="{{ route('admin.merchandise-category.create') }}" class="btn btn-oranye" style="margin-bottom: 25px">
        <i class="ion ion-plus-round" style="margin-right: 10px"></i>
        Add Merchandise Category
    </a>
    <div class="card">
        <div class="card-header">
            <div class="float-right">
            </div>
            <span>Tabel Data Kategori Merchandise</span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category Name</th>
                            <th>merchandise Count</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->merchandises->count() }}</td>
                                <td>
                                    <form method="post" id="deleteForm{{ $category->id }}"
                                        action="{{ route('admin.merchandise-category.destroy', $category->id) }}">
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                    <a href="{{ route('admin.merchandise-category.show', $category->id) }}"
                                        class="btn btn-sm btn-oranye m-2">
                                        <span class="ion-search" aria-hidden="true">&nbsp;</span>
                                    </a>
                                    <button type="submit" form="deleteForm{{ $category->id }}"
                                        class="btn btn-sm btn-danger m-2 delete-btn">
                                        <span class="ion-trash-a" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $('.delete-btn').click(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Apa anda yakin ingin menghapus merchandise category ini?',
                text: 'Semua data merchandise didalam category ini akan ikut terhapus',
                showCancelButton: true,
                confirmButtonText: `Delete`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $('#' + $(this).attr('form')).submit()
                }
            });
        });
    </script>
@endpush
