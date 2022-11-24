@extends("layouts.template")

@section("title",$title)
    
@section("page_title",$title)

@section('content')
<script>
    $(function(){
        @if(session("type"))
            showMessage('{{ session("type") }}','{{ session("text") }}','{{ session("icon") }}','{{ session("button") }}');
        @endif
    });
</script>
<form action="/setting/save" method="post" name="setting" onsubmit="showPreload()">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label>Product</label>
                <div class="select2-warning">
                    <select class="select2" multiple="multiple" data-placeholder="- Pilih Product -" data-dropdown-css-class="select2-warning" style="width: 100%;" name="setting[product][]">
                        <option value="">- Pilih Product -</option>
                        @foreach ($product as $Productku)
                            <option value="{{ $Productku->id_product }}">{{ $Productku->nm_product }}</option>
                        @endforeach
                    </select>
                </div>
              </div>
        </div>
        <div class="card-footer text-right">
            <button type="submit" class="btn btn-warning">Tampilkan</button>
        </div>
    </div>
</form>
@endsection

