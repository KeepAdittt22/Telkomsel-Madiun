<div class="modal fade" id="modal-user">
    <div class="modal-dialog modal-lg" style="background-color: beige">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4 class="modal-title">Profil User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('/profil/save')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nama User</label>
                            <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                            <input type="text" class="form-control @error("name") is-invalid  @enderror" id="name" name="name" placeholder="Nama" value="{{ old("name") ? old("name") : Auth::user()->name }}">
                            @error("name")
                                <span id="error-name" class="error invalid-feedback">
                                    {{ $errors->first("name") }}
                                </span>
                            @enderror
                         </div>
                         {{-- @if (Auth::user()->role=="Admin") --}}
                         <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control @error("email") is-invalid  @enderror" id="email" name="email" placeholder="Email" value="{{ old("email") ? old("email") : Auth::user()->email }}">
                            @error("email")
                            <span id="error-email" class="error invalid-feedback">
                                {{ $errors->first("email") }}
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="hidden" name="old_password" value="{{ Auth::user()->password }}">
                            <input type="password" class="form-control @error("password") is-invalid  @enderror" id="password" name="password" placeholder="*****" value="{{ old("password") }}">
                            @error("password")
                            <span id="error-password" class="error invalid-feedback">
                                {{ $errors->first("password") }}
                            </span>
                            @enderror
                        </div>
                         {{-- @endif  --}}
                    </div>
                </div>
                <div class="modal-footer justify-content-right bg-danger">
                    <button type="submit" class="btn btn-warning">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset ('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Bootstrap 3 -->
<div class="preload">
    <img src="{{ asset('dist/img/mainlogo-2022.png') }}" alt="">
    <div id="loader"></div>
    <h1 class="text">Harap Tunggu !!!</h1>
</div>

<script src="{{ asset ('plugins/bootstrap3/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('dist/js/adminlte.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset ('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset ('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset ('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset ('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset ('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset ('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset ('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset ('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset ('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset ('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset ('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset ('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset ('dist/js/custom.js') }}"></script>
<!-- Toastr -->
<script src="{{ asset ('plugins/toastr/toastr.min.js') }}"></script>
{{-- SweetAlert --}}
<script src="{{ asset ('plugins/sweetalert2/sweetalert2.all.min.js')}}"></script>
<!-- Select2 -->
<script src="{{ asset ('plugins/select2/js/select2.full.min.js')}}"></script>
{{-- Custom upload File --}}
<script src="{{ asset ('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>