<!-- resources/views/entries.blade.php -->

@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')
    </div>

    @if (count($entries) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Entries
            </div>

            <div class="panel-body">
                <table class="table table-striped entry-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>English</th>
                        <th>Chinese</th>
                        <th>Taiwanese</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($entries as $entry)
                            <tr>
                                <!-- Entry Name -->
                                <td class="table-text">
                                    <div>{{ $entry->english }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $entry->chinese }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $entry->taiwanese }}</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
