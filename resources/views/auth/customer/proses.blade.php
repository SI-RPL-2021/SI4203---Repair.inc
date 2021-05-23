@extends('app')

@section('title')
@foreach($pesanan as $ps)
{{ App\Kategori::where('id', App\Jasa::where('id', $ps->id_jasa)->value('id_kategori'))->value('nama') }}, {{ App\Jasa::where('id', $ps->id_jasa)->value('nama') }} | Repair-Inc
@endforeach
@endsection

@section('css-plus')
<style type="text/css">
    .star-rating__stars {
        position: relative;
        height: 5rem;
        width: 25rem;
        background: url({{asset('assets/off.svg')
    }
    }

    );
    background-size: 5rem 5rem;
    }

    .star-rating__label {
        position: absolute;
        height: 100%;
        background-size: 5rem 5rem;
    }

    .star-rating__input {
        margin: 0;
        position: absolute;
        height: 1px;
        width: 1px;
        overflow: hidden;
        clip: rect(1px, 1px, 1px, 1px);
    }

    .star-rating__stars .star-rating__label:nth-of-type(1) {
        z-index: 5;
        width: 20%;
    }

    .star-rating__stars .star-rating__label:nth-of-type(2) {
        z-index: 4;
        width: 40%;
    }

    .star-rating__stars .star-rating__label:nth-of-type(3) {
        z-index: 3;
        width: 60%;
    }

    .star-rating__stars .star-rating__label:nth-of-type(4) {
        z-index: 2;
        width: 80%;
    }

    .star-rating__stars .star-rating__label:nth-of-type(5) {
        z-index: 1;
        width: 100%;
    }

    .star-rating__input:checked+.star-rating__label,
    .star-rating__input:focus+.star-rating__label,
    .star-rating__label:hover {
        background-image: url({{asset('assets/on.svg')
    }
    }

    );
    }

    .star-rating__label:hover~.star-rating__label {
        background-image: url({{asset('assets/off.svg')
    }
    }

    );
    }

    .star-rating__input:focus~.star-rating__focus {
        position: absolute;
        top: -.25em;
        right: -.25em;
        bottom: -.25em;
        left: -.25em;
        outline: 0.25rem solid lightblue;
    }
</style>
@endsection

@section('content')
@foreach($pesanan as $ps)
<div class="page-section section mt-90 mb-90">
    <div class="container mb10">
        <div class="row">

            <div class="col-12 col-md-6">
                <table class="table table-striped mb3">
                    <tbody>
                        <tr>
                            <th>Kode Invoice</th>
                            <td class="text-left">{{ App\Pembayaran::where('id_pesanan', $ps->id)->value('kode_invoice') }}</td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td class="text-left">{{ App\Kategori::where('id', App\Jasa::where('id', $ps->id_jasa)->value('id_kategori'))->value('nama') }}</td>
                        </tr>
                        <tr>
                            <th>Jasa</th>
                            <td class="text-left">{{ App\Jasa::where('id', $ps->id_jasa)->value('nama') }}</td>
                        </tr>
                        <tr>
                            <th>Mitra</th>
                            <td class="text-left">{{ App\Mitra::where('id', App\Jasa::where('id', $ps->id_jasa)->value('id_mitra'))->value('nama') }}</td>
                        </tr>
                        <tr>
                            <th>Biaya</th>
                            <td class="text-left">Rp {{ number_format(App\Jasa::where('id', $ps->id_jasa)->value('harga')) }}</td>
                        </tr>
                    </tbody>
                </table>

                <div class="row">
                    <div class="col-12">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-garansi">Klaim Garansi</button>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-feedback">Kirim Feedback</button>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-ratting">Kirim Ratting</button>

                    </div>
                </div>
            </div>



        </div>
    </div>
</div>

<div class="modal fade" id="modal-garansi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @if($garansi_tes == 0)
    <form action="{{ route('customer.garansi.store') }}" method="POST">
        @csrf
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Klaim Garansi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

                    <textarea class="tiny" name="garansi"></textarea>
                    <input type="hidden" name="id_pesanan" value="{{ $ps->id }}">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </div>
        </div>
    </form>
    @else

    @foreach($garansi as $gr)
    <form action="{{ route('customer.garansi.edit', $gr->id) }}" method="POST">
        @csrf
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Klaim Garansi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

                    <textarea class="tiny" name="garansi">{!! $gr->garansi !!}</textarea>
                    <input type="hidden" name="id_pesanan" value="{{ $gr->id_pesanan }}">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </div>
        </div>
    </form>
    @endforeach

    @endif
</div>


@section('js-plus')
<script src="https://cdn.tiny.cloud/1/naiean50arcvcg7c4k08y4vbuuu0sg1n4s3q5jyab04r7rhi/tinymce/5/tinymce.min.js" referrerpolicy="origin">
</script>

<script>
    tinymce.init({
        selector: "textarea.tiny",
        menubar: false,
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table paste",
            "autoresize"
        ],

        image_title: true,
        automatic_uploads: true,
        file_picker_types: 'image',

        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",

        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');


            input.onchange = function() {
                var file = this.files[0];

                var reader = new FileReader();
                reader.onload = function() {

                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);

                    cb(blobInfo.blobUri(), {
                        title: file.name
                    });
                };
                reader.readAsDataURL(file);
            };

            input.click();
        }
    });

    $.extend(M.Modal.prototype, {
        _handleFocus(e) {
            if (!this.el.contains(e.target) && this._nthModalOpened === M.Modal._modalsOpen && document.defaultView.getComputedStyle(e.target, null).zIndex < 1002) {
                this.el.focus();
            }
        }
    });
</script>
@endsection