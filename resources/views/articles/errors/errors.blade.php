<div>
    @if($errors->any())
        <ul class="list-group">
            @foreach($errors->all()as $error)

                <li class="list-group-item"><i class="fa fa-angle-right">{{$error}}</i></li>

            @endforeach
        </ul>
    @endif
</div>