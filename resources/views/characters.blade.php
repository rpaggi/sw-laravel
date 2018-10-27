@section('title', 'StarWars Characters')

@extends('template')

@section('content')
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Height</th>
                    <th>Mass</th>
                    <th>Hair Color</th>
                    <th>Skin Color</th>
                    <th>Eye Color</th>
                    <th>Birth Year</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peoples->data as $people)
                <tr>
                    <td>{{ $people->getName() }}</td>
                    <td>{{ $people->getHeight() }}</td>
                    <td>{{ $people->getMass() }}</td>
                    <td>{{ $people->getHairColor() }}</td>
                    <td>{{ $people->getSkinColor() }}</td>
                    <td>{{ $people->getEyeColor() }}</td>
                    <td>{{ $people->getBirthYear() }}</td>
                    <td>{{ $people->getGender() }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <nav class="col-12">
            <ul class="pagination justify-content-center">
                @if($peoples->hasPrev)
                <li class="page-item">
                    <a class="page-link" href="{{ url("/characters") }}/{{ $page - 1 }}" >Previous</a>
                </li>
                @else
                <li class="page-item disabled">
                    <a class="page-link" href="" >Previous</a>
                </li>
                @endif
                @for($i=1;$i<=$peoples->pagesTotal;$i++)
                <li class="page-item @if($i == $page) active @endif">
                    <a href="{{ url("/characters") }}/{{ $i }}" class="page-link">{{ $i }}</a>
                </li>
                @endfor
                @if($peoples->hasNext)
                <li class="page-item">
                    <a class="page-link" href="{{ url("/characters") }}/{{ $page + 1 }}" >Next</a>
                </li>
                @else
                <li class="page-item disabled">
                    <a class="page-link" href="" >Next</a>
                </li>
                @endif
            </ul>
        </nav>
        <style>
            table tbody td{
                text-transform: capitalize;
            }
        </style>
@endsection
