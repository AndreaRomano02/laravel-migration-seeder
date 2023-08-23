@extends('layouts.main-layout')

@section('cdns')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'
        integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=='
        crossorigin='anonymous' />
@endsection

@section('main')
    <table class="table table-success table-striped border border-dark">
        <thead>
            <tr>
                <th scope="col">Agency</th>
                <th scope="col">Start Station</th>
                <th scope="col">End Station</th>
                <th scope="col">Time To Arrive</th>
                <th scope="col">Time To departure</th>
                <th scope="col">Train Code</th>
                <th scope="col">Train Carriage</th>
                <th scope="col">IS IN TIME?</th>
                <th scope="col">IS DELETED?</th>
            </tr>
        </thead>
        @foreach ($trains as $train)
            <tbody>
                <tr>
                    <td>{{ $train->agency }}</td>
                    <td>{{ $train->start_station }}</td>
                    <td>{{ $train->end_station }}</td>
                    <td>{{ $train->time_to_arrival }}</td>
                    <td>{{ $train->time_to_departure }}</td>
                    <td>{{ $train->train_code }}</td>
                    <td>{{ $train->train_carriage }}</td>
                    <td>
                        @if ($train->in_time)
                            <i class="fas fa-check-square"></i>
                        @endif
                    </td>
                    <td>
                        @if ($train->deleted)
                            <i class="fas fa-xmark-square"></i>
                        @endif
                    </td>

                </tr>
            </tbody>
        @endforeach
    </table>
@endsection
