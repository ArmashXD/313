    @extends('layouts.app', ['activePage' => 'purchased_tokens', 'titlePage' => __('Dashboard')])


    @section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title ">Purchase Tokens</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered  ">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Token Code</th>
                                        </tr>
                                        </thead>
                                        @php
                                            $count = 0;
                                        @endphp
                                        <tbody>
                                        @foreach($tokens as $item)
                                            <tr>
                                                <td>{{$count++}}</td>
                                                <td>{{$item->token->code}}</td>
{{--                                                <td>--}}
{{--                                                    <form href="{{route('token.store')}}" method="POST">--}}
{{--                                                        @csrf--}}
{{--                                                        <input name="name" value="{{$item->name}}" type="hidden"/>--}}
{{--                                                        <input name="gift_to" value="{{$item->id}}" type="hidden"/>--}}
{{--                                                        <button type="submit" class="btn btn-primary">--}}
{{--                                                            Gift--}}
{{--                                                        </button>--}}
{{--                                                    </form>--}}
{{--                                                </td>--}}
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
