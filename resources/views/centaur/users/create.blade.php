@extends('Centaur::layout')

@section('title', 'Create New User')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Create New User</h3>
            </div>
            <div class="panel-body">
                <form accept-charset="UTF-8" role="form" method="post" action="{{ route('users.store') }}">
                <fieldset>
                    <div class="form-group {{ ($errors->has('first_name')) ? 'has-error' : '' }}">
                        <input class="form-control" placeholder="First Name" name="first_name" type="text" value="{{ old('first_name') }}" />
                        {!! ($errors->has('first_name') ? $errors->first('first_name', '<p class="text-danger">:message</p>') : '') !!}
                    </div>
                    <div class="form-group {{ ($errors->has('last_name')) ? 'has-error' : '' }}">
                        <input class="form-control" placeholder="Last Name" name="last_name" type="text" value="{{ old('last_name') }}" />
                        {!! ($errors->has('last_name') ? $errors->first('last_name', '<p class="text-danger">:message</p>') : '') !!}
                    </div>
                    <div class="form-group {{ ($errors->has('mobile')) ? 'has-error' : '' }}">
                        <input class="form-control" placeholder="Mobile" name="mobile" type="text" value="{{ old('mobile') }}" />
                        {!! ($errors->has('mobile') ? $errors->first('mobile', '<p class="text-danger">:message</p>') : '') !!}
                    </div>
                    <div class="form-group {{ ($errors->has('address')) ? 'has-error' : '' }}">
                        <input class="form-control" placeholder="Address" name="address" type="text" value="{{ old('address') }}" />
                        {!! ($errors->has('address') ? $errors->first('address', '<p class="text-danger">:message</p>') : '') !!}
                    </div>
                    <div class="form-group {{ ($errors->has('country')) ? 'has-error' : '' }}">
                        <input class="form-control" placeholder="Country" name="country" type="text" value="{{ old('country') }}" />
                        {!! ($errors->has('country') ? $errors->first('country', '<p class="text-danger">:message</p>') : '') !!}
                    </div>
                     <div class="form-group {{ ($errors->has('balance')) ? 'has-error' : '' }}">
                        <input class="form-control" placeholder="Balance" name="balance" type="number" value="{{ old('balance') }}" />
                        {!! ($errors->has('balance') ? $errors->first('balance', '<p class="text-danger">:message</p>') : '') !!}
                    </div>
                     <div class="form-group {{ ($errors->has('pin')) ? 'has-error' : '' }}">
                        <input class="form-control" placeholder="Pin" name="pin" type="text" value="{{ old('pin') }}" />
                        {!! ($errors->has('pin') ? $errors->first('pin', '<p class="text-danger">:message</p>') : '') !!}
                    </div>
                    <div class="form-group {{ ($errors->has('imf')) ? 'has-error' : '' }}">
                        <input class="form-control" placeholder="IMF" name="imf" type="text" value="{{ old('imf') }}" />
                        {!! ($errors->has('imf') ? $errors->first('imf', '<p class="text-danger">:message</p>') : '') !!}
                    </div>
                    <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
                        <input class="form-control" placeholder="E-mail" name="email" type="text" value="{{ old('email') }}">
                        {!! ($errors->has('email') ? $errors->first('email', '<p class="text-danger">:message</p>') : '') !!}
                    </div>
                    <h5>Roles</h5>
                   
                        <div class="checkbox">
                            <label>
                                <input checked type="checkbox" name="role" value="3">
                                Subscriber
                            </label>
                        </div>
                    
                    <hr />
                    <div class="form-group  {{ ($errors->has('password')) ? 'has-error' : '' }}">
                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        {!! ($errors->has('password') ? $errors->first('password', '<p class="text-danger">:message</p>') : '') !!}
                    </div>
                    <div class="form-group {{ ($errors->has('password_confirmation')) ? 'has-error' : '' }}">
                        <input class="form-control" placeholder="Confirm Password" name="password_confirmation" type="password" />
                        {!! ($errors->has('password_confirmation') ? $errors->first('password_confirmation', '<p class="text-danger">:message</p>') : '') !!}
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="activate" type="checkbox" value="true" {{ old('activate') == 'true' ? 'checked' : ''}}> Activate
                        </label>
                    </div>
                    <input name="_token" value="{{ csrf_token() }}" type="hidden">
                    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Create">
                </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@stop