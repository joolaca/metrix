
<!-- Contact Section -->
<div id="{{$form_id}}" class="text-center">
    <div class="container">
        <div class="section-title text-center">
            <h2>{{$page_h2}}</h2>
            <hr>
            <p>{{$page_title}}</p>
        </div>
        <div class="col-md-10 col-md-offset-1">

            {!! Form::open(['route' => 'send_contact_email']) !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">

                            {!! Form::text('name','',
                                ['class'=>'form-control',
                                'id'=>'name',
                                'required' => 'required',
                                'placeholder'=>'Neve',
                                ]
                            ); !!}
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">

                            {!! Form::text('email','',
                                ['class'=>'form-control',
                                'type' =>'email',
                                'id'=>'email',
                                'required' => 'required',
                                'placeholder'=>'Email',
                                ]
                            ); !!}
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::textarea('content','',
                            ['class'=>'form-control',
                            'name' => 'content',
                            'id'=>'message',
                            'required' => 'required',
                            'placeholder'=>'Üzenet',
                            'rows'=>'4',
                            ]
                    ); !!}
                    <p class="help-block text-danger"></p>
                </div>
                <div id="success"></div>


                {!! Form::captcha() !!}

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                {!! Form::hidden('email_title',$email_title, [] ) !!}
                {!! Form::hidden('form_id',$form_id, [] ) !!}
                {!!  Form::submit('Küldés',['class' => 'btn btn-custom btn-lg']); !!}

            {!! Form::close() !!}
        </div>
    </div>
</div>
