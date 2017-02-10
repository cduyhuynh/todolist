<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>To-do App</title>
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/list.css')}}" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-primary" id="create-cat-btn">
                    <span class="fa fa-plus"></span> @lang('list.category.create')
                </button>
                <form id="create-cat-form" class="col-md-2 form-group" action="/category/create" method="POST">
                    <input class="form-control" type="text" name="category_name" value="" />
                    <button type="submit" class="btn btn-primary">@lang('list.create')</button>
                </form>
            </div>
        </div>
        <br>
        <div class="row">
            @foreach($categories as $c)
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="panel-title">{{$c->name}}</div>
                    </div>
                    <div class="panel-body">
                        @foreach($c->todos()->get() as $t)
                        <div class="todo-{{$t->id}} bg-primary col-md-12">
                            <div class="" data-toggle="collapse" href="#desc-{{$t->id}}">
                                <b>{{$t->title}}</b>
                            </div>
                            <div class="collapse" id="desc-{{$t->id}}">
                                <label>
                                    @lang('list.todo.desc'): {{$t->description}}
                                </label>
                            </div>
                        </div>
                        <br>
                        @endforeach
                        <div class="bg-info">
                            <div class="create-pending" data-toggle="collapse" href="#action-{{$c->id}}">
                                <span class="fa fa-plus"> @lang('list.todo.create') </span>
                            </div>
                            <div class="create-action form-group collapse" id="action-{{$c->id}}">
                                <label>
                                    @lang('list.todo.title')
                                    <input class="new-title form-control" />
                                </label>
                                <label>
                                    @lang('list.todo.desc')
                                    <input class="new-desc form-control" />
                                </label>
                                <input type="hidden" class="cate-id" value="{{$c->id}}"/>
                                <button type="button" class="btn btn-primary create-todo">@lang('list.create')</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('js/list.js') }}" ></script>
    </body>
</html>
