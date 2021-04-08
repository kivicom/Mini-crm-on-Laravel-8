@extends('layouts.layout')

@section('content')
    <x-create-promocode />
    <x-form-promocode.create />
    <x-form-promocode.edit />
@endsection

@section('js')
    <script>
        $(document).ready( function () {
            $('#promocode_table').DataTable({
                'processing': true,
                'serverSide': true,
                ajax: '{{ route('appeals.data') }}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'user_id', name: 'name'},
                    {data: 'phone_of_client', name: 'phone_of_client'},
                    {data: 'num_automat', name: 'num_automat'},
                    {data: 'sum_promo', name: 'sum_promo'},
                    {data: 'notice', name: 'notice'},
                    {data: 'expired', name: 'expired'},
                    {data: 'rand_gen', name: 'rand_gen'},
                    {data: 'appeal_status', name: 'appeal_status',
                        render:function (data, type, full, meta) {
                            return '<span class="'+ data.class +'">'+data.status+'</span>';
                            /*switch (data) {
                                case 'Не использован':
                                    return '<span class="not_used">'+data+'</span>';
                                    break;
                                case 'Использован':
                                    return '<span class="used">'+data+'</span>';
                                    break;
                                case 'Истек':
                                    return '<span class="expired">'+data+'</span>';
                                    break;
                                default:
                                    return '<span class="not_used">'+data+'</span>';
                            }*/
                        }},
                    {data: 'action', name: 'action'}
                ]
            });
        });
    </script>
@endsection
