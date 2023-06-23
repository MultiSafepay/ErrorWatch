@extends('error-watch.base')

@section('content')
    @parent
    <div class="py-3">
        <h3>Hello world</h3>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Hello</th>
                <th>World</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                1
            </td>
            <td>
                Error1
            </td>
            <td>
                Error2
            </td>
        </tr>
        <tr>
            <td>
                1
            </td>
            <td>
                Error1
            </td>
            <td>
                Error2
            </td>
        </tr>
        </tbody>
    </table>
@stop
