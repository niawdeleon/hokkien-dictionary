<!-- resources/views/entries.blade.php -->

@extends('layouts.app')

@section('content')
        <div class="panel-body">
            <!-- Display Validation Errors -->
            @include('common.errors')
        </div>

        <div class="jumbotron">
            <h1>English-Hokkien Dictionary</h1>

            <form method="GET">
                <input type="text" name="searchTerm">
                <input class="btn btn-lg btn-success" role="button" type="submit" value="Search English">
            </form>
        </div>

        @if (count($entries) > 0)
        <div class="row marketing">
            <div class="col-lg-12">
                <table class="table table-striped entry-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>English</th>
                        <th>Chinese</th>
                        <th>Hokkien</th>
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

        <footer class="footer">
            <p><a href="/">Go back to Niawdeleon.com</a></p>
        </footer>

@endsection
