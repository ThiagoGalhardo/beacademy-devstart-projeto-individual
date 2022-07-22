<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <div class="container lst">

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Erro!</strong> Problemas com o envio.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <h3> Upload de arquivos </h3>

        <form method="post" action="{{url('file')}}" enctype="multipart/form-data">
            @csrf

            <div class="input-group destroy control-group lst increment">
                <input type="file" name="filenames[]" class="myfrm form-control">
                <div class="input-group-btn">
                    <button class="btn btn-success ml-3" type="button"><i class="icon-plus"></i>Adicionar mais aquivos</button>
                </div>
            </div>
            <div class="clone hide">
                <div class="destroy control-group lst input-group" style="margin-top:10px">
                    <input type="file" name="filenames[]" class="myfrm form-control">
                    <div class="input-group-btn">
                        <button class="btn btn-danger" type="button"><i class="icon-remove"></i> Remove</button>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>

        </form>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".btn-success").click(function() {
                var lsthmtl = $(".clone").html();
                $(".increment").after(lsthmtl);
            });
            $("body").on("click", ".btn-danger", function() {
                $(this).parents(".destroy").remove();
            });
        });
    </script>

    <style>
        .hide {
            visibility: hidden;
        }
    </style>

</body>

</html>
