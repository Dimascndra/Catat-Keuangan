@extends('layouts.index')
@section('title', 'Kategori')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Kategori
        @endslot
        @slot('action')
            <div class="d-flex align-items-center flex-wrap">
                <button type="button" class="btn btn-primary font-weight-bolder btn-sm mb-2 mb-sm-0" data-toggle="modal" data-target="#createCategoryModal">
                    Tambah Kategori Baru
                </button>
            </div>
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-custom alert-notice alert-light-success fade show mb-5" role="alert">
                <div class="alert-text">{{ session('success') }}</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i
                                class="ki ki-close"></i></span></button>
                </div>
            </div>
        @endif

        <div class="card card-custom gutter-b">
            <div class="card-body px-3 px-md-6">
                <div class="table-responsive">
                    <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
                        <thead>
                            <tr class="text-left">
                                <th>Nama</th>
                                <th>Tipe</th>
                                <th>Warna</th>
                                <th>Keterangan</th>
                                <th>Terakhir Diperbarui</th>
                                <th class="text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <span
                                            class="label label-lg label-inline font-weight-bold py-4
                                            {{ $category->type == 'income' ? 'label-light-success' : 'label-light-danger' }}">
                                            {{ $category->type == 'income' ? 'Pemasukan' : 'Pengeluaran' }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="symbol symbol-30 symbol-circle">
                                            <span class="symbol-label" style="background-color: {{ $category->color ?? '#ccc' }}"></span>
                                        </span>
                                    </td>
                                    <td>{{ $category->description }}</td>
                                    <td>{{ $category->updated_at ? $category->updated_at->format('d M Y H:i') : '-' }}</td>
                                    <td class="text-right">
                                        <button type="button" 
                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3 btn-edit-category"
                                            data-toggle="modal"
                                            data-target="#editCategoryModal"
                                            data-id="{{ $category->id }}"
                                            data-name="{{ $category->name }}"
                                            data-type="{{ $category->type }}"
                                            data-color="{{ $category->color }}"
                                            data-description="{{ $category->description }}"
                                            title="Ubah">
                                            <span class="svg-icon svg-icon-md svg-icon-primary"><i
                                                    class="flaticon-edit"></i></span>
                                        </button>
                                        <form action="{{ route('categories.destroy', $category) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-icon btn-light btn-hover-danger btn-sm"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">
                                                <span class="svg-icon svg-icon-md svg-icon-danger"><i
                                                        class="flaticon-delete"></i></span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Kategori -->
    <div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCategoryModalLabel">Ubah Kategori: <span id="modal-category-name-title"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editCategoryForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Kategori <span class="text-danger">*</span></label>
                            <input type="text" id="edit_category_name" name="name" class="form-control form-control-solid" required />
                        </div>
                        <div class="form-group">
                            <label>Tipe <span class="text-danger">*</span></label>
                            <select class="form-control form-control-solid" id="edit_category_type" name="type" required>
                                <option value="expense">Pengeluaran</option>
                                <option value="income">Pemasukan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Warna</label>
                            <input type="color" id="edit_category_color" name="color" class="form-control form-control-solid" style="height: 45px" />
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea id="edit_category_description" name="description" class="form-control form-control-solid"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Kategori -->
    <div class="modal fade" id="createCategoryModal" tabindex="-1" role="dialog" aria-labelledby="createCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createCategoryModalLabel">Tambah Kategori Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Kategori <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control form-control-solid" required />
                        </div>
                        <div class="form-group">
                            <label>Tipe <span class="text-danger">*</span></label>
                            <select class="form-control form-control-solid" name="type" required>
                                <option value="expense">Pengeluaran</option>
                                <option value="income">Pemasukan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Warna</label>
                            <input type="color" name="color" value="#3699FF" class="form-control form-control-solid" style="height: 45px" />
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="description" class="form-control form-control-solid"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.btn-edit-category').click(function() {
                var id = $(this).data('id');
                var name = $(this).data('name');
                var type = $(this).data('type');
                var color = $(this).data('color');
                var description = $(this).data('description');

                $('#modal-category-name-title').text(name);
                $('#edit_category_name').val(name);
                $('#edit_category_type').val(type);
                $('#edit_category_color').val(color || '#cccccc');
                $('#edit_category_description').val(description);
                
                // Set form action dynamically
                var actionUrl = "{{ url('/categories') }}/" + id;
                $('#editCategoryForm').attr('action', actionUrl);
            });

            @if(request()->query('create'))
                $('#createCategoryModal').modal('show');
            @endif
        });
    </script>
@endsection
