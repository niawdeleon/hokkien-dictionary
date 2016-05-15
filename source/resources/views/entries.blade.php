<!-- resources/views/entries.blade.php -->

@extends('layouts.app')

@section('content')
        <div class="panel-body">
            <!-- Display Validation Errors -->
            @include('common.errors')
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1>English-Hokkien Dictionary</h1>

                <form method="GET" class="form-group">
                    <input type="text" name="searchTerm" class="form-control" placeholder="Enter English word">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Search</button>
                </form>
            </div>
        </div>

        @if (isset($entries) && count($entries) > 0)
        <div class="row">
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
                                    <div>{{ $entry->getFormattedTaiwanese() }}</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif

        <footer class="footer">
            <p>The contents of the dictionary are from the <a href="http://www.taiwanesedictionary.org/">Taiwanese-English Dictionary by Maryknoll Taiwan</a>, which is licensed under a Creative Commons Attribution-Noncommercial-Share Alike 3.0 Taiwan License. This software is written by Niaw de Leon under an MIT License using Laravel 5 and Bootstrap frameworks.</p>
            <p><a href="/">Go back to Niawdeleon.com</a></p>
        </footer>

@endsection
